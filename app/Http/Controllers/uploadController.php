<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;

class uploadController extends Controller
{
    public function index()
    {
    	return view('upload.upload');
    }
     public function store(request $request)
    {
    	if($request->hasFile('image'))
    	{
			$request->file('image');
					return	$request->image->storeAs('public','bitfumes.jpg');

    	}
    	else
    	{
    		return "no file selected";
    	}
    	
    }
    public function show()
    {
    	$url=storage::url('bitfumes.jpg');
    	return "<img src='".$url."'/>";

    }
}
