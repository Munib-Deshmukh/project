<?php
/**
 * Created by PhpStorm.
 * User: Munib
 * Date: 11/03/2016
 * Time: 11:12 AM
 */
$conn_error='could not connect to database';

$mysql_host='sql6.freemysqlhosting.net';
$name='sql6119016';
$mysql_pass='APliKtnLxx';
$mysql_db='sql6119016';
$con=mysqli_connect($mysql_host,$name,$mysql_pass,$mysql_db);

if(mysqli_connect_errno()) {


    echo '<script>alert("Could not Connect to database!");</script>';
    die();

}
?>