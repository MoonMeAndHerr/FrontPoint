<h1>Main</h1>

<?php
session_start();

if (isset($_SESSION['username']))
{
	;
}
else if ( isset($_POST['user']) && isset($_POST['p']) ){
	$username = $_POST['user'];
	$password = $_POST['p'];
	if ($_POST['user'] == "admin" && $_POST['p'] =="admin123")
	{
		$_SESSION["username"] = $_POST['user'];
		$_SESSION["userlevel"]= "admin";
	}else if ($_POST['user'] == "user" && $_POST['p'] =="user123")
	{
		$_SESSION["username"] = $_POST['user'];
		$_SESSION["userlevel"]= "user";
	}else{
		echo "Wrong username/password";
		die();
	}
}
else{
	echo "Please key in your username/password";
	die();
}
?>


<h1>Welcome <?= $_SESSION["username"]?></h1>

<form method='POST'>
	Message: <textarea name='msg'></textarea><br>
	<input type='submit' name='btnMsg' value='Post'>
</form>

<?php
	$namafile = "post.log";
	if (isset($_POST["btnMsg"])){
		$msg = $_POST["msg"];
		$tarikh = date("Y-m-d H:i:s");
		$username = $_SESSION['username'];
		$savemsg = "$tarikh $username <b>$msg</b>".PHP_EOL;
		file_put_contents($namafile,$savemsg,FILE_APPEND);
	}
	
	$post = file($namafile);
	$post = array_reverse($post);
	foreach ($post as $m){
		echo $m."<hr>";
	}
?>