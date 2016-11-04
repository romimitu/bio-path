<?php $__env->startSection('content'); ?>
<style>
.form-group{overflow: hidden;}
</style>
<div id="wrapper">
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main id="page-content-wrapper" role="main">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <?php echo Form::open(['url' => 'bill/store', 'method'=>'post', 'files'=>true]); ?>

                  <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Registration Recruit Agent</div>
                    </div>
                    <div class="panel-body"> 
                      <div class="form-group">
                        <?php echo Form::label('Name', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('name', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Country', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('country', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Father Name', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('father', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Medical Date', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('medicaldate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Passport No', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('passport', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('GCC Slip Date', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('slipdate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']); ?>                        
                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Recruting Office', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('recrutoffice', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('GCC Expiry Date', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('expirydate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Recruting Contact', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('recrutingcontact', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Report Delivery Date', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('reportdate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Medical Fee', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('medicalfee', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Report Delivery Time', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('reporttime', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                      </div>                      
                      <div class="form-group">
                        <?php echo Form::label('Image', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::file('image', ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Password', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('password', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                      </div>
                      <div class="form-group">                      
                        <?php echo Form::label('Remarks', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('remarks', null, ['class'=> 'form-control col-sm-10']); ?>

                      </div>                      
                      <?php echo Form::submit('Submit', ['class'=> 'btn btn-primary']); ?>

                    <?php echo Form::close(); ?>

            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>


          
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>