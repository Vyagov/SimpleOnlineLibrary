<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class Book extends Model
{
	
	protected $table = 'books';
	
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'user_id', 'book_title', 'author', 'genre', 'issue_date', 
    	'page_count', 'isbn', 'resume', 'path_to_image'
    ];
    
    public function User() 
    {
    	return $this->belongsTo('App\User', 'user_id');
    }
    
    public static function getMyBooks($id)
    {
    	$myBooks = DB::table('books')
    			->where('user_id', $id)
    			->orderBy('created_at', 'desc')
    			->paginate(8);
    	
    	return $myBooks;
    }
    
    public static function getAllBooks()
    {
    	$allBooks = DB::table('books')
		    	->orderBy('created_at', 'desc')
		    	->paginate(8);
		    	 
    	return $allBooks;
    }
    
    public static function searchBook()
    {
    	$query = Input::get('searchBook');

    	$books = DB::table('books')
    			->where('book_title', 'LIKE', "%$query%")
    			->orWhere('author', 'LIKE', "%$query%")
    			->orWhere('genre', 'LIKE', "%$query%")
    			->paginate(8);
    	return $books;
    }
}
