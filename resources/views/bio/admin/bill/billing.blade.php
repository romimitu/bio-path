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
                {!! Form::open(['url' => 'bill/store', 'method'=>'post', 'files'=>true]) !!}
                  <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Registration Recruit Agent</div>
                    </div>
                    <div class="panel-body"> 
                      <div class="form-group">
                        {!! Form::label('Name', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('name', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Country', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('country', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Father Name', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('father', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Medical Date', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('medicaldate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Passport No', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('passport', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('GCC Slip Date', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('slipdate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']) !!}                        
                      </div>
                      <div class="form-group">
                        {!! Form::label('Recruting Office', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('recrutoffice', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('GCC Expiry Date', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('expirydate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Recruting Contact', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('recrutingcontact', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Report Delivery Date', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('reportdate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Medical Fee', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('medicalfee', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Report Delivery Time', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('reporttime', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                      </div>                      
                      <div class="form-group">
                        {!! Form::label('Image', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::file('image', ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Password', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('password', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">                      
                        {!! Form::label('Remarks', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('remarks', null, ['class'=> 'form-control col-sm-10']) !!}
                      </div>                      
                      {!! Form::submit('Submit', ['class'=> 'btn btn-primary']) !!}
                    {!! Form::close() !!}
            </div>
        </div>
    </main>
@endsection


          