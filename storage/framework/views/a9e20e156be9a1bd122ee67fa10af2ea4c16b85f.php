<?php $__env->startSection('content'); ?>
<style>
.form-group{overflow: hidden;}

</style>
<div id="wrapper">
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main id="page-content-wrapper" role="main">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading admin-panel"> 
                    <h2>Agents List <a href="#" data-toggle="modal" data-target="#createModal" class=" btn btn-primary">Add new Agent</a></h2>  
                    <?php if(Session::has('msg')): ?>
                        <div class="alert alert-info"><?php echo e(Session::get('msg')); ?></div>
                    <?php endif; ?>                   
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th>RegNo.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Activity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $agents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $agent): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <tr>
                                <td><?php echo e($agent->id); ?></td>
                                <td><?php echo e($agent->name); ?></td>
                                <td>
                                <?php if(!empty($agent->email)): ?>
                                    <?php echo e($agent->email); ?>

                                <?php endif; ?>
                                </td>
                                <td><?php echo e($agent->mobile); ?></td>
                                <td><?php echo e($agent->address); ?></td>
                                <td><?php echo e($agent->activity); ?></td>
                                <td><a href="<?php echo e(url('/agent/'. $agent->id. '/edit')); ?>" >Edit</a> |
                                <a href="<?php echo e(url('/agent/'. $agent->id.'/delete')); ?>">Delete</a></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
            <h3 class="modal-title" id="lineModalLabel">Agent Info</h3>
        </div>
        <div class="modal-body">
            <?php echo Form::open(['url' => 'agent/store', 'method'=>'post']); ?>

                <div class="form-group">
                <?php echo Form::label('Name', null, ['class'=> 'col-sm-3', 'for'=>'name']); ?>

                <?php echo Form::text('name', null, ['class'=> 'form-control col-sm-9', 'id'=>'Name', 'required' => 'required']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('Email', null, ['class'=> 'col-sm-3' ]); ?>

                    <?php echo Form::text('email', null, ['class'=> 'form-control col-sm-9']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('Mobile', null, ['class'=> 'col-sm-3']); ?>

                    <?php echo Form::text('mobile', null, ['class'=> 'form-control col-sm-9', 'required' => 'required']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('Address', null, ['class'=> 'col-sm-3']); ?>

                    <?php echo Form::text('address', null, ['class'=> 'form-control col-sm-9', 'required' => 'required']); ?>

                </div>                       
                <div class="form-group">
                    <?php echo Form::label('Activity', null, ['class'=> 'col-sm-3']); ?>

                    <?php echo Form::select('activity', ['Active' => 'Active', 'Inactive' => 'Inactive'],
                    'Active', ['class'=> 'form-control col-sm-9']); ?>

                </div>
                <?php echo Form::submit('Submit', ['class'=> 'btn btn-primary']); ?>

            <?php echo Form::close(); ?>


        </div>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>