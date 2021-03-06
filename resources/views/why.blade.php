<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<html class="no-js" lang="en">
@include('_partial.header')
<body>
	<!-- Start preloading -->
	<div id="loading" class="loading-invisible">
		<div class="loading-center">
			<div class="loading-center-absolute">
				<div class="object" id="object_one"></div>
				<div class="object" id="object_two"></div>
				<div class="object" id="object_three"></div>
			</div>
			<p>Orion HealthCare Management System...</p>
		</div>
	</div>
	<!-- End preloading -->

	
	<div class="clearfix"></div>
	
    <!-- Start Navigation -->
    <nav class="navbar navbar-default navbar-sticky bootsnav">

        <!-- Start Top Search -->
        <div class="top-search">
            <div class="container">
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-search"></i></span>
                    <input type="text" class="form-control" placeholder="Type something ann hit enter">
                    <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
                </div>
            </div>
        </div>
        <!-- End Top Search -->

        <div class="container">            
            <!-- Start Header Navigation -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="{{ url('/')}}"><img src="{{ url('img/brand/logo-black.png') }}" class="logo" alt=""></a>
            </div>
            <!-- End Header Navigation -->

            <!-- Collect the nav links, forms, and other content for toggling -->
            @include('_partial.navbar')
        </div>   
    </nav>
    <!-- End Navigation -->
	
	<!-- Start inner page header -->
	<div class="innerheader-wrapp">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2><i class="fa  fa-angellist"></i> Why <span> Us</span></h2>
					<ol class="breadcrumb">
						<li><a href="{{ url('/')}}"><i class="fa fa-home"></i> Home</a></li>
						<li><a href="#"><i class="fa fa-clone"></i> About</a></li>
						<li class="active"><i class="fa fa-angellist"></i> Why Us</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<!-- End inner page header -->
	
	<div class="clearfix"></div>

	<!-- Start mission -->
	<div class="parallax white-bg padding-bot30" data-background="{{ url('img/parallax/bg06.jpg') }}" data-speed="0.5" data-size="50%">
		<div class="overlay"></div>
		<div class="container">
			<div class="content-parallax">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="section-heading text-center">
							<h5>Orion HealthCare Hospital Management System</h5>
                            <p><strong>Why Us</strong>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 owl-column-wrapp">
						<div class="recent-2column owl-carousel owl-theme">
							<!-- Start item 1 -->
							<div class="item">
								<div class="thumbnail content-only">
									<div class="content">
										<h4>1.OpenSource</h4>
										<p>
                                        <li>We are opensource, our source code is available at github  and transparent in both our processes and our software.</li>
                                        <li>Our software serves as a platform that empowers both users and implementers to innovate.</li>
										</p>
									</div>
								</div>
							</div>
                            <!-- Start item 2 -->
							<div class="item">
								<div class="thumbnail content-only">
									<div class="content">
										<h4>2. WebBased</h4>
										<p>
                                        <li>Our application is web based which means it can be accessed everywhere and anywhere and also its lightweight thus improving efficiency.</li>
										</p>
									</div>
								</div>
							</div>
                            <!-- Start item 3 -->
							<div class="item">
								<div class="thumbnail content-only">
									<div class="content">
										<h4>2. Lightweight And Platform Independent</h4>
										<p>
                                        <li>Orion HealthCare Hospital Management System is lightweight application and platform which means it can run on any platform and device no matter what kind of operating system installed.</li>
										</p>
									</div>
								</div>
							</div>
                            <!-- Start item 3 -->
							<div class="item">
								<div class="thumbnail content-only">
									<div class="content">
										<h4>4.Clients and Community-Driven </h4>
										<p>
                                        <li>We believe the best ideas come from people with different backgrounds, challenges and talents thus building a community where these people can come together and innovate.</li>
                                        
										</p>
									</div>
								</div>
							</div>
                            <!-- Start item 3 -->
							<div class="item">
								<div class="thumbnail content-only">
									<div class="content">
										<h4>5.Client Centered</h4>
										<p>
                                        <li>Orion HealthCare Hospital Management System  works in the most challenging health care delivery environments.</li>
                                        <li>Orion HealthCare Hospital Management System design decisions are driven by real, not perceived client problems.</li>                                     
										</p>
									</div>
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Mission -->

	
	<!-- Start footer -->

        @include('_partial.footer')

	<!-- End footer -->
	
	<!-- Start to top -->  
    <a href="#" class="toTop">
        <i class="fa fa-chevron-up"></i>
    </a>  
    <!-- End to top -->
	
	<!-- START JAVASCRIPT -->
    <!-- Placed at the end of the document so the pages load faster -->
    @include('_partial.scripts')
</body>

</html>
