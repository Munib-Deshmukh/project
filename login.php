<?php
/**
 * Created by PhpStorm.
 * User: Munib
 * Date: 13/03/2016
 * Time: 01:43 PM
 */
include 'Core/init.php';


if(empty($_POST)=== false){
    $UserName=$_POST['username'];
    $Password=$_POST['passid'];
    if(empty($UserName)||empty($Password)){
        echo '<script>alert("fill all the fields");</script>';
    }
    elseif(!User_exist($UserName)){
        echo '<script>alert("No such user");</script>';

    }
    else{
            $login=login($UserName,$Password);
            if(!$login){
                echo '<script>alert("password is incorrect");</script>';
            }else{
                $_SESSION['ID']=$login;
                echo $_SESSION['ID'];
                header('Location: Invoice.php');
                exit();
            }
        }
}
?>