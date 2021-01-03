<?php

namespace App\Http\Controllers;

use App\Http\Requests\EducationAddRequest;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function list()
    {
        $list=Education::all();

        return view('admin.education_list', compact('list'));
    }

    public function changeStatus(Request $request)
    {
        $newStatus=null;
        $id = $request->educationID;
        $findEducation = Education::find($id);
        $status = $findEducation->status;
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
        $findEducation->status=$status;
        $findEducation->save();

        return response()->json([
            'newStatus' => $newStatus,
            'educationID' => $id,
            'status' => $status
        ],200);

    }

    public function addShow(Request $request)
    {
        $id = $request->educationID;
        $education=null;
        if (!is_null($id))
        {
            $education=Education::find($id);
        }
        return view('admin.education_add', compact('education'));
    }

    public function add(EducationAddRequest $request)
    {
        $status= 0;
        if (isset($request->status))
        {
            $status=1;
        }


        if(isset($request->educationID))
        {
            $id=$request->educationID;
             Education::where("id", $id)
                 ->update([
                "education_date"        => $request->education_date,
                "school_name"           => $request->school_name,
                "education_department"  => $request->education_department,
                "education_explanation" => $request->education_explanation,
                "status"                => $status
            ]);
            return redirect()->route('admin.education.list');
        }
        else
        {

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

    public function delete(Request $request)
    {
        $id = $request->educationID;

        Education::where('id',$id)->delete();

        return response()->json([], 200);

    }
}
