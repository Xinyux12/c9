<!--@extends('layouts.app')-->
<!--@section('content')-->
    <a href="/lead" class="btn btn-default">Go Back</a>
    <h1>Create Lead</h1>
    <!--{!! Form::open(['action' => 'LeadsController@store','method'=> 'POST']) !!}-->
    <div class="form-group">
        {{Form::label('lead_name','Lead_name')}}
        {{Form::text('lead_name', '', ['class'=>'form-control', 'placeholder' => 'Lead_name'])}}
    </div>
    <div class="form-group">
        {{Form::label('direction','Direction')}}
        {{Form::textarea('direction', '', ['id' => 'my-editor', 'class'=>'form-control', 'placeholder' => 'Direction'])}}
    </div>
    {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection