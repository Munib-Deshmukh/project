<?php
/**
 * Created by PhpStorm.
 * User: Munib
 * Date: 13/03/2016
 * Time: 02:33 PM
 */
function sanatize($data){
    return mysql_real_escape_string($data);
}
?>