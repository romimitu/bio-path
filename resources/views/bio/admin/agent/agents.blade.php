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
                    <h2>Agents List <a href="#" data-toggle="modal" data-target="#createModal" class=" btn btn-primary">Add new Agent</a></h2>  
                    @if (Session::has('msg'))
                        <div class="alert alert-info">{{ Session::get('msg') }}</div>
                    @endif                   
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th>RegNo.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Address</th>
                                <th>Activity</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($agents as $agent)
                            <tr>
                                <td>{{ $agent->id }}</td>
                                <td>{{ $agent->name }}</td>
                                <td>
                                @if (!empty($agent->email))
                                    {{ $agent->email }}
                                @endif
                                </td>
                                <td>{{ $agent->mobile }}</td>
                                <td>{{ $agent->address }}</td>
                                <td>{{ $agent->activity }}</td>
                                <td><a href="{{ url('/agent/'. $agent->id. '/edit') }}" >Edit</a> |
                                <a href="{{ url('/agent/'. $agent->id.'/delete') }}">Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
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
            {!! Form::open(['url' => 'agent/store', 'method'=>'post']) !!}
                <div class="form-group">
                {!! Form::label('Name', null, ['class'=> 'col-sm-3', 'for'=>'name']) !!}
                {!! Form::text('name', null, ['class'=> 'form-control col-sm-9', 'id'=>'Name', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Email', null, ['class'=> 'col-sm-3' ]) !!}
                    {!! Form::text('email', null, ['class'=> 'form-control col-sm-9']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Mobile', null, ['class'=> 'col-sm-3']) !!}
                    {!! Form::text('mobile', null, ['class'=> 'form-control col-sm-9', 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('Address', null, ['class'=> 'col-sm-3']) !!}
                    {!! Form::text('address', null, ['class'=> 'form-control col-sm-9', 'required' => 'required']) !!}
                </div>                       
                <div class="form-group">
                    {!! Form::label('Activity', null, ['class'=> 'col-sm-3']) !!}
                    {!! Form::select('activity', ['Active' => 'Active', 'Inactive' => 'Inactive'], 'Active', ['class'=> 'form-control col-sm-9']) !!}
                </div>
                {!! Form::submit('Submit', ['class'=> 'btn btn-primary']) !!}
            {!! Form::close() !!}

        </div>
    </div>
  </div>
</div>


@endsection
