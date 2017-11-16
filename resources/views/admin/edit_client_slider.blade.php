@extends('admin.layouts.master')

@section('title', 'Edit Slider')

@section('main-content')

    <div class="row">
        <h2 align="center">Edit Slider</h2>

        {!! Form::open(array('route'=> ['clientslider.update', $data->id], 'method'=>'PUT','class'=>'form-horizontal', 'file'=>true)) !!}

        <table class="table table-stripped">

            <tr class="{{ $errors->has('caption') ? 'has-error' : '' }}">
                <td>{{ Form::label('caption', 'Title', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('caption', $data->caption, array('class'=>'col-md-6 form-control', 'placeholder'=>'Display text'))}}
                    @if($errors->has('caption'))
                        <span class="help-block" style="display:block">
          <strong>{{ $errors->first('caption') }}</strong>
                   </span>
                    @endif
                </td>
            </tr>
            <tr class="{{ $errors->has('link') ? 'has-error' : '' }}">
                <td>{{ Form::label('link', 'Link', array('class'=>'control-label'))}}	</td>
                <td>{{ Form::text('link', $data->link, array('class'=>'col-md-6 form-control', 'placeholder'=>'Link'))}}
                    @if($errors->has('link'))
                        <span class="help-block" style="display:block">
          <strong>{{ $errors->first('link') }}</strong>
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
                <td>{{Form::submit('Update', array('class'=>'btn btn-success'))}} </td>
            </tr>



        </table>
        {!! Form::close() !!}

    </div>
@endsection
