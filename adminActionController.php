
<?php
session_start();
if(isset($_SESSION["username"])){
	include 'connection/db_con.php';
	$db = new db_con();
	if(isset($_POST['action']))
	{
		if($_POST['action'] == 'updateRoomPrice')
		{ 
			if($db->updateAllRoomPrice($_POST['roomPrice']))
				header("location:admin.php?actionResult=ok");
			else
				header("location:admin.php?actionResult");
		}
		else
			header("location:admin.php?actionResult=none");
	}
	else
		header("location:admin.php");
	$db->disconnect();
}
else
	header("location:admin.php");
?>
