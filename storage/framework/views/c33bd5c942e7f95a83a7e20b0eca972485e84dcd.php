 
<?php $__env->startSection('content'); ?>

<main role="main">



<div class="album py-5 bg-light">
	<div class="container">
		<div class="row">
			<?php $__currentLoopData = $course_des; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
				<img class="card-img-top" src="<?php echo e(url('images/courses/'.$values->image)); ?>">
					<div class="card-body">
                        <h4><?php echo e($values->c_name); ?></h4>
                        <hr>
						<p class="card-text"></p>
						<div class="d-flex justify-content-between align-items-center">
							<div class="btn-group">
								<a class="btn btn-info" href="<?php echo e(url('course_page/'.$values->id)); ?>">View</a>
								<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
							</div>
							<small class="text-muted">9 mins</small>
						</div>
					</div>
				</div>
			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
		</div>
	</div>
</div>

</main>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.stu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\SriCourses\resources\views/students/add_courses.blade.php */ ?>