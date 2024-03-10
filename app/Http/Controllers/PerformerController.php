<?php

namespace App\Http\Controllers;

use App\Models\Drama;
use App\Models\Performer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PerformerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.performer.index',[
            'performers'=>Performer::latest()->paginate(10),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('admin.performer.create');
        return view('admin.performer.create',[
            'dramas'=>Drama::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        // $request->validate([
        //     'name'=>'required',
        //     'position'=>'required',
        //     'character'=>'required',
        // ]);
        // $performer= new Performer();
        // $performer->name=$request->name;
        // $performer->position=$request->position;
        // $performer->character=$request->character;
        // $performer->save();
        // Session::flash('success','Performer add successfully.');
        // return redirect()->route('performers.index');

        $request->validate([
            'performer.*.name' => 'required',
            'performer.*.drama_id' => 'required',
            'performer.*.position' => 'required',
            'performer.*.character' => 'required',
        ],[
            'performer.*.name.required' => 'Name is required ',
            'performer.*.drama_id.required' => 'Drama  is required',
            'performer.*.position.required' => 'Position is required',
            'performer.*.character.required' => 'Character is required ',

        ]);
            foreach($request->performer as $item){
                $performer=new Performer();
                $performer->drama_id=$item['drama_id'];
                $performer->name=$item['name'];
                $performer->position=$item['position'];
                $performer->character=$item['character'];
                $performer->save();
            }
            Session::flash('success','Performer add successfully.');
            return redirect()->route('performers.index');

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
        // return view('admin.performer.edit',[
        //     'performer'=>Performer::find($id),
        // ]);
        return view('admin.performer.edit',[
            'performer'=>Performer::find($id),
            'dramas'=>Drama::all(),
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
            'performer.*.name' => 'required',
            'performer.*.drama_id' => 'required',
            'performer.*.position' => 'required',
            'performer.*.character' => 'required',
        ],[
            'performer.*.name.required' => 'Name is required ',
            'performer.*.drama_id.required' => 'Drama  is required',
            'performer.*.position.required' => 'Position is required',
            'performer.*.character.required' => 'Character is required ',

        ]);

        // Find the performer by ID
        $performer = Performer::findOrFail($id);

        // Update the performer details
        $performer->update([
            'drama_id' => $request->input('performer.0.drama_id'),
            'position' => $request->input('performer.0.position'),
            'name' => $request->input('performer.0.name'),
            'character' => $request->input('performer.0.character'),
        ]);

                    // Loop through additional performers and update/create as needed
                    // Loop through additional performers and update/create as needed
            foreach ($request->input('performer', []) as $key => $performerData) {
                if ($key == 0) {
                    continue; // Skip the first performer as we've already updated it
                }

                if (isset($performerData['id'])) {
                    Performer::where('id', $performerData['id'])->update([
                        'drama_id' => $performerData['drama_id'],
                        'position' => $performerData['position'],
                        'name' => $performerData['name'],
                        'character' => $performerData['character'],
                    ]);
                } else {
                    Performer::create([
                        'drama_id' => $performerData['drama_id'],
                        'position' => $performerData['position'],
                        'name' => $performerData['name'],
                        'character' => $performerData['character'],
                    ]);
                }
            }
        Session::flash('success','Performer updated successfully.');
        return redirect()->route('performers.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Performer::find($id)->delete();
        Session::flash('success','Performer delete successfully.');
        return back();

    }
}