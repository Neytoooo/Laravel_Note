@extends('layouts.app')

@section('content')
    <h1>{{ $note->title }}</h1>
    <p>{{ $note->content }}</p>
    <a href="{{ route('notes.index') }}">Retour à la liste des notes</a>
@endsection
