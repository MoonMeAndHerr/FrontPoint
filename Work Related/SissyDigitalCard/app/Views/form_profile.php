<h1> Update Profile <?= session()->get("username") ?></h1>
<?php
$data = new \App\Models\ModelPengguna();
$user = $data
        ->where("username",session()->get("username"))
        ->first();
?>

<img src='profiles/<?= $user->userpict?>'>

<form method='POST' 
enctype='multipart/form-data'
action='<?=base_url("/update_profile")?>'>

Your photo: <input type='file' name='uf'><br>
<input type='submit' name='btnUpload' value='Upload'>
</form>

<form method ='POST' action='<?=base_url("/update_profile")?>'>
    
        Fullname : 
        <input type='text' name='f' value='<?=$user->fullname?>'> 
        Password : 
        <input type='password' name='p' value='<?=$user->password?>'> 
        <input type='hidden' name='ID' value='<?=$user->ID?>'> 
        <input type='submit' name='btnUpdate' value='Update'>
</form>