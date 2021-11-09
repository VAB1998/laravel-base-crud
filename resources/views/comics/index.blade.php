@extends('layouts.main')

@section('title', 'Comics Index')

@section('content')
    <section id="comics_index">
        <div class="container">
            <a href="{{ route("comics.create") }}" class="btn btn-primary ms-2">Add a New Comic</a>
            <table class="table table-dark table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Writer</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <td><a href="{{ route('comics.show', $comic->id)}} ">  {{$comic->title}} </a></td>
                            <td>{{$comic->description}}</td>
                            <td>{{$comic->writer}}</td>
                            {{-- Edit --}}
                            <td><a href="{{ route('comics.edit', $comic->id)}} "> Edit </a></td>
                            
                            
                            {{-- Delete --}}
                            <td>
                                <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                                    
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">D</button>
                                </form>
                            </td>

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