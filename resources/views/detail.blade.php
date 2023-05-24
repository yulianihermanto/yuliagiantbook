@extends('layout')

@section('content') 

    {{-- Template --}}
    <div class="row justify-content-center">
        <div class="col-md-10">

            {{-- Kotak1 --}}
            <div class="box text-light text-center bg-secondary ps-3 my-3">
                <h3>Book Detail</h3>
            </div>

                   

            {{-- Judul dan Gambar --}}
            <div class="shadow-lg p-3 mt-3 mb-3 bg-body-tertiary rounded">
                <div class="d-flex justify-content-center flex-wrap text-center">
                    <h3 style="width: 100%"><b>{{ $book->title }}</b></h3>
                    <img src="{{ $book->image }}" alt="...">
                </div>
            
            </div>  

            <div class="alert alert-info" role="alert">
                <h5 class="text-start mt-3">Written By: {{ $book->author }}</h5>
                <h5 class="text-start mt-3">Published By: {{ $book->publisher->name }}</h5>
                <h5 class="text-start mt-3">Year: {{ $book->year }}</h5>
                <h5>Sinopsis: {{ $book->synopsis }}</h5>
              </div>
           
        </div>
    </div>  
@endsection


