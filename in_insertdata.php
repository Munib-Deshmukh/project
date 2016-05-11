<?php
include "Includes/connect.inc.php";
$search="";
$Search_by1="Default";
//echo $search."<br>".$Search_by1;
//return;

        $query = mysqli_query($con,"SELECT * FROM `invoice`");
        $rows=array();
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $rows[]=$row;
        }
        print json_encode($rows);


?>