@extends('layouts.ui')

@section('content')
    <!-- Start Page Banner -->
    <div class="page-banner" style="padding:40px 0; background: url(images/slide-02-bg.jpg) center #f9f9f9;">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2>Check Medical Report</h2>
            <p>We Are Professional</p>
          </div>
          <div class="col-md-6">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li>Report Check</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Page Banner -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="page-content">
          <h2>To get Your Medical Report Please Fill this form fields and submit</h2>
          <div class="row">
            <form role="form" action="" method="post">
              <div class="form-group">
                  <label for="concept" class="col-sm-2 control-label">Registration Number: </label>
                  <div class="col-sm-3">
                      <input type="text" class="form-control" placeholder="Registration Number" name="regno">
                  </div>
                  <label for="concept" class="col-sm-2 control-label">Password: </label>
                  <div class="col-sm-3">
                      <input type="password" class="form-control" placeholder="Password" name="password">
                  </div>
                  <div class="col-sm-2">
                    <button type="submit" id="submit" class="btn-system btn-large">Submit</button>
                  </div>
              </div>
              <div id="success" style="color:#34495e;"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->
@endsection