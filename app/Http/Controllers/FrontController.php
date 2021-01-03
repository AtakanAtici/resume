<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $educationList=Education::query()
            ->StatusActive()
            ->select('education_date', 'school_name', 'education_department', 'education_explanation')
            ->get();

        $experienceList=Experience::query()
            ->where('status',1)
            ->get();
        return view('pages.index', compact('educationList', 'experienceList'));
    }
}
