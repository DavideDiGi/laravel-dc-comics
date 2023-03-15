@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row g-3">     
                    
            <div class="col-6 mb-3 mx-auto py-3 ">
                
                <div class="card rounded-0">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="info-cards">
                        <div class="card rounded-0 text-center">
                            <div class="card-body d-flex justify-content-center">
                                <span>{{ $comic->series }} |</span>
                                <span class="text-primary ms-1"> {{ $comic->type }}</span>
                            </div>
                        </div>
                        <div class="card rounded-0">
                            <div class="card-body">
                                <span>{{ $comic->description }}</span>
                            </div>
                        </div>
                        <div class="card rounded-0 text-center">
                            <div class="card-body d-flex justify-content-between">
                                <span class="text-success">Prezzo: {{ $comic->price }}€</span>
                                <span class="text-secondary">Data di uscita: {{ $comic->sale_date }}</span>
                            </div>
                            <a href="{{ route('comics.index') }}" class="btn btn-dark rounded-0">
                                Torna indietro
                            </a>
                        </div>
                        
                </div>
                
            </div>

        </div>
    </div>

@endsection