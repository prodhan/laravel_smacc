@extends('frontend.layouts.master')
@section('title', 'Pricing')
@section('main-content')

    <div class="prices-section">
                <div class="container">
                    <h3 class="tittle">Our Prices</h3>
                    <div class="prices-grids">
                        @foreach($allData as $data)
                        <div class="col-md-3 price-grid">
                            <div class="price-top">
                                <h4>{{$data->package}}</h4>
                            </div>
                            <div class="price-bottom">
                                <h5>{{$data->price}} </h5>
                                  <?php  echo $data->details; ?>
                                    <a href='{{URL::to("/order/$data->id")}}' class="hvr-shutter-out-horizontal">Order Now</a>
                            </div>
                        </div>

                        @endforeach
                        
                        
                        <!-- end -->
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>


@stop