 
<?php $__env->startSection('content'); ?>

<div class="title-wrapper-2" style="background-image:url('images/key.jpg')">
	<div class="display-table full-width full-height mask">

		<div class="table-cell v-align-b full-width ">
			<div class="container">
				<h2 class="title-tag ">Login Or SignUp</h2>
				<p class="breadcrum pad-15"><a href="<?php echo e(url('')); ?>" class="text-white">Home</a> <span class="text-theme-color-1">/</span> <span class="text-theme-color-1">Login Now</a></p>
			</div>
		</div>
	</div>
</div>


</div>	 
	 
 
<?php if($errors->any()): ?>
<div class="alert alert-danger">
	<ul>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<li><?php echo e($error); ?></li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>
</div>
<?php endif; ?>
<?php if(session()->get('success')): ?>
<div class="alert alert-success">
	<?php echo e(session()->get('success')); ?>

</div><br /> <?php endif; ?>

<section class="col-sm-12 col-xs-12 log-wrapper-1">
	<div class="container push-top-100 push-bot-100	">
		<div class="row">
		<div class="col-md-6 col-sm-12 col-xs-12">
			 <h3 class="text-black">Sign Up</h3>
			<div class="col-sm-12 col-xs-12 pad-2">
				<form action="<?php echo e(url('save_student')); ?>" method="POST" class="col-sm-12 col-xs-12 client-fill" enctype="multipart/form-data">
					<?php echo e(csrf_field()); ?>

					<p class="text-black push-top-15 ">
						First Name
					</p>
					<input name="f_name" required class="form-control" type="text" />
					<p class="text-black push-top-15 ">
						Last Name
					</p>
					<input name="l_name" required class="form-control" type="text" />
					<p class="text-black push-top-15">
						Email
					</p>
					<input required name="email" class="form-control" type="email" />

					<p class="text-black push-top-15">
						Password
					</p>
					<input name="password" required class="form-control pass-filed" type="password" />

					<button type="submit" class="btn btn-default black center-block push-top-15">Sign Up</button>

				</form>

				</div>

		</div>

		<div class="col-md-6 col-sm-12 col-xs-12 login">

			
			<form method="POST" action="<?php echo e(url('login')); ?>" aria-label="<?php echo e(__('Login')); ?>" class="col-sm-12 col-xs-12 main-login-form  pad-top-60  pad-bot-60 ">
				<?php echo csrf_field(); ?>
				<h3 class="text-black">Login</h3>
				<p class="text-black push-top-15 ">
					Email Address
				</p>
				<input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : ''); ?>" name="email" value="<?php echo e(old('email')); ?>"
				 required autofocus>


				<p class="text-black push-top-15">
					Password
				</p>
				<input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : ''); ?>" name="password"
				 required />

				<button type="submit" class="btn btn-default black center-block push-top-15">Sign In</button> 
			</form>



		</div>
		</div>




	</div>
</section>
<?php $__env->stopSection(); ?>
 
<?php $__env->startSection('js'); ?>
	<script src="<?php echo e(url('js/select2.min.js')); ?>"></script>
	<script>
		$( ".password-gene" ).click(function() {
			 var randomstring = Math.random().toString(36).slice(-8);
			 
			 $(".pass-filed").val(randomstring);
			 $(".advice").show();
			  
		 });
	</script>

	<script>
		$(document).ready(function(){
			$('.js-example-basic-single').select2();
			$(".choise[type='radio']").click(function(){
				var radioValue = $(".choise[name='user']:checked").val();
				if(radioValue=="client"){
					  $(".client-fill").show();
						$(".consult-fill").hide();
				}
				else if(radioValue=="consult"){
					  $(".client-fill").hide();
						$(".consult-fill").show();
					
					
				}
				
			});
			
		});
	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Thashi Mudalige\Desktop\SriCourses\resources\views/loginPage.blade.php */ ?>