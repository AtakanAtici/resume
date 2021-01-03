<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExperienceRequest;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function list()
    {
        $list = Experience::all();
        return view('admin.experience_list', compact('list'));
    }

    public function addShow(Request $request)
    {
        $id = $request->experienceID;
        $experience=null;
        if (!is_null($id))
        {
            $experience=Experience::find($id);
        }
        return view('admin.experience_add', compact('experience'));
    }

    public function add(ExperienceRequest $request)
    {
        $status= 0;
        $order = $request->order;
        if (isset($request->status))
        {
            $status=1;
        }

        //Güncelleme
        if(isset($request->experienceID))
        {
            $id=$request->experienceID;
            Experience::where("id", $id)
                ->update([
                    "date"        => $request->date,
                    "company"     => $request->company,
                    "task_name"   => $request->task_name,
                    "description" => $request->description,
                    "status"      => $status,
                    "order"       =>$order ? $order : 999
                ]);
            return redirect()->route('admin.experience.list');
        }
        //Ekleme
        else
        {

            $data=[
                "date"        => $request->date,
                "company"     => $request->company,
                "task_name"   => $request->task_name,
                "description" => $request->description,
                "status"      => $status,
                "order"       =>$order ? $order : 999
            ];
            Experience::create($data);
            //Sweet Alert Çalışmıyor
            //alert()->success('SuccessAlert','Lorem ipsum dolor sit amet.')->addImage('https://unsplash.it/400/200')->persistent(true,false);

            return redirect()->route('admin.experience.list');
        }

    }

    public function changeStatus(Request $request)
    {
        $newStatus=null;
        $id = $request->experienceID;
        $findExperience = Experience::find($id);
        $status = $findExperience->status;
        if ($status)
        {
            $status = 0;
            $newStatus="Disabled";
        }
        else
        {
            $status=1;
            $newStatus="Active";
        }
        $findExperience->status=$status;
        $findExperience->save();

        return response()->json([
            'newStatus' => $newStatus,
            'experienceID' => $id,
            'status' => $status
        ],200);

    }

    public function delete(Request $request)
    {
        $id = $request->experienceID;

        Experience::where('id',$id)->delete();

        return response()->json([], 200);

    }
}
