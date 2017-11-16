@extends('admin.layouts.master')

@section('title', 'New Package')

@section('main-content')

<div class="row">
	<h2 align="center">New Package</h2>
	
	{!! Form::open(array('route'=> 'pricelist.store', 'class'=>'form-horizontal')) !!}

	<table class="table table-stripped">
		
	<tr class="{{ $errors->has('package') ? 'has-error' : '' }}">
		<td>{{ Form::label('package', 'Package Name', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::text('package', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Package Name'))}}
		@if($errors->has('package'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('package') }}</strong>
                   </span>
          @endif
          </td>	
	</tr>	
	<tr class="{{ $errors->has('price') ? 'has-error' : '' }}">
		<td>{{ Form::label('price', 'Package price', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::text('price', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'price'))}}
		@if($errors->has('price'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('price') }}</strong>
                   </span>
          @endif
          </td>	
	</tr>	
	<tr class="{{ $errors->has('details') ? 'has-error' : '' }}">
		<td>{{ Form::label('details', 'Package details', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::textarea('details', null, array('class'=>'col-md-6 form-control', 'placeholder'=>'details', 'id'=>'details'))}}
		@if($errors->has('details'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('details') }}</strong>
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

@section('summernotejs')
<script>
      $(document).ready(function() {
            $('#details').summernote();
        });
  </script>

@endsection
