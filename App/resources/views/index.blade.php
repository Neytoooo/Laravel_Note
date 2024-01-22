@extends('layouts.app')

@section('content')
    <h1>Liste des Notes</h1>

    @foreach($notes as $note)
        <div>
            <a href="{{ route('notes.show', ['note' => $note->id]) }}">{{ $note->title }}</a>
            
            
            <a href="{{ route('notes.edit', ['note' => $note->id]) }}">Modifier</a>
            
            <form action="{{ route('notes.destroy', ['note' => $note->id]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit">Supprimer</button>
            </form>
        </div>
    @endforeach

    <a href="{{ route('note') }}">Nouvelle Note</a>
@endsection
