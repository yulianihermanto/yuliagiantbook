@extends('layout')

@section('content')


    {{-- Template --}}
    <div class="row justify-content-center">
        <div class="col-md-10">

            {{-- Kotak1 --}}
            <div class="box text-light text-center bg-secondary ps-3 my-3">
                <h3>Publishers</h3>
            </div>
            @if ($publisher->count())
            <div class="row">            
                @foreach ($publisher as $pub)
                    <div class="col-md-3 my-3">
                        <div class="card">
                            <img src="{{ $pub->image }}" class="card-img-top" height="150px" alt="...">                            
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $pub->name }}</h5>
                                <a href="/publisher-detail/{{ $pub->id }}" class="btn btn-primary d-flex justify-content-center"><b>Detail</b></a>
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


