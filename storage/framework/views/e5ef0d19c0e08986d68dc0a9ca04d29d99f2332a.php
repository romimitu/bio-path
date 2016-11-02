<?php $__env->startSection('content'); ?>
<style>
.form-group{overflow: hidden;}
</style>
<div id="wrapper">
    <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <main id="page-content-wrapper" role="main">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <form class="form-horizontal" action="" method="POST">
                  <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Registration Recruit Agent</div>
                    </div>
                    <div class="panel-body"> 
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="regno">Reg No: </label>
                        <div class="col-sm-4">
                          <input type="text" id="regno" name="regno" class="form-control">
                        </div>
                        <label class="control-label col-sm-2" for="receipt">Receipt No: </label>
                        <div class="col-sm-4">
                          <input type="text" id="receipt" name="receipt" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="Name">Name: </label>
                        <div class="col-sm-4">
                          <input type="text" id="Name" name="Name" class="form-control">
                        </div>
                        <label class="control-label col-sm-2" for="country">Country: </label>
                        <div class="col-sm-4">
                          <input type="text" id="country" name="country" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="father">Father Name: </label>
                        <div class="col-sm-4">
                          <input type="text" id="father" name="father" class="form-control">
                        </div>
                        <label class="control-label col-sm-2" for="medicaldate">Medical Date: </label>
                        <div class="col-sm-4">
                          <input type="text" id="medicaldate" name="medicaldate" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="passport">Passport No: </label>
                        <div class="col-sm-4">
                          <input type="text" id="passport" name="passport" class="form-control">
                        </div>
                        <label class="control-label col-sm-2" for="slipdate">GCC Slip Date: </label>
                        <div class="col-sm-4">
                          <input type="text" id="slipdate" name="slipdate" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="recrutoffice">Recruting Office: </label>
                        <div class="col-sm-4">
                          <input type="text" id="recrutoffice" name="recrutoffice" class="form-control">
                        </div>
                        <label class="control-label col-sm-2" for="expirydate">GCC Expiry Date: </label>
                        <div class="col-sm-4">
                          <input type="text" id="expirydate" name="expirydate" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="recrutcontact">Recruting Contact: </label>
                        <div class="col-sm-4">
                          <input type="text" id="recrutcontact" name="recrutcontact" class="form-control">
                        </div>
                        <label class="control-label col-sm-2" for="reportdate">Report Delivery Date: </label>
                        <div class="col-sm-4">
                          <input type="text" id="reportdate" name="reportdate" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="fee">Medical Fee: </label>
                        <div class="col-sm-4">
                          <input type="text" id="fee" name="fee" class="form-control">
                        </div>
                        <label class="control-label col-sm-2" for="reporttime">Report Delivery Time: </label>
                        <div class="col-sm-4">
                          <input type="text" id="reporttime" name="reporttime" class="form-control">
                        </div>
                      </div>                      
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="image">Image: </label>
                        <div class="col-sm-4">
                          <input type="file" id="image" name="image" class="form-control">
                        </div>
                        <label class="control-label col-sm-2" for="password">Password: </label>
                        <div class="col-sm-4">
                          <input type="password" id="password" name="password" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="remarks">Remarks: </label>
                        <div class="col-sm-10">
                          <input type="text" id="remarks" name="remarks" class="form-control">
                        </div>
                      </div>
                      
                      <div class="form-group">
                        <div class="regi_button">
                          <button class="btn btn-success" name="submit">Submit</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
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
            <?php echo Form::open(['url' => 'agents/store', 'method'=>'post']); ?>

                <div class="form-group">
                <?php echo Form::label('Name', null, ['class'=> 'col-sm-3', 'for'=>'name']); ?>

                <?php echo Form::text('name', null, ['class'=> 'form-control col-sm-9', 'id'=>'Name']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('Email', null, ['class'=> 'col-sm-3' ]); ?>

                    <?php echo Form::text('email', null, ['class'=> 'form-control col-sm-9']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('Mobile', null, ['class'=> 'col-sm-3']); ?>

                    <?php echo Form::text('mobile', null, ['class'=> 'form-control col-sm-9']); ?>

                </div>
                <div class="form-group">
                    <?php echo Form::label('Address', null, ['class'=> 'col-sm-3']); ?>

                    <?php echo Form::text('address', null, ['class'=> 'form-control col-sm-9']); ?>

                </div>                       
                <div class="form-group">
                    <?php echo Form::label('Activity', null, ['class'=> 'col-sm-3']); ?>

                    <?php echo Form::select('activity', ['Active' => 'Active', 'Inactive' => 'Inactive'], ['class'=> 'form-control col-sm-9']); ?>

                </div>
                <?php echo Form::submit('Submit', ['class'=> 'btn btn-primary']); ?>

            <?php echo Form::close(); ?>


        </div>
    </div>
  </div>
</div>


<?php $__env->stopSection(); ?>



          
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>