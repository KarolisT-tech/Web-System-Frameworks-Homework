<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function showAllConferences(){
        $conferences = Conference::all();
        return view('home.conferenceList', ['conferences' => $conferences]);
    }
}
