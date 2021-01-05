<?php

namespace App\Http\Controllers;

use App\Models\PersonalInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PersonalInformationController extends Controller
{
    public function index()
    {
        $information = PersonalInformation::find(1);
        return view('admin.personal_information', compact('information'));

    }

    public function update(Request $request)
    {
        //Kısıtlamalar
        $this->validate($request,
        [
            'cv'    => 'mimes:pdf,doc,docx',
            'image' => 'mimes:jpeg,jpg,png'
        ],
            [
                'cv.mimes'    => 'cv yalnızca pdf veya docx formatlarında olabilir',
                'image.mimes' => 'Resim yalnızca jpg veya png formatlarında olabilir'
            ]);

        $information = PersonalInformation::find(1);

        // User cv upload
        if($request->file('cv'))
        {
            $file            = $request->file('cv');
            $extension       = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode         = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-').'-'.now()->format('d-m-Y').'.'.$extension;

            Storage::putFileAs('public/cv', $file, $fileOriginalName);
            $information->cv = 'cv/'.$fileOriginalName;
        }

        //User profile image upload
        if ($request->file('image'))
        {
            $file            = $request->file('image');
            $extension       = $file->getClientOriginalExtension();
            $fileOriginalName = $file->getClientOriginalName();
            $explode         = explode('.', $fileOriginalName);
            $fileOriginalName = Str::slug($explode[0], '-').'-'.now()->format('d-m-Y').'.'.$extension;

            Storage::putFileAs('public/image', $file, $fileOriginalName);
            $information->image = 'image/'.$fileOriginalName;
        }


        // upload data
        $information->full_name  = $request->full_name;
        $information->task_name  = $request->task_name;
        $information->birthday   = $request->birthday;
        $information->job        = $request->job;
        $information->email      = $request->email;
        $information->adress     = $request->adress;
        $information->about      = $request->about;
        $information->save();

        return redirect()->back();
    }
}
