@extends('layouts.app')

@section('content')
<style>
.form-group{overflow: hidden;}
.form-control{width: auto;}
</style>
<div id="wrapper">
    @include('layouts.sidebar')
    <main id="page-content-wrapper" role="main">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading admin-panel"> 
                    <h2>Edit Agent Info</h2>                     
                </div>
                <div class="panel-body">
                    
                    {!! Form::open(['url' => 'agent/'.$agent->id.'/update', 'method'=>'post']) !!}
                        <div class="form-group">
                        {!! Form::label('Name', null, ['class'=> 'col-sm-3', 'for'=>'name']) !!}
                        {!! Form::text('name', $agent->name, ['class'=> 'form-control col-sm-9', 'id'=>'Name']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Email', null, ['class'=> 'col-sm-3' ]) !!}
                            {!! Form::text('email', $agent->email, ['class'=> 'form-control col-sm-9']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Mobile', null, ['class'=> 'col-sm-3']) !!}
                            {!! Form::text('mobile', $agent->mobile, ['class'=> 'form-control col-sm-9']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('Address', null, ['class'=> 'col-sm-3']) !!}
                            {!! Form::text('address', $agent->address, ['class'=> 'form-control col-sm-9']) !!}
                        </div>                       
                        <div class="form-group">
                            {!! Form::label('Activity', null, ['class'=> 'col-sm-3']) !!}
                            {!! Form::select('activity', ['Active' => 'Active', 'Inactive' => 'Inactive'], $agent->activity, ['class'=> 'form-control col-sm-9']) !!}
                        </div>
                        {!! Form::submit('Submit', ['class'=> 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </main>


@endsection
