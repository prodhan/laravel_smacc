@extends('admin.layouts.master')

@section('title', 'New Slider')

@section('main-content')

<div class="row">
	<h2 align="center">New Slider</h2>
	
	{!! Form::open(array('route'=> 'slider.store', 'class'=>'form-horizontal', 'files'=>true)) !!}

	<table class="table table-stripped">
		
	<tr class="{{ $errors->has('title') ? 'has-error' : '' }}">
		<td>{{ Form::label('title', 'Title', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::text('title', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Display text'))}}
		@if($errors->has('title'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('title') }}</strong>
                   </span>
          @endif
          </td>	
	</tr>	
	<tr class="{{ $errors->has('image') ? 'has-error' : '' }}">
		<td>{{ Form::label('image', 'Slider Image', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::file('image', array('class'=>'col-md-6 form-control'))}}

		@if($errors->has('image'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('image') }}</strong>
                   </span>
          @endif
		</td>	
	</tr>

	<tr>
		<td></td>
		<td>{{Form::submit('Save', array('class'=>'btn btn-success'))}} </td>
	</tr>



	</table>
	{!! Form::close() !!}
	
</div>
@endsection
