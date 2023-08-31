<?php
require("connect.php");

session_start();

$data = $_SESSION["data"];

if($_SESSION["status"] == 1){
    $status = "<b>Voted</b>";
}else{
    $status = "<b>Not Voted</b>";
}



?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Voting System Dashboard</title> 
    </head>

    <body>
        <div name="container">


            <p><a href ="index.php" > <button >Back</button></a>
            <a href ="logout.php" > <button >Log out</button></a></p>
            <p><h1>Voting System</h1></p>
            <p><hr></p>

            <div class="row my-5">

                <div class="col-md-5">
                <!--user profile-->
                <img src="<?php echo $data["photo"];?>" alt="user Image" width="100" height="100"><br><br>
                <strong>Name: <?php echo $data["username"]; ?></strong><br><br>
                <strong>Mobile: <?php echo $data["mobile"]; ?></strong><br><br>
                <strong>Status: <?php echo $status; ?></strong><br><br>
                </div>
                <hr>

                <div class="col-md-7">
                    <!--Groups-->
                    <?php

                    if(isset($_SESSION["groups"])){
                        $groups = $_SESSION["groups"];
                        for($i=0; $i<count($groups); $i++){
                    ?>
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php echo $groups[$i]['photo'];?>" alt="Group Image" width="50" height="50">
                        </div>
                        <div class="col-md-8">
                            <strong>Group Name: <?php echo $groups[$i]['username'];?></strong><br>
                            <strong>Votes: <?php echo $groups[$i]['votes'];?></strong><br>
                        </div>
                    </div>
                    <form atcion="voting.php" method="POST">
                        <input type="hidden" name="gvote" value="<?php echo $groups[$i]['votes'];?>" >
                        <input type="hidden" name="gid" value="<?php echo $groups[$i]['id'];?>" >

                        <?php
                            if($_SESSION["status"] == 1){
                        ?>
                        <button>Voted</button>
                                <?php  
                            }else{
                                ?>
                                <button type="submit">Vote</button>
                            <?php
                            }
                        ?>
                    </form>
                    <br> 

                    <?php
                        }
                    }else{
                        ?>
                        <div class="container">
                            <p>No Groups</p>
                        </div>
                        <?php
                    }
                    ?>

                    
                </div> 
            
            </div>


        </div>
    </body>
</html> 















