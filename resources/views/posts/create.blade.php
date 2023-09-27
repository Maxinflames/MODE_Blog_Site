@extends('layout')

@section('content')
    <h1>Create a post</h1>

    <form method="POST" action="/posts">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control border border-secondary" id="title" name="title"
                placeholder="Title here...">
        </div>
        <p></p>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control border border-secondary" id="body" name="body" placeholder="Body here..."></textarea>
        </div>
        <p></p>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Publish</button>
        </div>
        <p></p>
        @include('partials.errors')
    </form>

@endsection
