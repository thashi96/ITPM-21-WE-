<!DOCTYPE html>

<html lang="en">
<header>
<style>
    .circle-tile {
    margin-bottom: 15px;
    text-align: center;
}
.circle-tile-heading {
    border: 3px solid rgba(255, 255, 255, 0.3);
    border-radius: 100%;
    color: #FFFFFF;
    height: 80px;
    margin: 0 auto -40px;
    position: relative;
    transition: all 0.3s ease-in-out 0s;
    width: 80px;
}
.circle-tile-heading .fa {
    line-height: 80px;
}
.circle-tile-content {
    padding-top: 50px;
}
.circle-tile-number {
    font-size: 26px;
    font-weight: 700;
    line-height: 1;
    padding: 5px 0 15px;
}
.circle-tile-description {
    text-transform: uppercase;
}
.circle-tile-footer {
    background-color: rgba(0, 0, 0, 0.1);
    color: rgba(255, 255, 255, 0.5);
    display: block;
    padding: 5px;
    transition: all 0.3s ease-in-out 0s;
}
.circle-tile-footer:hover {
    background-color: rgba(0, 0, 0, 0.2);
    color: rgba(255, 255, 255, 0.5);
    text-decoration: none;
}
.circle-tile-heading.dark-blue:hover {
    background-color: #2E4154;
}
.circle-tile-heading.green:hover {
    background-color: #138F77;
}
.circle-tile-heading.orange:hover {
    background-color: #DA8C10;
}
.circle-tile-heading.blue:hover {
    background-color: #2473A6;
}
.circle-tile-heading.red:hover {
    background-color: #CF4435;
}
.circle-tile-heading.purple:hover {
    background-color: #7F3D9B;
}
.tile-img {
    text-shadow: 2px 2px 3px rgba(0, 0, 0, 0.9);
}

.dark-blue {
    background-color: #34495E;
}
.green {
    background-color: #16A085;
}
.blue {
    background-color: #2980B9;
}
.orange {
    background-color: #F39C12;
}
.red {
    background-color: #E74C3C;
}
.purple {
    background-color: #8E44AD;
}
.dark-gray {
    background-color: #7F8C8D;
}
.gray {
    background-color: #95A5A6;
}
.light-gray {
    background-color: #BDC3C7;
}
.yellow {
    background-color: #F1C40F;
}
.text-dark-blue {
    color: #34495E;
}
.text-green {
    color: #16A085;
}
.text-blue {
    color: #2980B9;
}
.text-orange {
    color: #F39C12;
}
.text-red {
    color: #E74C3C;
}
.text-purple {
    color: #8E44AD;
}
.text-faded {
    color: rgba(255, 255, 255, 0.7);
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
#dashboard{
    height:600px;
}
</style>
</header>


<head>

    <!-- Required meta tags -->

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>Admin ABC Institute</title>



    <!-- vendor css -->
    <link rel="stylesheet" href="<?php echo e(url('css/bootstrap.min.css')); ?>">

    <link href="<?php echo e(url('admin/lib/font-awesome/css/font-awesome.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/Ionicons/css/ionicons.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/jquery-switchbutton/jquery.switchButton.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/rickshaw/rickshaw.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin//lib/chartist/chartist.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/perfect-scrollbar/css/perfect-scrollbar.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/jquery-switchbutton/jquery.switchButton.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/highlightjs/github.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/select2/css/select2.min.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/jquery-toggles/toggles-full.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/jt.timepicker/jquery.timepicker.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/spectrum/spectrum.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/bootstrap-tagsinput/bootstrap-tagsinput.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/ion.rangeSlider/css/ion.rangeSlider.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('admin/lib/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css')); ?>" rel="stylesheet">

    <link href="<?php echo e(url('css/sweetalert.css')); ?>" type="text/css" rel="stylesheet" media="screen,projection">




    <!-- Bracket CSS -->

    <link rel="stylesheet" href="<?php echo e(url('admin/css/bracket.css')); ?>">



</head>



<body>



    <!-- ########## START: LEFT PANEL ########## -->

    <div class="br-logo"><a href=""><span></span>Admin Dashboard<span></span></a></div>

    <div class="br-sideleft overflow-y-auto">

    <div class="br-sideleft-menu">

<a href="http://127.0.0.1:8000" class="br-menu-link active">

    <div class="br-menu-item">

        <i class="menu-item-icon icon ion-ios-home-outline tx-22"></i>

        <span class="menu-item-label">Home</span>

    </div>

    <!-- menu-item -->

</a>
<a href="<?php echo e(url('/home')); ?>" class="br-menu-link">

    <div class="br-menu-item">

        <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>

        <span class="menu-item-label">Dashboard</span>

    </div>

    <!-- menu-item -->

</a>

<a href="#" class="br-menu-link">

    <div class="br-menu-item">

        <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>

        <span class="menu-item-label">Courses</span>

        <i class="menu-item-arrow fa fa-angle-down"></i>

    </div>

    <!-- menu-item -->

