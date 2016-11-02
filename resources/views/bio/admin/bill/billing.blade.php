@extends('layouts.app')

@section('content')
<style>
.form-group{overflow: hidden;}
</style>
<div id="wrapper">
    @include('layouts.sidebar')
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
@endsection
http://devartisans.com/articles/image-upload-laravel-5


          