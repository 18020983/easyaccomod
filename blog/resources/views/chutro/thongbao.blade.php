<head>
    <title>Thông báo</title>
</head>

@extends('chutro.webpage')
@section('section')
                <main role="main" class="ml-sm-auto col-lg-10">
                    <div class="user_quick_info js-mobile-user-quick-info">
                        <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>trinhthikim</strong>. Mã tài khoản: <strong>101028</strong></p>
                    </div>


                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/blog/public/chutro/home">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Thông báo</li>
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Thông báo</h1>
                    </div>

                    <!-- Đoạn mã bổ sung -->
                    <dl class="uk-description-list-divider">
                        <dt class="post_title" target="_blank" href="#" style="color: #055699;">TIN ĐÃ ĐƯỢC DUYỆT</dt>
                        @foreach($data as $row)
                        <dd>
                            <div>Bài đăng <strong>{{$row->loaiphong}}</strong> có mã ID <strong>{{$row->id}}</strong> của bạn đã được hệ thống xét duyệt thành công</div>

                            <div>Giá tiền bài đăng: <strong>{{$row->sotien}}</strong> Đ</div>
                            <div>
                                Thời hạn:
                                <i>{{$row->thoigiandang}} - {{$row->handangbai}} </i>
                            </div>
                        </dd>
                        @endforeach
                        <dt class="post_title" target="_blank" href="#" style="color: #055699;">TIN ĐÃ BỊ HỦY</dt>
                        @foreach($data1 as $row1)
                        <dd>
                            <div>Bài đăng <strong>{{$row1->loaiphong}}</strong> có mã ID <strong>{{$row1->id}}</strong> của bạn đã bị hủy</div>
                            <div>
                                Thời hạn:
                                <i>{{$row1->thoigiandang}} - {{$row1->handangbai}} </i>
                            </div>
                        </dd>
                        @endforeach
                    </dl>
                    <!-- hết đoạn mã bổ sung -->

                    <footer>
                        <div id="footer">
                            <div class="container">
                                <div class="footer_bottom">
                                    <div class="w980">
                                        <p class="company_name"><strong>CÔNG TY TNHH AccomodCorp</strong></p>
                                        <p><strong>Tổng đài CSKH: 0111.111.111</strong></p>
                                        <p>Copyright © 2015 - 2019 EasyAccomod.com</p>
                                        <p>Email: cskh.EasyAccomod@gmail.com | lienhe.EasyAccomod@gmail.com</p>
                                        <p>Địa chỉ: LE-4.07, Toà nhà Lexington Residence, Số 67 Mai Chí Thọ, Phường An Phú, Quận 2, Tp. Hồ Chí Minh.</p>
                                        <p>Giấy phép đăng ký kinh doanh số 0313588502 do Sở kế hoạch và Đầu tư thành phố Hồ Chí Minh cấp ngày 30 tháng 3 năm 2017.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </main>
@stop()