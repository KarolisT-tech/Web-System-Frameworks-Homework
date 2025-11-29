<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use App\Http\Requests\StoreConferenceRequest;

class ConferenceController extends Controller
{
    public function showAllConferences(){
        $conferences = Conference::all();
        return view('conferences.conferenceList', ['conferences' => $conferences]);
    }

    public function create(){
        return view('conferences.create');
    }

    public function store(StoreConferenceRequest $request){
        $validated = $request->validated();
        $conference = Conference::create($validated);
        return redirect()->route('conferences.showAllConferences');
    }

    public function edit($id){
        $conference = Conference::findOrFail($id);
        return view('conferences.edit', compact('conference'));
    }

    public function update(StoreConferenceRequest $request, $id){
        $conference = Conference::findOrFail($id);
        $validated = $request->validated();
        $conference->update($validated);
        return redirect()->route('conferences.showAllConferences');
    }

    public function destroy($id){
        $conference = Conference::findOrFail($id);
        $conference->delete();
        return redirect()->route('conferences.showAllConferences');
    }

    public function show($id){
        $conference = Conference::findOrFail($id);
        return view('conferences.show', compact('conference'));
    }
}
