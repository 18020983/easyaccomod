<head>
    <title>Duyệt bài đăng</title>
</head>

@extends('admin.webpage')
@section('section')

<main role="main" class="ml-sm-auto col-lg-10">

    <!-- <div class="user_quick_info js-mobile-user-quick-info">
        <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>trinhthikim</strong>. Mã tài khoản:
            <strong>101028</strong></p>
    </div> -->


    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="./index.html">Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="./index.html">Quản lý bài đăng</a></li>
            <li class="breadcrumb-item active" aria-current="page">Duyệt bài đăng</li>
        </ol>
    </nav>
    


    <div class="product-area single-pro-area pt-40 pb-80 product-style-2 bg-dark-white">
        <form action="" method = "post">
            @csrf
            <div class="container">
                @foreach($data as $row)
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <!-- Single-product end -->
                        <div class="row shop-list single-pro-info" style="margin-right: 3px;margin-left: 3px;">
                            <!-- Single-product start -->
                            <div class="single-product clearfix">
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <div class="single-pro-slider single-big-photo">
                                            <div class="view-lightbox slider-for slick-initialized slick-slider">
                                                <div aria-live="polite" class="slick-list draggable">
                                                    <div class="slick-track" role="listbox" style="opacity: 1; width: 450px;">
                                                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="min-height: 250; max-height: 500; animation: push">

                                                            <ul class="uk-slideshow-items">
                                                                <li>
                                                                    <img src="{{ asset('anhphongtro/'.$row->anh1) }}" alt="" uk-cover>
                                                                </li>
                                                                <li>
                                                                    <img src="{{ asset('anhphongtro/'.$row->anh2) }}" alt="" uk-cover>
                                                                </li>
                                                                <li>
                                                                    <img src="{{ asset('anhphongtro/'.$row->anh3) }}" alt="" uk-cover>
                                                                </li>
                                                            </ul>

                                                            <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                                            <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <div class="product-info">
                                            <div class="fix">
                                                <h2>{{$row->loaiphong}}</h2>
                                            </div>
                                            <i>
                                            {{$row->view_count}} lượt xem
                                            </i>
                                            <div class="fix mb-10">
                                                Giá cho thuê:
                                                <span class="pro-price" data-value="1200000" style="color: #ecb953;">
                                                    {{$row->giaca}}
                                                    <!-- <span class="lb-small-price">( 1.500.000 Đ )</span> -->
                                                </span>
                                            </div>
                                            <div class="fix mb-10">
                                                Tình trạng: <b>{{$row->trangthaiphong}} </b> <span style="padding-left: 6px; color: #d8b265"></span>
                                            </div>
                                            <div class="product-description">
                                                <p>
                                                    {{$row->mota}}
                                                </p>
                                            </div>
                                            <!-- policy start -->
                                            <div style="padding-top: 14px;">
                                                <div> Vị trí trung tâm Tân Bình, ngay Etown Cộng Hòa thuận tiện đi lại các quận trung tâm. 622/10 Cộng Hòa, P.13, Tân Bình.</div>
                                                <div class="" style="padding-top: 10px;">
                                                    Nhanh tay liên hệ để chọn được phòng đẹp và giá ưu đãi tốt .
                                                </div>
                                            </div>
                                            <!-- policy end -->
                                            <div class="col-md-6">
                                                <label name = "duyetbai" for="post_cat" class="col-md-12 col-form-label" style="">Trạng thái duyệt bài</label>
                                                <select class="form-control" id="post_cat" name="duyetbai" required="" data-msg-required="Chưa chọn loại chuyên mục">
                                                    <option value="Trạng thái duyệt bài">Trạng thái duyệt bài</option>
                                                    <option value="Duyệt bài">Duyệt bài</option>
                                                    <option value="Từ chối">Từ chối</option>
                                                </select>
                                            </div>
                                            <div  style="float: right;margin: 10px; width: 30%; ">
                                                <button class="btn btn-danger btn-block btn-buy-now" style="background-color: #F7931E;">Lưu</button> 
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Hết không sửa -->
                    <!-- single-product-tab start -->
                    <div class="col-xs-12 col-md-4">
                        <div class="tab-content ">
                            <div class="tab-pane active " id="description ">
                                <div class="pro-tab-info pro-description">
                                    <h3 class="tab-title title-border mb-30 ">Điều kiện vật chất</h3>
                                    <div class="panel-policy">
                                        <div class="color-filter single-pro-color mb-10 clearfix">
                                            <span href="" uk-icon="icon: check; ratio: 0.9" style="margin-right: 15px;"></span>Phòng tắm: {{$row->phongtam}}
                                        </div>
                                        <div class="color-filter single-pro-color mb-10 clearfix">
                                            <span href="" uk-icon="icon: check; ratio: 0.9" style="margin-right: 15px;"></span>Phòng bếp {{$row->phongbep}}
                                        </div>
                                        <div class="color-filter single-pro-color mb-10 clearfix">
                                            <span href="" uk-icon="icon: check; ratio: 0.9" style="margin-right: 15px;"></span>Điều hòa: {{$row->dieuhoa}}
                                        </div>
                                        <div class="color-filter single-pro-color mb-10 clearfix">
                                            <span href="" uk-icon="icon: check; ratio: 0.9" style="margin-right: 15px;"></span>Ban công: {{$row->bancong}}
                                        </div>
                                        <div class="color-filter single-pro-color mb-10 clearfix">
                                            <span href="" uk-icon="icon: check; ratio: 0.9" style="margin-right: 15px;"></span>Chung chủ: {{$row->chungchu}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-8">
                        <!-- Tab panes -->
                        <div class="tab-content ">
                            <div class="tab-pane active " id="description ">
                                <div class="pro-tab-info pro-description">
                                    <h3 class="tab-title title-border mb-30 ">Thông tin chi tiết</h3>
                                    <table class="table table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="name">Địa chỉ</td>
                                                <td colspan="3">{{$row->diachi}}</td>
                                            </tr>
                                            <tr>
                                                <td class="name">Mã tin</td>
                                                <td>{{$row->id}}</td>
                                                <td class="name">Loại tin:</td>
                                                <td>{{$row->loaiphong}}</td>
                                            </tr>
                                            <tr>
                                                <td class="name">Đối tượng cho thuê:</td>
                                                <td>{{$row->doituongchothue}} </td>
                                                <td class="name">Điện thoại:</td>
                                                <td><a href="tel:0396281291" class="_js-get-phone" data-phone="0396281291"><span style="color: #4cae4c; font-weight: bold;font-size: 13px;">{{$row->thongtinlienhe}} </span></a></td>
                                            </tr>
                                            <tr>
                                                <td class="name">Ngày cập nhật:</td>
                                                <td>{{$row->thoigiandang}} </td>
                                                <td class="name">Diện tích:</td>
                                                <td><span style="color: #ecb953; font-weight: bold;">{{$row->dientich}} </span></td>
                                            </tr>
                                            <tr>
                                                <td class="name">Ngày hết hạn:</td>
                                                <td>{{$row->handangbai}} </td>
                                                <td class="name">Giá cho thuê:</td>
                                                <!-- <td><span class="price" style="color: #E74C3C; font-weight: bold;">3 triệu/tháng</span></td> -->
                                                <td><span style="color: #ecb953; font-weight: bold;">{{$row->giaca}} Đ</span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </form>
    </div>



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