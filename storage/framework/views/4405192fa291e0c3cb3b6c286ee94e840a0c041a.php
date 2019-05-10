<?php $__env->startSection('content'); ?>
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Student Update<small></small></h2>
                        <div class="clearfix"></div>
                    </div>

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
                        <?php echo e(session()->get('message')); ?>

                    </div>
                    <?php endif; ?>
                    <div class="x_content">
                        <form  action="<?php echo e(url('student_update/'.$stu_details[0]->s_id)); ?>" data-parsley-validate class="form-horizontal form-label-left" method="post" id="mydata" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?php echo e($stu_details[0]->f_name); ?>" type="text" id="f_name" required="required" name="f_name" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div><div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Last Name
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?php echo e($stu_details[0]->l_name); ?>" type="text" id="l_name" required="required" name="l_name" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?php echo e($stu_details[0]->email); ?>" type="email" id="email" required="required" name="email" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

                            <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                                <label for="password" class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    <?php if($errors->has('password')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('password')); ?></strong>
                                    </span>
                                    <?php endif; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="control-label col-md-3 col-sm-3 col-xs-12">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <input type="hidden" name="role_id" id="role_id" value="<?php echo e($stu_details[0]->role_id); ?>" />


                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script>
    $(".select3_single").select2({
        placeholder: "Select a User Type",
        allowClear: true
    });
    $(".select2_single").select2({
        placeholder: "Select a Gender",
        allowClear: true
    });
    $(document).ready(function () {
        /* Get the checkboxes values based on the class attached to each check box */
        $("#buttonClass").click(function () {
            getValueUsingClass();
        });

    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.adm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Thashi Mudalige\Desktop\ITPM (WE_19_21)\SriCourses\resources\views/admins/student_profiles/edit_profile.blade.php */ ?>