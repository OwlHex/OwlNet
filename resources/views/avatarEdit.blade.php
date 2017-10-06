@extends('welcome')

@section('avatar_edit')
	<!-- image load -->
        <div class="avatarEdit">
            
            <input type="file" multiple name="file[]" class="upload-file" accept="image/*">
	        {{--<input type="file" name="avatar" class="upload-file" accept="image/*">--}}
	        <button id="addProduct" type="submit">load image</button>

        </div>
@endsection