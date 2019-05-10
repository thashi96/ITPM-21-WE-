 
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12"><br/>
    <form action="<?php echo e(url('search_question/')); ?>" method="post" enctype="multipart/form-data">
			<?php echo e(csrf_field()); ?>

        <input type="text" id="search" name="search" class="form-control" placeholder="Search.."/><br/>
        <button type="submit" class="btn btn-info btn-xs">search</button>
    </form> 
        <h4>Top Question<h4/><br/>
        <?php if(count($errors) > 0): ?>
        <div class = "alert alert-danger alert-dismissible fade in">
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
      <?php endif; ?>
      <?php if(session()->has('message')): ?>
        <div class="alert alert-success">
            <p><?php echo e(session()->get('message')); ?></p>
        </div>
      <?php endif; ?>
      <br/>
      <?php $__currentLoopData = $q_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card border-0 shadow mb-4">
            <div class="card-body">
                <div class="row">
                    <!--answers and view count-->
                    <div class= "col-md-8">
                        <div class="flex-container">
                            <div class="col">Answers</div>
                            <div class="col">views</div>
                            <!-- add answers and view count-->
                        </div>
                    </div>
                    <!--title-->
                     <div class="col">   
                        <a href="<?php echo e(url('question_page/'.$item->qid,$item->sid)); ?>"><h5><?php echo e($item->title); ?></h5></a>
                        <p ><?php echo e(str_limit($item ->body, $limit = 50, $end = '...')); ?></p>
                     </div>
                    <!--tags-->   
                    <!--time in minites-->  
                </div>   
            </div>
        </div>
     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.stu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Thashi Mudalige\Desktop\ITPM (WE_19_21)\SriCourses\resources\views/students/top_question.blade.php */ ?>