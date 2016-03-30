<?php
/**
 * Created by PhpStorm.
 * User: Munib
 * Date: 13/03/2016
 * Time: 01:46 PM
 */
function Logged_in(){
    return (isset($_SESSION['ID']))?true:false;
}


function User_exist($username){
    $username=sanatize($username);
    $query=mysql_query("SELECT COUNT(`ID`) FROM `userdata` WHERE `Username`='$username'");
    return (mysql_result($query,0)==1) ? true:false;

}

function user_id_from_username($username){
    $username=sanatize($username);
    return mysql_result(mysql_query("SELECT `ID` FROM `userdata` WHERE `username`='$username'"),0,`ID`);
}

function login($username,$password){
$user_id=user_id_from_username($username);
    $username=sanatize($username);

    return (mysql_result(mysql_query("SELECT COUNT(`ID`) FROM `userdata` WHERE `Username`='$username'AND `Password`='$password'"),0)==1)? $user_id:false;

}
?>