<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;


class OptimizeController extends Controller
{
     public function optimize(){
         return view ('admin.optimize.index'); 
     }

     public function optimizeClear(){
        Artisan::call('optimize:clear');
        Session::flash('success','Case Clear Successfully'); 
        return back(); 
     }

     public function runMigration()
    {
        Artisan::call('migrate');
        Session::flash('success','Migrations completed');
        return back();
    }

}
