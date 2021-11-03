@extends('layout.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Series</th>
                        <th scope="col">Price</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($comics as $comic)
                        <tr>
                          <th scope="row">{{$comic['id']}}</th>
                          <td>{{ $comic['title'] }}</td>
                          <td>{{ $comic['series'] }}</td>
                          <td>{{ $comic['price'] }}</td>
                          <td>
                            <a class="btn btn-warning" href="{{ route('comics.show', $comic['id']) }}" role="button">Details</a>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection