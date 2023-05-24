@extends('layout')

@section('content')

    {{-- Template --}}
    <div class="row justify-content-center">
        <div class="col-md-10">

            {{-- Kotak1 --}}
            <div class="box text-light text-center bg-secondary ps-3 my-3">
                <h3>{{ $category->name }}</h3>
            </div>

            {{-- Kotak2 --}}
            @if ($books->count())
                <div class="row">
                
                    @foreach ($books as $book)

                        <div class="col-md-3 my-3">
                            <div class="card">
                                <img src="{{ $book->image }}" class="card-img-top" height="150px" alt="...">
                                
                                <div class="card-body">
                                    <h5 class="card-title text-center">{{ $book->title }}</h5>
                                    <p class="card-text text-center">By {{ $book->author }}</p>
                                    <a href="/detail/{{ $book->id }}" class="btn btn-primary d-flex justify-content-center"><b>Detail</b></a>
                                </div>
                          

                            </div>
                        </div>

                    @endforeach    

                </div>  

            @else
                <div class="row">
                    <div>No Data...</div>
                </div>


            @endif
            

        </div>
    </div>


@endsection




