 
<?php $__env->startSection('content'); ?>

    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <h5 class="m-0"><?php echo e($get_q[0]->title); ?></h5></br>
            <p><?php echo e($get_q[0]->body); ?></p>
            <p text-align="right"><?php echo e($stu_details[0]->f_name); ?> <?php echo e($stu_details[0]->l_name); ?></p>
        </div>
        <hr>
        <!--view comment part-->
        <div class="card-body">
        <?php $__currentLoopData = $commy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p><?php echo e($item->comment); ?> - <?php echo e($item->f_name); ?> <?php echo e($item->l_name); ?> </p></br>            
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <!--add comment part-->
        <div class="card-body">
        <form method="post" action="<?php echo e(url('save_comments')); ?>" >
            <?php echo e(csrf_field()); ?>

            <!--button comment-->  
            <input type="text" id="comment" name="comment" style="background-color:gainsboro;color:black" class="form-control" placeholder="Enter Comment"/>
            <div class="modal-footer">
                    <button type="submit" class="btn btn-info btn-xs">Add comment</button>
            </div>
        
        <input type="hidden" name="qid" value="<?php echo e($get_q[0]->qid); ?>">
         </form>
        </div>
      
    </div>
    <hr>
      
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <!--view answer part-->
            <h5>Your Answers</h5>
            <?php $__currentLoopData = $ansy; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card-body">
            <p><?php echo e($item->answer); ?></p></br>
            <p text-align="right"><?php echo e($item->f_name); ?> <?php echo e($item->l_name); ?></p>
            </div>
            <hr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <!--add answer part-->
            <form method="post" action="<?php echo e(url('save_answers')); ?>" >
                <?php echo e(csrf_field()); ?>

                <textarea id="answer" name="answer"placeholder="Enter answer" style="height:200px;background-color:	gainsboro;color:black"></textarea><br/>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-info btn-xs">Post Answer</button>
                </div>
                <input type="hidden" name="qid" value="<?php echo e($get_q[0]->qid); ?>">
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.stu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Thashi Mudalige\Desktop\ITPM (WE_19_21)\SriCourses\resources\views/students/question.blade.php */ ?>