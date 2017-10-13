

@section('user_block')

	<div class="user-block container clearfix avatar">

        <img src="img/logo02.png" alt="avatar" id="avatar" class="imageConstruct">

        <div class="floatbox ">

            <div class="text-box ">
                {{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}
            </div>
            <div class="text-box">
                {{{ isset(Auth::user()->id) ? Auth::user()->first_name :  Auth::user()->id}}}
            </div>
            <div class="text-box">
                {{{ isset(Auth::user()->id) ? Auth::user()->last_name :  Auth::user()->id}}}
            </div>
            <div class="text-box">
                {{{ isset(Auth::user()->id) ? Auth::user()->age :  Auth::user()->id}}}
            </div>
            <div class="text-box">
                {{{ isset(Auth::user()->id) ? Auth::user()->gender :  Auth::user()->id}}}
            </div>
            <a href="{{ route('avatarEdit1') }}">edit</a>
        </div>
    </div>

@endsection