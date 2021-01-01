<head>


    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta content="INDEX,FOLLOW" name="robots">
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
    <script type="text/javascript">
        jQuery.noConflict(true);
    </script>

    <link rel="stylesheet" href="./asset/css/reset.min.css">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/phongtro.dashboard.css">
    <link rel="stylesheet" href="./asset/css/phongtro.dashboard.responsive.css">
    <script type="text/javascript" async="" src="./asset/javascript/analytics.js.download"></script>
    <script async="" src="./asset/javascript/default" charset="UTF-8" crossorigin="*"></script>
    <script type="text/javascript">
        base_url = "https://phongtro123.com";
        base_api_url = "https://phongtro123.com/api";
        get_district_ajax = {
            ajaxurl: '#'
        };
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async="" src="./asset/javascript/js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-60724554-1');
    </script>

</head>

<body>
    <!-- @foreach($data as $row)
        <tr>
                <a class="text text-success" style="white-space: nowrap;" href="#admin-315157" uk-toggle>Đã được
                    duyệt</a>
                <form action="" method="post">
                <div id="admin-315157" uk-modal>
                    <div class="uk-modal-dialog uk-margin-auto-vertical">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                        <div class="uk-modal-body">
                            <h4>Chỉnh sửa trạng thái</h4>
                            <div class="uk-width-1-1 uk-form-custom"
                                uk-form-custom="target: &gt; * &gt; span:first-child">
                                <select name="loaidichvu">
                                    <option>Thay đổi trạng thái</option>
                                    <option>Duyệt bài</option>
                                    <option>Từ chối</option>
                                </select>
                                <button
                                    class="uk-button uk-button-default uk-width-1-1 uk-border-rounded tracuu__card1__select"
                                    type="button" tabindex="-1">
                                    <span></span>
                                    <span uk-icon="icon: menu" class="uk-icon"></span>
                                </button>
                            </div>
                        </div>
                        <div class="uk-modal-footer uk-text-right">
                            <button type="submit" class="btn btn-success mb-5 btn-lg btn-block disabled">Luu</button>
                        </div>
                    </div>
                </div>
                </from>
            </td>
        </tr>
    @endforeach -->
    @csrf
        <a class="text text-success" style="white-space: nowrap;" href="#admin-315157" uk-toggle>Đã được duyệt</a>
            <form method = "post" action = "">    
                <div id="admin-315157" uk-modal>
                    <div class="uk-modal-dialog uk-margin-auto-vertical">
                        <button class="uk-modal-close-default" type="button" uk-close></button>
                    
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success mb-5 btn-lg btn-block disabled">
                                Hoàn tất &amp; Thanh toán 
                            </button>
                        </div>
                    </div>
                </div>
            </form>    
</body>