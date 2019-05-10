<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ABC Institute Ltd</title>
	
 <!-- <link rel="icon" href="{{url('images/favicon.png')}}" sizes="16x16"> -->
 <link href="{{url('css/animate.min.css')}}" rel="stylesheet">
	<link href="{{url('font/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{url('css/swiper.min.css')}}" rel="stylesheet">
	<link href="{{url('css/select2.min.css')}}" rel="stylesheet">
	<link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">
	<link href="{{url('css/style.css')}}" rel="stylesheet">

<style>
.bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
			}
			
.footer-bottom {
    padding: 40px 0 30px;
    border-top: 1px solid #666;
    background: #1e1e1e;
}
.copyright-text p {
    color: #ccc;
    margin-top: 9px;
    margin-bottom: 0;
}
.social-link li {
    display: inline-block;
    margin: 0 5px;
}
.social-link li a {
    color: #ccc;
    border: 1px solid #ccc;
    width: 40px;
    height: 40px;
    line-height: 40px;
    border-radius: 50%;
    text-align: center;
    display: inline-block;
    font-size: 14px;
    transition: .5s;
}
#slider{
  background:url('images/slider2.jpg');
  background-color: #cccccc;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
	position: relative;
	padding:200px;
}
.card{
	color:black
}
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
			}

#course_page{
	margin:550px;
}
</style>

</head>

<body>
	<div class="col-sm-12 col-xs-12 pad-0 top-nav">
		<div class="col-md-6 col-sm-12 col-xs-12 social-media-tray">

		</div>
		<div class="col-md-6 col-sm-12 col-xs-12  pad-0 ">
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 text-center  pad-0 ">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 text-center  pad-0 header-login-now">
				
			</div>
		</div>

	</div>

	<div class="clearfix"></div>

	<div class="col-xs-12 main-banner-wrapper pad-0">
		<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
  <a class="navbar-brand" href="{{url('http://127.0.0.1:8000/')}}">ABC</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('http://127.0.0.1:8000/')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Courses</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Course Categories</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Social media</a>
          <a class="dropdown-item" href="#">Office Administration</a>
          <a class="dropdown-item" href="#">IT & Networking</a>
        </div>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="#" tabindex="-1">About Us</a>
      </li>
    </ul>
			@guest
				<a href="{{url('login_page')}}" class="btn btn-info">Login </a> @else
				<p class="login-tray-key">{{ Auth::user()->email }}&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-down carrot-sign" aria-hidden="true"></i></p>
				<div class="login-tray">
					<ul class="log-list col-xs-12  pad-top-15">
						<li class=" col-xs-12">
							<a href="{{url('/home')}}" class="links col-xs-12"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Profile</a>
						</li>
						<li class=" col-xs-12">
							<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="links col-xs-12"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</li>
					</ul>
				</div>
				@endguest
  </div>
</nav>

@yield('content')

<div class="footer-bottom">
<div class="container">
					<div class="row">
						<div class="col-sm-6 ">
							<div class="copyright-text">
								<p>CopyRight © 2017 Digital All Rights Reserved</p>
							</div>
						</div> <!-- End Col -->
						<div class="col-sm-6">							
							<ul class="social-link pull-right">
								<li><a href=""><span class="fa fa-facebook"></span></a></li>						
								<li><a href=""><span class="fa fa-instagram"></span></a></li>
								<li><a href=""><span class="fa fa-envelope"></span></a></li>
								<li><a href=""><span class="fa fa-mobile"></span></a></li>
								<li><a href=""><span class="fa fa-address-book"></span></a></li>
							</ul>							
						</div> <!-- End Col -->
					</div>
				</div>
</div>

<script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>

		<script type="text/javascript">
			$(function () {
	
	        var loc = window.location.href;
	         
	        $("#nav-active li a").each(function () {
	
	            if (this.href == loc) {
	
	                $(this).parents('#nav-active li').addClass('active');
	
	            }
	
	        });
	    });
		</script>

		<script>
			$( document ).ready(function() {
			$(".login-tray-key").click(function() {
			   $(".login-tray").toggleClass("open");
			    $(".login-tray-key").toggleClass("open");
			    
			});
		
		
		});
		</script>

		<script src="{{url('js/swiper.min.js')}}"></script>


		<!-- Initialize Swiper -->
		<script>
			var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      centeredSlides: true,
       effect: 'fade',
         loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
		</script>
		
		
		
	<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>	
		
		
		 <script>
              new WOW().init();
              </script>
		
		
		
		
		
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
		
			<script src="{{url('js/jquery.counterup.min.js')}}"></script>
		 <script>
    		$('.count').counterUp({
   delay: 10,
                time: 1000
                
            });
		
		
		</script>

		@yield('js')
</body>

</html>