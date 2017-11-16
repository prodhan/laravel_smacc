<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Slider;
use App\ClientSlider;

class HomePageController extends Controller
{
    public function index()
    {
        $allData=Slider::orderby('id', 'DESC')->get();
        $ClientSlider=ClientSlider::orderby('id', 'DESC')->get();
        return view('frontend.home', compact('allData', 'ClientSlider'));
        //return view('frontend/home');
    }
}
