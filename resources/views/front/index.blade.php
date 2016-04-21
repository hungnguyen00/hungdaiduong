<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Hùng Đại Dương Co.,LTD</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset("front/index/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="{{ asset("front/index/font-awesome/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css">
	<link href="{{ asset("front/index/css/animate.css")}}" rel="stylesheet" />
    <!-- Squad theme CSS -->
    <link href="{{ asset("front/index/css/style.css")}}" rel="stylesheet">
	<link href="{{ asset("front/index/color/default.css")}}" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
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
            <li><a href="#">Cá Khô</a></li>
            <li><a href="#">Cá Tươi</a></li>
            <li><a href="#">Mực - Tôm</a></li>
          </ul>
        </li>
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<h4>Công Ty TNHH Thương Mại & Sản Xuất</h4>
			<h2>HÙNG ĐẠI DƯƠNG</h2>
		</div>
		<div class="page-scroll">
			<a href="#service" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="about" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Giới Thiệu</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Anna Hanaceck</h5>
                        <p class="subtitle">Pixel Crafter</p>
                        <div class="avatar"><img src="{{ asset("front/index/img/team/1.jpg")}}" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.5s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Maura Daniels</h5>
                        <p class="subtitle">Ruby on Rails</p>
                        <div class="avatar"><img src="{{ asset("front/index/img/team/2.jpg")}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Jack Briane</h5>
                        <p class="subtitle">jQuery Ninja</p>
                        <div class="avatar"><img src="{{ asset("front/index/img/team/3.jpg")}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="1s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Tom Petterson</h5>
                        <p class="subtitle">Typographer</p>
                        <div class="avatar"><img src="{{ asset("front/index/img/team/4.jpg")}}" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	<!-- /Section: about -->
	

	<!-- Section: services -->
    <section id="service" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Các Dịch Vụ</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
            <div class="col-sm-3 col-md-3">
				<div class="wow fadeInLeft" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ asset("front/index/img/icons/service-icon-1.png")}}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Phát Triển</h5>
						<p>Tiếp nối sự phát triển là chủ trương đa dạng hóa ngành nghề nhằm từng bước trở thành Tập đoàn lớn mạnh, Công ty còn tập trung trên các lĩnh vực: Du lịch sinh thái, Khu nghỉ dưỡng; Than sinh khối, Trồng rừng nguyên liệu; Vật liệu Xây dựng và Trang trí nội thất,…</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ asset("front/index/img/icons/service-icon-2.png")}}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Cam Kết</h5>
						<p>Cam kết trong sản xuất và cung cấp sản phẩm than củi/ viên củi, sự khác biệt rõ nét bắt nguồn từ việc đầu tư dây chuyền công nghệ hiện đại từ Ấn Độ để cung cấp sản phẩm chất lượng cao, giá cả hợp lý cho thị trường.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ asset("front/index/img/icons/service-icon-3.png") }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Đội ngũ</h5>
						<p>Với đội ngũ nghiên cứu và phát triển, thiết kế, kiểm soát chất lượng sản phẩm, chăm sóc khách hàng, Chúng tôi tự tin sẽ cung cấp sản phẩm chất lượng tốt nhất, giá cả hợp lý trên cơ sở tiếp thu ý kiến khách hàng nhằm không ngừng cải tiến mẫu mã, chất lượng và giá cả.</p>
					</div>
                </div>
				</div>
            </div>
			<div class="col-sm-3 col-md-3">
				<div class="wow fadeInRight" data-wow-delay="0.2s">
                <div class="service-box">
					<div class="service-icon">
						<img src="{{ asset("front/index/img/icons/service-icon-4.png") }}" alt="" />
					</div>
					<div class="service-desc">
						<h5>Thành lập</h5>
						<p>Được thành lập từ năm 1993, Công ty Cổ phần Thương mại & Sản xuất Hùng Đại Dương tự hào là một trong những nhà cung cấp đá Granite và Marbel hàng đầu tại Việt Nam.</p>
					</div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	

	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Liên Hệ</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div id="google-map"></div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row">
        <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Tên</label>
                            <input type="text" class="form-control" id="name" placeholder="Nhập vào tên" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Địa Chỉ Email</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Nhập vào địa chỉ email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Tiêu Đề</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Chọn:</option>
                                <option value="service">Hỗ trợ dịch vụ</option>
                                <option value="suggestions">Mua hàng</option>
                                <option value="product">Thanh toán</option>
                                <option value="product">Khác</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Nội Dung</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Nhập vào nội dung"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Gửi</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4">
			<div class="widget-contact">
				<h5>Trụ sở chính</h5>
				<address>
				  <abbr title="Địa chỉ">Địa chỉ:</abbr>84/1 Sương Nguyệt Ánh, P. Bến Thành, Q.1, TP.HCM<br>
				  <abbr title="Số điện thoại">Số điện thoại:</abbr> +848 – 3839 3887 <br />
				  <abbr title="Fax">Fax:</abbr> +848 – 3839 3889
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:#">hdd.headoffice@hungdaiduong.com.vn</a>
				</address>	
				<address>
				  <strong>Tìm chúng tôi trên: </strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                            <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                        </ul>	
				</address>					
			
			</div>	
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>&copy;Copyright 2014 - Hung Ocean Co.,LTD. Designed by <a href="mailto:nthung0209@gmail.com">HERO</a></p>
                    <!-- 
                        All links in the footer should remain intact. 
                        Licenseing information is available at: http://bootstraptaste.com/license/
                        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Squadfree
                    -->
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="{{ asset("front/index/js/jquery.min.js") }}"></script>
    <script src="{{ asset("front/index/js/bootstrap.min.js") }}"></script>
    <script src="{{ asset("front/index/js/jquery.easing.min.js") }}"></script>	
	<script src="{{ asset("front/index/js/jquery.scrollTo.js") }}"></script>
	<script src="{{ asset("front/index/js/wow.min.js") }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset("front/index/js/custom.js") }}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>

</body>

</html>
