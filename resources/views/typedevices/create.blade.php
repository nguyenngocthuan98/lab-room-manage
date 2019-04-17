@extends('master')

@section('title', trans('typedevices/create.title'))

@section('body')
@include('partials/navigation_bar')
@section('title-bar', 'TypeDevices')
<div class="container-fluid">
	<div class="from-group">
		<form action="{{ url('typedevices') }}" method="post">
			@csrf
				<label for="name">{{ trans('typedevices/create.name') }}</label>
				<label class="alertdevice">{{ $errors->has('name') ? $errors->first('name') : ''}}</label>
				<input type="text" class="form-control {{ $errors->has('name') ? 'has-error' : ''}}" placeholder="Enter Name" name="name" id="name">

			<div class="form-group">
				<button id="btn-form-user" type="submit" class="btn btn-primary">{{ trans('typedevices/create.create') }}</button>
			</div>
		</form>
	</div>
</div>
@endsection