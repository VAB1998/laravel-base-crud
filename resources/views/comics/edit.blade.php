@extends('layouts.main')

@section('title', 'Edit a Comic')

@section('content')
    <section id="comics_edit">
        <a href="{{ route('comics.index') }}">Go Back to the Comic List</a>
        <form action=" {{ route('comics.update', $comic) }} " method="POST">

            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-4 mb-4">
                    <input class="form-control" type="text" id="title" name="title" placeholder="Title" required  value="{{ $comic->title }}" >
                    <div class="form-text">Enter the title</div>       
                </div>

                <div class="col-4 mb-4">
                    <input class="form-control" type="text" id="description" name="description" placeholder="Description" value="{{ $comic->description }}">
                    <div class="form-text">Enter the Description</div>       
                </div>

                <div class="col-4 mb-4">
                    
                    <input class="form-control" type="text" id="thumb" name="thumb" placeholder="Image URL" value="{{ $comic->thumb }}">
                    <div class="form-text">Enter the Image URL</div>       
                </div>

                <div class="col-4 mb-4">
                    
                    <input class="form-control" type="text" id="writer" name="writer" placeholder="Writer" required value="{{ $comic->writer }}">
                    <div class="form-text">Enter the Writer</div>       
                </div>
            </div>

            <div class="col-12 mb-4">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </section>
@endsection