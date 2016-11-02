<?php $__env->startSection('content'); ?>
<style>
.form-group{overflow: hidden;}
.form-control{width: auto;}
</style>
<div id="wrapper">
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main id="page-content-wrapper" role="main">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading admin-panel"> 
                    <h2>Edit Agent Info</h2>                     
                </div>
                <div class="panel-body">
                    
                    <?php echo Form::open(['url' => 'agent/'.$agent->id.'/update', 'method'=>'post']); ?>

                        <div class="form-group">
                        <?php echo Form::label('Name', null, ['class'=> 'col-sm-3', 'for'=>'name']); ?>

                        <?php echo Form::text('name', $agent->name, ['class'=> 'form-control col-sm-9', 'id'=>'Name']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('Email', null, ['class'=> 'col-sm-3' ]); ?>

                            <?php echo Form::text('email', $agent->email, ['class'=> 'form-control col-sm-9']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('Mobile', null, ['class'=> 'col-sm-3']); ?>

                            <?php echo Form::text('mobile', $agent->mobile, ['class'=> 'form-control col-sm-9']); ?>

                        </div>
                        <div class="form-group">
                            <?php echo Form::label('Address', null, ['class'=> 'col-sm-3']); ?>

                            <?php echo Form::text('address', $agent->address, ['class'=> 'form-control col-sm-9']); ?>

                        </div>                       
                        <div class="form-group">
                            <?php echo Form::label('Activity', null, ['class'=> 'col-sm-3']); ?>

                            <?php echo Form::select('activity', ['Active' => 'Active', 'Inactive' => 'Inactive'], $agent->activity, ['class'=> 'form-control col-sm-9']); ?>

                        </div>
                        <?php echo Form::submit('Submit', ['class'=> 'btn btn-primary']); ?>

                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </main>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>