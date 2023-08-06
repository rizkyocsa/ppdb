<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<!-- Document Meta
    ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!--IE Compatibility Meta-->
	<meta name="author" content="zytheme"/>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="Multi-purpose Business html5 landing page">
	<link href="{{ asset('welcome/images/favicon/favicon.ico') }}" rel="icon">

	<!-- Fonts
    ============================================= -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CMerriweather:300,300i,400,400i,700,700i,900,900i' rel='stylesheet' type='text/css'>

	<!-- Stylesheets
    ============================================= -->
	<link href="{{ asset('welcome/css/external.css') }}" rel="stylesheet">
	<link href="{{ asset('welcome/css/bootstrap.min.css') }}" rel="stylesheet">	
	<link href="{{ asset('welcome/css/style.css') }}" rel="stylesheet">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!-- [if lt IE 9]> -->
      <script src="{{ asset('welcome/js/html5shiv.js') }}"></script>
      <script src="{{ asset('welcome/js/respond.min.js') }}"></script>
    <!-- <![endif] -->

	<!-- Document Title
    ============================================= -->
	<title>PPDB | SD Negeri Selajambe 4</title>
</head>

<body class="body-scroll">
	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="wrapper clearfix">	<!-- Header
        ============================================= -->
		<header id="navbar-spy" class="header header-1 header-transparent header-fixed">

			<nav id="primary-menu" class="navbar navbar-fixed-top">
				<div class="container">
					<div class="navbar-header">
						<a class="logo" href="index-2.html">
						<img class="logo-dark" src="{{ asset('welcome/images/logo/logo-dark.png') }}" alt="appy Logo">
						<img class="logo-light" src="{{ asset('welcome/images/logo/logo-light.png') }}" alt="appy Logo">
						</a>
					</div>
					<!--/.nav-collapse -->
				</div>
			</nav>

		</header><!-- Slider #1
=== === === === === === === === === === === === === === -->
<section id="slider" class="section slider">
	<div class="slide--item bg-overlay bg-overlay-dark">
		<div class="bg-section">
			<img src="{{asset('image/bg.jpeg')}}" alt="bg">
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 text-center wow fadeInUp" data-wow-duration="1s">
					<div class="slide--headline">Selamat datang</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 text-center wow fadeInUp" data-wow-duration="1s">
					<div class="slide--bio">This should be used to tell a story and let your users know a little more about your service.</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 text-center wow fadeInUp" data-wow-duration="1s">
					<div class="slide--action">
						<a class="btn btn--primary btn--bordered" href="{{ route('login') }}">Daftar</a>
					</div>
				</div>
			</div>
			<!-- .row end -->
		</div>
		<!-- .container end -->
	</div>
	<!-- .slide-item end -->
</section>
<!-- #slider end -->

<!-- Counter #1
=== === === === === === === === === === === === === === -->
<section id="counter1" class="counter">
	<div class="container">
		<div class="counter-container">
			<div class="row">
				<!-- count #1 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="count-box">
						<div class="count-icon">
							<i class="icon icon-noun_740327_cc"></i>
						</div>
						<div class="count-content">
							<div class="counting">821</div>
							<div class="count-title">Cases won</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->

				<!-- count #2 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="count-box">
						<div class="count-icon">
							<i class="icon icon-noun_740337_cc"></i>
						</div>
						<div class="count-content">
							<div class="counting">189</div>
							<div class="count-title">Skilled lawyers</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->

				<!-- count #3 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="count-box">
						<div class="count-icon">
							<i class="icon icon-noun_740291_cc"></i>
						</div>
						<div class="count-content">
							<div class="counting">2630</div>
							<div class="count-title">Happy clients</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->

				<!-- count #4 -->
				<div class="col-xs-12 col-sm-6 col-md-3">
					<div class="count-box">
						<div class="count-icon">
							<i class="icon icon-noun_740322_cc"></i>
						</div>
						<div class="count-content">
							<div class="counting">540</div>
							<div class="count-title">Great Rewards</div>
						</div>
					</div>
				</div>
				<!-- .col-md-3 end -->
			</div>
			<!-- .row end -->
		</div>
	</div>
	<!-- .container end -->
