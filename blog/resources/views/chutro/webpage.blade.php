<!-- uikit Description list -->

<!DOCTYPE html>
<!-- saved from url=(0045)https://phongtro123.com/quan-ly/tin-dang.html -->
<html lang="en">

<head>
    <title>Thông báo</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta content="INDEX,FOLLOW" name="robots">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS -->

    <link rel="stylesheet" href="{{asset('asset/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/stylesheets.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/uikit.css')}}">
    <link rel="stylesheet" type="text/css" property="stylesheet" href="{{asset('asset/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/phongtro.dashboard.responsive.css')}}">
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
    <script type="text/javascript" src="{{asset('asset/javascipt/javascript')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <script type="text/javascript">
        jQuery.noConflict(true);
    </script>

</head>

<body class="dashboard loaded ready">
    <div id="webpage">
        <!-- Thanh header thứ 2. Logo chỉnh sửa sau. Thanh menu chỉ để tượng chửng chưa dùng đc -->
        <div class="menuHeader uk-sticky" uk-sticky>
            <div class="topHeader">
                <div class="uk-container uk-padding-remove">
                    <nav class="uk-navbar-container uk-navbar-transparent uk-navbar" uk-navbar>
                        <div class="uk-navbar-right uk-padding-remove">
                            <div class="uk-navbar-item topHeader__item">
                                <form action="" method="post">
                                    <div class="uk-child-width-auto uk-grid-5 uk-grid" uk-grid="">
                                        <button class="uk-button uk-button-default uk-form-small topHeader__item__btn1">
                                                <a href="../home#tracuu">Tra cứu</a>
                                            </button>
                                    </div>
                                </form>
                            </div>
                            <div class="uk-navbar-item topHeader__item topHeader__item--loginBox">
                                <span uk-icon="icon:user; ratio: 0.7" class="topHeader__item__iconPhone uk-icon" style="padding-right: 5px;"></span>
                                <span class="uk-text-middle">
                                    <a href="thongtincanhan">{{Auth::user()->name}} </a>/
                                    <a href="/blog/public/logout">Đăng xuất </a>
                                </span>
                            </div>
                        </div>
                    </nav>
                </div>
            </div> 
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent uk-navbar" uk-navbar="">
                    <div class="uk-navbar-left">
                        <a href="#my-id" class="uk-navbar-toggle menuHeader__navItem uk-hidden@m" uk-toggle="">
                            <div id="m_nav_menu" class="m_nav menu">
                                <span class="m_nav_ham_button_closed uk-icon-button" uk-icon="icon: menu; ratio: 1.5;" style="color: black;"></span>
                            </div>
                        </a>
                        <a href="./index.html" class="uk-navbar-item uk-padding-remove uk-logo">
                            <img src="{{asset('asset/image/EasyAccomod.png')}}" alt="logo">
                        </a>
                    </div>
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li>
                                <a href="../home" style="font-size: small;">TRANG CHỦ</a>
                            </li>
                            <li>
                                <a href="../home#tracuu" style="font-size: small">TRA CỨU</a>
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
                        <a href=""><img src="{{asset('asset/image/EasyAccomod-1.png')}}" alt=""></a>
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
        <div class="container-fluid">
            <div class="row">
                <nav class="col-lg-2 d-none d-lg-block bg-light sidebar" style="margin-top: 75px;">
                    <div class="user_info">
                        <a href="#" class="clearfix">
                            <div class="user_avatar"><img src="{{asset('asset/image/boy_1544603222.png')}}"></div>
                            <div class="user_meta">
                                <div class="inner">

                                    <div class="user_name">{{Auth::user()->name}}</div>

                                    <div class="user_verify" style="color: #555; font-size: 0.9rem;">Chủ trọ</div>
                                </div>
                            </div>
                        </a>

                        <ul>
                            <li><span>Mã thành viên:</span> <span style="font-weight: 700;">{{Auth::user()->id}}</span></li>
                        </ul>
                        <a class="btn btn-danger btn-sm" href="/blog/public/chutro/dangtinmoi/{{Auth::user()->id}}">Đăng tin</a>
                        <a href="/blog/public/chutro/thongbao/{{Auth::user()->id}}" class="btn btn-warning btn-sm mr-1">Thông báo</a>
                    </div>
                    <ul class="nav nav-sidebar">
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/public/chutro/quanlytindang">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>                                Quản lý bài đăng
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/public/chutro/thongtincanhan">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>                                Quản lý thông tin cá nhân
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="/blog/public/chutro/thongke">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>                                Thống kê lượt xem /yêu thích
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="/blog/public/chutro/chat">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>                                Chat với admin
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/blog/public/chutro/doimatkhau/{{Auth::user()->id}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>                                Đổi mật khẩu
                            </a>
                        </li>

                    </ul>
                </nav>
                @yield('section')
            </div>
        </div>
    </div>
    <!-- end webpage -->

    <script src="./asset/javascript/main-dashboard.min.js"></script>
    <!-- Icons -->
    <script src="./asset/javascript/feather.min.js"></script>
    <script>
        feather.replace();
    </script>

</body>

</html>