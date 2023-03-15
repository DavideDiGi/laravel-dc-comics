@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">

                        <h1 class="card-title text-center my-3">Modifica il fumetto</h1>

                <div class="row text-light">
                    <div class="col mb-3">
                        <form action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="post">
                            @csrf

                            @method('PUT')

                            <div class="mb-3">
                                <label for="comic-title" class="form-label">Titolo del fumetto *</label>
                                <input type="text" class="form-control" name="comic-title" id="comic-title" value="{{ $comic->title }}" placeholder="es: Batgirl #1">
                            </div>
                            <div class="mb-3">
                                <label for="comic-description" class="form-label">Scrivi una descrizione del fumetto</label>
                                <textarea class="form-control" name="comic-description" id="comic-description" rows="3" >{{ $comic->description }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="comic-serie" class="form-label">Serie del fumetto *</label>
                                <input type="text" class="form-control" name="comic-serie" id="comic-serie" value="{{ $comic->series }}" placeholder="es: Batgirl"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="comic-type" class="form-label">Tipo del fumetto</label>
                                <input type="text" class="form-control" name="comic-type" id="comic-type" value="{{ $comic->type }}" placeholder="es: comic book"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="comic-thumb" class="form-label">Inserisci una Thumbnail</label>
                                <input input type="file" class="form-control" name="comic-thumb" id="comic-thumb">
                            </div>
                            <div class="mb-3">
                                <label for="comic-price" class="form-label">Inserisci il prezzo *</label>
                                <input input type="number" class="form-control" name="comic-price" id="comic-price" value="{{ $comic->price }}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="comic-sale-date" class="form-label">Data uscita *</label>
                                <input input type="date" class="form-control" name="comic-sale-date" id="comic-sale-date" value="{{ $comic->sale_date }}"></textarea>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success w-100">
                                    Salva
                                </button>
                            </div>
                        </form>
                        <a href="{{ route('comics.index') }}" class="btn btn-danger w-100 mt-3">
                            Torna indietro
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection