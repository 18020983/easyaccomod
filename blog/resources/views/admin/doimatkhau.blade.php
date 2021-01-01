<head>
    <title>Đổi mật khẩu</title>
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
                            <li class="breadcrumb-item active" aria-current="page">Đổi mật khẩu</li>
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Đổi mật khẩu</h1>
                    </div>

                    <form class="js-form-submit-data" action="" data-action-url="" method="POST" novalidate="novalidate">
                        @csrf
                        <div class="form-group row mt-5">
                            <label for="user_password1" class="col-md-2 offset-md-2 col-form-label">Mật khẩu cũ</label>
                            <div class="col-md-6">
                                <input type="password" name="old_password" class="form-control" id="old_password" value="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="user_password2" class="col-md-2 offset-md-2 col-form-label">Mật khẩu mới</label>
                            <div class="col-md-6">
                                <input type="password" name="new_password" class="form-control" id="password" value="">
                            </div>
                        </div>
                        <div class="form-group row mt-5">
                            <label for="" class="col-md-2 col-form-label"></label>
                            <div class="col-md-8">
                                <button type="submit" class="btn btn-primary mb-2 btn-block">Cập nhật</button>
                            </div>
                        </div>
                    </form>

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