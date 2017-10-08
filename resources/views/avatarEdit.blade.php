@extends('welcome')

@section('avatar_edit')
	<!-- image load -->
        <div class="avatarEdit">

        <form action="{{ action('FilleLoadController@testing') }}" id="uploadImage"  method="POST" enctype="multipart/form-data">
        	<input type="file" multiple name="file[]" class="upload-file" accept="image/*">
		    <!-- <input id="img" class="" data-input="false" type="file" data-buttonText="Upload Logo" data-size="sm" data-badge="false"  /> -->
		    <button type="submit" onclick="uploadImage();"> image load</button>
		</form>
            
            <!-- <input type="file" multiple name="file[]" class="upload-file" accept="image/*"> -->
	        <!-- <button id="addProduct" type="submit">load image</button> -->

        </div>
@endsection