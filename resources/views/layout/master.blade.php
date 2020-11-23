<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="{!! getOption('website-favicon') !!}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url('/css/app.css')}}" />
    <script src="{{url('js/app.js')}}"></script>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
</head>

<body>
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
