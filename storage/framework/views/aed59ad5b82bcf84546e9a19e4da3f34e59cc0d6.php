 
<?php $__env->startSection('content'); ?>

<main role="main">

<section id="slider" class="jumbotron text-center">
	<div class="container alert alert-secondary">
		<h1 class="jumbotron-heading">ABC INSTITUTE</h1>
		<p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
		<p>
			<a href="#" class="btn btn-primary my-2">Sign Up Here</a>
			<a href="#" class="btn btn-secondary my-2">Visit Here</a>
		</p>
        <img style="background-repeat: no-repeat;background-size: cover;"src="" height="400">
	</div>
	<div class="d-flex justify-content-center">
            <div id="custom-search-input">
			<form action="<?php echo e(url('search_course')); ?>" method="post" enctype="multipart/form-data">
			<?php echo e(csrf_field()); ?>

                <div class="input-group col-md-12">
                    <input type="text" class="search-query form-control" name="search_word" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-danger" type="submit">
                            <span class=" fa fa-search"></span>
                        </button>
                    </span>
                </div>
			</form>
    </div>
    </div>
			
</section>

<div class="album py-5 bg-light">
	<div class="container">
	<h3 style="text-align:center" class="container alert alert-secondary">Newly Added Courses</h3>
		<div class="row">
		<?php $__currentLoopData = $course_des; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-4">
				<div class="card mb-4 shadow-sm">
				<img class="card-img-top" src="<?php echo e(url('images/courses/'.$values->image)); ?>">
					<div class="card-body">
                        <h4><?php echo e($values->c_name); ?></h4>
                        <hr>
						<p class="card-text"><?php echo e($values->c_discription); ?></p>
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
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\SriCourses\resources\views/index.blade.php */ ?>