@extends('chutro.webpage')
@section('section')
                <main role="main" class="ml-sm-auto col-lg-10">

                    <div class="user_quick_info js-mobile-user-quick-info">
                        <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>trinhthikim</strong>. Mã tài khoản: <strong>101028</strong></p>
                    </div>


                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/blog/public/chutro/home">Trang chủ</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Danh sách tin đăng</li>
                        </ol>
                    </nav>
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
                        <h1 class="h2">Quản lý bài đăng</h1>

                        <div class="btn-toolbar mb-2 mb-md-0">
                            <div class="dropdown mr-1">

                                <div class="uk-width-1-1 uk-form-custom" uk-form-custom="target: &gt; * &gt; span:first-child">
                                    <select name="loaidichvu" onchange="ttphong(this)">
                                        <option value = "Lọc trạng thái phòng">Lọc trạng thái phòng</option>
                                        <option value = "Chưa cho thuê">Chưa cho thuê</option>
                                        <option value = "Đã cho thuê">Đã cho thuê</option>
                                    </select>
                                    <button class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select" type="button" tabindex="-1">
                                        <span></span>
                                        <span uk-icon="icon: menu" class="uk-icon"></span>
                                    </button>
                                </div>
                            </div>
                            <a class="btn btn-danger btn-sm d-none d-md-block" href="/blog/public/chutro/dangtinmoi/{{Auth::user()->id}}">Đăng tin mới</a>
                            <!-- <div class="d-lg-none" style="width: 100%;"><a class="btn btn-danger btn-block mt-3" href="#">Đăng tin mới</a></div> -->
                        </div>
                    </div>

                    <br>
                    <p style="font-size: 20px">Phòng đã được Admin duyệt để cho thuê</h1>

                    <div id = "Lọc trạng thái phòng">
                    @foreach($trangthaiphong as $row)
                        <div class="table-responsive">
                            <table class="table table_post_listing table-bordered _table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã tin</th>
                                        <th style="text-align: center; white-space: nowrap;">Ảnh đại diện</th>
                                        <th>Tiêu đề</th>
                                        <th>Giá</th>
                                        <th style="white-space: nowrap;">Ngày bắt đầu</th>
                                        <th style="white-space: nowrap;">Ngày hết hạn</th>
                                        <th style="white-space: nowrap;">Trạng thái phòng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$row->id}} </td>
                                        <td>
                                            <div class="post_thumb">
                                                <a href="#" target="_blank"><img src="{{ asset('anhphongtro/'.$row->anh1) }}"></a>
                                            </div>
                                        </td>
                                        <td>

                                            <span class="badge badge-pill badge-warning">Phòng trọ</span>

                                            <a class="post_title" target="_blank" href="#" style="color: #055699;">Phòng trọ giá rẻ</a>

                                            <div class="post_btn_toolbar mt-3">



                                                <a href="https://phongtro123.com/quan-ly/tin-dang/gia-han-tin/315157" class="btn btn-sm btn_danglai btn-warning text-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Thêm ngày</a>

                                                <a href="https://phongtro123.com/quan-ly/sua-tin-dang/315157" class="btn btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg> Sửa tin</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="post_price">{{$row->giaca}} </div>
                                        </td>
                                        <td>{{$row->thoigiandang}}</td>
                                        <td>{{$row->handangbai}}</td>
                                        <td>
                                            <span class="text text-success" style="white-space: nowrap;">{{$row->trangthaiphong}}</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    @endforeach
                    </div>

                    <div id = "Chưa cho thuê" >
                    @foreach($chuachothue as $row)
                        <div class="table-responsive">
                            <table class="table table_post_listing table-bordered _table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã tin</th>
                                        <th style="text-align: center; white-space: nowrap;">Ảnh đại diện</th>
                                        <th>Tiêu đề</th>
                                        <th>Giá</th>
                                        <th style="white-space: nowrap;">Ngày bắt đầu</th>
                                        <th style="white-space: nowrap;">Ngày hết hạn</th>
                                        <th style="white-space: nowrap;">Trạng thái phòng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$row->id}} </td>
                                        <td>
                                            <div class="post_thumb">
                                                <a href="#" target="_blank"><img src="{{ asset('anhphongtro/'.$row->anh1) }}"></a>
                                            </div>
                                        </td>
                                        <td>

                                            <span class="badge badge-pill badge-warning">Phòng trọ</span>

                                            <a class="post_title" target="_blank" href="#" style="color: #055699;">Phòng trọ giá rẻ</a>

                                            <div class="post_btn_toolbar mt-3">



                                                <a href="https://phongtro123.com/quan-ly/tin-dang/gia-han-tin/315157" class="btn btn-sm btn_danglai btn-warning text-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Thêm ngày</a>

                                                <a href="https://phongtro123.com/quan-ly/sua-tin-dang/315157" class="btn btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg> Sửa tin</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="post_price">{{$row->giaca}} </div>
                                        </td>
                                        <td>{{$row->thoigiandang}}</td>
                                        <td>{{$row->handangbai}}</td>
                                        <td>
                                            <span class="text text-success" style="white-space: nowrap;">{{$row->trangthaiphong}}</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    @endforeach
                    </div>

                    <div id = "Đã cho thuê" >
                    @foreach($dachothue as $row)
                        <div class="table-responsive">
                            <table class="table table_post_listing table-bordered _table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã tin</th>
                                        <th style="text-align: center; white-space: nowrap;">Ảnh đại diện</th>
                                        <th>Tiêu đề</th>
                                        <th>Giá</th>
                                        <th style="white-space: nowrap;">Ngày bắt đầu</th>
                                        <th style="white-space: nowrap;">Ngày hết hạn</th>
                                        <th style="white-space: nowrap;">Trạng thái phòng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$row->id}} </td>
                                        <td>
                                            <div class="post_thumb">
                                                <a href="#" target="_blank"><img src="{{ asset('anhphongtro/'.$row->anh1) }}"></a>
                                            </div>
                                        </td>
                                        <td>

                                            <span class="badge badge-pill badge-warning">Phòng trọ</span>

                                            <a class="post_title" target="_blank" href="#" style="color: #055699;">Phòng trọ giá rẻ</a>

                                            <div class="post_btn_toolbar mt-3">



                                                <a href="https://phongtro123.com/quan-ly/tin-dang/gia-han-tin/315157" class="btn btn-sm btn_danglai btn-warning text-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Thêm ngày</a>

                                                <a href="https://phongtro123.com/quan-ly/sua-tin-dang/315157" class="btn btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg> Sửa tin</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="post_price">{{$row->giaca}} </div>
                                        </td>
                                        <td>{{$row->thoigiandang}}</td>
                                        <td>{{$row->handangbai}}</td>
                                        <td>
                                            <span class="text text-success" style="white-space: nowrap;">{{$row->trangthaiphong}}</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    @endforeach
                    </div>
                    
                    <script type="text/javascript">
                        document.getElementById("Lọc trạng thái phòng").style.display = "block";
                        document.getElementById("Chưa cho thuê").style.display = "none";
                        document.getElementById("Đã cho thuê").style.display = "none";
                        function ttphong(obj) {
                            let options = obj.value;
                            console.log(obj.value)
                            document.getElementById("Lọc trạng thái phòng").style.display = "none";
                            document.getElementById("Chưa cho thuê").style.display = "none";
                            document.getElementById("Đã cho thuê").style.display = "none";
                            document.getElementById(obj.value).style.display = "block";
                        }


                    </script>


                    <br><br>
                    <p style="font-size: 20px">Phòng chưa được Admin duyệt</p>
                    <div class="d-none d-md-block">
                    @foreach($phongchuapheduyet as $row)
                        <div class="table-responsive">
                            <table class="table table_post_listing table-bordered _table-hover">
                                <thead>
                                    <tr>
                                        <th>Mã tin</th>
                                        <th style="text-align: center; white-space: nowrap;">Ảnh đại diện</th>
                                        <th>Tiêu đề</th>
                                        <th>Giá</th>
                                        <th style="white-space: nowrap;">Ngày bắt đầu</th>
                                        <th style="white-space: nowrap;">Ngày hết hạn</th>
                                        <th style="white-space: nowrap;">Trạng thái phòng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$row->id}} </td>
                                        <td>
                                            <div class="post_thumb">
                                                <a href="#" target="_blank"><img src="{{ asset('anhphongtro/'.$row->anh1) }}"></a>
                                            </div>
                                        </td>
                                        <td>

                                            <span class="badge badge-pill badge-warning">Phòng trọ</span>

                                            <a class="post_title" target="_blank" href="#" style="color: #055699;">Phòng trọ giá rẻ</a>

                                            <div class="post_btn_toolbar mt-3">



                                                <a href="https://phongtro123.com/quan-ly/tin-dang/gia-han-tin/315157" class="btn btn-sm btn_danglai btn-warning text-success"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg> Thêm ngày</a>

                                                <a href="https://phongtro123.com/quan-ly/sua-tin-dang/315157" class="btn btn-sm"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><polygon points="16 3 21 8 8 21 3 21 3 16 16 3"></polygon></svg> Sửa tin</a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="post_price">{{$row->giaca}} </div>
                                        </td>
                                        <td>{{$row->thoigiandang}}</td>
                                        <td>{{$row->handangbai}}</td>
                                        <td>
                                            <span class="text text-success" style="white-space: nowrap;">{{$row->trangthaiphong}}</span>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    @endforeach
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
                                        <p class="company_name"><strong>CÔNG TY TNHH LBKCORP</strong></p>
                                        <p><strong>Tổng đài CSKH: 0917.686.101</strong></p>
                                        <p>Copyright © 2015 - 2019 Phongtro123.com</p>
                                        <p>Email: cskh.phongtro123@gmail.com | lienhe.phongtro123@gmail.com</p>
                                        <p>Địa chỉ: LE-4.07, Toà nhà Lexington Residence, Số 67 Mai Chí Thọ, Phường An Phú, Quận 2, Tp. Hồ Chí Minh.</p>
                                        <p>Giấy phép đăng ký kinh doanh số 0313588502 do Sở kế hoạch và Đầu tư thành phố Hồ Chí Minh cấp ngày 30 tháng 3 năm 2017.</p>
                                        <center style="display: flex; align-items: center; justify-content: center;">
                                            <a class="bds_icon dkbct" style="display: inline-block; margin: 0 5px;" rel="nofollow" target="_blank" href="http://online.gov.vn/HomePage/WebsiteDisplay.aspx?DocId=43297"></a>
                                            <a style="display: inline-block; margin: 0 5px;" rel="nofollow" target="_blank" href="https://www.dmca.com/Protection/Status.aspx?ID=92715b33-c457-422d-95c4-a5453e80e9bf&amp;refurl=https://phongtro123.com/" title="DMCA.com Protection Status" class="dmca-badge"><img src="./quản lý tin đăng_files/dmca-badge-w250-2x1-04.png" width="100" alt="DMCA.com Protection Status"></a>
                                            <script async="" defer="" src="./quản lý tin đăng_files/DMCABadgeHelper.min.js.download"></script>
                                        </center>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </footer>
                </main>
@stop()