<div class="p-2">
    <h1>Form</h1>
    <p>Eeello. <br><br> Your details or your life!!</p>
    <form action="form" method="post">
        @csrf
        <input class="col-lg-4" type="text" name="first_name" placeholder="Enter first name" /></input><br><br>

        <input class="col-lg-4"type="text" name="last_name" placeholder="Enter last name" /></input><br><br>

        <input class="col-lg-4" type="text" name="user_name" placeholder="Enter a user name" /></input><br><br>

        <input class="col-lg-4" type="password" name="password" placeholder="Enter a password" /></input><br><br>

        <input class="col-lg-4" type="password" name="password_repeat" placeholder="Repeat the password" /></input><br><br>

        <input type="submit" name="submit" value="Submit" /></input>
    </form>
</div>