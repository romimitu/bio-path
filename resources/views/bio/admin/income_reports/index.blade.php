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
                <div class="panel-heading admin-panel"> 
                    <h2>Income Reports</h2>                     
                </div>
                <div class="panel-body">
                    
                    {!! Form::open(['url' => '/income-report', 'method'=>'get', 'target'=>'_blank']) !!}
                        <div class="form-group">
                        {!! Form::label('Agent Name', null, ['class'=> 'col-sm-3', 'for'=>'name']) !!}
                        {!! Form::text('name', null, ['class'=> 'form-control col-sm-9', 'id'=>'Name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('From Date', null, ['class'=> 'col-sm-3' ]) !!}
                            {!! Form::text('datefrom', null, ['class'=> 'form-control col-sm-3 datepicker']) !!}
                            {!! Form::label('To date', null, ['class'=> 'col-sm-3']) !!}
                            {!! Form::text('dateto', null, ['class'=> 'form-control col-sm-3 datepicker']) !!}
                        </div>
                        {!! Form::submit('Submit', ['class'=> 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </main>


@endsection
