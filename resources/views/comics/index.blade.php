@extends('layouts.main')

@section('title', 'Comics Index')

@section('content')
    <section id="comics_index">
        <div class="container">
            <table class="table table-dark table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Writer</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            {{-- <td> <a href="{{ route('comic.show', $comic->id)}} ">  {{$comic->name}} </a></th> --}}
                            <td>{{$comic->title}}</td>
                            <td>{{$comic->description}}</td>
                            <td>{{$comic->writer}}</td>
                            {{-- <td><a href="{{ route('comic.edit', $comic->id) }}" class="btn-sm"><i class="fas fa-edit"></i></a></td> --}}
                        </tr>    
                    @empty
                        <tr>
                            <td colspan="5" class="text-center table-dark">Non ho trovato ospiti con questo nome</td>
                        </tr>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </section>
@endsection