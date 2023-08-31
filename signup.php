<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Register</title> 
    </head>

    <body>
    <p><h1>Voting System</h1><h3>Register Page</h3></p>
    <p><hr></p>

    <div name="container">

        <form method="POST" action="register.php" enctype="multipart/form-data" autocomplete="off">
            <p><input type ="text" name="username" placeholder="Username"></p>
            <p><input type ="text" name="mobile" placeholder="Mobile"></p>
            <p><input type ="password" name="password" placeholder="Password"></p>
            <p><input type ="password" name="cpassword" placeholder="Confirm Password"></p>
            <p><input type ="file" name="file" ></p>
            <p><select name="std" >
                <option value="group">Group</option>
                <option value="voter">Voter</option>
            </select></p>
            <p><input type="submit" value="Register" name="submit"></p>

            <p>
                Have an account? <a href="index.php" >Click Here</a>
            </p>
        </form>

    </div>

    </body>

</html>

