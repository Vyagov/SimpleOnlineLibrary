<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
	public function index()
	{
		return view('home');
	}
	
	public function uploadBook(Request $request) 
    {
    	if (isset(Auth::user()->id)) {
    		$user_id = Auth::user()->id;
    	} else {
    		return redirect()->route('login');
    	}
    	
    	$this->validate($request, [
    		'book_title' => 'required',
    		'author' => 'required',
    		'genre' => 'required',
    		'issue_date' => 'required|date',
    		'page_count' => 'required|integer',
    		'isbn' => 'required',
    		'resume' => 'required',
    		'path_to_image' => 'required|image|mimes:jpeg,jpg,png,gif,bmp,svg|max:2048'
    	]);

    	$imageName = time() . '.' . $request->path_to_image->getClientOriginalExtension();

    	$request->path_to_image->move(public_path('images'), $imageName);

    	Book::create([
    		'user_id' => $user_id,
    		'book_title' => $request->book_title,
    		'author' => $request->author,
    		'genre' => $request->genre,
    		'issue_date' => $request->issue_date,
    		'page_count' => $request->page_count,
    		'isbn' => $request->isbn,
    		'resume' => $request->resume,
    		'path_to_image' => $imageName
    	]);
    	
    	return back()->with('success', 'The book is uploaded!');	
	}
	
	public function showMyBooks()
	{
		if (isset(Auth::user()->id)) {
    		$user_id = Auth::user()->id;
    	} else {
    		return redirect()->route('login');
    	}

    	$myBooks = Book::getMyBooks($user_id);
    	
    	return view('home', compact('myBooks'));
	}
	
	public function showAllBooks()
	{
		$allBooks = Book::getAllBooks();
		 
		return view('home', compact('allBooks'));
	}
	
	public function searchBook()
	{
		$books = Book::searchBook();
		
		return view('home', compact('books'));		
		
	}
}
