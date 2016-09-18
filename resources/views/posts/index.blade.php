@extends('layouts.master')
@section('styles')
    <link rel="stylesheet" href="{{URL::to('/css/app.css')}}">
@endsection
@section('title')
Shopping Cart
@endsection
@section('content')

    <div class="row">
        <div class="col-sm-6 col-md-12">
            <div class="thumbnail">
                <img src="/images/post1.jpg" alt="...">
                <div class="caption">
                    <h3>Sample Post 1</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam accumsan erat vitae orci feugiat, quis condimentum tellus viverra. Ut sed ipsum id purus molestie vehicula. Aliquam facilisis odio viverra metus ultrices fermentum. Vivamus tristique ullamcorper imperdiet. Quisque sagittis vel diam quis auctor. Vivamus consequat ex ultricies nulla porttitor, sit amet imperdiet sem porta. Sed accumsan, massa at tempor feugiat, ipsum urna pellentesque purus, blandit auctor nisi velit sit amet arcu. Vestibulum scelerisque mattis porta. Phasellus dictum ut massa ac tristique. Morbi et elit quis diam ultrices pulvinar. Praesent porta consequat volutpat. Nulla vitae scelerisque ligula. Fusce scelerisque elit a convallis convallis. Maecenas sed sodales turpis.

                        Suspendisse enim risus, pulvinar a sodales ac, laoreet vel ante. Aliquam posuere arcu justo, vel condimentum urna venenatis a. Nulla pulvinar interdum felis, id bibendum lectus ornare non. Cras lacus purus, porttitor eu odio a, rhoncus venenatis lorem. Etiam feugiat et tortor id dictum. Curabitur eu massa non mauris placerat euismod dapibus a turpis. Aliquam bibendum ac ex et pharetra. Nunc sodales hendrerit eros, in pellentesque tellus luctus sit amet.</p>
                    <p> <a href="#" class="btn btn-success" role="button">Read More</a></p>
                </div>
            </div>
        </div>

    </div>


@endsection