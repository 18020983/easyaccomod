@extends('layouts.dash')    
@section('topHeader')   
        <div class="topHeader">
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent uk-navbar" uk-navbar>
                    <div class="uk-navbar-right uk-padding-remove">
                        <div class="uk-navbar-item topHeader__item">
                            <!-- Khi kích nut tra cứu sẽ chạy xuống phần tra cứu nhưng chưa biết làm. Dể làm sau -->
                            <form action="" method="post">
                                <div class="uk-child-width-auto uk-grid-5 uk-grid" uk-grid="">
                                    <button class="uk-button uk-button-default uk-form-small topHeader__item__btn1">
                                            <a href="#tracuu">Tra cứu</a>
                                        </button>
                                </div>
                            </form>
                        </div>
                        <div class="uk-navbar-item topHeader__item topHeader__item--loginBox">
                            <span uk-icon="icon:user; ratio: 0.7" class="topHeader__item__iconPhone uk-icon" style="padding-right: 5px;"></span>
                            <span class="uk-text-middle">
                                <a href="/blog/public/nguoithuephong/thongtincanhan">{{Auth::user()->name}} </a>/
                                <a href="/blog/public/nguoithuephong/thongtincanhan">Đăng xuất</a>
                            </span>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
@stop