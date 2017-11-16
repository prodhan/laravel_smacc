@extends('admin.layouts.master')

@section('title', 'New Footer menu')

@section('main-content')

<div class="row">
	
	{!! Form::open(array('route'=> 'footermenu.store', 'class'=>'form-horizontal')) !!}

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
	<tr>
		<td>{{ Form::label('link', 'Link', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::text('link', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Link here'))}}</td>	
	</tr>	
	<tr class="{{ $errors->has('title') ? 'has-error' : '' }}">
		<td>{{ Form::label('position', 'Position', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::select('position',  ['1'=>'Left', '2'=>'Center', '3'=>'Right'], null, array('class'=>'col-md-6 form-control', 'placeholder'=>'Where to display'))}}

@if($errors->has('position'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('position') }}</strong>
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
