<?php

namespace App\Http\Controllers;

use App\Models\Statement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StatementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.statement.index',[
            'statements'=>Statement::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.statement.create');

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
            'statement'=>'required',
        ]);
        $statement=new Statement();
        $statement->statement=$request->statement;
        $statement->save();
        session::flash('success', 'Statement add successfully.');
        return redirect()->route('statements.index');
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
        return view('admin.statement.edit',[
            'statement'=>Statement::find($id),
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
            'statement'=>'required',
        ]);
        $statement=Statement::find($id);
        $statement->statement=$request->statement;
        $statement->save();
        session::flash('success', 'Statement updated successfully.');
        return redirect()->route('statements.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $statement=Statement::find($id)->delete();
        Session::flash('success','Statement Delete successfully.');
        return back();
    }
}
