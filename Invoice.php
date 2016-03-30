<?php
include 'Core/init.php';
if(!isset($_SESSION['ID'])){
    header('Location:Index.php');
}
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
    <?php
    include 'Invoice/includes/head.php';
    ?>
    <body class="color_bg_whitesmoke">
    <div class="container">
        <h2>Invoice Management System</h2>
        <div class="col-sm-offset-11">
            <a href="loggout.php" class="nav navbar-right">Logout</a>
        </div>
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#menu1" >Create Invice</a></li>
            <li><a data-toggle="tab" href="#menu2">Show Invoice</a></li>
        </ul>
        <div class="tab-content">
            <div id="menu1" class="tab-pane fade in active">
                <?php
                include "Widgets/html/Invoice_form.php";
                ?>
            </div>
            <div id="menu2" class="tab-pane fade">
                <?php
                include "Widgets/html/Watch_invoice.php";
                ?>
            </div>
        </div>
    </div>
    </body>
</html>
<script>


    function Genpdf() {


        var element = $('#h');
        document.getElementById('h').setAttribute("width", "100");
        html2canvas(element, {width: 700, height: 1020}).then(
            function(canvas) {
                var doc = new jsPDF('landscape');
                doc.setFontSize(10);
                var dataUrl = canvas.toDataURL('image/jpeg');
                doc.addImage(dataUrl,0,0,canvas.width,canvas.height);
                doc.save('MeterPhotosReport.pdf');
            });
     /*   html2canvas(element, {
           size:-4,
            onrendered: function(canvas) {

                var doc = new jsPDF('landscape');
                doc.setFontSize(10);
                var dataUrl = canvas.toDataURL('image/jpeg');
                doc.addImage(dataUrl,0,0,canvas.width,canvas.height);
                doc.save('MeterPhotosReport.pdf');
            }
        });*/
    }

    $(".Detail").delegate(".Quantity,.Price,.Discount","keyup",function(){
        var tr=$(this).parent().parent();
        var qty=tr.find(".Quantity").val();
        var prce=tr.find(".Price").val();
        var dis=tr.find(".Discount").val();
        var amt=qty*prce-(qty*prce*dis)/100;
            tr.find(".Amount").val(amt);
        total_t();
    });

    var bool1=false;
    var bool2=false;

$(".name").delegate(".Me_name","keyup",function(){
    var reciptname=$(".Me_name").val();
    if(!allLetter(reciptname)){
        $(".Me_name").css("color","red");
        $(".name").addClass("has-error has-feedback");
        $(".nm").addClass("glyphicon glyphicon-remove form-control-feedback");
        bool2=false;
    }else {$(".Me_name").css("color","#555");
        $(".name").removeClass("has-error has-feedback");
        $(".nm").removeClass("glyphicon glyphicon-remove form-control-feedback");
        bool2=true;
        }
    if(bool1&&bool2){
       $(".save").prop('disabled',false);
    }else  $(".save").prop('disabled',true);

});
    $(".Detail").delegate(".ProductName,.Quantity,.Price,.Discount","keyup",function(){
        var tr=$(this).parent().parent();
        var Pname=tr.find(".ProductName").val();
        var qty=tr.find(".Quantity").val();
        var prce=tr.find(".Price").val();
        var dis=tr.find(".Discount").val();

        if(allLetter(Pname)&&allnumeric(qty)&&allnumericfloat(prce)&&allnumeric(dis)){
            bool1=true;
        }else bool1=false;

        if(bool1&&bool2){
            $(".save").prop('disabled',false);
        }else  $(".save").prop('disabled',true);

        if(!allLetter(Pname)){
            tr.find(".ProductName").css("color","red");
            tr.find(".pn").addClass("has-error has-feedback");
            tr.find(".prname").addClass("glyphicon glyphicon-remove form-control-feedback");
        }else{tr.find(".ProductName").css("color","#555");
            tr.find(".pn").removeClass("has-error has-feedback")
            tr.find(".prname").removeClass("glyphicon glyphicon-remove form-control-feedback");
          }

        if(!allnumericfloat(prce)){
            tr.find(".Price").css("color","red");
            tr.find(".pr").addClass("has-error has-feedback");
            tr.find(".pri").addClass("glyphicon glyphicon-remove form-control-feedback");
        }else{tr.find(".Price").css("color","#555");
            tr.find(".pr").removeClass("has-error has-feedback");
            tr.find(".pri").removeClass("glyphicon glyphicon-remove form-control-feedback");
            }

        if(!allnumeric(qty)){
            tr.find(".Quantity").css("color","red");
            tr.find(".qu").addClass("has-error has-feedback");
            tr.find(".qauntitiy").addClass("glyphicon glyphicon-remove form-control-feedback");
        }else{tr.find(".Quantity").css("color","#555");
            tr.find(".qu").removeClass("has-error has-feedback");
            tr.find(".qauntitiy").removeClass("glyphicon glyphicon-remove form-control-feedback");
            }

        if(!allnumeric(dis)){
            tr.find(".Discount").css("color","red");
            tr.find(".di").addClass("has-error has-feedback");
            tr.find(".disco").addClass("glyphicon glyphicon-remove form-control-feedback");
        }else{tr.find(".Discount").css("color","#555");
            tr.find(".di").removeClass("has-error has-feedback");
            tr.find(".disco").removeClass("glyphicon glyphicon-remove form-control-feedback");
            }

    });
    function allLetter(pname)
    {
        var letters = /^[0-9a-zA-Z]+$/;
        if(pname.match(letters))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function allnumericfloat(uzip)
    {
        var numbers = /^\d+(\.\d+)?$/;
        if(uzip.match(numbers))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function allnumeric(uzip)
    {
        var numbers = /^[0-9]+$/;
        if(uzip.match(numbers))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    function total_t(){
        var t=0;
        $(".Amount").each(function(i,e){
            var amt2= $(this).val()-0;
            t+=amt2;
        });
        $(".total").val(t);
      //  $(".total").html(t);
       // console.log(t);
    }


</script>