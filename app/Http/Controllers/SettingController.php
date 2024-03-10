<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.setting.index',[
            'settings'=>Setting::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setting.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'dark_logo'=>'nullable',
            'white_logo'=>'nullable',
            'app_name'=>'required',
            'email'=>'required|email',
            'facebook'=>'required',
            'twitter'=>'required',
            'instagram'=>'required',
            'pinterest'=>'required',
            'copyright'=>'required',
            'country'=>'required',
            'state'=>'required',
        ]);
        $setting=New Setting();
        $setting->app_name=$request->app_name;
        $setting->email=$request->email;
        $setting->facebook=$request->facebook;
        $setting->twitter=$request->twitter;
        $setting->instagram=$request->instagram;
        $setting->pinterest=$request->pinterest;
        $setting->country=$request->country;
        $setting->state=$request->state;
        $setting->copyright=$request->copyright;
        $setting->dark_logo = $this->saveImage($request, 'dark_logo');
        $setting->white_logo = $this->saveImage($request, 'white_logo');
        $setting->save();
        Session::flash('success','Setting add successfully.');
        return redirect()->route('settings.index');
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
        return view('admin.setting.edit',[
            'setting'=>Setting::find($id),
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
            'dark_logo'=>'nullable',
            'white_logo'=>'nullable',
            'app_name'=>'required',
            'email'=>'required|email',
            'facebook'=>'required',
            'twitter'=>'required',
            'instagram'=>'required',
            'pinterest'=>'required',
            'copyright'=>'required',
            'country'=>'required',
            'state'=>'required',
        ]);


        $setting=Setting::find($id);
        if($request->file('dark_logo')){
            if(file_exists($setting->dark_logo)){
                unlink($setting->dark_logo);
            }
            $setting->dark_logo = $this->saveImage($request, 'dark_logo');

        }
        if($request->file('white_logo')){
            if(file_exists($setting->white_logo)){
                unlink($setting->white_logo);
            }
            $setting->white_logo = $this->saveImage($request, 'white_logo');
        }
        $setting->app_name=$request->app_name;
        $setting->email=$request->email;
        $setting->facebook=$request->facebook;
        $setting->twitter=$request->twitter;
        $setting->country=$request->country;
        $setting->state=$request->state;
        $setting->instagram=$request->instagram;
        $setting->pinterest=$request->pinterest;
        $setting->copyright=$request->copyright;
        $setting->save();
        Session::flash('success','Setting updated successfully.');
        return redirect()->route('settings.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

       $setting=Setting::find($id);
       if(file_exists($setting->dark_logo)){
        unlink($setting->dark_logo);
       }
       if(file_exists($setting->white_logo)){
        unlink($setting->white_logo);
       }
       $setting->delete();
       Session::flash('success','Setting delete successfully.');
       return back();
    }



    public function saveImage($request, $imageName)
    {
    $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
    $photo = $request->file($imageName);

    if ($photo) {
        $photoName = rand() . $timestamp . '.' . $photo->getClientOriginalExtension();
        $dir = 'adminAsset/settings/';
        $imgUrl = $dir . $photoName;
        $photo->move($dir, $photoName);
        return $imgUrl;
    }

    return back();
    }
}