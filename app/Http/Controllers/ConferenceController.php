<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    public function showAllConferences(){
        $conferences = Conference::all();
        return view('conferences.conferenceList', ['conferences' => $conferences]);
    }

    public function create(){
        return view('conferences.create');
    }

    public function store(Request $request){

    }

    public function edit($id){
        $conference = Conference::findOrFail($id);
        return view('conferences.edit', compact('conference'));
    }

    public function update(Request $request, $id){

    }

    public function destroy($id){

    }
}
