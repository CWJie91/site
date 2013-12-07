

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Services - Free Hotel Website Template designed by TemplateMonster</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="description" content="This is a wonderful services page of the Free Hotel Website Template provided by TemplateMonster."/>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="layout.css" rel="stylesheet" type="text/css" />
<script src="maxheight.js" type="text/javascript"></script>
<!--[if lt IE 7]>
	<link href="ie_style.css" rel="stylesheet" type="text/css" />
   <script type="text/javascript" src="ie_png.js"></script>
   <script type="text/javascript">
	   ie_png.fix('.png, #header .row-2, #header .nav li a, #content, .gallery li');
   </script>
<![endif]-->
</head>
<body id="page2" onload="new ElementMaxHeight();">

<div id="main">
<!-- header -->
	<div id="header" class="small">
		<div class="row-1">
	 		<div class="wrapper">
				<div class="logo">
					<h1>Little Tree</h1>
					<em>Hotel</em>
					<strong>The Quality of Life</strong>
				</div>
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
<div class="wrapper">
			<div class="aside maxheight">
<!-- box begin -->
				<div class="box maxheight">
					<div class="inner">
		  <div class="txt1">
					 		<h5>We also offer: </h5>
<ul class="img-list">
								<li><img alt="" src="images/2page-img7.jpg" />Premium food (either at our restaraunt or delivered to your room)</li>
								<li><img alt="" src="images/2page-img8.jpg" />Drinks and bevarages in your rooms</li>
								<li><img alt="" src="images/2page-img9.jpg" />Daily cleaning (included into your package)</li>
								<li><img alt="" src="images/2page-img10.jpg" />Free access to our gym and swimming pool</li>
							</ul>
						</div>
					</div> 
				</div>
<!-- box end -->
			</div>
			<div class="content">
				<div class="indent">
				 
					<div class="container">
						<div class="col-1">                    
						  <br /><h5 align="center" style="color:#FFFFFF; background-color:#FF0000;">Standard Room</h5>
                          <h5 style="color:#FF0000">Available unit: 116</h5>
                        <img alt="" src="images/2page-img11.png" class="extra-img png"/><br /><br />							
                                <dd>290 sq.ft</dd>
                                <dd>1st-15th floors</dd>
                                <dd>Queen size bed</dd>
                                <dd>Air-conditioning</dd>
								<dd>Standing shower </dd>
								<dd>29&quot; Flat screen TV</dd>
                                <dd>Refrigerator</dd>
                                <dd>Hair dryer</dd>
                                <dd>Personal electronic safe</dd>
                                <dd>Telephone</dd>
                              <dd>Wireless internet access</dd><br /><br /><br /><br /><br /><br /><br />							
                              <h5>RM<?php
						  include 'connection/db_con.php';
							$db = new db_con(); 
							$result=$db->select_row(1,'roomtype');  
							echo $result['price'];
						   $db->disconnect();?> nett instead of <strike>RM119</strike></span></h5>
					          <form action="reservationform.php" method='GET'>
								<input type='hidden' name='roomType' value='standard'/>
								<input type='hidden' name='checkIn' value='<?php if(isset($_GET['checkIn'])) echo $_GET['checkIn']?>'/>
								<input type='hidden' name='checkOut' value='<?php if(isset($_GET['checkOut'])) echo $_GET['checkOut']?>'/>
								<input type='hidden' name='noOfPerson' value='<?php if(isset($_GET['noOfPerson'])) echo $_GET['noOfPerson']?>'/>
								<button type="submit" name="submit" class="myButton" />BOOK NOW</button>
							  </form>
						</div>
						<div class="col-2">
                        <br /><h5 align="center" style="color:#FFFFFF; background-color:#FF0000;">Deluxe Room</h5>
                        <h5 style="color:#FF0000">Available unit: 36</h5>
					 		<img alt="" src="images/2page-img12.png" class="extra-img png"/><br /><br />
								<dd>350 sq.ft</dd>
                                <dd>1st-15th floors</dd>
                                <dd>Queen size bed</dd>
                                <dd>Air-conditioning</dd>
								<dd>Standing shower with bathtub</dd>
								<dd>29&quot; Flat screen TV</dd>
                                <dd>Refrigerator</dd>
                                <dd>Hair dryer</dd>
                                <dd>Personal electronic safe</dd>
                                <dd>Telephone</dd>                             
                              <dd>Wireless internet access</dd>
                              <dd>Coffee/Tea making machine</dd>
                              <dd>Microwave Oven</dd>
                              <dd>Mini sofa set</dd><br /><br /><br /><br />							
                              <h5>RM<?php
						  
							$db = new db_con(); 
							$result=$db->select_row(2,'roomtype');  
							echo $result['price'];
						   $db->disconnect();
						  ?> nett instead of <strike>RM189</strike></span></h5>
						      <form action="reservationform.php" method='GET'>
								<input type='hidden' name='roomType' value='deluxe'/>
								<input type='hidden' name='checkIn' value='<?php if(isset($_GET['checkIn'])) echo $_GET['checkIn']?>'/>
								<input type='hidden' name='checkOut' value='<?php if(isset($_GET['checkOut'])) echo $_GET['checkOut']?>'/>
								<input type='hidden' name='noOfPerson' value='<?php if(isset($_GET['noOfPerson'])) echo $_GET['noOfPerson']?>'/>
								<button type="submit" name="submit" class="myButton" />BOOK NOW</button>
							  </form>
						</div>
						<div class="col-3">
                        <br /><h5 align="center" style="color:#FFFFFF; background-color:#FF0000;">Executive Room</h5>
                        <h5 style="color:#FF0000">Available unit: 25</h5>
					 		<img alt="" src="images/2page-img13.png" class="extra-img png"/><br /><br />
								<dd>490 sq.ft</dd>
                                <dd>16th-18th floors</dd>
                                <dd>King size bed</dd>
                                <dd>Air-conditioning</dd>
								<dd>Standing shower with bathtub</dd>
								<dd>41&quot; Flat screen TV</dd>
                                <dd>Refrigerator</dd>
                                <dd>Hair dryer</dd>
                                <dd>Personal electronic safe</dd>
                                <dd>Telephone</dd>                             
                              <dd>Wireless internet access</dd>
                              <dd>Coffee/Tea making machine</dd>
                              <dd>Microwave Oven</dd>
                              <dd>Luxury sofa set</dd>
                              <dd>Bar and kitchen</dd>
                              <dd>Private balcony</dd>
                              <dd>Outdoor spa suite</dd>
                              <br />							
                              <h5>RM<?php
						  
							$db = new db_con(); 
							$result=$db->select_row(3,'roomtype');  
							echo $result['price'];
						   $db->disconnect();
						  ?> nett instead of <strike>RM359</strike></span></h5>
							  <form action="reservationform.php" method='GET'>
								<input type='hidden' name='roomType' value='executive'/>
								<input type='hidden' name='checkIn' value='<?php if(isset($_GET['checkIn'])) echo $_GET['checkIn']?>'/>
								<input type='hidden' name='checkOut' value='<?php if(isset($_GET['checkOut'])) echo $_GET['checkOut']?>'/>
								<input type='hidden' name='noOfPerson' value='<?php if(isset($_GET['noOfPerson'])) echo $_GET['noOfPerson']?>'/>
								<button type="submit" name="submit" class="myButton" />BOOK NOW</button>
							  </form>
						</div>
						<div class="clear"></div>
				  </div>
			  </div>
			</div>
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
</div>
</body>
</html>