<?php
include 'Core/init.php';
?>

<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<?php
include 'Widgets/html/Head.php';
?>
<body>
<div class="container-fluid">
    <div class="container color_bg_whitesmoke">
        <div class="container-fluid">
            <?php
            include 'Widgets/html/Header.php';
            ?>
        </div>
        <div class="container-fluid">
            <?php
            if(Logged_in()) {
                header('Location: Invoice.php');
            }else{
                include 'Widgets/html/Login_form.php';
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
