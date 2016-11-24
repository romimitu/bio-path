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
                {!! Form::open(['url' => 'testreports/store/'.$billdata->id, 'method'=>'post']) !!}
                  <div class="panel panel-info">
                    <div class="panel-heading">
                        <div class="panel-title">Medical Test Report</div>
                    </div>
                    <div class="panel-body">
                      <h4>Candidate Info</h4> 
                      <div class="form-group">
                        {!! Form::label('GCC Code', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('gcccode', null, ['class'=> 'form-control col-sm-2', 'required' => 'required']) !!}
                        {!! Form::label('GCC Slip No', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('gccslipno', null, ['class'=> 'form-control col-sm-2', 'required' => 'required']) !!}
                        {!! Form::label('Nationality', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('nationality', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Height', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('height', null, ['class'=> 'form-control col-sm-2', 'required' => 'required']) !!}
                        {!! Form::label('Weight', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('weight', null, ['class'=> 'form-control col-sm-2', 'required' => 'required']) !!}
                        {!! Form::label('Profession', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('profession', null, ['class'=> 'form-control col-sm-2', 'required' => 'required']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Visa No', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('visano', null, ['class'=> 'form-control col-sm-2', 'required' => 'required']) !!}
                        {!! Form::label('Visa Date', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('visadate', null, ['class'=> 'form-control col-sm-2 datepicker', 'required' => 'required']) !!}
                        {!! Form::label('MOFANO', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('mofano', null, ['class'=> 'form-control col-sm-2', 'required' => 'required']) !!} 
                      </div>
                      <h4>Medical Examination</h4>
                      <div class="form-group">
                        {!! Form::label('EYE', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('eye', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Commet', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('commet', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('B.P', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('bp', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Heart', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('heart', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('LUNGS', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('lungs', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Chest X-ray', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('chestxray', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Abdomen', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('abdomen', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Herina', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('herina', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Varicose Veins', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('varicoseveins', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div>                      
                      <div class="form-group">
                        {!! Form::label('Extremities', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('extremities', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Deformities', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('deformities', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Skin', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('skin', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div>
                      <div class="form-group">
                        {!! Form::label('Venereal Diseases', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('venerealdiseases', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('C.N.S', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('cns', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Psychiatry', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('psychiatry', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div> 
                      <h4>Laboratory Investigation</h4>
                      <div class="form-group">
                        {!! Form::label('Sugar', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('sugar', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Albumin', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('albumin', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Bilharziasis', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('bilharziasis', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div>               
                      <div class="form-group">
                        {!! Form::label('Helminthes', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('helminthes', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Giardia', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('giardia', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Bilharziasis Culture', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('bilharziasisculture', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div>              
                      <div class="form-group">
                        {!! Form::label('Salmonella', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('salmonella', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Cholera', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('cholera', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Blood Group', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('bloodgroup', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div>             
                      <div class="form-group">
                        {!! Form::label('Haemoglobin', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('haemoglobin', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Thick Film For', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('thickfilmfor', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('Malaria', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('malaria', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div>           
                      <div class="form-group">
                        {!! Form::label('Micro Filaria', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('microfilaria', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('R.B.S', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('rbs', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('L.F.T.S', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('lfts', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div>           
                      <div class="form-group">
                        {!! Form::label('Creatinine', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('creatinine', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('HIV I & II', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('hiv', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('HbsAg', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('hbsag', null, ['class'=> 'form-control col-sm-2']) !!}
                      </div>        
                      <div class="form-group">
                        {!! Form::label('Anti HCV', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('antihcv', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('VDRL', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('vdrl', null, ['class'=> 'form-control col-sm-2']) !!}
                        {!! Form::label('TPHA', null, ['class'=> 'col-sm-2']) !!}
                        {!! Form::text('tpha', null, ['class'=> 'form-control col-sm-2']) !!}
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


          