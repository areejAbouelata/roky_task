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
            <h3 class="text-center">Create Album</h3>

            <div class="row justify-content-center">
                <div class="col-md-7 col-sm-10">
                    <div class="contact-form">
                        <form action="{{url(route('create_album'))}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group ">
                                <label for="inputName">Write Album Name</label>
                                <input type="text" id="inputName" class="form-control"
                                       placeholder="Write Your Name" name="name" value="{{old('name')}}">
                                @if($errors)
                                    <lable style="color: red" for="name">{{$errors->first('name')}}</lable>
                                @endif
                            </div>


                            <div class="form-group">
                                <label for="type">Enter Album Type</label>
                                <select name="type" class="form-control" id="type">
                                    <option value=""> select type of album</option>
                                    <option value="privet">Private</option>
                                    <option value="public"> Public</option>
                                </select>
                                @if($errors)
                                    <lable style="color: red" for="type">{{$errors->first('type')}}</lable>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="cover">Pick Album  Cover </label>
                                <input type="file" id="cover" class="form-control" placeholder="Pick Album Cover" name="cover">
                                @if($errors)
                                    <lable style="color: red" for="cover">{{$errors->first('cover')}}</lable>
                                @endif
                            </div>

                            <div class="text-center p-2">
                                <button type="submit" class="btn btn-gradiant">
                                   Add Album
                                </button>
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