@extends('welcome')

@section('news')
<div class="post  ground feel">
	<div class="main-center">
		<button type="button" class="buttonViwe  right-margin">general</button>
		<button type="button" class="buttonViwe  right-margin">recommend</button>
		<button type="button" class="buttonViwe  right-margin">my</button>
		<button type="button" class="buttonViwe  right-margin">group</button>
	</div>
</div>

<div class="post post-box ground">
    
    <div class="R_block">
        <img src="/img/logo02.png" alt="avatar" name="avatar" class="imagePost">
            <textarea placeholder="max post lentght is 5000 characters" name="postMessage"  maxlength="5000" class="margin-left textarea"></textarea>
        <button type="button" class="buttonViwe align-right top-margin-hard right-margin">Post</button>
        
    </div>
</div>

@endsection			