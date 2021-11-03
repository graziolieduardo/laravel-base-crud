@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter comic's name">

                        @error('title')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" ></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image_path">Comic's Image</label>
                        <input type="text" name="image_path" class="form-control" id="image_path" placeholder="Enter comic's img">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Enter comic's price">
                    </div>
                    <div class="form-group">
                        <label for="series">Enter Series</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter Series">
                    </div>
                    <div class="form-group">
                        <label for="sale_date">Sale Date</label>
                        <input type="text" name="sale_date" class="form-control" id="sale_date" placeholder="Enter sale date">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Enter type">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection