@extends('welcome')

@section('avatar_edit')
	<!-- image load -->
        <div class="avatarEdit">

        <form action="{{ action('FilleLoadController@testing') }}" id="uploadImage"  method="POST" enctype="multipart/form-data">
        	<input type="file" multiple name="file[]" class="upload-file" accept="image/*">
		    
		    <button type="submit" onclick="uploadImage();"> image load</button>
		</form>
            
            <!-- <input type="file" multiple name="file[]" class="upload-file" accept="image/*"> -->
	        <!-- <button id="addProduct" type="submit">load image</button> -->

        </div>
@endsection