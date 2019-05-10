 
<?php $__env->startSection('content'); ?>
<div class="br-section-wrapper">
              <?php if(session()->get('message')): ?>
              <div class="alert alert-success">
                  <?php echo e(session()->get('message')); ?>

              </div><br /> <?php endif; ?>
              <?php if($errors->any()): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
    
    <div class="form-layout form-layout-6">
       <form action="<?php echo e(url('save_couses')); ?>" method="POST" class="form-layout form-layout-6" enctype="multipart/form-data">
              <?php echo e(csrf_field()); ?>

            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                   Courses Category
                </div>
                <!-- col-4 -->
                <select class="col-7 col-sm-8" name="courses_category">
						<?php $__currentLoopData = $c_cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($item->cat_name); ?>"><?php echo e($item->cat_name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</select>
                <!-- col-8 -->
            </div>
            <!-- row -->
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Add New courses Name
                </div>
                <!-- col-4 -->
                <div class="col-7 col-sm-8">
                    <input id="course_name" name="course_name" type="text" class="form-control"  required>
                </div>
                <!-- col-8 -->
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Courses Code
                </div>
                <!-- col-4 -->
                <div class="col-7 col-sm-8">
                    <input id="course_code" name="course_code" type="text" class="form-control"  required>
                </div>
                <!-- col-8 -->
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Courses Discription
                </div>
                <!-- col-4 -->
                <div class="col-7 col-sm-8">
                    <textarea id="discription" name="discription" type="text" class="form-control" rows="4"  required>
                    </textarea>
                </div>
                <!-- col-8 -->
            </div>
            <div class="row no-gutters">
                <div class="col-5 col-sm-4">
                    Select Image
                </div>
                <!-- col-4 -->
                <div class="col-7 col-sm-8">
                    <input class="form-control" name="file" type="file" />
                </div>
                <!-- col-8 -->
            </div>

            <!-- row -->
            <div class="form-layout-footer bd pd-20 bd-t-0">
                <button type="submit" class="btn btn-info">Save</button>
            </div>
            <!-- form-group -->
        </form>
    </div>
</div>
<div class="br-section-wrapper">
    <div class="bd bd-gray-300 rounded table-responsive">
        <table class="table table-bordered table-colored table-info">
            <thead>
                <tr>
                    <th class="wd-10p">Course Category</th>
                    <th class="wd-35p">Course Name</th>
                    <th class="wd-35p">Course Code</th>
                    <th class="wd-35p">Add Meterials</th>
                    <th class="wd-35p">Option</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->c_category); ?></td>
                        <td><?php echo e($item->c_name); ?></td> 
                        <td><?php echo e($item->code); ?></td>
                        <td style="text-align: center">
                            <a class="btn btn-info btn-xs" href="<?php echo e(url('course_resource/'.$item->id)); ?>"  data-method="get"><i class="fa fa-pencil"></i>Add </a>
                        </td>
                        <td style="text-align: center">
                            <a class="btn btn-danger btn-xs resh" id="<?php echo e($item->id); ?>"><i class="fa fa-trash-o"></i> Delete </a>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
            

        </table>
    </div>
</div>
<!-- form-layout -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
<script>
 // Datepicker
 $('.fc-datepicker').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true
        });

        $('#datepickerNoOfMonths').datepicker({
          showOtherMonths: true,
          selectOtherMonths: true,
          numberOfMonths: 2
        });

        $('#tpBasic1').timepicker();
        $('#tpBasic2').timepicker();


        $(function(){
            'use strict'
    
            // Toggles
            $('.toggle').toggles({
              on: true,
              height: 26
            });
    
            // Input Masks
            $('#dateMask').mask('99/99/9999');
            $('#phoneMask').mask('(999) 999-9999');
            $('#ssnMask').mask('999-99-9999');
    
            // Datepicker
            $('.fc-datepicker').datepicker({
              showOtherMonths: true,
              selectOtherMonths: true
            });
    
            $('#datepickerNoOfMonths').datepicker({
              showOtherMonths: true,
              selectOtherMonths: true,
              numberOfMonths: 2
            });
    
            // Time Picker
            $('#tpBasic').timepicker();
            $('#tp2').timepicker({'scrollDefault': 'now'});
            $('#tp3').timepicker();
    
            $('#setTimeButton').on('click', function (){
              $('#tp3').timepicker('setTime', new Date());
            });
    
            // Color picker
            $('#colorpicker').spectrum({
              color: '#17A2B8'
            });
    
            $('#showAlpha').spectrum({
              color: 'rgba(23,162,184,0.5)',
              showAlpha: true
            });
    
            $('#showPaletteOnly').spectrum({
                showPaletteOnly: true,
                showPalette:true,
                color: '#DC3545',
                palette: [
                    ['#1D2939', '#fff', '#0866C6','#23BF08', '#F49917'],
                    ['#DC3545', '#17A2B8', '#6610F2', '#fa1e81', '#72e7a6']
                ]
            });
    
    
            // Rangeslider
            if($().ionRangeSlider) {
              $('#rangeslider1').ionRangeSlider();
    
              $('#rangeslider2').ionRangeSlider({
                  min: 100,
                  max: 1000,
                  from: 550
              });
    
              $('#rangeslider3').ionRangeSlider({
                  type: 'double',
                  grid: true,
                  min: 0,
                  max: 1000,
                  from: 200,
                  to: 800,
                  prefix: '$'
              });
    
              $('#rangeslider4').ionRangeSlider({
                  type: 'double',
                  grid: true,
                  min: -1000,
                  max: 1000,
                  from: -500,
                  to: 500,
                  step: 250
              });
            }
    
          });


</script>
<script src="js/sweetalert.min.js"></script>
<script>

    $('.resh').click(function () {
        var id = $(this).attr('id');
        var url = "<?php echo e(url('course_delete')); ?>";
        var data1 = '<?php echo e(csrf_token()); ?>';
        swal({title: "Are you sure?",
            text: "You will not be able to recover this Student!",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, delete it!",
            closeOnConfirm: false},
                function () {
                    $.ajax({
                        url: url,
                        type: "post",
                        data: {id: id, _token: data1},
                        success: function (data) {
                            $('#' + id).parent().parent().remove();
                        }
                    });
                    swal("Deleted!", "Your imaginary file has been deleted.", "success");
                });

    });

</script>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.adm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\Users\Thashi Mudalige\Desktop\SriCourses\resources\views/admins/courses/create_course.blade.php */ ?>