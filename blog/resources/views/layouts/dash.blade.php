@extends('layouts.plan')
@section('body')

<div ip="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden">
    <!-- Thanh header trên cùng dùng để đăng kí đăng nhập -->
    @yield('topHeader')
    <!-- Thanh header thứ 2. Logo chỉnh sửa sau. Thanh menu chỉ để tượng chửng chưa dùng đc -->
    
    <!-- Phần hiển thị các bài đăng thuê trọ. Tạm thời chưa khích đc vào do chưa làm trang đọc quảng cáo -->
    @yield('section');
    <!-- Thanh header thứ 2. Logo chỉnh sửa sau. Thanh menu chỉ để tượng chửng chưa dùng đc -->
    
    <!-- Footer để tạm đấy có thời gian chỉnh sau -->
    <footer>
        <div id="footer" uk-img=" " style="background-image: linear-gradient(45deg, #f4d65d 0%, #d8b265 80%)">
            <div class="container">

                <div class="footer_bottom">
                    <div class="w980">
                        <p class="company_name"><strong>CÔNG TY TNHH LBKCORP</strong></p>
                        <p><strong>Tổng đài CSKH: 0917.686.101</strong></p>
                        <p>Copyright © 2015 - 2019 Phongtro123.com</p>
                        <p>Email: cskh.phongtro123@gmail.com | lienhe.phongtro123@gmail.com</p>
                        <p>Địa chỉ: LE-4.07, Toà nhà Lexington Residence, Số 67 Mai Chí Thọ, Phường An Phú, Quận 2, Tp.
                            Hồ Chí Minh.</p>
                        <p>Giấy phép đăng ký kinh doanh số 0313588502 do Sở kế hoạch và Đầu tư thành phố Hồ Chí Minh cấp
                            ngày 30 tháng 3 năm 2017.</p>
                        <center style="display: flex; align-items: center; justify-content: center;">
                            <a class="bds_icon dkbct" style="display: inline-block; margin: 0 5px;" rel="nofollow"
                                target="_blank"
                                href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=43297"></a>
                            <a style="display: inline-block; margin: 0 5px;" rel="nofollow" target="_blank"
                                href="https://www.dmca.com/Protection/Status.aspx?ID=92715b33-c457-422d-95c4-a5453e80e9bf&amp;refurl=https://phongtro123.com/"
                                title="DMCA.com Protection Status" class="dmca-badge"><img
                                    src="{{asset('quản lý tin đăng_files/dmca-badge-w250-2x1-04.png')}}" width="100"
                                    alt="DMCA.com Protection Status"></a>
                            <script async="" defer=""
                                src="{{asset('quản lý tin đăng_files/DMCABadgeHelper.min.js.download')}}"></script>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
@stop()