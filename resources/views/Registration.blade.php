@extends('welcome')

@section('Registration')
    <div class="post post-box">
        <div class="title m-b-md">
            Registration
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


    </div>

@endsection