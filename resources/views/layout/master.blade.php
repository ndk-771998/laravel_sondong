<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="{!! getOption('website-favicon') !!}">
    <link rel="stylesheet preload" as="style" type="text/css" media="screen" href="{{url('/css/app.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script rel="preload" as="script" src="{{url('js/app.js')}}" async ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
</head>

<body>
    @section('header')
    @include('layout.header')
    @show 
    <div class="container _main-content">
        <div class="row">
            <div class="left col-xs-12 col-sm-12 col-md-9 col-lg-9">
                @yield('content')
            </div>
            <div class="right col-xs-12 col-sm-12 col-md-3 col-lg-3">
                @include('layout/right-sidebar')
            </div>
        </div>
    </div>
    @section('footer')
    @include('layout.footer')
    @show
</body>

</html>
