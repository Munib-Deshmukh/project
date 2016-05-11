<?php
include 'Core/init.php';


//if(isset($_POST['save'])){
//	print_r($_POST);


    mysqli_query($con,"INSERT INTO `sql6119016`.`invoice` (`order_id`, `invoice_name`,`Total_amount`) VALUES (NULL, '{$_POST['re_name']}',{$_POST['Total']})");
    $id=mysqli_insert_id($con);

    for($i=0;$i<count($_POST['ProductName']);$i++){
        echo count($_POST['ProductName']);
//        die();
        mysqli_query($con,"INSERT INTO `sql6119016`.`invoice_detail` (`ID`, `order_id`, `productname`, `quantity`, `price`, `discount`, `amount`)
                        VALUES (NULL, '{$id}', '{$_POST['ProductName'][$i]}', '{$_POST['Quantity'][$i]}'
                        , '{$_POST['Price'][$i]}', '{$_POST['Discount'][$i]}', '{$_POST['Amount'][$i]}')");
    }
header('Location:Invoice.php');
?>