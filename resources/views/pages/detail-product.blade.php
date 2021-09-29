@extends('layout.master')
@section('title')
<title>{!! $product->name !!}</title>
@endsection
@section('content')

<section>
    <div class="container product-detail-container">
        <div class="row-padding-16px">
            <div class="col-padding-16px w-100">
                @include('include.breadcrumb', ['breadcrumb' => ['Sản phẩm' => '/products', 'HP Book ...']])
            </div>
            
            <div class="col-padding-16px w-100 product-info-wrap">
                <div class="product-info">
                    <div class="row">
                        <div class="col-12 col-md-5 medias">
                            <div class="tag-sale">-10%</div>
                            <div class="thumbnail-silde-for">
                                <div class="item">
                                    <img src="/assets/images/word.png" alt="image">
                                </div>
                                <div class="item">
                                    <img src="/assets/images/LA_4894.png" alt="image">
                                </div>
                                <div class="item">
                                    <img src="/assets/images/wallpaper.png" alt="image">
                                </div>
                                <div class="item">
                                    <img src="/assets/images/news.png" alt="image">
                                </div>
                                <div class="item">
                                    <img src="/assets/images/news.png" alt="image">
                                </div>
                            </div>
                            <div class="thumbnail-silde-nav">
                                <div class="item">
                                    <img src="/assets/images/word.png" alt="image">
                                </div>
                                <div class="item">
                                    <img src="/assets/images/LA_4894.png" alt="image">
                                </div>
                                <div class="item">
                                    <img src="/assets/images/wallpaper.png" alt="image">
                                </div>
                                <div class="item">
                                    <img src="/assets/images/news.png" alt="image">
                                </div>
                                <div class="item">
                                    <img src="/assets/images/news.png" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-7 info">
                            <div class="title">Laptop Asus Vivibook A415EA-EB556T i3-1115G4/8GB/512BG SSD/14"FHD/14"FHD/Win 10</div>
                            <div class="price">
                                <div class="discount">8.287.000 đ</div>
                                <div class="origin">10.980.000 đ</div>
                            </div>
                            <div class="manufacturer">Hãng sản xuất: <a href="#">Hp</a></div>
                            <div class="sold">Lượt mua: 184</div>
                            <div class="bonus">
                                Tặng Balo Laptop
                            </div>
                            <div class="bonus">
                                Tặng PMH 200.000đ mua máy in Brother
                            </div>
                            <div class="bonus">
                                Tặng PMH 100.000đ mua Microsoft 365 Personal/Family/Home & Student khi mua Online đến 30/09
                            </div>
                            <div class="color">
                                Chọn màu: 
                                <select name="color" id="">
                                    <option value="1">Xám</option>
                                    <option value="2">Đen</option>
                                    <option value="3">Hường</option>
                                </select>
                            </div>
                            <div class="btn-buy mt-4" data-toggle="modal" data-target="#buyNow">
                                Mua ngay
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-padding-16px product-content-wrap">
                <div class="product-content">
                    <div class="product-content-title">
                        Đặc điểm nổi bật
                    </div>
                    <div class="content">
                        <p><strong>Về thiết kế</strong></p>
                        <p>HP Elitebook 850 G2 không khác gì so với người tiền nhiệm HP Elitebook 850 G1. Đáng nói, tốt nhất là kết nối wifi không dây mới Intel Wireless-AC 7265, hiện kiểm soát tất cả các chuẩn WLAN bao gồm 802.11ac (2×2, tối đa 867 Mbit/s) và Bluetooth 4.0. Ngoài ra, HP Elitebook 850 G2 tích hợp mô-đun LTE nhanh từ Qualcomm giúp truy cập internet với tốc độ nhanh và ổn định.</p>
                        <p>Chiếc laptop HP Elitebook 850 G2 có thiết kế khá mỏng. Trọng lượng của nó có vẻ nhẹ hơn các dòng sản phẩm trước của HP nhưng vẫn còn nặng hơn một chút so với những sản phẩm hiện tại như Toshiba Tecra Z50 và Dell Latitude E7440. Nắp máy được làm từ chất liệu magie chống xước.</p>
                        <p>Đây là chất lượng mà bạn vẫn thường thấy ở những chiếc xe hơi. Trong khi đó, phần thân được làm từ nhôm bóng màu bạc cao cấp tạo cho máy sự sang trọng, bóng bẩy. Ngoài ra, HP Elitebook 850 G2 được thiết kế với việc đáp ứng tiêu chuẩn MIL-STD-810 về độ bền. Vì thế, máy vẫn có thể chịu đựng được nhiệt độ khắc nghiệt hay áp suất cao. Đồng thời, bạn vẫn sẽ yên tâm máy hoàn toàn “khỏe mạnh” dù bị va đập nhẹ hay bị xóc trong balo khi bạn di chuyển trên đường.</p>
                        <p><img src="/assets/images/word.png" alt="image"></p>
                        <p><strong>Về bàn phím</strong></p>
                        <p>HP Elitebook 850 G2 không khác gì so với người tiền nhiệm HP Elitebook 850 G1. Đáng nói, tốt nhất là kết nối wifi không dây mới Intel Wireless-AC 7265, hiện kiểm soát tất cả các chuẩn WLAN bao gồm 802.11ac (2×2, tối đa 867 Mbit/s) và Bluetooth 4.0. Ngoài ra, HP Elitebook 850 G2 tích hợp mô-đun LTE nhanh từ Qualcomm giúp truy cập internet với tốc độ nhanh và ổn định.</p>
                        <p>Chiếc laptop HP Elitebook 850 G2 có thiết kế khá mỏng. Trọng lượng của nó có vẻ nhẹ hơn các dòng sản phẩm trước của HP nhưng vẫn còn nặng hơn một chút so với những sản phẩm hiện tại như Toshiba Tecra Z50 và Dell Latitude E7440. Nắp máy được làm từ chất liệu magie chống xước.</p>
                        <p>Đây là chất lượng mà bạn vẫn thường thấy ở những chiếc xe hơi. Trong khi đó, phần thân được làm từ nhôm bóng màu bạc cao cấp tạo cho máy sự sang trọng, bóng bẩy. Ngoài ra, HP Elitebook 850 G2 được thiết kế với việc đáp ứng tiêu chuẩn MIL-STD-810 về độ bền. Vì thế, máy vẫn có thể chịu đựng được nhiệt độ khắc nghiệt hay áp suất cao. Đồng thời, bạn vẫn sẽ yên tâm máy hoàn toàn “khỏe mạnh” dù bị va đập nhẹ hay bị xóc trong balo khi bạn di chuyển trên đường.</p>
                    </div>
                </div>
            </div>
            <div class="col-padding-16px product-parameter-wrap">
                <div class="product-parameter">
                    <div class="product-parameter-title">
                        Thông số kỹ thuật
                    </div>
                    <table class="parameter table-striped">
                        <tr>
                            <td>CPU</td>
                            <td>AMD Ryzen 5-5600H</td>
                        </tr>
                        <tr>
                            <td>RAM</td>
                            <td>8 GB, DDR4, 3200 MHz</td>
                        </tr>
                        <tr>
                            <td>Màn hình	</td>
                            <td>15.6", 1920 x 1080 Pixel, IPS, 144 Hz</td>
                        </tr>
                        <tr>
                            <td>Đồ họa</td>
                            <td>AMD Radeon RX 5500M 4 GB</td>
                        </tr>
                        <tr>
                            <td>Ổ cứng</td>
                            <td>SSD 512 GB</td>
                        </tr>
                        <tr>
                            <td>Hệ điều hành	</td>
                            <td>Window 10s</td>
                        </tr>
                        <tr>
                            <td>Trọng lượng</td>
                            <td>2.35</td>
                        </tr>
                        <tr>
                            <td>Hệ điều hành		</td>
                            <td>AMD Ryzen 5-5600H</td>
                        </tr>
                        <tr>
                            <td>Kích thước (mm)</td>
                            <td>359 x 254 x 24.9</td>
                        </tr>
                        <tr>
                            <td>Xuất xứ</td>
                            <td>Trung Quốc</td>
                        </tr>
                    </table>
                    <div class="detail">
                        <a href="#">Xem cấu hình chi tiết <i class="fa fa-chevron-down"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('include.product.product-slide', ['list_title' => 'Các phụ kiện thường được mua cùng'])
    @include('include.product.product-slide', ['list_title' => 'Các sản phẩm tương tự'])

    <div class="modal fade buy-now-modal" id="buyNow" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-info d-flex flex-row align-items-center">
                        <div class="thumbnail">
                            <img src="/assets/images/word.png" alt="thumbanil">
                        </div>
                        <div class="label">
                            <div class="title">Laptop Asus Vivobook A415EA-EB556T i3-1115G4/8GB/512GB SSD/14"FHD/14"FHD/Win 10 </div>
                            <div class="price">8.287.000 ₫</div>
                        </div>
                    </div>

                    <div class="order-info">
                        <form action="/order" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Giới tính:</label>
                                <div class="radio">
                                    <label><input type="radio" name="gender"> Nam</label>
                                    <label><input type="radio" name="gender"> Nữ</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="full_name">Họ và tên:<span class="required">*</span></label>
                                <input type="text" class="form-control" id="full_name">
                            </div>
                            <div class="form-group">
                                <label for="phone">Số điện thoại:<span class="required">*</span></label>
                                <input type="text" class="form-control" id="phone">
                            </div>
                            <div class="form-group">
                                <label for="email">Email:<span class="required">*</span></label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="form-group">
                                <label for="address">Địa chỉ giao hàng/ ghi chú:<span class="required">*</span></label>
                                <input type="text" class="form-control" id="address">
                            </div>
                            <button type="submit" class="btn btn-primary p-2 w-25 d-block order-submit">ĐẶT HÀNG</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if (Session::has('orderSuccessfully'))
    <div class="modal fade order-successfully" id="orderSuccessfully" role="dialog" aria-modal="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="/assets/images/logo/success.svg" alt="success">
                    <h2>Xác nhận đặt hàng</h2>
                    <p>Đơn hàng của bạn đã được gửi đi thành công, trong giờ mở cửa, chúng tôi sẽ liên hệ với quý khách trong ít phút.</p>
                    <button type="button" class="btn btn-primary p-2 w-25 m-auto d-block order-submit">Đồng ý</button>
                </div>
            </div>
        </div>
    </div>
    {{Session::forget('orderSuccessfully')}}
    @endif
</section>
@endsection
