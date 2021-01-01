<head>
    <title>Quản lý tài khoản</title>
</head>

@extends('admin.webpage')
@section('section')
                <main role="main" class="ml-sm-auto col-lg-10">

                    <div class="user_quick_info js-mobile-user-quick-info">
                        <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>trinhthikim</strong>. Mã tài khoản: <strong>101028</strong></p>
                    </div>


                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./index.html">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Quản lý tài khoản chủ trọ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách tài khoản</li>
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Quản lý tài khoản chủ trọ</h1>

                        <div class="btn-toolbar mb-2 mb-md-0">
                            <a class="btn btn-danger btn-sm d-none d-md-block" href="" uk-toggle>Thêm tài khoản</a>
                            <div id="themtaikhoan" uk-modal>
                                <div class="uk-modal-dialog uk-margin-auto-vertical">
                                    <button class="uk-modal-close-default" type="button" uk-close></button>
                                    <div class="uk-modal-body">
                                        <h4>Thêm tài khoản mới</h4>
                                        <div class="uk-width-1-1 uk-form-custom" uk-form-custom="target: &gt; * &gt; span:first-child">
                                            <form>
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Mật khẩu</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Nhập lại mật khẩu</label>
                                                    <input type="password" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Họ tên</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Số điện thoại</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Số căn cước công dân</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label>Địa chỉ thường chú</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="uk-modal-footer">
                                        <div class="uk-text-right">
                                            <button class="uk-button uk-button-default uk-modal-close" type="button">Hủy bỏ</button>
                                            <button class="uk-button uk-button-primary" type="button">Lưu</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="d-none d-md-block">
                        <div class="table-responsive">
                            <table class="table table_post_listing table-bordered _table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã tài khoản</th>
                                        <th>Username</th>
                                        <th>Tình trạng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $row)
                                    <tr>
                                        <td>{{$row->id}} </td>
                                        <td>
                                            <a class="post_title" href="/blog/public/admin/duyettaikhoan/{{$row->id}}" style="color: #055699;">{{$row->name}} </a> 
                                        </td>
                                        <td>
                                            <a href="/blog/public/admin/duyetbaidang/{{$row->id}}" style="color: #055699;">{{$row->duyettaikhoan}} </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @foreach($data1 as $row1)
                                    <tr>
                                        <td>{{$row1->id}}</td>
                                        <td>
                                            <a class="post_title" href="/blog/public/admin/duyettaikhoan/{{$row1->id}}" style="color: #055699;">{{$row1->name}} </a>
                                        </td>
                                        <td>
                                        <a href="/blog/public/admin/duyetbaidang/{{$row1->id}}" style="color: #055699;">{{$row1->duyettaikhoan}} </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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
