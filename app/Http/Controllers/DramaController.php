<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Drama;
use App\Models\DramasDetail;
use App\Models\Performer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DramaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $drama,$newDramaDetail;
    public function index()
    {
        return view('admin.drama.manage',[
            'dramas'=>Drama::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return  view('admin.drama.create');
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
            'title'=>'required',
        ]);
//        return $request;
        $this->drama = Drama::newDrama($request);
         DramasDetail::newDramaDetail($this->drama->id, $request->drama);
         Session::flash('success','Drama Info Added Successfully.') ;
        return redirect()->route('dramas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.drama.show',[
            'drama'=>Drama::find($id),
            'dramasDetails'=>DramasDetail::where('drama_id',$id)->get(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.drama.edit',[
            'drama'=>Drama::find($id),
            'dramasDetails'=>DramasDetail::where('drama_id',$id)->get(),
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
    // return $request->all(); 
    $drama = Drama::findOrFail($id);

    // Update drama fields
    $drama->title = $request->title;
    $drama->video_link = $request->video_link;
    $drama->drama_status = $request->drama_status;
    $drama->status = $request->status;
    $drama->save();

    // Handle updating drama details
    if ($request->has('drama')) {
        foreach ($request->input('drama') as $detailId => $detail) {
            $dramaDetail = DramasDetail::findOrFail($detailId);
            $dramaDetail->description = $detail['description'];

            // Handle updating image if provided
            if ($request->hasFile('drama.' . $detailId . '.image')) {
                $image = $request->file('drama.' . $detailId . '.image');
                $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
                $photoName = rand() . $timestamp . '.' . $image->getClientOriginalExtension();
                $dir = 'adminAsset/drama/';
                $imgUrl = $dir . $photoName;
                $image->move($dir, $photoName);

                // Delete old image if exists
                if ($dramaDetail->image && file_exists(public_path($dramaDetail->image))) {
                    unlink(public_path($dramaDetail->image));
                }
                $dramaDetail->image = $imgUrl;
            }
            // Save drama detail
            $dramaDetail->save();
        }
    }
    return redirect()->route('dramas.index')->with('message', 'Drama updated successfully.');
}




    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
{
    $drama = Drama::find($id);
    if ($drama) {
        $dramaDetails = DramasDetail::where('drama_id', $id)->get();
        foreach ($dramaDetails as $item) {
            if (file_exists($item->image)) {
                unlink($item->image);
            }
        }
        DramasDetail::where('drama_id', $id)->delete();
        Performer::where('drama_id',$id)->delete();
        $drama->delete();
        Session::flash('success','Dram Info Delete Successfully');
        return redirect()->route('dramas.index');
    }
}


}