<!doctype html>
<html lang="{{ app()->getLocale() }}">
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
            SignUp
        </div>

        <div class="links">
            <input type="text" placeholder="first name" name="userFirstName">
            <input type="text" placeholder="last Name" name="userLastName">

        </div>
        <div class="vrticalSpace">
            <input type="text" placeholder="Email" name="email">
            <input type="password" placeholder="Password" name="userPassword">


        </div>
        <div class="vrticalSpace">
            <select class="select-style">
                <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                <option>Months</option>
                <option>Option 1</option>
                <option>Option 2</option>
            </select>
            <select class="select-style">
                <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                <option>Day</option>
                <option>Option 1</option>
                <option>Option 2</option>
            </select>
            <select class="select-style">
                <!-- This method is nice because it doesn't require extra div tags, but it also doesn't retain the style across all browsers. -->
                <option>Year</option>
                <option>Option 1</option>
                <option>Option 2</option>
            </select>
        </div>

        <div class="vrticalSpace" >
            <input name="Female" type="radio" value="Female" >Female
            <input name="Male" type="radio" value="Male" >Female


        </div>


        <button type="submit" value="submit" class="buttonViwe">(#>,<#)</button>

            <div class="links ground">
                <a href="{{ url('/') }}"class="links">Home</a>

            </div>
    </div>
</div>
</body>
</html>