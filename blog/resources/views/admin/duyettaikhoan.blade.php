<head>
    <title>Duyệt tài khoản</title>
</head>
@extends('admin.webpage')
@section('section')
<main role="main" class="ml-sm-auto col-lg-10">
    <div class="user_quick_info js-mobile-user-quick-info">
        <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>trinhthikim</strong>. Mã tài khoản:
            <strong>101028</strong></p>
    </div>
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <h1 class="h2">Thông tin chủ trọ</h1>
    </div>

    <form class="js-form-submit-data" action="" data-action-url="#" method="POST" novalidate="novalidate">
        @csrf
        @foreach($data as $row)
        <div class="form-group row mt-5">
            <label for="user_id" class="col-md-2 offset-md-2 col-form-label">Mã thành viên</label>
            <div class="col-md-6">
                <input type="text" readonly="" class="form-control disable" id="user_id" value={{$row->id}}>
            </div>
        </div>
        <div class="form-group row">
            <label for="user_email" class="col-md-2 offset-md-2 col-form-label">Họ và tên</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="user_email" name="email" value={{$row->hoten}} >
            </div>
        </div>
        <div class="form-group row">
            <label for="user_email" class="col-md-2 offset-md-2 col-form-label">Số điện thoại</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="user_email" name="email" value={{$row->sodienthoai}}
                >
            </div>
        </div>
        <div class="form-group row">
            <label for="user_email" class="col-md-2 offset-md-2 col-form-label">Email</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="user_email" name="email" value={{$row->email}} >
            </div>
        </div>
        <div class="form-group row">
            <label for="user_email" class="col-md-2 offset-md-2 col-form-label">Căn cước công dân</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="user_email" name="email" value={{$row->socmnd}} >
            </div>
        </div>
        <div class="form-group row">
            <label for="user_email" class="col-md-2 offset-md-2 col-form-label">Địa chỉ thường chú</label>
            <div class="col-md-6">
                <input type="text" class="form-control" id="user_email" name="email" value = {{$row->diachi}} >
            </div>
        </div>

        <div class="form-group row">
            <label class="col-md-2 offset-md-2 col-form-label">Trạng thái duyệt bài</label>
            <div class="col-md-6">
                <select name = "duyetbai" class="form-control" id="post_cat" name="duyetbai" required="" data-msg-required="Chưa chọn loại chuyên mục">
                    <option value="Trạng thái duyệt bài">Trạng thái duyệt bài</option>
                    <option value="Duyệt bài">Duyệt bài</option>
                    <option value="Từ chối">Từ chối</option>
                </select>
            </div>
        </div>
        <div style="float: right;margin: 10px; width: 20%; ">
            <button class="btn btn-danger btn-block btn-buy-now" style="background-color: #F7931E;">Lưu</button>
        </div>
        <input type="hidden" name="user_id" value="101028">
        @endforeach
    </form>



    <footer>
        <div id="footer">
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
                                    src="./Sửa thông tin cá nhân_files/dmca-badge-w250-2x1-04.png" width="100"
                                    alt="DMCA.com Protection Status"></a>
                            <script async="" defer=""
                                src="./Sửa thông tin cá nhân_files/DMCABadgeHelper.min.js.download"></script>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
@stop()