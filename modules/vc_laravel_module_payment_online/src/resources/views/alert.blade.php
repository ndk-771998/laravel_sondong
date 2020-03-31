<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css" />
        <script src="/js/app.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center mt-5">
                <div >
                    <div class="d-flex justify-content-center">
                        <img class="img-fluid img-modal" src="/images/cart/error.png" width="40%" alt="">
                    </div>
                    <div class="text-uppercase d-flex justify-content-center mt-3 mb-4">
                        @if(session('alert'))
                        <div class="alert alert-danger mt-5">{!! session('alert') !!}</div>
                        @else
                        <div class="alert alert-danger mt-5"><h4>Lỗi không xác định ! Vui lòng báo với quản trị viên !</h4></div>
                        @endif
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="/" class="btn btn-primary">Trở lại trang chủ</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