</section>
<!-- #counter1 end -->

<!-- About
=== === === === === === === === === === === === === === -->
<section id="about" class="section about pb-0">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
				<img class="img-responsive center-block" src="{{ asset('welcome/images/team/team-4.png') }}" alt="ipad"/>
			</div>
			<!-- .col-md-6 end -->
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-1">
				<div class="heading heading-1 mt-70 wow fadeInUp" data-wow-duration="1s">
					<h2 class="heading--title">Tentang SDN Selajambe 4</h2>
					<div class="heading--divider"></div>
				</div>
				<div class="about-content wow fadeInUp" data-wow-duration="1s">
					<p>SD Negeri Selajambe 4 beralamat di Jalan Selajambe Kp. Pasirparahu, Desa Selajambe Kecamatan Sukaluyu Kabupaten Cianjur Propinsi Jawa Barat. SD Negeri Selajambe 4 mulai beroperasi pada tahun pelajaran 1975/1976 atas dasar Instruksi Presiden Republik Indonesia (Inpres) nomor 10/1973 tentang Program Pembangunan Gedung SD dan tercatat SD Negeri Selajambe 4 memilik nomor statistik sekolah (NSS) 101020704036.  Saat itu SD Negeri Selajambe 4 dikenal dengan nama SD INPRES karena didirikan atas dasar Program Intruksi Presiden diatas dan juga merupakan sekolah imbas dari SD Induk yaitu SD Negeri Selajambe 1 dan 2. Mengingat wilayah desa selajambe sangat luas saat itu masih berada diwilayah Kecamatan Ciranjnag belum ada pemekaran desa dan kecamatan sedangkan sarana pendidikan formal setingkat SD di wilayah desa selajambe baru ada 3 maka mengacu kepada Inpres tersebut diatas, atas inisiatip pemerintah desa selajambe dibawah kepemimpinan Kades Appandi serta masyarakat Kp. Pasirparahu dan Kamiran mengajukan kebutuhan sarana pendidikan tersebut sehingga tahun 1974 mulailah dibangun SD Inpres Selajambe 4 dan selesai pembangunan pada tahun 1975. Maka untuk tahun pelajaran pertama ditetapkan yaitu tahun 1975-1976.</p>
					<p>Euis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupida.</p>
					<!-- <img class="signture" src="{{ asset('welcome/images/background/signture.png') }}" alt="signture"> -->
				</div>
			</div>
			<!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #feature2 end -->
<!-- Feature #2
=== === === === === === === === === === === === === === -->
<section id="feature2" class="section feature feature-2 feature-left bg-white mb-60">
	<div class="container">
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
					<h2 class="heading--title">Visi</h2>
					<p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice  eiusmod tempor incidide labeore dolore magna.</p>
					<div class="heading--divider mb-80 heading--center"></div>
				</div>
				<div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
					<h2 class="heading--title">Misi</h2>
					<p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice  eiusmod tempor incidide labeore dolore magna.</p>
					<div class="heading--divider mb-80 heading--center"></div>
				</div>
			</div>
			<!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
		<div class="row">
			<!-- Panel #1 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
						<i class="icon icon-noun_740324_cc"></i>
					</div>
					<div class="feature--content">
						<h3>Criminal Law</h3>
						<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->

			<!-- Panel #2 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
						<i class="icon icon-noun_740303_cc"></i>
					</div>
					<div class="feature--content">
						<h3>Real Estate Law</h3>
						<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->

			<!-- Panel #3 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
						<i class="icon icon-noun_741284_cc"></i>
					</div>
					<div class="feature--content">
						<h3>Family Law</h3>
						<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->
		
			<!-- Panel #4 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
						<i class="icon icon-noun_741298_cc"></i>
					</div>
					<div class="feature--content">
						<h3>International Law</h3>
						<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->

			<!-- Panel #5 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
						<i class="icon icon-noun_741291_cc"></i>
					</div>
					<div class="feature--content">
						<h3>Financial Law</h3>
						<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->

			<!-- Panel #6 -->
			<div class="col-xs-12 col-sm-12 col-md-4">
				<div class="feature-panel wow fadeInUp" data-wow-duration="1s">
					<div class="feature--icon">
						<i class="icon icon-noun_740314_cc"></i>
					</div>
					<div class="feature--content">
						<h3>Technology Law</h3>
						<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
					</div>
				</div>
				<!-- .feature-panel end -->
			</div>
			<!-- .col-md-4 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #feature2 end -->
