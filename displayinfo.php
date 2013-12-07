<?php
mysql_connect("localhost","root","");
mysql_select_db("hotelsys");


$result=mysql_query("select r.id,r.room_num,r.customer_id,c.FirstName,c.LastName,r.dateIn,r.dateOut,c.IC,c.Email,c.ContactNum,c.PaymentMethod from reservation r join customer c on c.id=r.customer_id where r.id=(select MAX(r.id) from reservation r)");


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Receipt Info</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body> 
<h1 align="middle">Transaction Is Complete!! </h1>
<h1 align="middle">Receipt</h1>
<table border="1" cellpadding="2" cellspacing="3">
<tr>
<th>RERSERVATION ID</th>
<th>ROOM NUMBER</th>
<th>CUSTOMER ID</th>
<th>FIRST NAME</th>
<th>LAST NAME</th>
<th>CHECK IN </th>
<th>CHECK OUT</th>
<th>IC/PASSPORT</th>
<th>EMAIL</th>
<th>CONTACTNUMBER</th>
<th>PAYMENTMETHOD</th>
</tr>
<?php
while ($row=mysql_fetch_array($result)){
echo "<tr>";
echo "<td>".$row['id']."</td>";
echo "<td>".$row['room_num']."</td>";
echo "<td>".$row['customer_id']."</td>";
echo "<td>".$row['FirstName']."</td>";
echo "<td>".$row['LastName']."</td>";
echo "<td>".$row['dateIn']."</td>";
echo "<td>".$row['dateOut']."</td>";
echo "<td>".$row['IC']."</td>";
echo "<td>".$row['Email']."</td>";
echo "<td>".$row['ContactNum']."</td>";
echo "<td>".$row['PaymentMethod']."</td>";
echo "</tr>";
}

mysql_free_result($result);
mysql_close();
?>
</table>


<h2> Here is your Reservation References ID</h2>
<img align ="middle" src="images/qrcode.png" /></br>

<a align ="middle" href="Index.php">Home</a>

</body>
</html>