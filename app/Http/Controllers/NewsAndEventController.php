<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class NewsAndEventController extends Controller
{
    public function index()
	{
		$news_event = 'news_event';
		$data 	  = compact('news_event');
		return view('news_event',$data);
	}
}
