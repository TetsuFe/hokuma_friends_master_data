<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StoryMasterDataVersion;

class StoryMasterDataVersionController extends Controller
{
    public function getCurrentVersion()
    {
        return response()->json(['version' => StoryMasterDataVersion::query()->where('id', '=', 1)->first()['version']]);
    }
}
