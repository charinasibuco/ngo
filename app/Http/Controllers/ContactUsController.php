<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ContactUsController extends Controller
{
    public function index()
    {
    	$contact_us = 'contact_us';
    	$data 	= compact('contact_us');
    	return view('contact_us',$data);
    }
}
