<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.header.index',[
            'headers'=>Header::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.header.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name'=>'required|unique:headers',
            'image'=>'required'
        ]);
         $header=new Header();
         $header->page_name=$request->page_name;
         $header->image=$this->saveImage($request);
         $header->save();
         Session::flash('success','Page header add successfully');
         return redirect()->route('headers.index');
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
        return view('admin.header.edit',[
            'header'=>Header::find($id),
        ]);
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
         $header=Header::find($id);
         $header->page_name=$request->page_name;
         if($request->file('image')){
            if(file_exists($header->image)){
                unlink($header->image);
            }
            $header->image=$this->saveImage($request);
        }
         $header->save();
         Session::flash('success','Page header update successfully');
         return redirect()->route('headers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $header=Header::find($id);
        if(file_exists($header->image)){
            unlink($header->image);
        }
        $header->delete();
        Session::flash('success','Page Header Delete successfully ');
        return back();
    }

    public function saveImage($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/page-header/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}