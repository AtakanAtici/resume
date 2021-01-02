<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationAddRequest;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function list()
    {
        return view('admin.education_list');
    }
    public function addShow()
    {
        return view('admin.education_add');
    }
    public function add(EducationAddRequest $request)
    {
        $status= 0;
        if (isset($request->status))
        {
            $status=1;
        }

        $data=[
            "education_date"        => $request->education_date,
            "school_name"           => $request->school_name,
            "education_department"  => $request->education_department,
            "education_explanation" => $request->education_explanation,
            "status"                => $status
        ];

        Education::create($data);
        //Sweet Alert Çalışmıyor
        //alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.')->addImage('https://unsplash.it/400/200')->persistent(true,false);

        return redirect()->route('admin.education.list');
    }
}
