<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    public function index()
    {
        $notes = Note::all(); // Vous pouvez ajuster cela en fonction de vos besoins de récupération des notes
        return view('index', compact('notes'));
    }

    public function create()
    {
        return view('create');

        
    }

    public function store(Request $request)
    {
        $note = new Note();
        $note->title = $request->input('title');
        $note->content = $request->input('content');
        $note->save();

        return redirect()->route('notes.index')->with('success', 'Note créée avec succès.');

    }

    public function show(Note $note)
{
    return view('show', compact('note'));
    return redirect()->route('notes.show', ['note' => $note])->with('success', 'Note créée avec succès.');

}


    public function edit(Note $note)
    {
        return view('edit', compact('note'));
    }

    public function update(Request $request, Note $note)
    {
        dd($request->all());
        $note->update([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);
        
        
        return redirect()->route('notes.index')->with('success', 'Note modifiée avec succès.');
    }

    public function destroy(Note $note)
    {
        $note->delete();

        return redirect()->route('notes.index')->with('success', 'Note supprimée avec succès.');
    }
}

