<h1>Add New User</h1>

<form method="POST" action="<?= base_url("manageuser") ?>">
    Fullname: <input type="text" name="fname"><br>
    Username: <input type="text" name="u"><br>
    Password: <input type="password" name="p"><br>
    User Level:
    <select name="level">
        <option value="admin">admin</option>
        <option value="user">user</option>
    </select><br><br>

    <input type="submit" name="btnInsertConfirm" value="Add">
</form>