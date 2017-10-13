@extends('welcome')

@section('avatar_edit')
	<!-- image load -->
    
        <div class="avatarEdit"> 
            <input type="file" multiple name="file[]" id="File" class="upload-file" accept="image/*">
	        <button id="addProduct" type="submit">upload image</button>
        </div>

    <form id="editProfile">   
        
        <div class="moon">
        	<input type="text" placeholder="firstname" id="first_name">
        	<input type="text" placeholder="lastname" id="last_name">
        	<div>
        		<input type="radio" name="gender" value="male"> Male<br>
  				<input type="radio" name="gender" value="female"> Female<br>
        	</div>
            <div>
                   <button id="changeProfile" type="submit" class="buttonViwe">Save changes</button>    
            </div>
                 
        </div>
    </form>
@endsection