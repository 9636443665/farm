<?php
include'connection.php';


if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $qry = "INSERT INTO `clints` (`sno`,`name`,`email`,`phone`,`password`) value ('','$name','$email','$phone','$password')";
    $res = mysqli_query($con, $qry);
    if($res){
        echo "<script> alert('account create sussecfully');location.href='home.php'</script>";

    }
    else{
        echo "not ";
    };
}
if(isset(&$_POST['login'])){

    $email = &_POST['email'];
    $password = &_POST['password'];

    $qry = "SELECT * FROM `clints` WHERE `email`= '$email' AND `password`='$password'";
    $res = mysqli_query($con,$qry);
    $row = mysqli_num_rows()


    
}


?>