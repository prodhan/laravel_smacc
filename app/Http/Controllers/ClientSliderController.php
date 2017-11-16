<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientSlider;
use Validator;

class ClientSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData=ClientSlider::orderby('id', 'DESC')->get();
        return view('admin.client_slider_list', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.new_client_slider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator=Validator::make($request->all(),[
            'image'=> 'mimes:jpeg,jpg,png,ico,JPG',
            'caption'=>'required'
            ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input=$request->all();
        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/files',$fileName);
            $input['image']=$fileName;
        }

        try {
            $data=ClientSlider::create($input);
            $bug=0;
        }
        catch (\Exception $e) {
            $bug=$e->errorInfo[1];
        }

        if($bug==0){
            return redirect('/clientslider')->with('success', 'Your Slider has been saved!');
        }
        else
        {
            return redirect('/clientslider')->with('error', 'Something went wrong!');
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
        $data=ClientSlider::findOrFail($id);
        return view('admin.edit_client_slider', compact('data'));
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
        $data=ClientSlider::findOrFail($id);
        $validator=Validator::make($request->all(), [
            'image'=> 'mimes:jpeg,bmp,png,jpg'

        ]);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $input=$request->all();

        if ($request->hasFile('image')) {
            $file=$request->file('image');
            $fileType=$file->getClientOriginalExtension();
            $fileName=rand(1,1000).date('dmyhis').".".$fileType;
            /*$fileName=$file->getClientOriginalName();*/
            $file->move('public/files',$fileName);
            $input['image']=$fileName;

            $file_path='public/files'.$data['image'];
            if($data['image']!=null and file_exists($file_path)){
                unlink($file_path);
            }
        }

        try {
            $data->update($input);
            $bug=0;
        }
        catch(\Exception $e){
            $bug=$e->errorInfo[1];
        }
        if($bug==0){
            return redirect('/clientslider')->with('success', 'Your Slider has been saved!');
        }
        else
        {
            return redirect('/clientslider')->with('error', 'Something went wrong!');
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
        $data=ClientSlider::findOrFail($id);
        $data->delete();
        return redirect()->back()->with('success', 'You slider has been Deleted!');
    }
}