<!-- Team #1
=== === === === === === === === === === === === === === -->
<section id="team" class="team team-1">
	<div class="container">
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
					<h2 class="heading--title">Guru SDN Selajambe 4</h2>
					<div class="heading--divider mb-80 heading--center"></div>
				</div>
			</div>
			<!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
		<div class="row">
			<!-- Member #1 -->
			<div class="col-xs-12 col-sm-4 col-md-4">
				@foreach($guru as $data)
				<div class="member">
					<div class="member-img">
						<img src="{{ asset('welcome/images/team/team-1.jpg') }}" alt="member"/>
					</div>
					<!-- .member-img end -->
					<div class="member-info">
						<h5>{{ $data->judul }}</h5>
						<h6>{{ $data->sub-judul }}</h6>
					</div>
					<!-- .member-info end -->
				</div>
				@endforeach
				<!-- .member end -->
			</div>
			<!-- .col-md-3 end -->
		</div>
	</div>
</section> <!-- #team end  -->
<!-- Banner #3
=== === === === === === === === === === === === === === -->
<section id="banner3" class="bg-white pt-0 pb-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-5 pr-0 pl-0">
				<div class="col-img  bg-overlay">
					<div class="bg-section">
						<img src="{{ asset('welcome/images/background/bg-1.jpg') }}" alt="Background"/>
					</div>
				</div>
			</div>
			<!-- .col-md-6 end-->
			<div class="col-xs-12 col-sm-12 col-md-7 col-content pl-100">
				<div class="row clearfix">
					<div class="col-xs-12 col-sm-12 col-md-12">
						<div class="heading heading-1 wow fadeInUp" data-wow-duration="1s">
							<h2 class="heading--title">Why Hire Us ?</h2>
							<p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice elite sede eiusmod tempor incidide labeore dolore magna.</p>
							<div class="heading--divider mb-80"></div>
						</div>
					</div>
					<!-- .col-md-6 end -->
				</div>
				<!-- .row end -->
				<div class="row mb-50">
					<!-- Panel #1 -->
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="feature-panel">
							<div class="feature--icon">
								<i class="icon icon-noun_740300_cc"></i>
							</div>
							<div class="feature--content">
								<h3>Exclusively Areas</h3>
								<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
							</div>
						</div>
						<!-- .feature-panel end -->
					</div>
					<!-- .col-md-4 end -->

					<!-- Panel #2 -->
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="feature-panel">
							<div class="feature--icon">
								<i class="icon icon-noun_741355_cc"></i>
							</div>
							<div class="feature--content">
								<h3>Group of Lawyers</h3>
								<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
							</div>
						</div>
						<!-- .feature-panel end -->
					</div>
					<!-- .col-md-4 end -->

				</div>
				<!-- .row end -->
				<div class="row">
					<!-- Panel #3 -->
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="feature-panel">
							<div class="feature--icon">
								<i class="icon icon-noun_740296_cc"></i>
							</div>
							<div class="feature--content">
								<h3>Cases Results</h3>
								<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
							</div>
						</div>
						<!-- .feature-panel end -->
					</div>
					<!-- .col-md-4 end -->

					<!-- Panel #4 -->
					<div class="col-xs-12 col-sm-6 col-md-6">
						<div class="feature-panel">
							<div class="feature--icon">
								<i class="icon icon-noun_741305_cc"></i>
							</div>
							<div class="feature--content">
								<h3>Experts in Law</h3>
								<p>Lorem ipsum dolor sit amet, conse adipise elit, sed eiusmod tempor incidide.</p>
							</div>
						</div>
						<!-- .feature-panel end -->
					</div>
					<!-- .col-md-4 end -->
				</div>
				<!-- .row end -->
			</div>
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #banner3 end -->
<!-- Testimonial #2
=== === === === === === === === === === === === === === -->
<section id="testimonial" class="testimonial">
	<div class="container">
		<div class="row clearfix">
			<div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
				<div class="heading heading-1 text--center wow fadeInUp" data-wow-duration="1s">
					<h2 class="heading--title">Clients Feedback</h2>
					<p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice elite sede eiusmod tempor incidide labeore dolore magna.</p>
					<div class="heading--divider mb-80 heading--center"></div>
				</div>
			</div>
			<!-- .col-md-6 end -->
		</div>
		<!-- .row end -->
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="carousel" data-slide="3" data-slide-res="2" data-autoplay="true" data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
					<!-- Testimonial #1 -->
					<div class="testimonial-panel">
						<div class="testimonial--meta-img">
							<img src="{{ asset('welcome/images/testimonial/1.png') }}" alt="Testimonial Author">
						</div>
						<div class="testimonial--body">
							<p>“Legal represented me on a very serious matter where I was looking at significant prison time. Immediately, I knew that I was in good hands.”</p>
						</div>
						<!-- .testimonial-body end -->
						<div class="testimonial--meta">
							<h4><span>-</span> Steve Martin</h4>
						</div>
						<!-- .testimonial-meta end -->
					</div>
					<!-- .testimonial-panel end -->

					<!-- Testimonial #2 -->
					<div class="testimonial-panel">
						<div class="testimonial--meta-img">
							<img src="{{ asset('welcome/images/testimonial/2.png') }}" alt="Testimonial Author">
						</div>
						<div class="testimonial--body">
							<p>“Legal represented me on a very serious matter where I was looking at significant prison time. Immediately, I knew that I was in good hands.”</p>
						</div>
						<!-- .testimonial-body end -->
						<div class="testimonial--meta">
							<h4><span>-</span> Maya Jonson</h4>
						</div>
						<!-- .testimonial-meta end -->
					</div>
					<!-- .testimonial-panel end -->

					<!-- Testimonial #3 -->
					<div class="testimonial-panel">
						<div class="testimonial--meta-img">
							<img src="{{ asset('welcome/images/testimonial/3.png') }}" alt="Testimonial Author">
						</div>
						<div class="testimonial--body">
							<p>“Legal represented me on a very serious matter where I was looking at significant prison time. Immediately, I knew that I was in good hands.”</p>
						</div>
						<!-- .testimonial-body end -->
						<div class="testimonial--meta">
							<h4><span>-</span> Mark Smith</h4>
						</div>
						<!-- .testimonial-meta end -->
					</div>
					<!-- .testimonial-panel end -->


					<!-- Testimonial #4 -->
					<div class="testimonial-panel">
						<div class="testimonial--meta-img">
							<img src="{{ asset('welcome/images/testimonial/2.png') }}" alt="Testimonial Author">
						</div>
						<div class="testimonial--body">
							<p>“Legal represented me on a very serious matter where I was looking at significant prison time. Immediately, I knew that I was in good hands.”</p>
						</div>
						<!-- .testimonial-body end -->
						<div class="testimonial--meta">
							<h4><span>-</span> Mark Smith</h4>
						</div>
						<!-- .testimonial-meta end -->
					</div>
					<!-- .testimonial-panel end -->
				</div>
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section> <!-- .testimonial2 end -->
<!-- Clients Carousel Section
=== === === === === === === === === === === === === === -->
<section id="clients" class="clients clients-carousel bg-theme">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="carousel carousel-dots" data-slide="5" data-slide-res="2" data-autoplay="false" data-nav="false" data-dots="false" data-space="30" data-loop="true" data-speed="800">
					<!-- Client #1 -->
					<div class="client">
						<img class="center-block" src="{{ asset('welcome/images/clients/1.jpg') }}" alt="client">
					</div>

					<!-- Client #2 -->
					<div class="client">
						<img class="center-block" src="{{ asset('welcome/images/clients/2.jpg') }}" alt="client">
					</div>

					<!-- Client #3 -->
					<div class="client">
						<img class="center-block" src="{{ asset('welcome/images/clients/3.jpg') }}" alt="client">
					</div>

					<!-- Client #4 -->
					<div class="client">
						<img class="center-block" src="{{ asset('welcome/images/clients/4.jpg') }}=" alt="client">
					</div>

					<!-- Client #5 -->
					<div class="client">
						<img class="center-block" src="{{ asset('welcome/images/clients/5.jpg') }}=" alt="client">
					</div>
					<!-- Client #3 -->
					<div class="client">
						<img class="center-block" src="{{ asset('welcome/images/clients/3.jpg') }}" alt="client">
					</div>

					<!-- Client #4 -->
					<div class="client">
						<img class="center-block" src="{{ asset('welcome/images/clients/4.jpg') }}" alt="client">
					</div>
				</div>
			</div>
			<!-- .col-md-12 end -->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #clients end -->

