@extends('layout')

@section('content')
    {{-- Template --}}
    <div class="row justify-content-center">
        <div class="col-md-10">
            {{-- Kotak1 --}}
            <div class="box text-light text-center bg-secondary ps-3 my-3">
                <h3>{{ $publisher->name }}</h3>
            </div>
            {{-- Gambar --}}
            <div class="shadow-lg p-3 mt-3 mb-3 bg-body-tertiary rounded">
                <div class="d-flex justify-content-center flex-wrap text-center">
                    <img width="300" src="{{ $publisher->image }}" alt="...">
                </div>
            </div>              
            <div class="alert alert-info" role="alert">
                <h5 class="text-start mt-3">Address: {{ $publisher->address }}</h5>
                <h5 class="text-start mt-3">Phone: {{ $publisher->phone}}</h5>
                <h5 class="text-start mt-3">Email: {{ $publisher->email }}</h5>
            </div>
            {{-- Kotak2 --}}
            <div class="box text-light text-center bg-secondary ps-3 my-3">
                <h3>📚Book List📚</h3>
            </div>
            <div class="row mb-3">
                @foreach ($books as $book)
                <div class="col-md-3 mt-3">
                    <div class="card mt-3">
                        <img src="{{ $book->image }}" class="card-img-top" height="150px" alt="...">
                        <div class="card-body" >
                          <h5 class="card-title text-center">{{ $book->title }}</h5>
                          <p class="card-text text-center">By {{ $book->author }}</p>
                          <a href="/detail/{{ $book->id }}" class="btn btn-primary d-flex justify-content-center"><b>Detail</b></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection


