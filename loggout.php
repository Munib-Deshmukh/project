<?php
/**
 * Created by PhpStorm.
 * User: Munib
 * Date: 13/03/2016
 * Time: 04:19 PM
 */
session_start();
session_destroy();
header('Location: index.php');

?>