@extends('admin.webpage')
@section('section')
    <head>
        <title>Message</title>
    </head>
    <main role="main" class="ml-sm-auto col-lg-10">

    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/blog/public/admin/home">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Messages</li>
                        </ol>
                    </nav>
        @foreach($data as $row)
            <div class="user_info">
                        <a href="/blog/public/admin/chat" class="clearfix">
                            <div class="user_avatar"><img src="{{asset('asset/image/image.jpg')}}"></div>
                            <div class="user_meta">
                                <div class="inner">
                                    <div class="user_name">{{Auth::user()->name}}</div>
                                </div>
                            </div>
                        </a>
                    </div>
        @endforeach
    </main>
@stop()
