<?php $__env->startSection('content'); ?>

<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h3>User List</h3>
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <p class="text-muted font-13 m-b-30">

                                </p>
                                <table id="datatable-buttons" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $student_details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="even pointer">
                                            <td><?php echo e($value->s_id); ?></td>
                                            <td><?php echo e($value->f_name); ?></td>
                                            <td><?php echo e($value->l_name); ?></td>
                                            <td><?php echo e($value->email); ?></td>
                                            <td class="text-center">
                                                <a class="btn btn-info btn-xs" href="<?php echo e(url('edit_profile_page/'.$value->s_id)); ?>"  data-method="update"><i class="fa fa-pencil"></i> Edit </a>
                                                <a class="btn btn-danger btn-xs resh" id="<?php echo e($value->s_id); ?>"><i class="fa fa-trash-o"></i> Delete </a>
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>


<!-- Select2 -->
<?php $__env->startSection('js'); ?>
<script src="js/sweetalert.min.js"></script>
<script>

    $('.resh').click(function () {
        var id = $(this).attr('id');
        var url = "<?php echo e(url('student_delete')); ?>";
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
    function getValueUsingClass() {
        /* declare an checkbox array */
        var chkArray = [];

        /* look for all checkboes that have a class 'chk' attached to it and check if it was checked */
        $("hobbies[]:checked").each(function () {
            chkArray.push($(this).val());
        });

        /* check if there is selected checkboxes, by default the length is 1 as it contains one single comma */
        if (selected.length > 0) {
            alert("You have selected " + selected);
        } else {
            alert("Please at least check one of the checkbox");
        }
    }

</script>

<?php $__env->stopSection(); ?>
<!-- Select2 -->

<?php echo $__env->make('layouts.adm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* C:\xampp\htdocs\SriCourses\resources\views/admins/student_profiles/view_profiles.blade.php */ ?>