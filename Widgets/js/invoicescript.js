$(function(){
    $('#add').click(function(){
        add_row();
    });
});

function SomeDeleteRowFunction(o) {
    //no clue what to put here?
    var p=o.parentNode.parentNode;
    p.parentNode.removeChild(p);
    total_t();
}

/*onload=function() {
    if (!document.getElementsByTagName || !document.createTextNode) return;
    var rows = document.getElementById('my_table').getElementsByTagName('tbody')[0].getElementsByTagName('tr');
    for (i = 0; i < rows.length; i++) {
        rows[i].onclick = function() {
            alert(this.rowIndex + 1);
        }
    }
}
 var row_index=1;
 function selectrow(x){
 row_index= x.rowIndex;

 }
 function deleterow(){
 if(row_index!=0) {
 document.getElementById("my_table").deleteRow(row_index);
 }


}*/






function add_row(){

    var n=($('.Detail tr').length)+1;
    var tr='<tr>'+
            '<th class="no">'+n+'</th>'+
            '<td class="pn"><input type="text" class="form-control ProductName" name="ProductName[]"><span class="prname"></span></td>'+
            '<td class="qu"><input type="text" class="form-control Quantity" name="Quantity[]"><span class="qauntitiy"></span></td>'+
            '<td class="pr"><input type="text" class="form-control Price" name="Price[]"><span class="pri"></span></td>'+
            '<td class="di"><input type="text" class="form-control Discount" name="Discount[]"><span class="disco"></span></td>'+
            '<td><input type="text" class="form-control Amount" readonly="readonly" name="Amount[]"></td>'+
            '<td><a href="#" class="remove" onclick="SomeDeleteRowFunction(this)">Delete</a></td>'+
           '</tr>';
    $('.Detail').append(tr);
}
