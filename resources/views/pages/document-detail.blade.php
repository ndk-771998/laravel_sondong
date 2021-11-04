@extends('layout.master')
@section('content')
<div class="col-12 col-sm-12 col-md-12 document-content">
   <div class="row">
   <div class="document-list-content col-12 col-sm-12 col-md-12">
        <!-- Document List -->
        <div class="title">
            <a href=""><h3>Văn bản chính sách <span>Thứ ba, 12/10/2019, 00:38</span></h3></a>
        </div>
        <div class="detail-document">
            <table class="detail-table">
            <tbody>
                <tr>
                    <th scope="row">Số ký hiệu</th>
                    <td>2632/UBND-TH</td>
                </tr>
                <tr>
                    <th scope="row">Cơ quan ban hành</th>
                    <td>UBND huyện Sơn Động</td>
                </tr>
                <tr>
                    <th scope="row">Ngày ban hành</td>
                    <td>12/10/2019</td>
                </tr>
                <tr>
                    <th scope="row">Ngày hiệu lực</td>
                    <td>12/10/2019</td>
                </tr>
                <tr>
                    <th scope="row">File văn bản đính kèm</td>
                    <td colspan="2">
                        <p><a href="" style="color: #000"><i style="color: red" class="fa fa-file" aria-hidden="true"></i> 1634524798292_15.10 Kế hoạch Cuộc thi sáng tạo TTNNĐ(sonm)(17.10.2021_11h10p22).pdf</a></p>
                        <p><a href=""><i style="color: red" class="fa fa-file" aria-hidden="true"></i> 1634184878503_QUY CHẾ HĐTĐKT huyện năm 2021 Lưu NV _signed_signed_signed_signed.pdf</a></p>
                    </td>
                </tr>
            </tbody>
            </table>
        </div>
        <div class="views-document">
            <p>Lượt xem: 3254</p>
        </div>
        <div class="content p-0">
            <div class="_title">
                <a href=""><h3>Văn bản chính sách khác</h3></a>
            </div>
            @include('include.post.table-document')
        </div>
    </div>
   </div>
</div>
<div>
   @include('include.post.pagination')
</div>
@endsection