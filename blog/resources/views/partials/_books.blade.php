
		<div class="col-md-3">
	     	<div class="thumbnail div-img">
            	<img src='{{ asset("images/$book->path_to_image") }}' alt="Book" width="100%">
            	
            	<div class="title">
            		<p>{{ $book->book_title }}</p>
          		</div>
          		<div class="author">
            		<p>{{ $book->author }}</p>
          		</div>
          		<div class="genre">
            		<p>{{ $book->genre }}</p>
          		</div>
	        </div>
	    </div>