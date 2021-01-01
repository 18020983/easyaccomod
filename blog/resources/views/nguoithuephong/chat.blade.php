@extends('nguoithuephong.webpage') 
@section('section')
    <main role="main" class="ml-sm-auto col-lg-10">

        <div class="user_quick_info js-mobile-user-quick-info">
            <p style="margin-top: 0; margin-bottom: 5px;">Xin chào <strong>trinhthikim</strong>. Mã tài khoản: <strong>101028</strong></p>
        </div>
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Chat với Admin</h1>
        </div>

        <!-- Đoạn mã bổ sung -->
        <div class="open-button" onclick="openForm()">
            <span class="fa-5x"><i class="fas fa-comment-dots"></i></span>
        </div>
        @foreach($messages as $message)
        <p><strong>{{$message->name}}</strong>: {{$message->content}}</p>
        @endforeach

        <div>
            <form action="" method="post">
                @csrf
                
                <br><br>
                Chat: <textarea name="content" id="" cols="30" rows="2"></textarea>
                <button type="submit" name="send">Send</button>
            </form>
        </div>

        <script>
            function openForm() {
                document.getElementById("myForm").style.display = "block";
            }

            function closeForm() {
                document.getElementById("myForm").style.display = "none";
            }
        </script>
        <!-- hết đoạn mã bổ sung -->

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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-3.5.1.min.js"> </script> 
    <!-- src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/3.0.4/socket.io.js"></script> -->
    <script> 
        var socket = io('http://localhost:6001')
        // socket.on('demo_database_chat:message',function(data){
        //     consolo.log(data)
        //     if($('#'+data.id).length==0){
        //         $('#data').append('<p><strong>'+data.name+'</strong>: '+data.content+'</p>')
        //     } 
        //     else{
        //         console.log('Da co tin nhan')
        //     }
        // })

        socket.on('chat:message',function(data){
            consolo.log(data)
        })
    </script>
@stop()