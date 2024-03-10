<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.about.index',[
            'abouts'=>About::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'image'=>'nullable|image',
            'details'=>'required',
         ]);
         $about= new About();
         $about->details=$request->details;
         $about->image=$this->saveImage($request);
         $about->save();
         Session::flash('success','About add successfully');
         return redirect()->route('abouts.index');

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
        return view('admin.about.edit',[
            'about'=>About::find($id),
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
        $request->validate([
            'image'=>'nullable|image',
            'details'=>'required',
         ]);
         $about=About::find($id);
         $about->details=$request->details;
         if($request->file('image')){
            if(file_exists($about->image)){
                unlink($about->image);
            }
            $about->image=$this->saveImage($request);
         }
         $about->save();
         Session::flash('success','About updated successfully');
         return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $about=About::find($id);
        if(file_exists($about->image)){
            unlink($about->image);
        }
        $about->delete();
        Session::flash('success','About delete successfully.');
        return back() ;
    }

    public function saveImage($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/about/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}