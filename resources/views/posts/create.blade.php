@extends('layouts.master')
@section('title')
    Create Post
@endsection
@section('content')

   <div class="raw">
       <div class="col-md-4 col-md-offset-4">
           <h1>Create Post</h1>
           @if(count($errors)>0)
           <div class="alert alert-danger">
               @foreach($errors->all() as $error)
               <p>{{$error}}</p>
               @endforeach
           </div>
           @endif
           <form action="{{route('posts.create')}}" method="post" enctype="multipart/form-data">
               <div class="form-group">
                   <lablel for="postName">Title</lablel>
                   <input type="text" id="postName" name="postName" class="form-control">
               </div>
               <div class="form-group ">
                   <lablel for="description">Description</lablel>
                   <textarea name="description" id="description" cols="40" rows="5" class="form-control"></textarea>
               </div>
               <div class="form-group ">
                   <lablel for="image">Image</lablel>
                   <input type="file" id="image" name="image">
               </div>
               <button type="submit">Create Post</button>
               {{ csrf_field() }}

           </form>
       </div>
   </div>


@endsection