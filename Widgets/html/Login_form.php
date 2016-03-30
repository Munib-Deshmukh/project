<form action="login.php" method="post" class="form-horizontal">
    <div class="form-group">
        <label for="username" class="control-label col-sm-2">User Name:</label>
        <div class="col-sm-4">
            <input type="text" name="username" size="12" class="form-control" /><span id="uid"></span>
        </div>
    </div>
    <div class="form-group">
            <label for="passid"  class="control-label col-sm-2">Password:</label>
        <div class="col-sm-4">
            <input type="password" name="passid" size="12" class="form-control" /><span id="pid"></span>
        </div>
    </div>
    <div class="col-sm-offset-4 col-sm-2">
        <input type="submit" name="submit" value="Submit" class="form-control btn btn-default"/>
    </div>
</form>
