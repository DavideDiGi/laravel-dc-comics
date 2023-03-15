@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row g-3">     
                    
            <div class="col-4 mb-3 text-center mx-auto py-3">
                
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <a href="{{ route('comics.index') }}" class="btn btn-primary">
                            Torna indietro
                        </a>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="description">
                        <div class="card text-center">
                            <div class="card-body">
                                <span>{{ $comic->description }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>
    </div>

@endsection