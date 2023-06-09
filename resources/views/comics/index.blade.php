@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row g-3">
            <h1 class="text-center text-white">Fumetti in vendita</h1>
            @foreach ($comics as $comic)
                
                <div class="col-4 mb-3 text-center">
                    
                    <div class="card">
                        <div class="card-body">
                            {{-- <div><img class="card-thumb" src="{{ $comic->thumb }}" alt=""></div> --}}
                            <h5 class="card-title">{{ $comic->title }}</h5>

                            <div class="action-buttons">
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-dark">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pen"></i>
                                </a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                </form>
                                <!-- Button trigger modal -->
                                {{-- <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-trash"></i>
                                </button> --}}
                                
                                <!-- Modal -->
                                {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                L'eliminazione sarà permanente. Sei sicuro di volerlo fare?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                                <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                    
                                                    <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                    
                </div>
                
                @endforeach
                <div class="text-center">
                    <a href="{{ route('comics.create') }}" class="btn btn-success py-3">
                        Crea un nuovo fumetto
                    </a>

                </div>
        </div>
    </div>

@endsection