</a>

<!-- br-menu-link -->

<ul class="br-menu-sub nav flex-column">

    <li class="nav-item"><a href="<?php echo e(url('create_courses_page')); ?>" class="nav-link">Add New Courses</a></li>
</ul>

<a href="#" class="br-menu-link">

    <div class="br-menu-item">

        <i class="menu-item-icon ion-ios-redo-outline tx-24"></i>

        <span class="menu-item-label">Students</span>

        <i class="menu-item-arrow fa fa-angle-down"></i>

    </div>

    <!-- menu-item -->

</a>

<!-- br-menu-link -->

<ul class="br-menu-sub nav flex-column">

    <li class="nav-item"><a href="<?php echo e(url('view_profiles_page')); ?>" class="nav-link">User Profils(EDIT/DELETE)</a></li>
    <li class="nav-item"><a href="<?php echo e(url('student_create')); ?>" class="nav-link">Add New Student</a></li>
</ul>

<!-- br-menu-link -->

</div>

        <!-- br-sideleft-menu -->







        <br>

    </div>

    <!-- br-sideleft -->

    <!-- ########## END: LEFT PANEL ########## -->



    <!-- ########## START: HEAD PANEL ########## -->

    <div class="br-header">

        <div class="br-header-left">

            <div class="navicon-left hidden-md-down"><a id="btnLeftMenu" href=""><i class="icon ion-navicon-round"></i></a></div>

            <div class="navicon-left hidden-lg-up"><a id="btnLeftMenuMobile" href=""><i class="icon ion-navicon-round"></i></a></div>



            <!-- input-group -->

        </div>

        <!-- br-header-left -->

        <div class="br-header-right">

            <nav class="nav">

                <div class="dropdown">

                    <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">

              <span class="logged-name hidden-md-down"><?php echo e(Auth::user()->email); ?></span>

              <img src="http://via.placeholder.com/64x64" class="wd-32 rounded-circle" alt="">

              <span class="square-10 bg-success"></span>

                 </a>

                    <div class="dropdown-menu dropdown-menu-header wd-200">

                        <ul class="list-unstyled user-profile-nav">

                            <li><a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon ion-power"></i> Sign Out</a></li>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">

                                <?php echo csrf_field(); ?>

                            </form>

                        </ul>

                    </div>

                    <!-- dropdown-menu -->

                </div>

                <!-- dropdown -->

            </nav>

            

            <!-- navicon-right -->

        </div>

        <!-- br-header-right -->

    </div>

    <!-- br-header -->

    <!-- ########## END: HEAD PANEL ########## -->



    

    <!-- br-sideright -->

    <!-- ########## END: RIGHT PANEL ########## --->



    <!-- ########## START: MAIN PANEL ########## -->

    <div class="br-mainpanel">

        <div class="pd-2">

        </div>

        <!-- d-flex -->

        <div class="br-pagebody">



            <?php echo $__env->yieldContent('content'); ?>

        </div>

        <!-- br-pagebody -->

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
</div>

    <!-- br-mainpanel -->

    <!-- ########## END: MAIN PANEL ########## -->



    <script src="<?php echo e(url( 'admin/lib/jquery/jquery.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/popper.js/popper.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/bootstrap/bootstrap.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/moment/moment.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/jquery-ui/jquery-ui.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/jquery-switchbutton/jquery.switchButton.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/peity/jquery.peity.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/jquery.sparkline.bower/jquery.sparkline.min.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/d3/d3.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/js/bracket.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/js/ResizeSensor.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/select2/js/select2.min.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/jquery-toggles/toggles.min.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/jt.timepicker/jquery.timepicker.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/spectrum/spectrum.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/jquery.maskedinput/jquery.maskedinput.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/bootstrap-tagsinput/bootstrap-tagsinput.js')); ?> "></script>

    <script src="<?php echo e(url( 'admin/lib/ion.rangeSlider/js/ion.rangeSlider.min.js')); ?> "></script>

    <script type="text/javascript" src="<?php echo e(url('js/sweetalert.min.js')); ?>"></script> 




    <script>

        $(function(){

        'use strict'



        // FOR DEMO ONLY

        // menu collapsed by default during first page load or refresh with screen

        // having a size between 992px and 1299px. This is intended on this page only

        // for better viewing of widgets demo.

        $(window).resize(function(){

          minimizeMenu();

        });



        minimizeMenu();



        function minimizeMenu() {

          if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {

            // show only the icons and hide left menu label by default

            $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');

            $('body').addClass('collapsed-menu');

            $('.show-sub + .br-menu-sub').slideUp();

          } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {

            $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');

            $('body').removeClass('collapsed-menu');

            $('.show-sub + .br-menu-sub').slideDown();

          }

        }

      });



    </script>

    

   <?php echo $__env->yieldContent('js'); ?>
   
</body>



</html>
<?php /* C:\xampp\htdocs\SriCourses\resources\views/layouts/adm.blade.php */ ?>