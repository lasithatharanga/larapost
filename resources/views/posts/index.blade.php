@extends('layouts.master')
@section('title')
LaraPost
@endsection
@section('content')

    <div class="row">
        @foreach($posts as $post)
        <div class="col-sm-6 col-md-12">
            <div class="thumbnail">
                <img src="{{$post->imagePath}}" alt="...">
                <div class="caption">
                    <h3>{{$post->postName}}</h3>
                    <p>{{$post->description}}</p>
                    <p> <a href="#" class="btn btn-success" role="button">Read More</a></p>
                </div>
            </div>
        </div>
    @endforeach
    </div>


@endsection