<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link href="{{URL::to('/css/bootstrap.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{URL::to('/css/font-awesome.css')}}" type="text/css">
    @yield('styles')
</head>
<body>
@include('partials.header')
<div class="container">
    @yield('content')
</div>

<script src="{{URL::to('/js/bootstrap.js')}}"></script>
<script src="{{URL::to('/js/jquerymin.js')}}"></script>
@yield('scripts')
</body>
</html>


