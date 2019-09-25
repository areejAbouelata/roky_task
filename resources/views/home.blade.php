@include('layout.home_header')
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
    <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="{{asset('images/logo-m.png')}}" data-src="{{asset('images/logo-m.png')}}"
                                                           class="lazyload"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <ul class="menu-bars">
                            <li><span></span></li>
                            <li><span></span></li>
                            <li><span></span></li>
                        </ul>
                    </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{route('create_album')}}">Create Album</a>
                    </li>
                    @if(!auth('clients')->check() && auth()->guest() )
                    <li class="nav-item">
                        <button class="btn btn-gradiant">
                            <a href="{{route('login')}}">login</a>
                        </button>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <section class="check_demo_movie">
        <div class="container">
            <h2 class=" wow fadeInDown">Check Our <span class="main-color"> Albums</span></h2>
            <p></p>
            @if(count($albums)>0)
            <div class="row">
                @foreach($albums as $album )
                    <div class="col-md-4">
                        <div class="card wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                            <div class="card-header">
                                <img src="{{asset('public/images/album_cover/'.$album->cover)}}" src="{{asset('public/images/album_cover/'.$album->cover)}}" class="lazyload">
                            </div>
                            <div class="card-body">
                                <h4> <a href=""> {{$album->name}}</a></h4>

                                <p class="package-price">
                                    @if(auth('clients')->guest() || auth('clients')->user()->id !==$album->client_id )
                                        @if($album->type == 'public')
                                    <button class="btn btn-gradiant m-0">
                                        <a href="{{route('public_album_show' , [$album->id])}}">view</a>
                                    </button>
                                            @endif
                                    @endif
                                    @if(auth('clients')->check() && auth('clients')->user()->id == $album->client_id )
                                    <button class="btn btn-gradiant m-0">
                                        <a href="{{route('edit_album' , [$album->id])}}">edit</a>
                                    </button>  <button class="btn btn-gradiant m-0">
                                        <a href="{{route('delete_album' , [$album->id])}}">delete</a>
                                    </button>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @else
            <div class="row">
                No Albums
            </div>
            @endif
        </div>
    </section>
    <footer>
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

@include('layout.home_footer')
