@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-6 mx-auto">
                
                        <h1 class="card-title text-center my-3">Inserisci un fumetto</h1>

                <div class="row text-light">
                    <div class="col mb-3">

                        <form action="{{ route('comics.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="comic-title" class="form-label @error('comic-title') text-danger @enderror">Titolo del fumetto *</label>
                                <input type="text" class="form-control @error('comic-title') is-invalid @enderror" name="comic-title" id="comic-title" value="{{ old('comic-title') }}" placeholder="es: Batgirl #1" >
                                @error('comic-title')
                                    <div class="alert alert-danger py-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="comic-description" class="form-label @error('comic-description') text-danger @enderror">Scrivi una descrizione del fumetto</label>
                                <textarea class="form-control @error('comic-description') is-invalid @enderror" name="comic-description" id="comic-description" rows="3" placeholder="Scrivi qui...">{{ old('comic-description') }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label for="comic-serie" class="form-label @error('comic-serie') text-danger @enderror">Serie del fumetto *</label>
                                <input type="text" class="form-control @error('comic-serie') is-invalid @enderror" name="comic-serie" id="comic-serie" value="{{ old('comic-serie') }}" placeholder="es: Batgirl"></textarea>
                                @error('comic-serie')
                                    <div class="alert alert-danger py-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="comic-type" class="form-label @error('comic-type') text-danger @enderror">Tipo del fumetto</label>
                                <input type="text" class="form-control @error('comic-type') is-invalid @enderror" name="comic-type" id="comic-type" value="{{ old('comic-type') }}" placeholder="es: comic book"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="comic-thumb" class="form-label @error('comic-thumb') text-danger @enderror">Inserisci una Thumbnail</label>
                                <input input type="file" class="form-control @error('comic-thumb') is-invalid @enderror" name="comic-thumb" id="comic-thumb" value="{{ old('comic-thumb') }}"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="comic-price" class="form-label @error('comic-price') text-danger @enderror">Inserisci il prezzo *</label>
                                <input input type="number" class="form-control @error('comic-price') is-invalid @enderror" step="0.01" name="comic-price" id="comic-price" value="{{ old('comic-price') }}"></textarea>
                                @error('comic-price')
                                    <div class="alert alert-danger py-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="comic-sale-date" class="form-label @error('comic-sale-date') text-danger @enderror">Data uscita *</label>
                                <input input type="date" class="form-control @error('comic-sale-date') is-invalid @enderror" name="comic-sale-date" id="comic-sale-date" value="{{ old('comic-sale-date') }}"></textarea>
                                @error('comic-sale-date')
                                    <div class="alert alert-danger py-2">{{ $message }}</div>
                                @enderror
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