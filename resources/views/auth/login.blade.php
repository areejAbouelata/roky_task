<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <!-- Waves Effect Css -->

    <!-- system style -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/dist/css/bootstrap-rtl.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/dist/css/basic.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/AdminAssets/dist/css/custom.css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-page">
<div class="login-box" style="margin-top: 150px;">
    <div class="card" style="padding-top:0px;">
        <div class="body">
          {{ url('/login') }}
            <form method="POST" action="{{ url('/login') }}">
                @csrf

                <div class="text-center m-b-25">
                    <h3>Albums Admin  Panel</h3>
                </div>
                <!-- <div class="msg">سجل عضوية جديدة معنا</div> -->
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
                <div class="row m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-block btn-info" type="submit">تسجيل الدخول</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery -->
<script type="text/javascript" src="{{ URL::to('/') }}dist/js/jquery.min.js"></script>


<!-- Bootstrap 3.3.4 -->
<script src="{{ URL::to('/') }}/AdminAssets/bootstrap/js/bootstrap.min.js"></script>


<!-- Custom Js -->
<script src="{{ URL::to('/') }}/AdminAssets/dist/js/admin.js"></script>


</body>
</html>