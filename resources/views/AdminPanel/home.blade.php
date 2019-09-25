@include('AdminPanel.layouts.header')
<!-- content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="info-box bg-blue hover-zoom-effect ">
                            <div class="icon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <div class="content">
                                <div class="text">عدد المستخدمين الكلى  </div>
                                <div class="number">{{$clients}}</div>
                            </div>
                        </div>
                        <a href="." class="pointer">
                            <div class="info-box bg-purple hover-zoom-effect" style="cursor:pointer;">
                                <div class="icon">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="content">
                                    <div class="text"> اجمالى عدد الالبومات</div>
                                    <div class="number">{{$albums_count}}</div>
                                </div>
                            </div>
                        </a>

                        <div class="info-box bg-blue hover-zoom-effect ">
                            <div class="icon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <div class="content">
                                <div class="text">عدد  الالبومات الخاصة  </div>
                                <div class="number">{{$private_albums_count}}</div>
                            </div>
                        </div>
                        <a href="." class="pointer">
                            <div class="info-box bg-purple hover-zoom-effect" style="cursor:pointer;">
                                <div class="icon">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="content">
                                    <div class="text"> عدد  الالبومات العامه</div>
                                    <div class="number">{{$public_albums_count}}</div>
                                </div>
                            </div>
                        </a>
                        <div class="info-box bg-blue hover-zoom-effect ">
                            <div class="icon">
                                <i class="material-icons">attach_money</i>
                            </div>
                            <div class="content">
                                <div class="text">عدد الصور  الكلى  </div>
                                <div class="number">{{$photos_count}}</div>
                            </div>
                        </div>
                        <a href="." class="pointer">
                            <div class="info-box bg-purple hover-zoom-effect" style="cursor:pointer;">
                                <div class="icon">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="content">
                                    <div class="text"> عدد  الصور العامه</div>
                                    <div class="number">{{$public_photos_count}}</div>
                                </div>
                            </div>
                        </a>
                        <a href="" class="pointer">
                            <div class="info-box bg-purple hover-zoom-effect" style="cursor:pointer;">
                                <div class="icon">
                                    <i class="material-icons">person</i>
                                </div>
                                <div class="content">
                                    <div class="text"> عدد  الصور الخاصة</div>
                                    <div class="number">{{$privet_photos_count}}</div>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>

          </div>
</section>


<!-- #END# content -->
@include('AdminPanel.layouts.footer')
