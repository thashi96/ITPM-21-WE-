 
<?php $__env->startSection('content'); ?>
<div class="container mt-3">
  <div class="row">
  <div style="margin-top:150px" class="col-lg-8">
      <a class="img-preview d-block shadow-lg rounded mb-4" target="_blank" href="/previews/stylish-portfolio/">
      <img class="img-fluid rounded" src="<?php echo e(url('images/courses/'.$course_details[0]->image)); ?>" alt="Free Bootstrap Portfolio Theme - Stylish Portfolio">
      <div class="overlay d-flex align-items-center justify-content-center rounded">
      </div>
      </a>

      <div class="card border-0 shadow mb-4 d-lg-none">
        <div class="card-body">
          <a target="_blank" href="" class="btn btn-block btn-primary mb-3 py-3" onclick="ga('send','event','Download','click','Stylish Portfolio')">
            <span>Add my Courses</span>
          </a>
          <hr>
          <a target="_blank" href="/previews/stylish-portfolio/" class="btn btn-block btn-outline-primary mb-3"><i class="far fa-browser fa-fw"></i> Sign Up</a>
          <a target="_blank" href="https://github.com/BlackrockDigital/startbootstrap-stylish-portfolio" class="btn btn-block btn-outline-github"><i class="fab fa-github fa-fw"></i> View on GitHub</a>
        </div>
      </div>

<div class="card border-0 shadow mb-4">
  <div class="card-body">
    <h5 class="m-0"><?php echo e($course_details[0]->c_name); ?></h5>
    <hr>
    <p><?php echo e($course_details[0]->c_discription); ?></P>
  </div>
</div>

<div class="card border-0 shadow mb-4">
  <div class="card-body">
    <h5 class="m-0">Course Curriculum</h5>
    <hr>
    <ul class="mb-0">
    <?php $__currentLoopData = $course_resouces_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $values): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li><?php echo e($values->module_name); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
</div>
</div>

<div style="margin-top:150px" class="col-lg-4">

<div class="card border-0 shadow mb-4 text-center">
<div class="card-body">
<div class="small mb-2 font-weight-bold">ABC Institue</div>
<a class ="btn btn-info"target="_blank" href="" >Register Here</a>
</div>
</div>

<div class="card border-0 shadow mb-4">
<div class="card-body">
<div class="d-flex justify-content-between small">
<span class="font-weight-bold">Course Duration</span>
<span><i class="fa fa-pdf"></i> <a class="font-weight-bold" href="">365 Days</a></span>
</div>
<hr class="my-2">
<div class="d-flex justify-content-between small">
<span class="font-weight-bold">Materials</span>
<span>Oct 2, 2013</span>
</div>
<hr class="my-2">
<div class="d-flex justify-content-between small">
<span class="font-weight-bold">Certification</span>
<span>4.3.1</span>
</div>
<hr class="my-2">
<div class="d-flex justify-content-between small">
<span class="font-weight-bold">Last Updated</span>
<span>Feb 17, 2019</span>
</div>
<hr class="my-2">
</div>
</div>

<div class="card border-0 shadow mb-4">
<div class="card-body">
<div class="small mb-2 font-weight-bold">Need something more?</div>
<a class ="btn btn-info"target="_blank" href="" >Contact Us</a>
</div>
<div class="row">

<div class="col-6 mb-4">
<div class="item-preview">
</div>
</div>

</div>
</div>
</div>
</div>

</div>

</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Thashi Mudalige\Desktop\SriCourses\resources\views/main_course_page.blade.php */ ?>