@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">

                        <h1 class="card-title text-center my-3">Inserisci un fumetto</h1>

                <div class="row">
                    <div class="col mb-3">
                        <form action="{{ route('comics.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="comic-title" class="form-label">Titolo del fumetto</label>
                                <input type="text" class="form-control" id="comic-title" placeholder="es: Batgirl #1">
                            </div>
                            <div class="mb-3">
                                <label for="comic-description" class="form-label">Scrivi una descrizione del fumetto</label>
                                <textarea class="form-control" id="comic-description" rows="3" placeholder="Scrivi qui..."></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="comic-serie" class="form-label">Serie del fumetto</label>
                                <input type="text" class="form-control" id="comic-serie" placeholder="es: Batgirl"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="comic-type" class="form-label">Tipo del fumetto</label>
                                <input type="text" class="form-control" id="comic-type" placeholder="es: comic book"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="comic-thumb" class="form-label">Inserisci una Thumbnail</label>
                                <input input type="file" class="form-control" id="comic-thumb"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success w-100">
                                    Salva
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection