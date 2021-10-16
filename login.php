<?php

$servername = "localhost";
$name = "root";
$pass = "";
$db = "bebe";


$conn = mysqli_connect($servername, $name, $pass, $db);



$a_name = @$_POST['a_name'];
$a_pass = @$_POST['a_pass'];

if(isset($_POST['login'])){

if(empty($a_name) OR empty($a_pass)){

echo '<script> alert("Please Enter Password and Username"); </script>';


}
else{

    $get_admin = "select * from admin where a_name = '$a_name' AND a_pass = '$a_pass'";

    $run_admin = mysqli_query($conn,$get_admin);

    if(mysqli_num_rows($run_admin) == 1){

        $row_admin = mysqli_fetch_array($run_admin);



        $aname = $row_admin['a_name'];


        setcookie("aname",$aname,time()+60*60*24);
        setcookie("adminlogin",1,time()+60*60*24);

        header("location: index.php");


    }
    else{

        echo '<script> alert("The data entered is incorrect"); </script>';


    }

}

}






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginAll">
        <form action="login.php" method="post">
            <input type="text" name="a_name" placeholder="User name"/>
            <br>
            <input type="Password" name="a_pass" placeholder="Password"/>
            <br>
            <input type="submit" name="login" value="Goo"/>
        </form>
    </div>
</body>
</html>