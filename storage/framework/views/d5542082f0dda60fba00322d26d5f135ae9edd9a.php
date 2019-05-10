<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cerebrozone</title>
	
 <link rel="icon" href="<?php echo e(url('images/favicon.png')); ?>" sizes="16x16">
 <link href="<?php echo e(url('css/animate.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(url('font/css/font-awesome.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(url('css/swiper.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(url('css/select2.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(url('css/bootstrap.min.css')); ?>" rel="stylesheet">
	<link href="<?php echo e(url('css/style.css')); ?>" rel="stylesheet">

</head>

<body>
	<div class="col-sm-12 col-xs-12 pad-0 top-nav">
		<div class="col-md-6 col-sm-12 col-xs-12 social-media-tray">

		</div>
		<div class="col-md-6 col-sm-12 col-xs-12  pad-0 ">
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12 text-center  pad-0 ">
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 text-center  pad-0 ">
				<a href="<?php echo e(url('')); ?>" class="email-link">hello@cerebrozone.com</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 text-center  pad-0 ">
				<a href="<?php echo e(url('')); ?>" class="contact-link"> <i class="fa fa-volume-control-phone" aria-hidden="true"></i>&nbsp;&nbsp;Call Us Now</a>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 text-center  pad-0 header-login-now">
				<?php if(auth()->guard()->guest()): ?>
				<a href="<?php echo e(url('login_page')); ?>" class="login-btn">Login </a> <?php else: ?>
				<p class="login-tray-key"><?php echo e(Auth::user()->email); ?>&nbsp;&nbsp;&nbsp;<i class="fa fa-angle-down carrot-sign" aria-hidden="true"></i></p>
				<div class="login-tray">
					<ul class="log-list col-xs-12  pad-top-15">
						<li class=" col-xs-12">
							<a href="<?php echo e(url('public/home')); ?>" class="links col-xs-12"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;Profile</a>
						</li>
						<li class=" col-xs-12">
							<a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="links col-xs-12"><i class="fa fa-sign-out" aria-hidden="true"></i>&nbsp;&nbsp;Logout</a>
							<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
								<?php echo csrf_field(); ?>
							</form>
						</li>
					</ul>
				</div>
				<?php endif; ?>
			</div>
		</div>

	</div>

	<div class="clearfix"></div>

	<div class="col-xs-12 main-banner-wrapper pad-0">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
					 aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
					<a class="navbar-brand" href="<?php echo e(url('/')); ?>"><img src="<?php echo e(url('images/logo.png')); ?>" class="img-responsive"></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


					<ul class="nav navbar-nav navbar-right" id="nav-active">
						<!-- <li><a href="<?php echo e(url('/')); ?>">Home</a></li>
						
						<li><a href="<?php echo e(url('services')); ?>">Services</a></li>
						<li><a href="<?php echo e(url('who_we_are')); ?>">Who We Are</a></li>
						<li><a href="<?php echo e(url('contact_us')); ?>">Contact Us</a></li> -->
					</ul>
				</div>
			</div>
		</nav>



		<?php echo $__env->yieldContent('content'); ?>



		<footer class="col-xs-12">
			<div class="container push-top-60 push-bot-60">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<h2 class="text-white text-center">Quick Links</h2>
					<ul class="footer-link push-top-30">
						<li><a href="<?php echo e(url('')); ?>">Home</a></li>
						<li><a href="<?php echo e(url('')); ?>">Who We Are</a></li>
						<li><a href="<?php echo e(url('')); ?>">Services</a></li>
						<li><a href="<?php echo e(url('')); ?>">FAQ</a></li>
						<li><a href="<?php echo e(url('')); ?>">Contact Us</a></li>
					</ul>

				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<h2 class="text-white  text-center ">Contact Info</h2>
					<p class="text-white text-center  push-top-30">
						4096 N Highland St,<br/> Arlington VA 32101,<br/> USA
					</p>
					<p class="text-white text-center  push-top-10">
						hello@cerebtozone.com
					</p>
					<p class="text-white text-center  push-top-10">
						800 1234 56 78
					</p>

				</div>
				<div class="col-md-4 col-sm-12 col-xs-12">
					<h2 class="text-white text-center">Cerebrozone</h2>
					<p class="text-white text-center push-top-30">
						If you or your business is facing a legal challenge that calls for sound advice, contact us today to arrange a free consultation
						with an attorney.
					</p>

				</div>

			</div>
			<div class="container copy-rights">
				<!-- <p class="copy">Powered By <a href="<?php echo e(url('http://redomni.com')); ?>" target="_blank">Red<span class="red">Omni</span></a></p> -->

			</div>
		</footer>




		<script src="<?php echo e(url('js/jquery-3.3.1.min.js')); ?>"></script>
		<script src="<?php echo e(url('js/bootstrap.min.js')); ?>"></script>




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

		<script src="<?php echo e(url('js/swiper.min.js')); ?>"></script>


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
		
			<script src="<?php echo e(url('js/jquery.counterup.min.js')); ?>"></script>
		 <script>
    		$('.count').counterUp({
   delay: 10,
                time: 1000
                
            });
		
		
		</script>
		
		
		
		

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5c73cf563341d22d9ce5f51f/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

		<?php echo $__env->yieldContent('js'); ?>
</body>

</html>
<?php /* C:\xampp\htdocs\SriCourses\resources\views/layouts/app.blade.php */ ?>