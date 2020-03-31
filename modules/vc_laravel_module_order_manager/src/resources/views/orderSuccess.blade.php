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
                        <img class="img-fluid img-modal" src="/images/cart/tick.png" width="40%" alt="">
                    </div>
                    <div class="text-uppercase d-flex justify-content-center mt-3 mb-4">
                        <b>Đặt hàng thành công !</b>
                    </div>
                    <div class="d-flex justify-content-center">
                        <p>Chúng tôi sẽ liên hệ ngay với quý khách ngay để xác nhận đơn hàng !</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{ url('/') }}" class="btn btn-secondary">Đóng</a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
