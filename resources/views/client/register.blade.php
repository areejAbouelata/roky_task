<!DOCTYPE html>
<html>

<head>
    <title> Smart Movies </title>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="author" content="RoQaY">
    <meta name="robots" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=" Smart Movies website">
    <meta name="keywords" content=" Smart Movies ">
    <meta name="csrf-token" content="V2G8zLS7dL5HzdfwxaBDewvJvAKCyeThQE4NBtJv">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/fontawesome.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{url(asset('/css/animate.css'))}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/all.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/style.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/responsive.css')}}">
</head>

<body>

<div class="body_wrapper">
    <div class="preloader">
        <div class="preloader-loading">
            <img src="{{asset('images/logo-m.png')}}" data-src="{{asset('images/logo-m.png')}}" class="lazyload">
        </div>
    </div>

    <div class="top_nav">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <ul class="d-flex about-site">
                        <li><a href="#">Questions</a></li>
                        <li><a href="#">Team</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Terms Of Privacy</a></li>
                    </ul>
                </div>
                <div class="col-sm-4">
                    <ul class="d-flex social ">
                        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                        <li> <a href="#"> <i class="fab fa-twitter"></i> </a></li>
                        <li> <a href="#"> <i class="fab fa-instagram"></i> </a></li>
                        <li> <a href="#"> <i class="fab fa-snapchat-ghost"></i> </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="logo text-center">
        <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo-m.png')}}" data-src="{{asset('images/logo-m.png')}}"
                                                       class="lazyload"></a>
    </div>
    <section class="contact-us bg-light">
        <div class="container">
            <h3 class="text-center">Sign Up To Join Us</h3>

            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-10">
                    <div class="contact-form">
                        <form action="{{url(route('register/submit'))}}" method="POST">
                            @csrf
                            <div class="form-group ">
                                <label for="inputName">Write Your Name</label>
                                <input type="text" id="inputName" class="form-control"
                                       placeholder="Write Your Name" name="name">
                            </div>
                            @if($errors)
                                <lable style="color: red" for="name">{{$errors->first('name')}}</lable>
                                @endif
                            <div class="form-group">
                                <label for="inputEmail">Your Email Addrss</label>
                                <input type="email" id="inputEmail" class="form-control"
                                       placeholder="Write Your Email" name="email">
                                @if($errors)
                                    <lable style="color: red" for="inputEmail">{{$errors->first('email')}}</lable>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Enter Password </label>
                                <input type="password" id="inputPassword" class="form-control" placeholder=" Write Your password" name="password">
                                @if($errors)
                                    <lable style="color: red" for="inputPassword">{{$errors->first('password')}}</lable>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="inputConfirmPassword">Confirm Password </label>
                                <input type="password" id="inputConfirmPassword" class="form-control" placeholder="  Confirm Your password" name="password_confirmation">
                                @if($errors)
                                    <lable style="color: red" for="inputConfirmPassword">{{$errors->first('password_confirmation')}}</lable>
                                @endif
                            </div>

                            <div class="text-center p-2">
                                <button type="submit" class="btn btn-gradiant">
                                     Sign Up
                                </button>
                            </div>

                            <div >
                                <b> <span>Have An Account ?</span> <a href="login.html" class="main-color ">Login</a></b>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="pt-0">
        <div class="copyrights">
            <p>© All Rights reserved to Smart Movies website 2017</p>
        </div>
    </footer>
    <span class="scroll-top"> <a href="#"><i class="fas fa-chevron-up"></i></a> </span>


</div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/lazysizes.min.js')}}"></script>
<script src="{{asset('js/fontawesome.min.js')}}"></script>
<script src="{{asset('js/all.min.js')}}"></script>
<script src="{{asset('js/wow.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>