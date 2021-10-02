@extends('layout.master')
@section('content')
<section>
    <div class="container page-container">
        <div class="page-wrap row-padding-12px">
            <div class="sidebar col-padding-12px">
                @include('include.sidebar-list')
            </div>
            <div class="main col-padding-12px">
                <div class="title">Quy định đổi trả hàng</div>
                <div class="content">
                    <p><strong>I. QUY ĐỊNH THANH TOÁN</strong></p>
                    <p>1. Đối với dịch vụ vận chuyển (Ship)

                        - Khi hàng hóa được vận chuyển đến kho của HNCmua tại Việt Nam (Hà Nội, TP.HCM), HNCmua sẽ thông báo cước vận chuyển mà khách hàng cần thanh toán thông qua SMS và Email.
                        - Sau khi khách hàng thực hiện thanh toán 100% cước vận chuyển, HNCmua sẽ giao hàng theo chỉ tiêu thời gian cam kết.

                        2. Đối với dịch vụ mua hộ (Order)

                        - Khách hàng thanh toán 100% tổng giá trị sau khi chốt đơn hàng.
                        - HNCmua tiến hành mua hàng và vận chuyển hàng hóa về Việt Nam.
                        - Sau khi khách hàng thanh toán cước vận chuyển, HNCmua sẽ giao hàng theo chỉ tiêu thời gian cam kết.
                    </p>
                    <p><strong>II. HÌNH THỨC THANH TOÁN</strong></p>
                    <p>1. Đối với dịch vụ vận chuyển (Ship)

                        - Khi hàng hóa được vận chuyển đến kho của HNCmua tại Việt Nam (Hà Nội, TP.HCM), HNCmua sẽ thông báo cước vận chuyển mà khách hàng cần thanh toán thông qua SMS và Email.
                        - Sau khi khách hàng thực hiện thanh toán 100% cước vận chuyển, HNCmua sẽ giao hàng theo chỉ tiêu thời gian cam kết.
                        
                        2. Đối với dịch vụ mua hộ (Order)
                        
                        - Khách hàng thanh toán 100% tổng giá trị sau khi chốt đơn hàng.
                        - HNCmua tiến hành mua hàng và vận chuyển hàng hóa về Việt Nam.
                        - Sau khi khách hàng thanh toán cước vận chuyển, HNCmua sẽ giao hàng theo chỉ tiêu thời gian cam kết.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
