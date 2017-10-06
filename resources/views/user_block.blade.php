

@section('user_block')

	<div class="user-block container clearfix avatar">

        <img src="img/logo02.png" alt="avatar" id="avatar" class="imageConstruct">

        <div class="floatbox ">

            <div class="text-box ">
                Username
            </div>
            <div class="text-box">
                first name
            </div>
            <div class="text-box">
                last name
            </div>
            <div class="text-box">
                age
            </div>
            <div class="text-box">
                gender
            </div>
            <a href="{{ route('avatarEdit') }}">edit</a>
        </div>
    </div>

@endsection