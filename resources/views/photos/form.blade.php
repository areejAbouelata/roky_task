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
        <a class="navbar-brand" href="{{route('home')}}"><img src="{{asset('images/logo-m.png')}}" data-src="{{asset('images/logo-m.png')}}"
                                                              class="lazyload"></a>
    </div>
    <section class="contact-us bg-light">
        <div class="container">
            <h3 class="text-center">Add Photo to {{$album->name}} Album</h3>

            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-10">
                    <div class="contact-form">
                        <form action="{{url(route('create_photo',[$album->id]))}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="photo">Add photo to {{$album->name}}  Album</label>
                                <input type="file" id="photo" class="form-control" placeholder="Pick photo" name="photo">
                                @if($errors)

                                    <lable style="color: red" for="photo">{{$errors->first('photo')}}</lable>
                                @endif
                            </div>

                            <div class="text-center p-2">
                                <button type="submit" class="btn btn-gradiant">
                                    insert Photo to Album
                                </button>
                            </div>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="pt-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo-m.png')}}"
                                                                   data-src="{{asset('images/logo-m.png')}}" class="lazyload"></a>
                    <p> Interact With The Content In An Interesting Educational Experience, Using Studying Means
                        Anywhere & Anytime Directly From your Computer. </p>
                </div>
                <div class="col-md-4">
                    <h5>Links</h5>
                    <div class="links d-flex">
                        <ul>
                            <li> <a href="#"> > Create Account</a></li>
                            <li> <a href="#"> > movie</a></li>
                            <li> <a href="#"> > Team </a></li>
                            <li> <a href="#"> > Company </a></li>
                        </ul>
                        <ul>
                            <li> <a href="#"> > Questions</a></li>
                            <li> <a href="#"> > Blog</a></li>
                            <li> <a href="#"> > Terms of Privacy </a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <h5>Contact Us</h5>
                    <div><a href="mailto:info@smartmovie.com"> <i class="fas fa-envelope"></i>
                            info@smartmovie.com</a></div>
                    <form action="">
                        <div class="input-group mb-2">
                            <input type="email" class="form-control" id="inlineFormInputGroup"
                                   placeholder=" Your Email ">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <button class="btn btn-gradiant m-0">
                                        <a href="#">Send</a>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <ul class="d-flex social ">
                        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                        <li> <a href="#"> <i class="fab fa-twitter"></i> </a></li>
                        <li> <a href="#"> <i class="fab fa-instagram"></i> </a></li>
                        <li> <a href="#"> <i class="fab fa-snapchat-ghost"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="copyrights">
            <p>© All Rights reserved to Smart Movies website 2017</p>
        </div>
    </footer>
    <span class="scroll-top"> <a href="#"><i class="fas fa-chevron-up"></i></a> </span>


</div>

@include('layout.footer')