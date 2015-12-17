<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class qasemcontroller extends Controller
{
    public function show_me(){
		$my="qasem";
		$last='karimi';
		return view('pages.show_me')->with('my',$my);
		
	}
	
	
	
}
