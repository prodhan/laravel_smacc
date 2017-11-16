<div class="slider">
					<div class="callbacks_container">
						<ul class="rslides" id="slider">
							
							<!-- slider start here -->
							@foreach($allData as $data)
							 <li>	 
								<div class="caption">
								<div class="col-md-4 cap-left">
									<img src='{{asset("public/files/$data->image")}}'>
								</div>
								<div class="col-md-8 cap-right">
									<h3>{{$data->title}}</h3>
								</div>
								<div class="clearfix"></div>
								</div>
							</li>
							@endforeach
							<!-- slider end here -->

						</ul>
					</div>
				</div>