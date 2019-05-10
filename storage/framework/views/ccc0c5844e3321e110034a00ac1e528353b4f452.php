<?php $__env->startSection('content'); ?>
<div id="dashboard" class="col-md-8 col-xs-12 pad-0">
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
					<input required name="email" class="form-control" type="email"  />

					<p class="text-black push-top-15">
						Password
					</p>
					<input name="password" required class="form-control pass-filed" type="password" />
					<br>
					<button type="submit" class="btn btn-success black center-block push-top-15">Submit</button>

				</form>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.adm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\SriCourses\resources\views/admins/student_profiles/add_new_student.blade.php */ ?>