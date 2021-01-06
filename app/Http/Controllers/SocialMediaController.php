<?php

namespace App\Http\Controllers;

use App\Models\SocialMedia;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    public function list()
    {
        $list = SocialMedia::all();
        return view('admin.social_media_list', compact('list'));
    }

    public function addShow(Request $request)
    {
        if ($request->socialMediaID)
        {

        }
        else
        {
            $socialMedia=null;
            return view('admin.social_media_add', compact('socialMedia'));
        }
    }

    public function add(Request $request)
    {
        dd($request->all());

    }


}
