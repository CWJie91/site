<html>
<body>
<?php
session_start();
if(isset($_SESSION["username"])){
	include 'connection/db_con.php';
	$db = new db_con();
	$roomtypes = $db->getAllRoomTypes();

	if(isset($_GET['actionResult']) && $_GET['actionResult'] == 'ok')
		$msg = 'Action completed successfully.';
	else if(isset($_GET['actionResult']) && $_GET['actionResult'] == 'none')
		$msg = 'Action completed successfully.';
	else if(isset($_GET['actionResult']))
		$msg = 'Action failed. Please call Alan for help.';
	else
		$msg = '';
	
	echo "Welcome back, $_SESSION[username]<br /><br /> $msg <br /><form action='adminActionController.php' method='POST'>";
	
	foreach($roomtypes as $roomtype){
		echo "$roomtype[type]: RM<input type='text' name='roomPrice[]' value='$roomtype[price]' /> <br />";
	}
	
	echo "<input type='hidden' name='action' value='updateRoomPrice'/><input type='submit' value='Submit'/></form>";
	echo "<br /><a href='logout.php'>Logout</a>";
?>

<?php
}
else
{
?>
Please <a href='index.php#login'>login</a> as administrator to view the content of this page.
<?php
}
?>
</body>
</html>
