<head>
    <title>Quản lý tin đăng</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Danh sách tin đăng</li>
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Quản lý bài đăng</h1>

                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="dropdown mr-1">
                            </div>
                            <a class="btn btn-danger btn-sm d-none d-md-block" href="./Đăng tin mới.html">Đăng tin mới</a>
                            <!-- <div class="d-lg-none" style="width: 100%;"><a class="btn btn-danger btn-block mt-3" href="#">Đăng tin mới</a></div> -->
                        </div>


                    </div>

                    <div class="d-none d-md-block">
                        <div class="table-responsive">
                            <table class="table table_post_listing table-bordered _table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã tin</th>
                                        <th style="text-align: center; white-space: nowrap;">Tiêu đề</th>
                                        <th>Thời gian tạo</th>
                                        <th>Người tạo</th>
                                        <th style="white-space: nowrap;">Trạng thái duyệt</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $row)
                                    <form action="" method = "post">
                                    <tr>
                                        <td>{{$row->id}} </td>
                                        <td>
                                            <span class="badge badge-pill badge-warning">Phòng trọ</span>

                                            <a class="post_title" href="/blog/public/admin/duyetbaidang/{{$row->id}}" style="color: #055699;">{{$row->loaiphong}} </a>
                                        </td>
                                        <td>{{$row->thoigiandang}} </td>
                                        <td>
                                            <a href=""></a>
                                        </td>
                                        <td>
                                        <a href="/blog/public/admin/duyetbaidang/{{$row->id}}" style="color: #055699;">{{$row->duyetbaidang}} </a>
                                        </td>
                                    </tr>
                                    </from>
                                    @endforeach
                                    @foreach($data1 as $row1)
                                    <tr>
                                        <td>{{$row1->id}} </td>
                                        <td>
                                            <span class="badge badge-pill badge-warning">Phòng trọ</span>

                                            <a class="post_title" href="/blog/public/admin/duyetbaidang/{{$row1->id}}" style="color: #055699;">{{$row1->loaiphong}} </a>
                                        </td>
                                        <td>{{$row1->thoigiandang}} </td>
                                        <td>
                                            <a href=""> </a>
                                        </td>
                                        <td>
                                        <a  href="/blog/public/admin/duyetbaidang/{{$row1->id}}" style="color: #055699;">{{$row1->duyetbaidang}} </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    
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




