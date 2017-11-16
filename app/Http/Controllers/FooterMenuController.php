<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\FooterMenu;
use Validator;
class FooterMenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData=FooterMenu::orderBy('id','DESC')->get();
        //return $allData;
        return view('admin.footerlist',compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.newfooter_menu');
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
                'position'=>'required',
                'title'=>'required|min:5'
            ]);
        $input=$request->all();
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $data=Footermenu::create($input);
         return redirect("/footermenu")->with('success','Data Successfully Inserted');

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
        $data=FooterMenu::findOrFail($id);
        return view('admin.edit_footermenu', compact('data'));
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
       $data=FooterMenu::findOrFail($id);
       $validator=Validator::make($request->all(),[
                'position'=>'required',
                'title'=>'required|min:5'
            ]);
        $input=$request->all();

        //return $input;
        $data->update($input);
        return redirect("/footermenu")->with('success','Data Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $data=FooterMenu::findOrFail($id);
         $data->delete();
        return redirect()->back()->with('success','Data Successfully Deleted!');
    }
}
