@extends('welcome')

@section('post')


<div class="post post-box ground">   
    <div class="R_block">
        <img src="/img/logo02.png" alt="avatar" name="avatar" class="imagePost">
            <textarea placeholder="max post lentght is 5000 characters" name="postMessage"  maxlength="5000" class="margin-left textarea"></textarea>
        <button type="button" class="buttonViwe align-right top-margin-hard right-margin">Post</button>       
    </div>
</div>
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
        post text
    </div>
    <div class="R_block">
            <img src="/img/logo02.png" alt="avatar" name="avatar" class="imagePost">
           <div class=" comment_pa">
                comment      
           </div>    
    </div>
    <div class="R_block">
        <img src="/img/logo02.png" alt="avatar" name="avatar" class="imagePost">
            <textarea placeholder="max comment lentght is 500 characters" name="commentMessage" maxlength="500" class="margin-left comment_s"></textarea>
        <button type="button" class="buttonViwe align-right top-margin-hard ">comment</button>
        
    </div>
@endsection