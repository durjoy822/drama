<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.team.index',[
            'teams'=>Team::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.team.create');
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
            'name'=>'required',
            'image'=>'required',
            'member_type'=>'required',
        ]);
        $team=new Team();
        $team->name=$request->name;
        $team->member_type=$request->member_type;
        $team->facebook=$request->facebook;
        $team->twitter=$request->twitter;
        $team->instagram=$request->instagram;
        $team->image=$this->saveImage($request);
        $team->save();
        Session::flash('success','Team Member Add Successfully');
        return redirect()->route('teams.index');
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
        return view('admin.team.edit',[
            'team'=>Team::find($id),
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
            'name'=>'required',
            'member_type'=>'required',
        ]);

        $team=Team::find($id);
        $team->name=$request->name;
        $team->member_type=$request->member_type;
        $team->facebook=$request->facebook;
        $team->twitter=$request->twitter;
        $team->instagram=$request->instagram;
        if($request->file('image')){
            if(file_exists($team->image)){
                unlink($team->image);
            }
            $team->image=$this->saveImage($request);
        }
        $team->save();
        Session::flash('success','Team Member  Update Successfully');
        return redirect()->route('teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team=Team::find($id);
        if(file_exists($team->image)){
            unlink($team->image);
        }
        $team->delete();
        Session::flash('success','Team Delete successfully ');
        return back();
    }

    public function saveImage($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/teams/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}