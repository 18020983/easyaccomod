<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bài đăng</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="mWwh8v9eglfZEl2J9MxfRbxbBudIbpk0LHmPMwN8">
    <meta name="google-site-verification" content="xf6mhPdjImSpRi1GVjV2_0m6mwdh5_YlaeCYurSeEVc">
    <!-- all css -->
    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/css/jquery-ui.min.css')}}">

    <link href="{{asset('asset/css/bootstrap-rating.css')}}" rel="stylesheet">

    <script type="text/javascript" src="{{asset('asset/javascipt/bootstrap-rating.js')}}"></script>

    <!-- <link media="all" type="text/css" rel="stylesheet" href="{{asset('')}}"> -->

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/css/bài đăng.css')}}">
    <link rel="stylesheet" href="./asset/css/comment.css">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/app.css')}}">
    <!-- <link rel="stylesheet" href="./asset/css/font-awesome.css"> -->
    <link rel="stylesheet" href="{{asset('asset/css/stylesheets.css')}}">
    <link rel="stylesheet" href="./asset/css/uikit.css">
    <link rel="stylesheet" type="text/css" property="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/reset.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/phongtro.dashboard.css')}}">
    <!-- javascipt -->
    <script src="{{asset('asset/javascipt/bootstrap.js')}}"></script>
    <script src="{{asset('asset/javascipt/defer_plus.js')}}"></script>
    <script src="{{asset('asset/javascipt/jquery.js')}}"></script>
    <script src="{{asset('asset/javascipt/jquery_002.js')}}"></script>
    <script src="{{asset('asset/javascipt/uikit.js')}}"></script>
    <script src="{{asset('asset/javascipt/uikit-icons.min.js')}}"></script>

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/css/jquery-ui.min.css')}}">

    <link href="{{asset('asset/css/bootstrap-rating.css')}}" rel="stylesheet">

    <script type="text/javascript" src="{{asset('asset/javascipt/bootstrap-rating.js')}}"></script>

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/css/slick.css')}}">

    <link media="all" type="text/css" rel="stylesheet" href="{{asset('asset/css/bài đăng.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/comment.css')}}">

    <!-- CSS -->
    <link rel="stylesheet" href="{{asset('asset/css/app.css')}}">

    <script type="text/javascript" src="{{asset('asset/javascipt/javascript')}}"></script>
    <script type="text/javascript">
        jQuery.noConflict(true);
    </script>



</head>

