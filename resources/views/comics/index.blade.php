@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row g-3">
            @foreach ($comics as $comic)
                
                <div class="col-4 mb-3 text-center">
                    
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>

                            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary">
                                Vedi fumetto
                            </a>
                        </div>
                    </div>
                    
                </div>
                
                @endforeach
                <a href="{{ route('comics.create') }}" class="btn btn-success">
                    Crea prodotto
                </a>
        </div>
    </div>

@endsection