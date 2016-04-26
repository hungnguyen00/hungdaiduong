<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{url("/")}}">
                <h1>HÙNG ĐẠI DƯƠNG</h1>
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#intro">Trang Chủ</a></li>
                <li><a href="#about">Giới Thiệu</a></li>
                <li><a href="#service">Dịch Vụ</a></li>
                <li><a href="#contact">Liên Hệ</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sản Phẩm <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('product/list')}}">Cá Khô</a></li>
                        <li><a href="{{url('product/list')}}">Cá Tươi</a></li>
                        <li><a href="{{url('product/list')}}">Mực - Tôm</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ngôn ngữ <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><img src="{{asset('front/images/icon')}}/vn_flg.png"  style="width: 30px; height: 20px;"/> Việt</a></li>
                        <li><a href="#"><img src="{{asset('front/images/icon')}}/en_flg.jpg"  style="width: 30px; height: 20px;"/> Anh</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>