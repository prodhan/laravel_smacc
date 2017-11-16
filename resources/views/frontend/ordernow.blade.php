@extends('frontend.layouts.master')
@section('title', 'Order Now')

@section('main-content')

<div class="container">
    
    <div class="row" style="background: #FBF4F4;">
    	<div class="col-md-8">
    	<h2 align="center">Order Form</h2>
    	{!! Form::open(array('route'=> 'order', 'class'=>'form-horizontal')) !!}

	<table class="table table-stripped" style="margin-top: 30px">
		
	<tr class="{{ $errors->has('package') ? 'has-error' : '' }}">
		<td>{{ Form::label('cname', 'Your Name', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::text('cname', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'Your Name'))}}
		@if($errors->has('cname'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('cname') }}</strong>
                   </span>
          @endif
          </td>	
	</tr>	
	<tr class="{{ $errors->has('phone') ? 'has-error' : '' }}">
		<td>{{ Form::label('phone', 'Phone Number', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::text('phone', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'phone'))}}
		@if($errors->has('phone'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('phone') }}</strong>
                   </span>
          @endif
          </td>	
	</tr>	
	<tr class="{{ $errors->has('email') ? 'has-error' : '' }}">
		<td>{{ Form::label('email', 'Email', array('class'=>'control-label'))}}	</td>
		<td>{{ Form::text('email', '', array('class'=>'col-md-6 form-control', 'placeholder'=>'email'))}}
		@if($errors->has('email'))
		 <span class="help-block" style="display:block">
          <strong>{{ $errors->first('email') }}</strong>
                   </span>
          @endif
          </td>	
	</tr>

	<tr>
		<td>NID/Passport No</td>
		<td>
			{{ Form::text('nid', '', array('class'=>'col-md-6 form-control'))}}
		</td>
	</tr>
	<tr>
		<td>Company Name</td>
		<td>
			{{ Form::text('companyname', '', array('class'=>'col-md-6 form-control'))}}
		</td>
	</tr>
	<tr>
		<td>Company Address</td>
		<td>
			{{ Form::text('compnayaddress', '', array('class'=>'col-md-6 form-control'))}}
		</td>
	</tr>
		<td>Password</td>
		<td>
			{{ Form::text('password', '', array('class'=>'col-md-6 form-control'))}}
		</td>
	</tr>
	</tr>
		<td>Comments</td>
		<td>
			{{ Form::text('comments', '', array('class'=>'col-md-6 form-control'))}}
		</td>
	</tr>
{{ Form::hidden('packageid', $data->id, array('class'=>'col-md-6 form-control'))}}
		

	<tr>
		<td></td>
		<td>{{Form::submit('Place Order', array('class'=>'btn btn-primary'))}} </td>
	</tr>



	</table>
	{!! Form::close() !!}


    	</div>
    	<div class="col-md-4">
    		 <div style="padding: 5em -1px;text-align: center;background: #FBF4F4;" >
                <div class="container">
                    <div class="prices-grids">
                     
                        <div class="col-md-3 price-grid">
                            <div class="price-top">
                                <h4>{{$data->package}}</h4>
                            </div>
                            <div class="price-bottom">
                                <h5>{{$data->price}} </h5>
                                  <?php  echo $data->details; ?>
                                    
                            </div>
                        </div>                      
                        
                        <!-- end -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
    	</div>

    </div

</div>

@endsection