<!-- Banner 
=== === === === === === === === === === === === === === -->
<section id="banner" class="section cta pt-0 pb-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-7 col-content pl-100">
				<div class="heading heading-1 wow fadeInUp" data-wow-duration="1s">
					<h2 class="heading--title">Free Consultation</h2>
					<p class="heading--desc">Lorem ipsum dolor amet, consectetur adipisice elite sede eiusmod tempor incidide labeore dolore magna.</p>
					<div class="heading--divider mb-80"></div>
				</div>
				<div class="form-request">
					<div class="row">
						<form class="mb-0">
							<div class="col-xs-12 col-sm-12 col-md-6">
								<input type="text" class="form-control" name="your-name" placeholder="Your Name">
							</div>
							<!-- .col-md-6 end -->
							<div class="col-xs-12 col-sm-12 col-md-6">
								<input type="email" class="form-control" name="your-email" placeholder="Your Email">
							</div>
							<!-- .col-md-6 end -->
							<div class="col-xs-12 col-sm-12 col-md-12">
								<select class="form-control">
									<option>Practice Area</option>
									<option>Criminal Law</option>
									<option>International Law</option>
									<option>Financial Law</option>
								</select>
							</div>
							<!-- .col-md-12 end -->
							<div class="col-xs-12 col-sm-12 col-md-12">
								<textarea class="form-control" name="your-message" rows="3" placeholder="Your Message"></textarea>
							</div>
							<!-- .col-md-12 end -->
							<div class="col-xs-12 col-sm-12 col-md-6">
								<input type="submit" class="btn btn--primary" value="send request">
							</div>
							<!-- .col-md-6 end -->
						</form>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-5 pr-0 pl-0">
				<div class="col-img">
					<div class="bg-section">
						<img src="{{ asset('welcome/images/background/bg-2.jpg') }}" alt="Background"/>
					</div>
				</div>
			</div>
			<!-- .col-md-6 end-->
		</div>
		<!-- .row end -->
	</div>
	<!-- .container end -->
