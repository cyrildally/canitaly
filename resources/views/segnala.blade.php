@extends('templates/default')

@section('title')
Segnala
@stop

@section('contenuto')
<div class="col-sm-offset-3 col-sm-6">
	<div class="panel panel-info">
		<div class="panel-heading">Segnala</div>
		<div class="panel-body">
			@if(session()->has('error'))
				<div class="alert alert-danger">{!! session('error') !!}</div>
			@endif

			{!! Form::open(['url' => 'segnala', 'files' => true]) !!}
			    
			    <div class="form-group {!! $errors->has('titolo') ? 'has-error' : '' !!}">
					{!! Form::text('titolo', null, ['class' => 'form-control', 'placeholder' => 'Indica il titolo ...']) !!}
					{!! $errors->first('titolo', '<small class="help-block">:message</small>') !!}
				</div>

				<div class="form-group {!! $errors->has('descrizione') ? 'has-error' : '' !!}">
					{!! Form::textarea('descrizione', null, ['class' => 'form-control', 'placeholder' => 'Scrivi la descrizione ...']) !!}
					{!! $errors->first('descrizione', '<small class="help-block">:message</small>') !!}
				</div>

				<div class="form-group {!! $errors->has('upload') ? 'has-error' : '' !!}">
					{!! Form::file('upload', ['class' => 'form-control']) !!}
					{!! $errors->first('upload', '<small class="help-block">:message</small>') !!}
				</div>

				<div class="form-group {!! $errors->has('citta') ? 'has-error' : '' !!}">
					{!! Form::text('citta', null, ['class' => 'form-control', 'placeholder' => 'Indica il luogo ...']) !!}
					{!! $errors->first('citta', '<small class="help-block">:message</small>') !!}
				</div>

			    {!! Form::submit('Segnala', ['class' => 'btn btn-info pull-right']) !!}
			{!! Form::close() !!}
		</div>
	</div>
</div>
@stop

