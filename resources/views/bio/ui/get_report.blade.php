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
          <hr>
          <div class="row">
            {!! Form::open(['method'=>"get", 'url' => '/getReport']) !!}
              <div class="form-group">
                  <label for="concept" class="col-sm-2 control-label">Registration Number: </label>
                  <div class="col-sm-3">
                    {!! Form::text('regno',null,['class'=>"form-control", 'type'=>"text", 'placeholder'=>"Enter Registration No."]) !!}
                  </div>
                  <label for="concept" class="col-sm-2 control-label">Password: </label>
                  <div class="col-sm-3">
                    {!! Form::password('password',['class'=>"form-control", 'type'=>"password", 'placeholder'=>"Enter Password"]) !!}
                  </div>
                  <div class="col-sm-2">
                    {!! Form::submit('submit',['class'=>"btn-system btn-large", 'value'=>"Submit"]) !!}
                  </div>
              </div>
              <div id="success" style="color:#34495e;"></div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
    <!-- End Content -->
@endsection