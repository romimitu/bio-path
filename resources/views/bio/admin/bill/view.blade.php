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
                    <h2>Boi-Path Billing System</h2>  
                    @if (Session::has('msg'))
                        <div class="alert alert-info">{{ Session::get('msg') }}</div>
                    @endif        
                    @if (Session::has('delete'))
                        <div class="alert alert-danger">{{ Session::get('delete') }}</div>
                    @endif             
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th>RegNo.</th>
                                <th>Name</th>
                                <th>Father</th>
                                <th>Agent</th>
                                <th>Passport</th>
                                <th>Country</th>
                                <th>Reporting Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($billing as $bill)
                            <tr>
                                <td>{{ $bill->regno }}</td>
                                <td>{{ $bill->name }}</td>
                                <td>{{ $bill->father }}</td>
                                <td>{{ $bill->recrutoffice }}</td>
                                <td>{{ $bill->passport }}</td>
                                <td>{{ $bill->country }}</td>
                                <td>{{ $bill->reportdate }}</td>
                                <td>
                                    <a href="{{ url('/#') }}" >Create Report</a> |
                                    <a href="{{ url('/bill/'. $bill->id) }}" >View</a> |
                                    <a class="delete" href="{{ url('/bill/'. $bill->id.'/delete') }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
