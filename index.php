<?php
include "config.php";

if(isset($_POST['but_submit'])){

    $uname = mysqli_real_escape_string($con,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($con,$_POST['txt_pwd']);


    $rol = "select rol as rolcount from users where naam='".$uname."' and wachtwoord ='".$password."'";
    $resultrol = mysqli_query($con,$rol);
    $rowrol = mysqli_fetch_array($resultrol);
    $countrol = $rowrol['rolcount'];

    if($uname != "" && $password != ""){

        $sql_query = "select count(*) as Count from users where naam='".$uname."' and wachtwoord='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);
        $count = $row['Count'];
        if ($count > 0){
            //succes
            $_SESSION['uname'] = $uname;
            $_SESSION['rol'] = $countrol;
            header("Location:home.php");
             exit();   
        }
        else {
            //failed
            echo "<script>alert('invalid password')</script>";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="NL">
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="css/bier.css">
    </head>

    <body>
        <div class="container">
            <form method="post" action = "">
                <div id="div_login">
                    <h1>Login</h1>
                    <div>
                        <input type="text" class="textbox" id="txt_uname" name="txt_uname" placeholder="Naam"/>
                    </div>
                    <div>
                        <input type="password" class="textbox" id="txt_uname" name="txt_pwd" placeholder="Wachtwoord" />
                    </div>
                    <div>
                        <input type="submit" value="Submit" name="but_submit" id="but_submit" />
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>