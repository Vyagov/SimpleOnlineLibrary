<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;

class ImageController extends Controller
{
    public function upload(Request $request) 
    {
    	$this->validate($request, [
    		'image' => 'required|image|mimes:jpeg,jpg,png,gif,bmp,svg|max:2048'	
    	]);

    	$imageName = time() . '.' . $request->image->getClientOriginalExtension();

    	$request->image->move(public_path('images'), $imageName);

    	/* Image::create(['path_to_image' => $imageName]); */
    	
    	return back()
    			->with('success', 'Image Uploaded Successfully')	
    			->with('path_to_image', $imageName);
	}
	
	public function index()
	{
		return view('home');
	}
}
