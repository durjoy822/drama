<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\About;
use App\Models\Drama;
use App\Models\Header;
use App\Models\Contact;
use App\Models\DramasDetail;
use App\Models\Performer;
use App\Models\Slider;
use App\Models\Statement;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index( )
    {

        return view('web.home',[
            'about'=>About::first(),
            'upcomings' => Drama::where('drama_status', 1)
                        ->where('status', 1)
                        ->with('dramaDetail')->take(6) // Eager load the drama details
                        ->get(),


            'sliders'=>Slider::all(),                       //slider data passed
            'dramas' => Drama::where('status', 1)           //slider data passed
                        ->with('dramaDetail')
                        ->get(),

]);
    }

    public function dramaDetails($id){
        return  view('web.drama.drama_details',[
            'header' => Header::where('page_name', 'drama_details_page')->first(),
            'performers'=>Performer::where('drama_id',$id)->latest()->get(),
            'drama' => Drama::with('dramaDetail')->find($id),
            'drama_details'=>DramasDetail::where('drama_id',$id)->get(),
        ]);
    }

    public function singleDetails($id){
        return  view('web.drama.single_show',[
            'header' => Header::where('page_name', 'single_show')->first(),
            'dramas' => Drama::where('status', 1)->where('drama_status',$id)
                        ->with('dramaDetail')->paginate(10),
                        // ->get(),
        ]);
    }

    public function statement(){
        return view('web.statement',[
            'statement'=>Statement::first(),
            'header' => Header::where('page_name', 'statement_page')->first(),
        ]);
    }

    public function about(){
        return view('web.about',[
            'about'=>About::first(),
            'header' => Header::where('page_name', 'about_page')->first(),
        ]);
    }

    public function founder(){
        return view('web.founder',[
            'founders'=>Team::where('member_type',1)->inRandomOrder()->get(),
            'header' => Header::where('page_name', 'founder_page')->first(),

        ]);
    }

    public function teams(){
        return view('web.teams',[
            'teams'=>Team::inRandomOrder()->get(),
            'header' => Header::where('page_name', 'team_page')->first(),
        ]);
    }

    public function contact(){
        return view('web.contact',[
            'contact'=>Contact::first(),
            'header' => Header::where('page_name', 'contact_page')->first(),
        ]);
    }

    public function show(){
        return view('web.drama.show',[
            'header' => Header::where('page_name', 'show_page')->first(),
            'dramas' => Drama::where('status', 1)
                        ->with('dramaDetail')
                        ->get(),
        ]);


    }

}