
<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">Teachers Page</div>
        <div class="card-body">

            <form action="<?php echo e(url('teachers')); ?>" method="post">
                <?php echo csrf_field(); ?>

                <label>Name</label></br>
                <input type="text" name="name" id="name" class="form-control"></br>
                <label>Address</label></br>
                <input type="text" name="address" id="address" class="form-control"></br>
                <label>Mobile</label></br>
                <input type="text" name="mobile" id="mobile" class="form-control"></br>
                <input type="submit" value="Save" class="btn btn-success"></br>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\student-management-system\resources\views/teachers/create.blade.php ENDPATH**/ ?>