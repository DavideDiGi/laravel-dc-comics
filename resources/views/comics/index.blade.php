@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row g-3">
            @foreach ($comics as $comic)
                
                <div class="col-4 mb-3 text-center">
                    
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-thumb"><img src="{{ $comic->thumb }}" alt=""></h5>
                            <h5 class="card-title">{{ $comic->title }}</h5>

                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-dark">
                                Vedi fumetto
                            </a>
                            <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                                Modifica il fumetto
                            </a>
                        </div>
                    </div>
                    
                </div>
                
                @endforeach
                <a href="{{ route('comics.create') }}" class="btn btn-success d-block py-3 mx-auto">
                    Crea prodotto
                </a>
        </div>
    </div>

@endsection