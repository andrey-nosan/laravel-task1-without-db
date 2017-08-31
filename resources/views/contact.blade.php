@extends('layouts.layout')

@section('content')
{!! Form::open(['method' => 'POST', 'route' => 'contactSend', 'class' => 'form-horizontal']) !!}
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('name', 'Name', ['class' => 'col-sm-1 control-label']) !!}
    	<div class="col-sm-5">
        	{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Your name']) !!}
        	{{-- <small class="text-danger">{{ $errors->first('name') }}</small> --}}
    	</div>
    </div>
    <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
        {!! Form::label('message', 'Message', ['class' => 'col-sm-1 control-label']) !!}
        <div class="col-sm-5">
        	{!! Form::textarea('message', null, ['class' => 'form-control']) !!}
        	{{-- <small class="text-danger">{{ $errors->first('message') }}</small> --}}
    	</div>
    </div>

    <div class="btn-group pull-left">
        {{-- {!! Form::reset("Cancel", ['class' => 'btn btn-warning']) !!} --}}
        {!! Form::submit("Send", ['class' => 'btn btn-primary']) !!}
    </div>

{!! Form::close() !!}
@endsection