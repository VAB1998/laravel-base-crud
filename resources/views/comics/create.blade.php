@extends('layouts.main')

@section('title', 'Create a Comic')

@section('content')
    <section id="comics_create">
        <div class="container">
            <a href="{{ route('comics.index') }}">Go Back to the Comic List</a>

            <form action=" {{ route('comics.store') }} " method="POST">
                {{-- <input type="hidden" name="_token" value="xxdnqiodnqwiowTOKENdqniodqwniox" /> --}}
                @csrf
                
                <div class="row">
                    <div class="col-6 mb-4">
                        
                        <input class="form-control" type="text" id="title" name="title" placeholder="Title" required>
                        <div class="form-text">Enter the title</div>       
                    </div>
    
                    <div class="col-6 mb-4">
                        
                        <input class="form-control" type="text" id="description" name="description" placeholder="Description">
                        <div class="form-text">Enter the Description</div>       
                    </div>
    
                    <div class="col-6 mb-4">
                        
                        <input class="form-control" type="text" id="thumb" name="thumb" placeholder="Image URL">
                        <div class="form-text">Enter the Image URL</div>       
                    </div>
    
                    <div class="col-6 mb-4">
                        
                        <input class="form-control" type="text" id="writer" name="writer" placeholder="Writer" required>
                        <div class="form-text">Enter the Writer</div>       
                    </div>
                </div>
    
                <div class="col-12 mb-4">
                    <button type="reset" class="btn btn-danger">Reset</button>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>        
    </section>
@endsection