@extends('nguoithuephong.topheader')
@section('section')
    <!-- WRAPPER START -->
    <div class="wrapper">
        <!-- PRODUCT-AREA START -->
        <!-- Thanh header trên cùng dùng để đăng kí đăng nhập -->
        
        <!-- Thanh header thứ 2. Logo chỉnh sửa sau. Thanh menu chỉ để tượng chửng chưa dùng đc -->
        <div class="menuHeader uk-sticky" uk-sticky>
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent uk-navbar" uk-navbar="">
                    <div class="uk-navbar-left">
                        <a href="#my-id" class="uk-navbar-toggle menuHeader__navItem uk-hidden@m" uk-toggle="">
                            <div id="m_nav_menu" class="m_nav menu">
                                <span class="m_nav_ham_button_closed uk-icon-button" uk-icon="icon: menu; ratio: 1.5;" style="color: black;"></span>
                            </div>
                        </a>
                        <a href="http://ql.xephinh.xyz/" class="uk-navbar-item uk-padding-remove uk-logo">
                            <img src="{{asset('asset/image/EasyAccomod.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li>
                                <a href="/blog/public/nguoithuephong/home" style="font-size: small;">TRANG CHỦ</a>
                            </li>
                            <li>
                                <a href="#tracuu" style="font-size: small">TRA CỨU</a>
                            </li>
                            <li>
                                <a href="#" style="font-size: small;">DỊCH VỤ</a>
                                <div class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--oneMenu">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li><a href="">Cho thuê phòng trọ</a></li>
                                        <li><a href="">Cho thuê chung cư mini</a></li>
                                        <li><a href="">Cho thuê nhà nguyên căn</a></li>
                                        <li><a href="">Cho thuê chung cư nguyên căn</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="" style="font-size: small;">BẢNG GIÁ QUẢNG CÁO</a>
                            </li>
                            <li>
                                <a href="#" style="font-size: small;">TIN TỨC</a>
                                <div class="uk-navbar-dropdown uk-navbar-dropdown-width-3 menuHeader__navbarDropdown menuHeader__navbarDropdown--gridMenu">
                                    <div class="uk-navbar-dropdown-grid uk-child-width-1-3" uk-grid="">
                                        <div>
                                            <a href="#">
                                                <div class="menuHeader__navbarDropdown__title">TIN TỨC GIÁ NHÀ ĐẤT</div>
                                            </a>
                                            <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                                <li><a href="#">Kinh nghiệm mua nhà</a></li>
                                                <li><a href="#">Tư vấn mua nhà</a></li>
                                                <li><a href="#">Bảng giá nhà đất</a></li>
                                                <li><a href="#">Danh sách bán nhà đất</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <div class="menuHeader__navbarDropdown__title">TIN TỨC BÁN NHÀ</div>
                                            </a>
                                            <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                                <li><a href="#">Bảng giá nhà</a></li>
                                                <li><a href="#">Thủ tục mua nhà</a></li>
                                                <li><a href="#">Kinh nghiệm mua nhà</a></li>
                                                <li><a href="#">Danh sách nhà cần bán</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <div class="menuHeader__navbarDropdown__title">CẨM NANG CHUYỂN NHÀ</div>
                                            </a>
                                            <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                                <li><a href="#">Cẩm nang cho khách hàng mới</a></li>
                                                <li><a href="#">Tài liệu vận chuyển nhà</a></li>
                                                <li><a href="#">Hướng dẫn vận chuyển nhà</a></li>
                                                <li><a href="#">Bảng giá cước hôm nay</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <div class="menuHeader__navbarDropdown__title">TIN TỨC Ô TÔ</div>
                                            </a>
                                            <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                                <li><a href="#">Tư vấn ô tô</a></li>
                                                <li><a href="#">Kinh nghiệm ô tô</a></li>
                                                <li><a href="#">Danh sách hãng xe</a></li>
                                                <li><a href="#">Bảng giá ô tô</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <a href="#">
                                                <div class="menuHeader__navbarDropdown__title">BLOG EasyAccomod</div>
                                            </a>
                                            <ul class="uk-list menuHeader__navbarDropdown__list1" style="margin-top: 15px">
                                                <li><a href="#">Giới thiệu về chúng tôi</a></li>
                                                <li><a href="#">Thành viên HĐQT</a></li>
                                                <li><a href="#">Blog EasyAccomod</a></li>
                                                <li><a href="#">Khám phá</a></li>
                                                <li><a href="#">Hồ sơ năng lực</a></li>
                                            </ul>
                                        </div>
                                        <div>
                                            <div>
                                                <ul class="uk-list menuHeader__navbarDropdown__list1">
                                                    <li><a href="#">Bảng giá xăng dầu hôm nay</a></li>
                                                    <li><a href="#">Danh sách xe vận chuyển</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#" style="font-size: small;">LIÊN HỆ</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Khi thu nhỏ màn hình, sẽ hiện menu ẩn -->
        <div id="my-id" class="uk-offcanvas" uk-offcanvas="mode: reveal; overlay:true">
            <div class="uk-overflow-auto uk-offcanvas-bar uk-padding-remove uk-flex uk-flex-column">
                <div class="uk-flex-auto">
                    <div class="uk-padding-small uk-margin-remove">
                        <a href=""><img src="./asset/image/EasyAccomod-1.png" alt=""></a>
                    </div>

                    <ul class="uk-nav-default uk-nav uk-nav-parent-icon nav__menu" uk-nav>
                        <li class="nav__menu__item"><a href="./index.html">TRANG CHỦ</a></li>
                        <li class="nav__menu__item">
                            <a href="#" class="nav__menu__link">TRA CỨU NHANH</a>
                        </li>
                        <li class="uk-parent nav__menu__item">
                            <a href="#" class="nav__menu__link">DỊCH VỤ</a>
                            <ul class="uk-nav-sub" hidden="" style="padding-left: 20px;">
                                <li><a href="#" class="uk-text-small">Cho thuê phòng trọ</a></li>
                                <li><a href="#" class="uk-text-small">Cho thuê chung cư mini</a></li>
                                <li><a href="#" class="uk-text-small">Cho thuê nhà nguyên căn</a></li>
                                <li><a href="#" class="uk-text-small">Cho thuê chung cư nguyên căn</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent nav__menu__item">
                            <a href="#" class="nav__menu__link">TIN TỨC</a>
                            <ul class="uk-nav-sub" hidden="" style="padding-left: 20px;">
                                <li><a href="#" class="uk-text-small">Tin tức giá nhà đất</a></li>
                                <li><a href="#" class="uk-text-small">Tin tức bán nhà</a></li>
                                <li><a href="#" class="uk-text-small">Cẩm nang chuyển nhà</a></li>
                                <li><a href="#" class="uk-text-small">Tin tức ô tô</a></li>
                            </ul>
                        </li>
                        <li class="nav__menu__item">
                            <a href="#" class="nav__menu__link">BẢNG GIÁ QUẢNG CÁO</a>
                        </li>
                        <li class="nav__menu__item">
                            <a href="#" class="nav__menu__link">LIÊN HỆ</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="product-area single-pro-area pt-40 pb-80 product-style-2 bg-dark-white">
            <form action="" method = "post">
                @csrf
                <div class="container">
                    @foreach($data1 as $row)
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
                                                
                                                <div  style="float: right;margin: 10px; width: 30%; ">
                                                    <button class="btn btn-danger btn-block btn-buy-now" style="background-color: #F7931E;">Report</button> 
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
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="tab-content" style="margin-top: 30px;">
                            <div class="tab-pane active " id="description ">
                                <div class="pro-tab-info pro-description">
                                    <div class="pro-reviews">
                                        <div class="leave-review">
                                            <div class="cmt-list">
                                                <form action="">
                                                    <h3 class="new-comment">New comment</h3>
                                                    <div class="" style="float: right; margin-top: -30px; margin-right: 20px;">
                                                        <button class="btn btn-danger" style="background-color: #F7931E"> POST</button>
                                                    </div>
                                                    <div class="panel">
                                                        <div class="panel-body">
                                                            <textarea name = "new_comment" class="form-control" rows="2" placeholder="What are you thinking?"></textarea>
                                                            <div class="starrating risingstar d-flex justify-content-center flex-row-reverse" style="margin-top: 20px;">
                                                                <!-- <input type="radio" id="star5" name="rating" value="5" /><label for="star4" title="5 star"><span uk-icon="icon: star; ratio: 2"></span></label> -->
                                                                <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="5 star"><span uk-icon="icon: star; ratio: 2"></span></label>
                                                                <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="4 star"><span uk-icon="icon: star; ratio: 2"></span></label>
                                                                <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="3 star"><span uk-icon="icon: star; ratio: 2"></span></label>
                                                                <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="2 star"><span uk-icon="icon: star; ratio: 2"></span></label>
                                                                <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="1 star"><span uk-icon="icon: star; ratio: 2"></span></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                                <div class="cmt-top">
                                                    <strong>Bình luận</strong>
                                                </div>
                                                @foreach($data2 as $row)
                                                <div class="cmt-item">
                                                    <div class="cmt-avatar">
                                                        <img src="{{asset('asset/image/boy_1544603222.png')}}" class="cmt-img" alt="Nhận xét khách hàng Nga ngố">
                                                    </div>

                                                    <div class="cmt-content">
                                                        <div class="cmt-name">
                                                            <span class="usename">{{$row->name}} </span>
                                                        </div>
                                                        <div>
                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="svg-icon-star"><polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon></svg>
                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="svg-icon-star"><polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon></svg>
                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="svg-icon-star"><polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon></svg>
                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="svg-icon-star"><polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon></svg>
                                                            <svg enable-background="new 0 0 15 15" viewBox="0 0 15 15" x="0" y="0" class="svg-icon-star"><polygon points="7.5 .8 9.7 5.4 14.5 5.9 10.7 9.1 11.8 14.2 7.5 11.6 3.2 14.2 4.3 9.1 .5 5.9 5.3 5.4" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10"></polygon></svg>
                                                        </div>
                                                        <div class="cmt-question">
                                                            {{$row->comment}}
                                                        </div>
                                                        <div class="cmt-bottom">
                                                            2020-10-29 22:26
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    @endforeach
                </div>
            </form>
        </div>
        <!-- <footer>
            <div id="footer" uk-img=" " style="background-image: linear-gradient(45deg, #f4d65d 0%, #d8b265 80%)">
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
        </footer> -->
    </div>
    <!-- single-product-tab end -->
    </div>
    </div>
    <!-- PRODUCT-AREA END -->
    </div>

    <!-- all js here -->
    <!-- all js -->


    <script type="text/javascript ">
        $(document).ready(function() {
            $(".list-unstyled ").mCustomScrollbar({
                theme: "minimal "
            });

            $('#dismiss, .m-overlay').on('click', function(e) {
                $('#m-sidebar').removeClass('active');
                $('.m-overlay').removeClass('active');
                e.preventDefault();
            });

            $('#sidebarCollapse').on('click', function(e) {
                $('#m-sidebar').addClass('active');
                $('.m-overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
                e.preventDefault();
            });
        });
    </script>

@stop()





