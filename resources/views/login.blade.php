@extends('welcome')

@section('login')
<div class="post post-box">
    <div class="content">
        <div class="title m-b-md">
            Signin
        </div>

        <div class="links">
           <input type="text" placeholder="Name" name="userName">
            <input type="password" placeholder="Password" name="userPassword">

        </div>
        <button type="submit" value="submit" class="buttonViwe">(*^,^*)</button>
        
    </div>
</div>

@endsection