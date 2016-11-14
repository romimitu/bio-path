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
                {!! Form::open(['url' => 'bill/store', 'target'=>'_blank', 'method'=>'post', 'files'=>true]) !!}
                  <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Registration Recruit Agent</div>
                    </div>
                    <div class="panel-body"> 
                      <?php $date = date('dmy'); ?>
                      <div class="form-group" style="display: none;"
                        {!! Form::label('Reg No.', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('regno', 'BIO'.$date.$lastInsertedID->id, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Reciept No', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('receipt', $date.$lastInsertedID->id , ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Name', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('name', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Mobile', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('mobile', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Father Name', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('father', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Birth Date', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('birthday', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Mother Name', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('mother', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Medical Date', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('medicaldate', null, ['class'=> 'form-control col-sm-4 datepicker']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Country', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('country', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Slip Date', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('slipdate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Passport No', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('passport', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('GCC Slip Date', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('gcc_slipdate', null, ['class'=> 'form-control col-sm-4 datepicker']) !!}                        
                      </div>
                      <div class="form-group">
                        {!! Form::label('Recruit Agent', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('recrutoffice', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('GCC Expiry Date', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('gcc_expirydate', null, ['class'=> 'form-control col-sm-4 datepicker']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Recruit Contact', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('recrutingcontact', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Report Delivery Date', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('reportdate', null, ['class'=> 'form-control col-sm-4 datepicker', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Medical Fee', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('medicalfee', null, ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Report Delivery Time', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('reporttime', null, ['class'=> 'form-control col-sm-4']) !!}
                      </div>                      
                      <div class="form-group">
                        {!! Form::label('Image', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::file('image', ['class'=> 'form-control col-sm-4', 'required' => 'required']) !!}
                        {!! Form::label('Password', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('password', 123, ['class'=> 'form-control col-sm-4']) !!}
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


          