</section>
<!-- #banner2 end -->

		<!-- Footer #5
============================================= -->
		<footer id="footer" class="footer">
		<!-- Widget Section
	============================================= -->
	<div class="footer-widget">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-4 footer--widget-about">
					<div class="footer--widget-content">
						<img class="mb-20" src="{{ asset('welcome/images/logo/logo-light.png') }}" alt="logo">
						<p>Proin gravida nibh vel velit auctor aliquet anean lorem quis. bindum auctor, nisi elite conset ipsums sagtis id duis sed odio sit.</p>
						<div class="clearfix"></div>
						<div class="social">
							<a class="share-twitter" href="#"><i class="fa fa-twitter"></i></a>
							<a class="share-facebook" href="#"><i class="fa fa-facebook"></i></a>
							<a class="share-linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="share-pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
						</div>
					</div>
				</div><!-- .col-md-4 end -->
				<div class="col-xs-12 col-sm-6 col-md-4 footer--widget-recent">
					<div class="footer--widget-title">
						<h5>Blog Posts</h5>
					</div>
					<div class="footer--widget-content">
						<div class="entry">
							<div class="entry--img">
								<img src="{{ asset('welcome/images/blog/thumb/1.jpg') }}" alt="entry">
							</div>
							<div class="entry--content">
								<div class="entry--title">
									<a href="#">Four ways to cheer yourself up on the Blue Monday!</a>
								</div>
								<div class="entry--meta">
									<span>Jan 20, 2017</span>
									<span><i class="fa fa-comment-o"></i> 6 comments</span>
								</div>
							</div>
						</div><!-- .entry end -->
						
						<div class="entry">
							<div class="entry--img">
								<img src="{{ asset('welcome/images/blog/thumb/2.jpg') }}" alt="entry">
							</div>
							<div class="entry--content">
								<div class="entry--title">
									<a href="#">Old cameras can capture images better than nowdays camera!</a>
								</div>
								<div class="entry--meta">
									<span>Jan 20, 2017</span>
									<span><i class="fa fa-comment-o"></i> 3 comments</span>
								</div>
							</div>
						</div><!-- .entry end -->
						
						<div class="entry">
							<div class="entry--img">
								<img src="{{ asset('welcome/images/blog/thumb/3.jpg') }}" alt="entry">
							</div>
							<div class="entry--content">
								<div class="entry--title">
									<a href="#">Four ways to cheer yourself up on the Blue Monday!</a>
								</div>
								<div class="entry--meta">
									<span>Jan 20, 2017</span>
									<span><i class="fa fa-comment-o"></i> 5 comments</span>
								</div>
							</div>
						</div><!-- .entry end -->
					</div>
				</div><!-- .col-md-4 end -->
				<div class="col-xs-12 col-sm-6 col-md-4 footer--widget-contact">
					<div class="footer--widget-title">
						<h5>Get In Touch</h5>
					</div>
					<div class="footer--widget-content">
						<ul class="list-unstyled mb-0">
							<li><i class="fa fa-map-marker"></i> 1220 Petersham town, Wardll St New South Wales Australia PA 6550.</li>
							<li><i class="fa fa-phone"></i> (04) 491 570 110</li>
							<li><i class="fa fa-envelope-o"></i> contact@zytheme.com</li>
						</ul>
					</div>
				</div><!-- .col-md-4 end -->
			</div>
		</div><!-- .container end -->
	</div><!-- .footer-widget end -->
			<!-- Copyrights
	============================================= -->
		<div class="footer--copyright">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 text--center">
						<span>&copy; 2017, All rights reserved.</span>
					</div>
				</div>
			</div>
			<!-- .container end -->
			</div>
		</footer>
		</div>
		<!-- #wrapper end -->

		<!-- Footer Scripts
============================================= -->
		<script src="{{ asset('welcome/js/jquery-2.2.4.min.js') }}"></script>
		<script src="{{ asset('welcome/js/plugins.js') }}"></script>
		<script src="{{ asset('welcome/js/functions.js') }}"></script>
</body>
</html>