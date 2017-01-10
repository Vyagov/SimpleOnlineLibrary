				<div class="panel-body">
                	<form class="form-horizontal" role="form" enctype="multipart/form-data" method="POST" action="{{ url('insertInfo') }}">
                        {{ csrf_field() }}
                        <div class="row">
	                        <div class="col-md-6">
		                        <div class="form-group">
		                            <div class="{{ $errors->has('book_title') ? ' has-error' : '' }}">
		                                <input id="book_title" type="text" class="form-control" name="book_title" value="{{ old('book_title') }}" placeholder="Book title">
		                                
		                                @if ($errors->has('book_title'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('book_title') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                            <div class="{{ $errors->has('author') ? ' has-error' : '' }}">
		                                <input id="author" type="text" class="form-control" name="author" value="{{ old('author') }}" placeholder="Author">
		                                
		                                @if ($errors->has('author'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('author') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="{{ $errors->has('page_count') ? ' has-error' : '' }}">
		                                <input id="page_count" type="text" class="form-control" name="page_count" value="{{ old('page_count') }}" placeholder="Page count">
		                                
		                                @if ($errors->has('page_count'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('page_count') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                            <div class="{{ $errors->has('isbn') ? ' has-error' : '' }}">
		                                <input id="isbn" type="text" class="form-control" name="isbn" value="{{ old('isbn') }}" placeholder="ISBN">
		                                
		                                @if ($errors->has('isbn'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('isbn') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
							</div>
							
							<div class="col-md-6">
		                        <div class="form-group">
		                            <div class="{{ $errors->has('genre') ? ' has-error' : '' }}">
		                                <input id="genre" type="text" class="form-control" name="genre" value="{{ old('genre') }}" placeholder="Genre">
		                                
		                                @if ($errors->has('genre'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('genre') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                            <div class="{{ $errors->has('issue_date') ? ' has-error' : '' }}">
		                                <input id="issue_date" type="date" class="form-control" name="issue_date" value="{{ old('issue_date') }}" >
		                                
		                                @if ($errors->has('issue_date'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('issue_date') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <div class="{{ $errors->has('resume') ? ' has-error' : '' }}">
		                                <textarea id="resume" rows="2" class="form-control" style="resize: vertical" name="resume" placeholder="Resume" value="{{ old('resume') }}"></textarea>
			                                
		                                @if ($errors->has('resume'))
		                                    <span class="help-block">
		                                        <strong>{{ $errors->first('resume') }}</strong>
		                                    </span>
		                                @endif
		                            </div>
		                        </div>
							</div>
		                </div> 
		                
		                <div class="row">   
		                    <div class="form-group">
		                     	<div class="col-md-6{{ $errors->has('resume') ? ' has-error' : '' }}">
	             	            	<button class="btn btn-default fileContainer" aria-hidden="true">
								    	<i class="fa fa-picture-o" aria-hidden="true"></i>
								    	Uplode...
										<input type="file" name="path_to_image" />
									</button>
									@if ($errors->has('path_to_image'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('path_to_image') }}</strong>
	                                    </span>
	                                @endif
		                        </div>
		                        <div class="col-md-6">
		                            <button type="submit" class="btn btn-large btn-primary right">
		            	                Submit
		                                <i class="fa fa-arrow-right" aria-hidden="true"></i>
		                            </button>
		   	                    </div>
		                    </div>
		            	</div>
                    </form>
	            </div>