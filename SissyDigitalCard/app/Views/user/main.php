<h2> selamat datang User Page</h2>
<?php
if (session()->has("userlevel")) {
} else 
    die("you need to login first");
?>
<h3> Welcome <?= session()->get("username") ?></h3>
<a href='<?= base_url("/viewprofile") ?>'>
    Update Profile
</a>
