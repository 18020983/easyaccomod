@extends('layouts.dash')    
@section('topHeader')   
    <div class="menuHeader uk-sticky" uk-sticky>
        <div class="topHeader">
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent uk-navbar" uk-navbar>
                    <div class="uk-navbar-right uk-padding-remove">
                        <div class="uk-navbar-item topHeader__item">
                            <!-- Khi kích nut tra cứu sẽ chạy xuống phần tra cứu nhưng chưa biết làm. Dể làm sau -->
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
                                <a href="/blog/public/admin/thongtincanhan">{{Auth::user()->name}} </a>/
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
                            <span class="m_nav_ham_button_closed uk-icon-button" uk-icon="icon: menu; ratio: 1.5;"
                                style="color: black;"></span>
                        </div>
                    </a>
                    <a href="http://ql.xephinh.xyz/" class="uk-navbar-item uk-padding-remove uk-logo">
                        <img src="{{asset('asset/image/EasyAccomod.png')}}" alt="logo">
                    </a>
                </div>
                <div class="uk-navbar-right">
                    <ul class="uk-navbar-nav uk-visible@m">
                        <li>
                            <a href="/blog/public/admin/home" style="font-size: small;">TRANG CHỦ</a>
                        </li>
                        <li>
                            <a href="#tracuu" style="font-size: small">TRA CỨU</a>
                        </li>
                        <li>
                            <a href="#" style="font-size: small;">DỊCH VỤ</a>
                            <div
                                class="uk-navbar-dropdown menuHeader__navbarDropdown menuHeader__navbarDropdown--oneMenu">
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
                            <div
                                class="uk-navbar-dropdown uk-navbar-dropdown-width-3 menuHeader__navbarDropdown menuHeader__navbarDropdown--gridMenu">
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
@stop