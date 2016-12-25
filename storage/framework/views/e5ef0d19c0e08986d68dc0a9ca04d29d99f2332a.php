<?php $__env->startSection('content'); ?>
<style>
.form-group{overflow: hidden;}
</style>
<div id="wrapper">
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main id="page-content-wrapper" role="main">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <?php echo Form::open(['url' => 'bill/store', 'target'=>'_blank', 'method'=>'post',  'role'=>"form", 'enctype'=>"multipart/form-data"]); ?>

                  <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Reciept for Medical Test</div>
                    </div>
                    <div class="panel-body"> 
                      <?php $date = date('dmy'); ?>
                      <div class="form-group" style="display: none;"
                        <?php echo Form::label('Reg No.', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('regno', 'BIO'.$date.$lastInsertedID->id, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Reciept No', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('receipt', $date.$lastInsertedID->id , ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Name', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('name', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Mobile', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('mobile', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Father Name', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('father', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Birth Date', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('birthday', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Mother Name', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('mother', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Nationality', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('nationality', null, ['class'=> 'form-control col-sm-4']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Gender', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::select('gender', ['Male' => 'Male', 'Female' => 'Female'], 'Select', ['class'=> 'form-control col-sm-4']); ?>

                        <?php echo Form::label('Maritial Status', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::select('maritial_status', ['Married' => 'Married', 'Unmarried' => 'Unmarried'], 'Select', ['class'=> 'form-control col-sm-4']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Country', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('country', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Slip Date', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('slipdate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Passport No', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('passport', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('GCC Slip Date', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('gcc_slipdate', null, ['class'=> 'form-control col-sm-4 datepicker']); ?>                        
                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Recruit Agent', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('recrutoffice', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('GCC Expiry Date', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('gcc_expirydate', null, ['class'=> 'form-control col-sm-4 datepicker']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Recruit Contact', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('recrutingcontact', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Report Delivery Date', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('reportdate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']); ?>

                      </div>
                      <div class="form-group">
                        <?php echo Form::label('Medical Fee', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('medicalfee', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Report Delivery Time', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('reporttime', null, ['class'=> 'form-control col-sm-4']); ?>

                      </div>                      
                      <div class="form-group">
                        <?php echo Form::label('Image', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::file('image', ['class'=> 'form-control col-sm-4', 'required' => 'required']); ?>

                        <?php echo Form::label('Password', null, ['class'=> 'col-sm-2']); ?>

                        <?php echo Form::text('password', 123, ['class'=> 'form-control col-sm-4']); ?>

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