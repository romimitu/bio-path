@extends('layouts.app')

@section('content')
<style>
.form-group{overflow: hidden;}
</style>
<script src="http://listjs.com/assets/javascripts/list.min.js"></script>
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
                <div class="panel-body" id="allbill">
                    <div class="form-group">
                        <label class="col-sm-2" for="filter">Filter :</label>
                        <input class="search form-control col-sm-3" placeholder="Search" />
                    </div>               
                    <table class="table table-striped table-condensed table-responsive">
                        <thead>
                            <tr>
                                <th>RegNo.</th>
                                <th>Name</th>
                                <th>Father</th>
                                <th>Passport</th>
                                <th>Visa</th>
                                <th>MOFANO</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody class="list">
                        @foreach ($reports as $report)
                            <tr>
                                <td class="regno">{{ $report->billing->regno }}</td>
                                <td class="name">{{ $report->billing->name }}</td>
                                <td>{{ $report->billing->father }}</td>
                                <td class="passport">{{ $report->billing->passport }}</td>
                                <td>{{ $report->visano }}</td>
                                <td>{{ $report->mofano }}</td>
                                <td>
                                    <a href="{{ url('/testreports/view/'. $report->id) }}" >View Report</a> |
                                    <a class="delete" href="{{ url('/testreports/'. $report->id.'/delete') }}">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <script>
        var options = {
          valueNames: [ 'regno', 'name', 'recrutoffice', 'passport' ]
        };
        var userList = new List('allbill', options);
    </script>
@endsection
