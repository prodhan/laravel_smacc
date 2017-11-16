<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PricingModel;

class PriceListController extends Controller
{
    public function index(){
    	$allData=PricingModel::orderby('id', 'DESC')->get();
    	return view('frontend.pricing', compact('allData'));
    }
}
