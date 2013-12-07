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
// define variables and set to empty values
$cardNumberErr = $cardHolderNameErr = $expirationDateErr = "";
$cardNumber = $cardHolderName = $expirationDate = "";
$valid = true;

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
   if (empty($_POST["cardNumber"])){
   $cardNumberErr = "Card Number is required!";
   $valid = false;
   } 
    if (empty($_POST["cardHolderName"])){
   $cardHolderNameErr = "Card Holder Name is required!";
   $valid = false;
   }
   if (empty($_POST["expirationDate"])){
   $expirationDateErr = "Expiration Date is required!";
   $valid = false;
   }	
   if($valid){
   header("Location:displayinfo.php ");
   exit();
   }
}	



?>

<div id="main">
<!-- header -->
	<div id="header" class="small">
		<div class="row-1">
			<div class="wrapper">
				<div class="logo">
					<h1>Little TREE</h1>
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
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="form2">
        <h2>Payment Method</h2>
        <p>Fields marked<span class="error">&nbsp;*&nbsp;</span>are mandatory.</p>
              <fieldset><legend><h5>&nbsp;&nbsp;Credit/Debit Card</h5></legend>                    
              <br />
              <p>We accept:</p><img alt="" src="images/payment-visa.jpg" /><img alt="" src="images/payment-mastercard.jpg" /><img alt="" src="images/payment-maestro.jpg" /><img alt="" src="images/payment-americanexpress.jpg" /><img alt="" src="images/payment-cirrus.jpg" /><img alt="" src="images/payment-dinersclub.jpg" /><br />
              <br /><div>&nbsp;&nbsp;Card Number:<br />&nbsp;&nbsp;<input type="text" name="cardNumber" size="40"/> 
              <span class="error">* <?php echo $cardNumberErr;?></span></div>
              <br />
              <div>&nbsp;&nbsp;Card Holder Name:<br />&nbsp;&nbsp;<input type="text" name="cardHolderName" size="40"/>
              <span class="error">* <?php echo $cardHolderNameErr;?></span></div><br />  
              <div class="field">&nbsp;&nbsp;Expiration Date:<br />&nbsp;&nbsp;<input type="text" name="expirationDate" size="40"/><span class="error">&nbsp;* <?php echo $expirationDateErr;?></span></div><br /><br />  
              </fieldset><br /><br />        
            <div><button type="submit" name="submit" class="myButton" />CHECK STATUS</button></div><br /><br />
          </form><br />

		  
		  </div>
		</div>
	</div>
    
<!-- footer -->
	<div id="footer">
 		<ul class="nav">
	 		<li><a href="index.php">Home</a>|</li>
            <li><a href="#">Reservation</a>|</li>		
			<li><a href="gallery.html">Gallery</a>|</li>
			<li><a href="restaurant.html">Restaurant</a>|</li>
			<li><a href="testimonials.html">Review</a>|</li>
			<li><a href="contactus.html">Contact Us</a></li>
 		</ul>
		<div class="wrapper">
			<div align="center">Copyright (c) 2013 Little Tree Hotel</div>
	  </div>
	</div>
</div>
</body>
</html>