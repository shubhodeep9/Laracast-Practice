<?php

namespace App\Http\Controllers;


class PageController extends Controller
{
    //
    public function home(){
    	$people	= ['Shubhodeep', 'Amrita'];

    	return view('welcome',compact('people'));
    }

    public function about(){
    	return 'An about page';
    }
}
