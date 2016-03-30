<?php
include 'Core/init.php';


//if(isset($_POST['save'])){
//	print_r($_POST);


    mysql_query("INSERT INTO `sql6112808`.`invoice` (`order_id`, `invoice_name`,`Total_amount`) VALUES (NULL, '{$_POST['re_name']}',{$_POST['Total']})");
    $id=mysql_insert_id();

    for($i=0;$i<count($_POST['ProductName']);$i++){
        echo count($_POST['ProductName']);
//        die();
        mysql_query("INSERT INTO `sql6112808`.`invoice_detail` (`ID`, `order_id`, `productname`, `quantity`, `price`, `discount`, `amount`)
                        VALUES (NULL, '{$id}', '{$_POST['ProductName'][$i]}', '{$_POST['Quantity'][$i]}'
                        , '{$_POST['Price'][$i]}', '{$_POST['Discount'][$i]}', '{$_POST['Amount'][$i]}')");
    }
header('Location:Invoice.php');
?>