<div class="container-fluid">
            <div class="container">
                <header class="nav container-fluid">
                    <h3 class="navbar-brand">Invoice</h3>
                </header>
                <form name="invoice_form" action="Insertdata.php" method="post" >
                    <div class="form-group name">
                            <label for="re_name">Recept Name:</label>
                            <input type="text" class="form-control Me_name" name="re_name" id="name"><span class="nm"></span>
                    </div>
                    <div class="container-fluid">
                        <div class="form-group col-sm-offset-0 col-sm-2" >
                                <input type="submit" value="Save Record" class="btn btn-primary save" name="save">
                        </div>
                        <div class="col-sm-offset-1">

                        </div>
                    </div>
                        <div class="table-responsive" id="table_invoice">
                        <table class="table table-bordered" id="my_table">
                            <thead id="h">
                                        <th>No.</th>
                                        <th>ProductName</th>
                                        <th>Quantitiy</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Amount</th>
                                        <th><input type="button" value="+" id="add" class="btn btn-sm btn-primary"></th>
                            </thead>
                            <tbody class="Detail">
                                        <tr>
                                            <th class="no">1</th>
                                            <td class="pn"><input type="text" class="form-control ProductName" name="ProductName[]"><span class="prname"></span></td>
                                            <td class="qu"><input type="text" class="form-control Quantity" name="Quantity[]"><span class="qauntitiy"></span></td>
                                            <td class="pr"><input type="text" class="form-control Price" name="Price[]"><span class="pri"></span></td>
                                            <td class="di"><input type="text" class="form-control Discount" name="Discount[]"><span class="disco"></span></td>
                                            <td><input type="text" readonly="readonly" class="form-control Amount" name="Amount[]"></td>
                                            <td><a href="#" class="remove" onclick="SomeDeleteRowFunction(this)">Delete</a></td>
                                        </tr>
                            </tbody>
                            <tfoot>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th><input type="text" readonly="readonly"  value="0" class="form-control total disabled" name="Total"></th>
                                    <th></th>
                            </tfoot>
                        </table>
                    </div>
                </form>
            </div>

</div>