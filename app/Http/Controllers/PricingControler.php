<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PricingModel;
Use Validator;
//use Exception;

class PricingControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData=PricingModel::orderby('id', 'DESC')->get();
        return view('admin.packagelist', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.new_pricing');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(), [
            'package'=>'required',
            'price'=>'required',
            'details'=>'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input=$request->all();

          try {
           $data=PricingModel::create($input);
           $bug=0; 
        } 
        catch (\Exception $e) {
           $bug=$e->errorInfo[1]; 
        }

        if($bug==0){
          return redirect('/pricelist')->with('success', 'Your package has been saved!');  
        }
        else
        {
            return redirect('/pricelist')->with('error', 'Something went wrong!');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data=PricingModel::findOrFail($id);
        return view('admin.edit_package', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data=PricingModel::findOrFail($id);
        $validator=Validator::make($request->all(), [
            'package'=>'required',
            'price'=>'required',
            'details'=>'required'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input=$request->all();

          try {
           $data->update($input);
           $bug=0; 
        } 
        catch (\Exception $e) {
           $bug=$e->errorInfo[1]; 
        }

        if($bug==0){
          return redirect('/pricelist')->with('success', 'Your package has been saved!');  
        }
        else
        {
            return redirect('/pricelist')->with('error', 'Something went wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=PricingModel::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'You Package has been Deleted!');
    }
}
