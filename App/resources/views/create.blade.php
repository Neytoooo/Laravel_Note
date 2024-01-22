@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h1 class="h2">Nouvelle Note</h1>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('notes.store') }}" method="POST">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="title" class="form-label">Titre de la note:</label>
                                    <input type="text" class="form-control" name="title" required>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="content" class="form-label">Contenu de la note:</label>
                                    <textarea class="form-control" name="content" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
