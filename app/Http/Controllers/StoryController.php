<?php

namespace App\Http\Controllers;

use App\Story;

class StoryController extends Controller
{
    public function index(){
        $stories = Story::all();
        return response()->json(['stories'=> $stories]);
    }
}
