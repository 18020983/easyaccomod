<head>
    <title>Thống kê</title>
</head>
@extends('admin.webpage')
@section('section')                
                <main role="main" class="ml-sm-auto col-lg-10">

                    <div class="user_quick_info js-mobile-user-quick-info">
                        <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>trinhthikim</strong>. Mã tài khoản: <strong>101028</strong></p>
                    </div>


                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/blog/public/admin/home">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Notification</li>
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Thông báo</h1>
                    </div>
                    <div class="d-none d-md-block">
                        @foreach($data as $row)
                        <div class="table-responsive">
                            <table class="table table_post_listing table-bordered _table-hover">
                                <tbody>
                                    <tr>
                                        <th>Bài đăng được xem nhiều nhất</th>
                                        <td>ID: {{$row->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Bài đăng được quan tâm nhiều nhất</th>
                                        <td>ID:14567</td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Thời gian có số lượng bài viết nhiều nhất
                                        </th>
                                        <td>
                                            10h30 17/12/2020
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Địa điểm (phường/quận) có nhu cầu thuê nhiều nhất
                                        </th>
                                        <td>
                                            Mỹ Đình, Hà Nội
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Mức giá phòng được tìm kiếm nhiều nhất
                                        </th>
                                        <td>
                                            1 triệu - 2 triệu
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>
                                            Khoảng thời gian có nhiều người truy cập/tìm kiếm nhiều
                                        </th>
                                        <td>
                                            9.00pm-10.00pm
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        @endforeach
                    </div>


                    <nav class="mt-5">
                        <!-- pagination -->

                        <!-- end pagination -->
                    </nav>
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