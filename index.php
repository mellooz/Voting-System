<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>login</title> 
    </head>

    <body>
    <p><h1>Voting System</h1><h3>Login Page</h3></p>
    <p><hr></p>

    <div name="container">

        <form method="POST" action="login.php">
            <p><input type ="text" name="username" placeholder="Username" require="require"></p>
            <p><input type ="text" name="mobile" placeholder="Mobile" require="require"></p>
            <p><input type ="password" name="password" placeholder="Password" require="require"></p>
            <p><select name="std" >
                <option value="group">Group</option>
                <option value="voter">Voter</option>
            </select></p>
            <p><input type="submit" value="login" name="submit"></p>

            <p>
                Don't have an account? <a href="signup.php" >Click Here</a>
            </p>
        </form>

    </div>

    </body>

</html>

