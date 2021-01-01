<head>
    <title>Đăng tin</title>
</head>
@extends('chutro.webpage')
@section('section')
                <main role="main" class="ml-sm-auto col-lg-10">

                    <div class="user_quick_info js-mobile-user-quick-info">
                        <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>trinhthikim</strong>. Mã tài khoản: <strong>101028</strong></p>
                        <p style="margin-bottom: 0;">Số dư TK của bạn là: <strong>0 đ</strong></p>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/blog/public/chutro/home">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Đăng tin mới</li>
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h1">Đăng tin mới</h1>
                    </div>


                    <form method = "POST" action = "" id="form_dangtin" class="form-horizontal js-form-submit-data js-frm-manage-post" novalidate="novalidate" enctype="multipart/form-data">
                        @csrf
                        <!-- <input type="hidden" name = "_token" value = {{csrf_token()}}> -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h3>Địa chỉ cho thuê</h3>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label name = "thanhpho" for="thanhpho" class="col-form-label">Tỉnh/Thành phố</label>
                                            <select id="province_id" name="province_id" class="form-control js-select-tinhthanhpho select2-hidden-accessible tinh" required="" data-msg-required="Chưa chọn Tỉnh/TP" tabindex="-1" aria-hidden="true">
                                                <option value="Chọn Tỉnh/TP">-- Chọn Tỉnh/TP --</option>
                                                @foreach($tinhs as $tinh)  
                                                <option value="{{$tinh->matp}}">{{$tinh->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm ">
                                        <div class="form-group" id = "context1">
                                            <label name = "quan" class="col-form-label" for="quan">Quận/Huyện</label>
                                            <select name="district_id" id="district_id" class="form-control js-select-quanhuyen select2-hidden-accessible huyen" required="" data-msg-required="Chưa chọn Quận/Huyện" tabindex="-1" aria-hidden="true">
                                                <option value="">-- Chọn Quận/Huyện --</option>
                                                
                                            </select>
                                        </div>
                
                
                                    </div>
                                    <script language="javascript">
                                        document.getElementById("context1").style.display = 'block';
                                        document.getElementById("context2").style.display = 'none';
                                        document.getElementById("context3").style.display = 'none';
                                        document.getElementById("context4").style.display = 'none';
                                            function validateSelectBox(obj)
                                            {
                                                // Lấy danh sách các options
                                                var value = obj.value;
                                                
                                                if(value === 'Hà Nội'){
                                                    
                                                    document.getElementById("context1").style.display = 'none';
                                                    document.getElementById("context2").style.display = 'block';
                                                    document.getElementById("context3").style.display = 'none';
                                                    document.getElementById("context4").style.display = 'none';
                                                    
                                                }
                                                if(value === 'Hồ Chí Minh')
                                                {
                                                    document.getElementById("context1").style.display = 'none';
                                                    document.getElementById("context2").style.display = 'none';
                                                    document.getElementById("context3").style.display = 'block';
                                                    document.getElementById("context4").style.display = 'none';
                                                }
                                                if(value === 'Đà Nẵng')
                                                {
                                                    document.getElementById("context1").style.display = 'none';
                                                    document.getElementById("context2").style.display = 'none';
                                                    document.getElementById("context3").style.display = 'none';
                                                    document.getElementById("context4").style.display = 'block';
                                                }
                                                if(value === 'Chọn Tỉnh/TP')
                                                {
                                                    document.getElementById("context1").style.display = 'block';
                                                    document.getElementById("context2").style.display = 'none';
                                                    document.getElementById("context3").style.display = 'none';
                                                    document.getElementById("context4").style.display = 'none';
                                                }
                                                
                                            }
                                    </script>
                                    <div class="col-sm">
                                        <div class="form-group">
                                            <label for="street_number" class="col-form-label">Số nhà</label>
                                            <input type="text" class="form-control js-input-street-number" name="street_number" id="street_number" value="">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group row mt-5">
                                    <div class="col-md-12">
                                        <h3>Thông tin mô tả</h3>
                                    </div>
                                </div>

                                <div class="form-group row mt-3">

                                    <div class="col-md-6">
                                        <label for="post_cat" class="col-md-12 col-form-label">Loại chuyên mục</label>
                                        <select class="form-control" id="post_cat" name="loai_chuyen_muc" required="" data-msg-required="Chưa chọn loại chuyên mục">
                                            <option value="Chọn loại chuyên mục">-- Chọn loại chuyên mục --</option>
                                            <option value="Phòng trọ">Cho thuê phòng trọ</option>
                                            <option value="Chung cư mini">Cho thuê chung cư mini</option>
                                            <option value="Nhà nguyên căn">Cho thuê nhà nguyên căn</option>
                                            <option value="Chung cư nguyên căn">Cho thuê chung cư nguyên căn</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="post_title" class="col-md-12 col-form-label">Tiêu đề</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control" name="tieu_de" id="post_title" value="" minlength="30" maxlength="120" required="" data-msg-required="Tiêu đề không được để trống" data-msg-minlength="Tiêu đề quá ngắn" data-msg-maxlength="Tiêu đề quá dài">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="post_content" class="col-md-12 col-form-label">Nội dung mô tả</label>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="noi_dung" id="post_content" rows="10" required="" minlength="100" data-msg-required="Bạn chưa nhập nội dung" data-msg-minlength="Nội dung tối thiểu 100 kí tự"></textarea>
                                    </div>
                                </div>

                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label for="phone" class="col-md-12 col-form-label">Thông tin liên hệ</label>
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <input id="phone" type="number" name="phone" class="form-control" placeholder="số điện thoại" required="" data-msg-required="Số điện thoại">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="giachothue" class="col-md-12 col-form-label">Giá cho thuê</label>
                                            <div class="col-md-12">
                                                <div class="input-group">
                                                    <input id="giachothue" name="gia" pattern="[0-9.]+" type="text" class="form-control" required="" data-msg-required="Bạn chưa nhập giá phòng" data-msg-min="Giá phòng chưa đúng">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">đồng</span>
                                                    </div>
                                                </div>
                                                <small class="form-text text-muted">Nhập đầy đủ số, ví dụ 1 triệu thì nhập là 1000000</small>
                                            </div>
                                            <label for="text_giachothue" id="text_giachothue" class="col-sm-12 control-label js-number-text" style="color: red;"></label>
                                        </div>
                                        <div class="form-group row">
                                            <label for="post_acreage" class="col-md-12 col-form-label">Diện tích</label>
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <input id="post_acreage" type="number" attern="[0-9.]+" name="dien_tich" max="1000" class="form-control" required="" data-msg-required="Bạn chưa nhập diện tích">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text">m<sup>2</sup></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="doi_tuong" class="col-md-12 col-form-label">Đối tượng cho thuê</label>
                                            <div class="col-md-12">
                                                <div class="input-group mb-3">
                                                    <select class="form-control" id="post_cat" name="doi_tuong">
                                                        <option value="Tất cả">Tất cả</option>
                                                        <option value="Nam">Nam</option>
                                                        <option value="Nữ">Nữ</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card" style="background-color: #f1f1f1; margin-top: 30px;">
                                            <div class="card-body">
                                                <h5 class="card-title">Điều kiện cơ sở vật chất</h5>
                                                
                                                <div class="uk-margin-small">
                                                    <label for="" style="float: left; width: 80px;">Phòng tắm:</label>
                                                    <label><input value = "khép kín" class="uk-radio" type="radio" name="radio1" style="width: 10px;height: 10px; margin-left: 20px;"> khép kín</label>
                                                    <label><input class="uk-radio" type="radio" name="radio1" style="width: 10px;height: 10px; margin-left: 20px;" value = "chung" > chung</label>
                                                    <br>
                                                    <label><input class="uk-radio" type="radio" name="radio2" style="margin-left: 100px;width: 10px;height: 10px;" value = "có nóng lạnh"> có nóng lạnh</label>
                                                    <label><input class="uk-radio" type="radio" name="radio2" style="width: 10px;height: 10px; margin-left: 20px;" value = "không có nóng lạnh"> không có nóng lạnh</label>
                                                </div>
                                                <div class="uk-margin-small">
                                                    <label for="" style="float: left; width: 80px;">Phòng bếp:</label>
                                                    <label><input class="uk-radio" type="radio" name="radio3" style="width: 10px;height: 10px; margin-left: 20px;" value = "có khu bếp riêng"> có khu bếp riêng</label>
                                                    <label><input class="uk-radio" type="radio" name="radio3" style="width: 10px;height: 10px; margin-left: 20px;" value = "có khu bếp chung"> có khu bếp chung</label>
                                                    <label><input class="uk-radio" type="radio" name="radio3" style="width: 10px;height: 10px; margin-left: 100px;" value = "không được nấu ăn"> không được nấu ăn</label>
                                                </div>
                                                <div class="uk-margin-small">
                                                    <label for="" style="float: left; width: 80px;">Điều hòa:</label>
                                                    <label><input class="uk-radio" type="radio" name="radio4" style="width: 10px;height: 10px; margin-left: 20px;" value = "có"> có</label>
                                                    <label><input class="uk-radio" type="radio" name="radio4" style="width: 10px;height: 10px; margin-left: 20px;" value = "không"> không</label>
                                                </div>
                                                <div class="uk-margin-small">
                                                    <label for="" style="float: left; width: 80px;">Ban công:</label>
                                                    <label><input class="uk-radio" type="radio" name="radio5" style="width: 10px;height: 10px; margin-left: 20px;" value = "có"> có</label>
                                                    <label><input class="uk-radio" type="radio" name="radio5" style="width: 10px;height: 10px; margin-left: 20px;" value = "không"> không</label>
                                                </div>
                                                <div class="uk-margin-small">
                                                    <label for="" style="float: left; width: 80px;">Chung chủ:</label>
                                                    <label><input class="uk-radio" type="radio" name="radio6" style="width: 10px;height: 10px; margin-left: 20px;" value = "có"> có</label>
                                                    <label><input class="uk-radio" type="radio" name="radio6" style="width: 10px;height: 10px; margin-left: 20px;" value = "không"> không</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <div class="col-md-12">
                                        <h3>Hình ảnh</h3>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <p>Cập nhật hình ảnh rõ ràng sẽ cho thuê nhanh hơn</p>

                                        <div class="form-group">
                                            <div class="js-upload uk-placeholder uk-text-center browse_photos js-dropzone dz-clickable">
                                                <div uk-form-custom>
                                                    <input type="file" multiple name = "anh1">
                                                    <span class="uk-link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload" style="width: 50px; height: 50px; display: block; margin: 0 auto; pointer-events: none;">
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                                        <span class="js-btn-chon-anh">Thêm Ảnh</span>

                                                </div>
                                                
                                            </div>
                                            <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                            
                                        </div>



                                        <div class="form-group">
                                            <div class="js-upload uk-placeholder uk-text-center browse_photos js-dropzone dz-clickable">
                                                <div uk-form-custom>
                                                    <input type="file" multiple name = "anh2">
                                                    <span class="uk-link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload" style="width: 50px; height: 50px; display: block; margin: 0 auto; pointer-events: none;">
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                                        <span class="js-btn-chon-anh">Thêm Ảnh</span>

                                                </div>
                                                
                                            </div>
                                            <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                            
                                        </div>


                                        <div class="form-group">
                                            <div class="js-upload uk-placeholder uk-text-center browse_photos js-dropzone dz-clickable">
                                                <div uk-form-custom>
                                                    <input type="file" multiple name = "anh3">
                                                    <span class="uk-link">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload" style="width: 50px; height: 50px; display: block; margin: 0 auto; pointer-events: none;">
                                                            <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                                                        <span class="js-btn-chon-anh">Thêm Ảnh</span>

                                                </div>
                                                
                                            </div>
                                            <progress id="js-progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                                            
                                        </div>
                                        <div class="list_photos row dropzone-previews" id="list-photos-dropzone-previews"></div>
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <div class="col-md-12">
                                        <h3>Chọn hình thức đăng tin</h3>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6 js-group-package-type">
                                        <div class="form-group">
                                            <label for="post_cat" class="col-form-label">Gói thời gian</label>
                                            <select class="form-control" id="post_cat" name="package_type" onchange="resetHuyen1(this)">
                                                <option value="Đăng theo ngày">Đăng theo ngày</option>
                                                <option value="Đăng theo tuần">Đăng theo tuần</option>
                                                <option value="Đăng theo tháng">Đăng theo tháng</option>
                                                
                            
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 js-group-type-date">
                                        <div class="form-group">
                                            <div class="js-package-type js-package-type-day" id="Đăng theo ngày" style="display: block;">
                                                <label class="col-form-label" for="formGroupInputSmall">Số ngày</label>
                                                <select class="form-control" name="total">
                                                    <option value="1 ngày">1 ngày</option>
                                                    <option value="2 ngày">2 ngày</option>
                                                    <option value="3 ngày">3 ngày</option>
                                                    <option value="4 ngày">4 ngày</option>
                                                    <option value="5 ngày">5 ngày</option>
                                                    <option value="6 ngày">6 ngày</option>
                                                    <option value="7 ngày">7 ngày</option>
                                                    <option value="8 ngày">8 ngày</option>
                                                    <option value="9 ngày">9 ngày</option>
                                                    <option value="10 ngày">10 ngày</option>
                                                </select>
                                            </div>
                                            <div class="js-package-type js-package-type-week" id="Đăng theo tuần" style="display: none;">
                                                <label class="col-form-label" for="formGroupInputSmall">Số tuần</label>
                                                <select class="form-control" name="total">
                                                    <option value="1 tuần">1 tuần</option>
                                                    <option value="2 tuần">2 tuần</option>
                                                    <option value="3 tuần">3 tuần</option>
                                                    <option value="4 tuần">4 tuần</option>
                                                    <option value="5 tuần">5 tuần</option>
                                                    <option value="6 tuần">6 tuần</option>
                                                    <option value="7 tuần">7 tuần</option>
                                                    <option value="8 tuần">8 tuần</option>
                                                    <option value="9 tuần">9 tuần</option>
                                                    <option value="10 tuần">10 tuần</option>
                                                </select>
                                            </div>
                                            <div class="form-group js-package-type js-package-type-month" id="Đăng theo tháng" style="display: none;">
                                                <label class="col-form-label" for="formGroupInputSmall">Số tháng</label>
                                                <select class="form-control" name="total">
                                                    <option value="1 tháng">1 tháng</option>
                                                    <option value="2 tháng">2 tháng</option>
                                                    <option value="3 tháng">3 tháng</option>
                                                    <option value="4 tháng">4 tháng</option>
                                                    <option value="5 tháng">5 tháng</option>
                                                    <option value="6 tháng">6 tháng</option>
                                                    <option value="7 tháng">7 tháng</option>
                                                    <option value="8 tháng">8 tháng</option>
                                                    <option value="9 tháng">9 tháng</option>
                                                    <option value="10 tháng">10 tháng</option>
                                                    <option value="11 tháng">11 tháng</option>
                                                    <option value="12 tháng">12 tháng</option>
                                                </select>
                                            </div>
                                            <script type="text/javascript">
                                                function validateSelectBox(obj) {
                                                    let options = obj.value;
                                                }
                                            </script>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mt-5">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-success mb-5 btn-lg btn-block disabled">
                                            Hoàn tất &amp; Thanh toán 
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-4">
                                <div class="card" style="background-color: #f1f1f1;">
                                    <div class="card-body">
                                        <h5 class="card-title">Thông tin thanh toán</h5>
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Bạn đang có:</td>
                                                    <td>0đ</td>
                                                </tr>
                                                <tr>
                                                    <td>Loại tin:</td>
                                                    <td class="js-package-title">Tin thường</td>
                                                </tr>
                                                <tr>
                                                    <td>Gói thời gian:</td>
                                                    <td class="js-time-type">Đăng theo ngày</td>
                                                </tr>
                                                <tr>
                                                    <td>Đơn giá:</td>
                                                    <td class="js-package-price">2.000/ngày</td>
                                                </tr>
                                                <tr class="js-use-label hidden">
                                                    <td>Gắn nhãn:</td>
                                                    <td>2.000 đ/ngày</td>
                                                </tr>
                                                <tr>
                                                    <td>Số ngày:</td>
                                                    <td class="js-package-days">5</td>
                                                </tr>
                                                <tr>
                                                    <td>Ngày hết hạn</td>
                                                    <td class="js-package-deadline">17:29, 1/12/2020</td>
                                                </tr>
                                                <tr>
                                                    <td style="vertical-align: middle;">Thành tiền:</td>
                                                    <td><span style="font-size: 30px; font-weight: bold; color: #F90;" class="js-package-grand-total">10.000đ</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> -->
                    </form>
                    <input type="hidden" id="action" name="action" value="add_new_post">
                    <input type="hidden" id="map_lat" name="map_lat" value="">
                    <input type="hidden" id="map_long" name="map_long" value="">
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
                                        <p>Địa chỉ: LE-4.07, Toà nhà Lexington Residence, Số 67 Mai Chí Thọ, Phường An Phú, Quận 2, Tp. Hồ Chí Minh.</p>
                                        <p>Giấy phép đăng ký kinh doanh số 0313588502 do Sở kế hoạch và Đầu tư thành phố Hồ Chí Minh cấp ngày 30 tháng 3 năm 2017.</p>
                                        <center style="display: flex; align-items: center; justify-content: center;">
                                            <a class="bds_icon dkbct" style="display: inline-block; margin: 0 5px;" rel="nofollow" target="_blank" href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=43297"></a>
                                            <a style="display: inline-block; margin: 0 5px;" rel="nofollow" target="_blank" href="https://www.dmca.com/Protection/Status.aspx?ID=92715b33-c457-422d-95c4-a5453e80e9bf&amp;refurl=https://phongtro123.com/" title="DMCA.com Protection Status" class="dmca-badge"><img src="./Đăng tin mới_files/dmca-badge-w250-2x1-04.png" width="100" alt="DMCA.com Protection Status"></a>
                                            <script async="" defer="" src="./Đăng tin mới_files/DMCABadgeHelper.min.js.download"></script>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </main>

<script>
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.tinh').change(function(){
            var name = $('.tinh').val(); 
            // alert(name); 
            
            $.ajax({
                type: "GET",
                url: '../tinhhuyen',
                data: {name: name},
                
                //  dataType: 'json',
                success: function (data) {
                    let huyen = '';
                    $.each(data.data, function(index, value){
                        huyen += '<option value="' + value.maqh + '">' + value.name + '</option>';
                    });
                   
                    $('.huyen').html('').append(huyen);
                    
                },
                error: function (data) {
                    console.log(data);
                }
            });
            // $.post('chutro/tinhhuyen', {name: name}, function(data){
            //     $('.huyen').html(data);
            // });
        });
    });
</script>

@stop()