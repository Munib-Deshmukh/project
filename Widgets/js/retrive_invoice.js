/**
 * Created by Munib on 16/03/2016.
 */
function display_alldata(){
    console.log("ASdasds");
    alert("Adasda");

}
$( document ).ready(function() {
    $.ajax({url: "in_insertdata.php",
        method:'post',
        datatype:'json',
        success: function(data){
        //   console.log(data);

            var o =JSON.parse(data);
           // console.log(o);
            var dataSet=[];
            $.each(o,function(i,k){
                dataSet.push( $.map(o[i], function(el) { return el; }));
            });


           // console.log(dataSet);
            var datatableinstance=$('#T').DataTable({
               data:dataSet,
                columns:[
                    {'dataSet':'order_id'},
                    {'dataSet':'invoice_name'},
                    {'dataSet':'Total_amount'}
                ]

            });

            $('#T tfoot th').each(function(){
                var Title=$('#T thead th').eq($(this).index()).text();
                $(this).html('<input type="text" placeholder="search" style="width: 100%"/> ');
            });

            datatableinstance.columns().every(function(){
                var datacolumn=this;
                $(this.footer()).find('input').on('keyup change',function(){
                    datacolumn.search(this.value).draw();
                });
            });
var tabletools=new $.fn.dataTable.TableTools(datatableinstance,{
    'sSwfPath':'Widgets/Images/copy_csv_xls_pdf.swf',
    'aButtons':['pdf',{
        'sExtends':'print',
        'sButtonText':'',
        'bShowAll':false,
        'bFooter':false
    }
    ]
});
            $(tabletools.fnContainer()).insertBefore('#T_wrapper');
            $("#ToolTables_T_1").addClass("glyphicon glyphicon-print");

    }});

    $.ajax({url: "prod_insertdata.php",
        method:'post',
        datatype:'json',
        success: function(data){
           // console.log(data);
            var o =JSON.parse(data);
          //  console.log(o);
            var dataSet=[];
            $.each(o,function(i,k){
                dataSet.push( $.map(o[i], function(el) { return el; }));
            });


          //  console.log(dataSet);
            var datatableinstance2= $('#T2').DataTable({
                data:dataSet,
                searchable:false,
                columns:[
                    {'dataSet':'ID'},
                    {'dataSet':'order_id'},
                    {'dataSet':'productname'},
                    {'dataSet':'quantity'},
                    {'dataSet':'price'},
                    {'dataSet':'discount'},
                    {'dataSet':'amount'}
                ]

            });
            $('#T2 tfoot th').each(function(){
                var Title=$('#T2 thead th').eq($(this).index()).text();
                $(this).html('<input type="text" placeholder="search" style="width: 100%"/> ');
            });

            datatableinstance2.columns().every(function(){
                var datacolumn=this;
                $(this.footer()).find('input').on('keyup change',function(){
                    datacolumn.search(this.value).draw();
                });
            });
            var tabletools=new $.fn.dataTable.TableTools(datatableinstance2,{
                'sSwfPath':'Widgets/Images/copy_csv_xls_pdf.swf',
                'aButtons':['pdf',{
                    'sExtends':'print',
                    'sButtonText':'',
                    'bShowAll':false,
                    'bFooter':false
                }
                ]
            });
            $(tabletools.fnContainer()).insertBefore('#T2_wrapper');
            $("#ToolTables_T2_1").addClass("glyphicon glyphicon-print");


        }});


});



function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    w=window.open();
    w.document.write(printContents);
    w.print();
    w.close();
}

function showCustomer(str) {
    var xhttp;
    var search_by=document.search_form.Search_by1.value;
    if (str == "") {
        document.getElementById("invoice_data").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("invoice_data").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "in_insertdata.php?search="+str+"&Search_by1="+search_by, true);
    xhttp.send();
}

function showProducts(str) {
    var xhttp;
    var search_by=document.search_form.Search_by2.value;
    if (str == "") {
        document.getElementById("invoice_data").innerHTML = "";
        return;
    }
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
            document.getElementById("invoice_data2").innerHTML = xhttp.responseText;
        }
    };
    xhttp.open("GET", "prod_insertdata.php?search="+str+"&Search_by2="+search_by, true);
    xhttp.send();
}