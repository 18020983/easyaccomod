<!DOCTYPE html>
<html>

<head>
    <title>Đăng nhập</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta content="INDEX,FOLLOW" name="robots">
    <meta name="keywords" content="Queer Signup form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
    <link href="{{asset('asset/css/style.css')}}" rel='stylesheet' type='text/css' />
    <!--webfonts-->
    
    <link href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900" rel="stylesheet">
    <!--//webfonts-->

</head>

<body>

    <div class="w3_frm">
        <!---728x90--->
        <form action="" method="post">
            @csrf

            <h3>Đăng nhập</h3>
            <div class="field-w3-agile-grid leftf">
                <input type="text" name="email" placeholder="Tên đăng nhập" required="" />
            </div>
            <div class="field-w3-agile-grid rightf">
                <input type="password" name="password" placeholder="Mật khẩu" required="" />
            </div>
            <div class="field-w3-agile-grid rem">
                <input type="checkbox" value="">
                <label for="brand"><span></span>Lưu tài khoản</label>
            </div>
            <div class="button-center">
                <input type="reset" value="Trở lại">
                <input type="submit" value="Đăng nhập">
            </div>
        </form>


    </div>
</body>

</html>