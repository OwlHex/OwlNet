<!doctype html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Signin</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/frontPage.css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Signin
        </div>

        <div class="links">
           <input type="text" placeholder="Name" name="userName">
            <input type="password" placeholder="Password" name="userPassword">

        </div>
        <button type="submit" value="submit" class="buttonViwe">(*^,^*)</button>
        <div class="links ground flex-center">
            <a href="<?php echo e(url('/')); ?>"class="links">Home</a>

        </div>
    </div>
</div>
</body>
</html>