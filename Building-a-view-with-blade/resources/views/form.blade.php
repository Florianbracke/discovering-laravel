@extends('layout')

@extends('header')

@section('content')

<div class="p-2">

    <h1>Form</h1>

    <p>Eeello. <br><br> Your details or your life!!</p>

    <form action="" method="post">

        <!-- protection -->
        @csrf

         <!-- error 1 -->
        <input class="col-lg-4" type="text" name="first_name" placeholder="Enter first name" /></input><br><br>
            @error('first_name')
                <span class="text-danger">{{ $errors->first('first_name') }}</span>
            @enderror

         <!-- error 2 -->
        <input class="col-lg-4"type="text" name="email" placeholder="emailke he" /></input><br><br>
            @error('email')
                <span class="text-danger">{{ $errors->first('email') }}</span>
            @enderror


        <input type="submit" name="submit" value="Submit" /></input>

    </form>

</div>

@endsection