<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Visitors' Testimonials - Free Hotel Website Template designed by TemplateMonster</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="description" content="This is a testimonials page of the Free Hotel Website Template provided by Template Monster."/>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<link href="ie_style.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="ie_png.js"></script>
   <script type="text/javascript">
	   ie_png.fix('.png, #header .row-2, #header .nav li a, #content, .gallery li');
   </script>
<![endif]--></head>
<body id="page5" onload="new ElementMaxHeight();">
<?php
include 'connection/db_con.php';
$db = new db_con();

// define variables and set to empty values
$roomNumberErr = $firstNameErr = $lastNameErr = $genderErr = $nationalityErr = $passportIcNumberErr = $housingAddressErr = $emailAddressErr = $contactNumberErr = $paymentMethodErr = $room_service = "";
$roomNumber = $firstName = $lastName = $gender = $nationality = $passportIcNumber = $housingAddress = $emailAddress = $contactNumber = $paymentMethod = "";
$valid = true;
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if (empty($_POST["roomNumber"])){
		$roomNumberErr = "Room Number is required!";
		$valid = false;
	} 
	else
		$room_num = $_POST["roomNumber"];
		
    if (empty($_POST["firstName"])){
		$firstNameErr = "First Name is required!";
		$valid = false;
	}
	else
		$FirstName = $_POST["firstName"];
		
	if (empty($_POST["lastName"])){
		$lastNameErr = "Last Name is required!";
		$valid = false;
	}
	else
		$LastName = $_POST["lastName"];
		
	if (empty($_POST["gender"])){
		$genderErr = "Gender is required!";
		$valid = false;
	}
	else
		$Gender = $_POST["gender"];
   
	if (empty($_POST["nationality"])){
		$nationalityErr = "Nationality is required!";
		$valid = false;
	}
	else
		$Nationality = $_POST["nationality"];
		
	if (empty($_POST["passportIcNumber"])){
		$passportIcNumberErr = "Passport/IC Number is required!";
		$valid = false;
	}
	else
		$IC = $_POST["passportIcNumber"];
		
	if (empty($_POST["housingAddress"])){
		$housingAddressErr = "Housing Address is required!";
		$valid = false;
	}
	else
		$Address = $_POST["housingAddress"];
		
	if (empty($_POST["emailAddress"])){
		$emailAddressErr = "Email Address is required!";
		$valid = false;
	}
	else
		$Email = $_POST["emailAddress"];
		
	if (empty($_POST["contactNumber"])){
		$contactNumberErr = "Contact Number is required!";
		$valid = false;
	}
	else
		$ContactNum = $_POST["contactNumber"];
		
    if (empty($_POST["paymentMethod"])){
		$paymentMethodErr = "Payment Method is required!";
		$valid = false;
    }
	else
		$PaymentMethod = $_POST["paymentMethod"];
	
	if(isset($_POST["dateOfBirth"]))
		$DOB = $_POST["dateOfBirth"];
	else
		$DOB = '';
		
	if(isset($_POST["specialRequest"]))
		$spc_request = $_POST["specialRequest"];
	else
		$spc_request = '';
		
	if(isset($_POST["meal"]))
		foreach($_POST['meal'] as $meal){
			$room_service.=$meal . ' ';
		}
	
	
	
	if($valid){

		if($customer_id = $db->addCustomer($FirstName, $LastName, $Gender, $DOB, $Nationality, $IC, $Address, $Email, $ContactNum, $PaymentMethod))
		{
			if($db->addReservation($room_num, $customer_id, $_POST['checkIn'], $_POST['checkOut'], $_POST['noOfPerson'], $room_service, $spc_request))
			{
				if (isset($_POST['paymentMethod']) && $_POST['paymentMethod'] == 'creditDebitCard') {
					header("Location:creditanddebitcard.php");
					exit();
				}
				else if (isset($_POST['paymentMethod']) && $_POST['paymentMethod'] == 'onlineBanking') {
					header("Location:onlinebanking.php");
					exit();
				}
			}
			else
			{
				$errormsg = 'Failed to create reservation record.';
			}
		}
		else
		{
			$errormsg = 'Failed to create customer record.';
		}
		
	} 	
}
?>

<div id="main">
<!-- header -->
	<div id="header" class="small">
		<div class="row-1">
			<div class="wrapper">
				<div class="logo">
					<h1>little TREE</h1>
					<em>Hotel</em><strong>The Quality of Life</strong></div>
				</div>
		</div>
		<div class="row-2 alt">
	 		<div class="indent">
<!-- header-box-small begin -->
				<div class="header-box-small">
					<div class="inner">
						<ul class="nav">
					 		<li><a href="index.php">Home</a></li>
							<li><a href="#" class="current">Reservation</a></li>
        				    <li><a href="gallery.html">Gallery</a></li>
							<li><a href="restaurant.html">Restaurant</a></li>
							<li><a href="testimonials.html">Review</a></li>
                            <li><a href="contactus.html">Contact Us</a></li>
							
					  </ul>
					</div>
				</div>
<!-- header-box-small end -->
			</div>
		</div>
	</div><div class="ic">Lovely Flash templates from TemplateMonster!</div>
