 
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-md-12"><br/>
     <h1>Post New Question<h3/><br/>
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
        <form method="post" action="<?php echo e(url('save_question')); ?>">
            <?php echo e(csrf_field()); ?>


            <input type="hidden" name="sid" value="<?php echo e($student_id); ?>">
            <!--title-->
            <div class="row">
                <div class="col-25"><label for="title">Title</label></div>
                <div class="col-75">
                    <input type="text" id="title" name="title" class="form-control" placeholder="Enter Title"/><br/>
                </div> 
            </div>   
            <!--body-->
            <div class="row">
                <div class="col-25"><label for="body">Body</label></div>
                    <br/>
                    <textarea id="body" name="body"placeholder="Enter question body" style="height:200px"></textarea><br/>
                </div> 
            </div> 
            <!--category-->
            <div class="row">
                <div class="col-25"><label for="category">Course Category</label></div>
            </div>
            <select name="category" id="category" class="form-control input-sm">
               
                    <?php $__currentLoopData = $c_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($item->cat_name); ?>"><?php echo e($item->cat_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           </select>  
            <!--tags -->
            <div class="row">
                <div class="col-25"><label for="tags">Add Tags</label></div>
            </div>
            <input type="text" class="form-control" id="tags" name = "tags[]" data-role="tagsinput"> 

            <!--button-->  
            <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Post Question</button>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.stu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Thashi Mudalige\Desktop\ITPM (WE_19_21)\SriCourses\resources\views/students/post_question.blade.php */ ?>