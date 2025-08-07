<h1> Edit User</h1>

<form method="POST" action="<?= base_url("/manageuser")?>">
    Fullname:<input type='text' name='fname' value='<?= $data->fullname?>'><br>
    Username:<input type='text' name='u' value='<?= $data->username?>'><br>
    Password:<input type='password' name='p' value='<?= $data->password?>'><br>
    User Level:<select name='level'>
                <option value='admin'
                <?php
                if ($data->userlevel=="admin") echo "selected";
                ?>
                >Admin</option>
                
                <option
                <?php
                if ($data->userlevel=="user") echo "selected";
                ?>
                value='user'>user</option>
                </select><br>
    <input type='hidden' name='ID' value='<?= $data->ID?>'>
    <input type='submit' name='btnEditConfirm' value='update'>
</form>