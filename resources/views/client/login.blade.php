@include('layout.header')
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
            <h3 class="text-center">Login To Join Us</h3>

            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-10">
                    <div class="contact-form">
                        <form action="{{route('login')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="inputEmail">Your Email Addrss</label>
                                <input type="email" id="inputEmail" class="form-control"
                                       placeholder="Write Your Email" name="email">
                                @if($errors)
                                    <lable for="inputEmail" style="color: red">{{$errors->first('email')}}</lable>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label for="inputPassword">Your Password </label>
                                <input type="password" id="inputPassword" class="form-control" placeholder=" Write Your password" name="password">
                                @if($errors)
                                    <lable for="inputPassword" style="color: red">{{$errors->first('password')}}</lable>
                                @endif
                            </div>


                            <div class="text-center p-2">
                                <button type="submit" class="btn btn-gradiant">
                                    login
                                </button>
                            </div>

                            <div >
                                <b> <span>Don't Have An Account ?</span> <a href="{{route('register')}}" class="main-color ">Sign Up</a></b>
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
@include('layout.footer')