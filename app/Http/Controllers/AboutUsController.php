<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    
	public function index()
	{
		$about_us = 'about_us';
		$data 	  = compact('about_us');
		return view('about_us',$data);
	}
   
}
