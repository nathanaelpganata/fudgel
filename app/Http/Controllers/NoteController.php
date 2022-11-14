<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class NoteController extends Controller
{
    // Show All Notes
    public function index() {
        return view('notes.home', [
            'notes' => Note::latest()->get()
        ]);
    }

    // Show Single Note
    public function show(Note $note) {
        return view('notes.single-note', [
            'note' => $note
        ]);
    }

    // Show Create Note
    public function create() {
        return view('notes.create');
    }

    // Store Note
    public function store(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'title' => 'required',
            'urgency' => ['required'],
            'location' => 'required',
            'impact' => 'required',
            'tags' => ['required'],
            'is_done' => ['required'],
            'deadline_at' => ['required'],
            'description' => 'required',
        ]);

        $formFields['user_id'] = auth()->id();

        Note::create($formFields);

        return redirect('/');
    }

    // Delete Note
    public function delete(Note $note) {
        if($note->user_id != auth()->id()) {
            abort(403, 'unauthorized action');
        }
        
        $note->delete();
        return redirect('/');
    }

    // Show Edit Note
    public function edit(Note $note) {
        return view('notes.edit', [
            'note' => $note
        ]);
    }
    
    // Update Note
    public function update(Request $request, Note $note) {
        if($note->user_id != auth()->id()) {
            abort(403, 'unauthorized action');
        }

        $formFields = $request->validate([
            'title' => 'required',
            'urgency' => ['required'],
            'location' => 'required',
            'impact' => 'required',
            'tags' => ['required'],
            'is_done' => ['required'],
            'deadline_at' => ['required'],
            'description' => 'required',
        ]);

        $note->update($formFields);

        return redirect('/');
    }

    // Show Manage Page
    public function manage() {
        return view('notes.manage-note', ['notes' => auth()->user()->notes()->get()]);
    }
}
