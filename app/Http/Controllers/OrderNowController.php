<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PricingModel;

class OrderNowController extends Controller
{
    public function index($id){

    	$data=PricingModel::findOrFail($id);
    	return view('frontend.ordernow', compact('data'));
    }

    public function store(){
    	return "Confirmed";
    }
}
