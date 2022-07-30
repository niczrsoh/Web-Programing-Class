<html>
    <body>
        <form name="form1" method="post" action="login.php">
        <table border="1">
        <tr>
        <th scope="row"><div align="right">Name</div></th>
        <td><label>
        <input name="name" type="text" id="name">
        </label></td>
        </tr>
        <tr>
        <th scope="row"><div align="right">Gender</div></th>
        <td><label>
        <input name="gender" type="radio" value="male"> Male
        <input name="gender" type="radio" value="female"> Female
        </label></td>
        </tr>
        <tr>
        <th scope="row"><div align="right">Favorite Foods </div></th>
        <td><label>
        <input name="foods[]" type="checkbox" value="nasi lemak">
        Nasi Lemak<br>
        <input name="foods[]" type="checkbox" value="nasi ayam">
        Nasi Ayam <br>
        <input name="foods[]" type="checkbox" value="nasi goreng">
        Nasi Goreng </label></td>
        </tr>
        <tr>
        <th scope="row">&nbsp;</th>
        <td><label>
        <input type="submit" name="Submit" value="Submit">
        </label></td>
        </tr>
        </table>
        </form>
    </body>
</html>