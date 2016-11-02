@extends('layouts.app')

@section('content')
<div id="wrapper">
    @include('layouts.sidebar')
    <main id="page-content-wrapper" role="main">
        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Hello {{ Auth::user()->name }}  You are logged in!
                </div>
            </div>
        </div>
    </main>
@endsection