<!-- content -->
	<div id="content">
		<div class="gallery"></div>
	  <div><br />
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="form1">
        <h2>Reservation</h2>
		<span class="error"><?php if(isset($errormsg)) echo $errormsg; ?></span>
        <p>Fields marked<span class="error">&nbsp;*&nbsp;</span>are mandatory.</p>
			<fieldset><legend><h5>&nbsp;&nbsp;Hotel Floor Map</h5></legend><br />
            <div align="center"><img src="images/hotel_floor_map.jpg" /></div><br />        
			<div class="field">&nbsp;&nbsp;Enter Room Number:&nbsp;&nbsp;
			  <input type="text" name="roomNumber"/><span class="error">&nbsp;* <?php echo $roomNumberErr;?></span></div><br /><br />                          
              </fieldset><br /><br />
              <fieldset><legend><h5>&nbsp;&nbsp;Personal Particulars</h5></legend>                    
              <br />
              <div>&nbsp;&nbsp;First Name:<br />&nbsp;&nbsp;<input type="text" name="firstName" size="40"/> 
              <span class="error">* <?php echo $firstNameErr;?></span></div>
              <br />
              <div>&nbsp;&nbsp;Last Name:<br />&nbsp;&nbsp;<input type="text" name="lastName" size="40"/>
              <span class="error">* <?php echo $lastNameErr;?></span></div><br />  
              <div>&nbsp;&nbsp;Gender:&nbsp;&nbsp;<input type="radio" name="gender" value="male">Male&nbsp;&nbsp;<input type="radio" name="gender" value="female">Female <span class="error">* <?php echo $genderErr;?></span></div><br />
              <div class="field">&nbsp;&nbsp;Date of Birth:<br />&nbsp;&nbsp;<input type="date" name="dateOfBirth" size="40"/></div><br />
              <div class="field">&nbsp;&nbsp;Nationality:<br />&nbsp;&nbsp;<input type="text" name="nationality" size="40"/><span class="error">&nbsp;* <?php echo $nationalityErr;?></span></div><br />
              <div class="field">&nbsp;&nbsp;Passport/IC Number:<br />&nbsp;&nbsp;<input type="text" name="passportIcNumber" size="40"/><span class="error">&nbsp;* <?php echo $passportIcNumberErr;?></span></div><br />
              <div class="field">&nbsp;&nbsp;Housing Address: &nbsp;<br />&nbsp;&nbsp;<textarea rows="4" cols="40" name="housingAddress"></textarea><span class="error">&nbsp;* <?php echo $housingAddressErr;?></span></div><br />  
              <div class="field">&nbsp;&nbsp;Email Address:<br />&nbsp;&nbsp;<input type="text" name="emailAddress" size="40"/><span class="error">&nbsp;* <?php echo $emailAddressErr;?></span></div><br /> 
              <div class="field">&nbsp;&nbsp;Contact Number:<br />&nbsp;&nbsp;<input type="text" name="contactNumber" size="40"/><span class="error">&nbsp;* <?php echo $contactNumberErr;?></span></div><br /><br />           
              </fieldset><br /><br />
              <fieldset>
              <legend><h5>&nbsp;&nbsp;Room Services </h5></legend><br />
              <div class="field">&nbsp;&nbsp;Do you want to order for meal service?<br />&nbsp;&nbsp;<input type="checkbox" name="meal[]" value="breakfast">Breakfast<br />
&nbsp;&nbsp;<input type="checkbox" name="meal[]" value="lunch">Lunch<br />&nbsp;&nbsp;<input type="checkbox" name="meal[]" value="dinner">Dinner</div><br>
              <div class="field">&nbsp;&nbsp;Any special request? Please leave us a message! &nbsp;<br />&nbsp;&nbsp;<textarea rows="8" cols="40" name="specialRequest"></textarea></div><br /><br />  
              </fieldset><br /><br />
              <fieldset>
              <legend><h5>&nbsp;&nbsp;Payment Method</h5></legend><br />
              <div class="field">&nbsp;&nbsp;Select a payment method:<br />&nbsp;&nbsp;<input type="radio" name="paymentMethod" value="creditDebitCard">Credit/Debit Card&nbsp;&nbsp;<input type="radio" name="paymentMethod" value="onlineBanking">Online Banking <span class="error">* <?php echo $paymentMethodErr;?></span></div><br /><br /> 
              </fieldset><br /><br />
			  <input type='hidden' name='roomType' value='<?php if(isset($_GET['roomType'])) echo $_GET['roomType']?>'/>
			  <input type='hidden' name='checkIn' value='<?php if(isset($_GET['checkIn'])) echo $_GET['checkIn']?>'/>
			  <input type='hidden' name='checkOut' value='<?php if(isset($_GET['checkOut'])) echo $_GET['checkOut']?>'/>
			  <input type='hidden' name='noOfPerson' value='<?php if(isset($_GET['noOfPerson'])) echo $_GET['noOfPerson']?>'/>
								
            <div><button type="submit" name="submit" class="myButton" />NEXT</button></div><br /><br />
          </form><br />
		  

		</div>
	</div>
    
<!-- footer -->
	<div id="footer">
 		<ul class="nav">
	 		<li><a href="index.php">Home</a>|</li>
			<li><a href="#" class="current">Reservation</a>|</li>		
			<li><a href="gallery.html">Gallery</a>|</li>
			<li><a href="restaurant.html">Restaurant</a>|</li>
			<li><a href="testimonials.html">Review</a>|</li>
            <li><a href="contactus.html">Contact Us</a></li>
		</ul>
<div class="wrapper">
			<div align="center">Copyright (c) 2013 Little Tree Hotel</div>
	  </div>
	</div>
<?php
if(isset($_GET['roomType']))
{
	$price = $db->getPrice($_GET['roomType']);
?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" ></script>
	<script>
		var dateIn = new Date($("input[name='checkIn']").val());
		var dateOut = new Date($("input[name='checkOut']").val());
		var days = dateOut.getDate() - dateIn.getDate();
		var price = <?php echo $price;?>;
		alert("Duration: "+days+"day(s) \nRoom Type: <?php echo $_GET['roomType'];?> \nRoom Price: RM"+(days*price)+'.00');
	</script>
<?php
}

$db->disconnect();
?>

	
</div>
</body>
</html>