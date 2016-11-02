<?php $__env->startSection('content'); ?>
<div id="wrapper">
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main id="page-content-wrapper" role="main">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Hello <?php echo e(Auth::user()->name); ?>  You are logged in!
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>