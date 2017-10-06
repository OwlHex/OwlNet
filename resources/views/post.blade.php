@extends('welcome')

@section('post')
<div class="post text-regular">
    <div class="container clearfix">
        <img src="/img/logo03.png" alt="avatar" name="avatar" class="imagePost">
        <div class="post-lable">
            topic
            group name
            user name
            date
        </div>
</div>
    <div class="post-content">
        <p>
            hello! first post!!
            hello! first post!!
            hello! first post!!
            hello! first post!!
            hello! first post!!hello! first post!!hello! first post!!
            hello! first post!!hello! first post!!
            hello! first post!!
            hello! first post!!

            hello! first post!!hello! first post!!hello! first post!!
            hello! first post!!hello! first post!!hello! first post!!
            hello! first post!!hello! first post!!
        </p>
        <p>
            gwdoahjwodhjoiwjdiow
        </p>
    </div>
    <div>
        comment on post
    </div>
    <div class="R_block">
        <img src="/img/logo02.png" alt="avatar" name="avatar" class="imagePost">
            <textarea placeholder="max comment lentght is 500 characters" name="commentMessage" rows="4" cols="57" maxlength="500" class="margin-left"></textarea>
        <button type="button" class="buttonViwe align-right top-margin-hard right-margin">comment</button>
        
    </div>
@endsection