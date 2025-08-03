<h1>Food List</h1>

<form method='post' action='<?=base_url("managefood")?>'>
    Food Name:<input type='text' name='foodname'><br>
    Price :<input type='number' steps='any' name='foodprice'><br>
    <input type='submit' name='btnInsert' value='add'>
</form>

<?php
$foodmodel = new \App\Models\ModelFood();
$data=$foodmodel->findAll();
foreach ($data as $row){
    echo "$row->id :: $row->name :: $row->price <br>";
}
?>