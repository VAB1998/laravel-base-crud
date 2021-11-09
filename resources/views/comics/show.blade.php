@extends('layouts.main')

@section('title', 'Comic Details')

@section('content')
    <section id="comics_details">
        <div class="container">
            <a href=" {{ route('comics.index') }} ">Go Back to the Comic List</a>
            <div class="card text-white bg-dark">
                <div class="card-body row">
                    <div class="col-2">
                        <img class="img-fluid rounded-start" src="{{$comic->thumb}}" alt="{{$comic->title}} picture">
                    </div>
                    <div class="col">
                        <h2>{{$comic->title}}</h2>
                        <p>{{$comic->description}}</p>
                        <h4>{{$comic->writer}}</h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection