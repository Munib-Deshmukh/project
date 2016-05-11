<?php
/**
 * Created by PhpStorm.
 * User: Munib
 * Date: 13/03/2016
 * Time: 01:46 PM
 */

$mysql_host='sql6.freemysqlhosting.net';
$name='sql6119016';
$mysql_pass='APliKtnLxx';
$mysql_db='sql6119016';
	$con=mysqli_connect($mysql_host,$name,$mysql_pass,$mysql_db);
function Logged_in(){
    return (isset($_SESSION['ID']))?true:false;
}


function User_exist($username){
   // $username=sanatize($username);

    $query=mysqli_query($GLOBALS['con'],"SELECT COUNT(`ID`) FROM `userdata` WHERE `Username`='$username'");
if($query){
	return true;
}
else{
	return false;
}

  //  return (mysqli_result($query,0)==1) ? true:false;

}

function user_id_from_username($username){
   // $username=sanatize($username);

    return mysqli_query($GLOBALS['con'],"SELECT `ID` FROM `userdata` WHERE `username`='$username'");
}

function login($username,$password){

$user_id=user_id_from_username($username);
   // $username=sanatize($username);
    if(mysqli_query($GLOBALS['con'],"SELECT COUNT(`ID`) FROM `userdata` WHERE `Username`='$username'AND `Password`='$password'")){
    	return true;
    }
    else{
    	return false;
    }


}
?>