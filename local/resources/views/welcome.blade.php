@extends('layouts.index')

@if(Session::has('msg'))
    {{Session::get('msg')}}
@endif
@section('title')
@endsection

@section('content')
    <div class="row magazine-page">
        <div class="col-md-9">
            <div class="carousel slide carousel-v1 margin-bottom-40" id="myCarousel-1">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" src="images/1.jpg">
                        <div class="carousel-caption">
                            <p>Lễ đón nhận huân chương lao động hạng nhì.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="images/2.jpg">
                        <div class="carousel-caption">
                            <p>Lễ đón nhận huân chương lao động hạng nhì.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="images/4.jpg">
                        <div class="carousel-caption">
                            <p>Lễ đón nhận huân chương lao động hạng nhì.</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-arrow">
                    <a data-slide="prev" href="#myCarousel-1" class="left carousel-control">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel-1" class="right carousel-control">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="carousel slide carousel-v1 margin-bottom-20" id="myCarousel-2">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="" src="images/5.jpg">
                        <div class="carousel-caption">
                            <p>BƯU ĐIỆN TỈNH NGHỆ AN</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="images/6.jpg">
                        <div class="carousel-caption">
                            <p>BƯU ĐIỆN TỈNH NGHỆ AN</p>
                        </div>
                    </div>
                    <div class="item">
                        <img alt="" src="images/7.jpg">
                        <div class="carousel-caption">
                            <p>BƯU ĐIỆN TỈNH NGHỆ AN</p>
                        </div>
                    </div>
                </div>

                <div class="carousel-arrow">
                    <a data-slide="prev" href="#myCarousel-2" class="left carousel-control">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a data-slide="next" href="#myCarousel-2" class="right carousel-control">
                        <i class="fa fa-angle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="headline">
        <h2 class="heading-sm">Bảng thông báo thông tin bưu gửi vô thừa nhận</h2>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>STT</th>
            <th>Số hiệu</th>
            <th>Ngày gửi</th>
            <th>Người gửi</th>
            <th>Người nhận</th>
            <th>Trọng lượng</th>
            <th>Loại BG</th>
            <th>Nội dung</th>
            <th>Ghi chú</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bg_vothuanhans as $vothuanhan)
            <tr>
                <td>{{$stt++}}</td>
                <td>{{$vothuanhan->sohieu}}</td>
                <td>{{$vothuanhan->ngaythang}}</td>
                <td>{{$vothuanhan->nguoigui}}</td>
                <td>{{$vothuanhan->nguoinhan}}</td>
                <td>{{$vothuanhan->trongluong}}</td>
                <td>{{$vothuanhan->loaibuugui}}</td>
                <td>{{$vothuanhan->noidung}}</td>
                <td>{{$vothuanhan->ghichu}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!!$bg_vothuanhans -> render()  !!}
    <!-- JS Implementing Plugins -->
    <script type="text/javascript" src="assets/plugins/back-to-top.js"></script>
    <script type="text/javascript" src="assets/plugins/smoothScroll.js"></script>
    <!-- JS Customization -->
    <script type="text/javascript" src="assets/js/custom.js"></script>
    <!-- JS Page Level -->
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/plugins/style-switcher.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function () {
            App.init();
            StyleSwitcher.initStyleSwitcher();
        });
    </script>

@endsection
