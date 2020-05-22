<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/app.css')}}" />
    <script src="{{url('js/app.js')}}"></script>
    <title>@yield('title','Vicoders HTML/CSS/JS Development Kit')</title>
</head>

<body>
    <input type="" value="{!! getOption('slide_time_interval') !!}" id="slide_time_interval" hidden>
    @include('utility::hotline-fixed', ['hotline' =>getOption('hotline')])
    @section('header')
    @include('layout.header')
    @show
    @yield('content')
    @section('footer')
    @include('layout.footer')
    @show

</body>

</html>
