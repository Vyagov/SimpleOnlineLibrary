<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    
    public function User() {
    	return $this->belongsTo('App\User', 'user_id');
    }
}
