<?php
include "Includes/connect.inc.php";
$search="";
$Search_by2="Default";


        $query = mysqli_query($con,"SELECT * FROM `invoice_detail`");
        $rows = array();
        while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            $rows[] = $row;
        }
        print json_encode($rows);
    ?>