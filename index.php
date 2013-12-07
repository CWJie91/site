<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Free Hotel Website Template - designed by TemplateMonster</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta name="description" content="This is a wonderful homepage of the Free Hotel Website Template provided by TemplateMonster."/>
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
<body id="page1" onload="new ElementMaxHeight();">
<div id="main">
<!-- header -->
	<div id="header">
		<div class="row-1">
			<div class="wrapper">
				<div class="logo">
					<h1>Little Tree</h1>
			    <em>Hotel</em>
					<strong>The Quality of Life</strong>				</div>
				</div>
		</div>
		<div class="row-2">
	 		<div class="indent">
<!-- header-box begin -->
				<div class="header-box">
					<div class="inner">
						<ul class="nav">
					 		<li><a href="index.php" class="current">Home</a></li>
							<li><a href="reservation1.php">Reservation</a></li>
							<li><a href="gallery.html">Gallery</a></li>
							<li><a href="restaurant.html">Restaurant</a></li>
							<li><a href="testimonials.html">Review</a></li>
							<li><a href="contactus.html">Contact Us</a></li>
						</ul>
					</div>
				</div>
<!-- header-box end -->
			</div>
		</div>
	</div><div class="ic">Lovely Flash templates from TemplateMonster!</div>
<!-- content -->
	<div id="content">
		<div class="wrapper">
			<div class="aside maxheight">
<!-- box begin -->
				<div class="box maxheight">
					<div class="inner">
                        <p style="color:#FF0000; font-size:24px" >Special Offer<br />
                        </p>
                          <p style="font-size:16px">Standard Room</p>                                               
                          <p style="font-size:14px" >Normal price: <strike>RM 119++</strike><br />
                          <span style="color:#FF0000; font-size:14px">Offer price: RM<?php
						  include 'connection/db_con.php';
							$db = new db_con(); 
							$result=$db->select_row(1,'roomtype');  
							echo $result['price'];
						   $db->disconnect();
						  ?> nett</span></p>
                          <p style="font-size:16px">Deluxe Room</p>                                               
                          <p style="color:font-size:14px" >Normal price: <strike>RM 189++</strike><br />
                          <span style="color:#FF0000; font-size:14px">Offer price: RM<?php
						  
							$db = new db_con(); 
							$result=$db->select_row(2,'roomtype');  
							echo $result['price'];
						   $db->disconnect();
						  ?> nett</span></p>
                          <p style="font-size:16px">Executive Room</p>                                               
                          <p style="font-size:14px" >Normal price: <strike>RM 359++</strike><br />
                          <span style="color:#FF0000; font-size:14px">Offer price: RM<?php
						  
							$db = new db_con(); 
							$result=$db->select_row(3,'roomtype');  
							echo $result['price'];
						   $db->disconnect();
						  ?> nett</span><br /></p>
                          <div> <div><a href = "reservation1.php"><button type="submit" name="submit" class="myButton" />BOOK NOW</button></a></div>                        
                        </div> 
                        <div class="line-hor"></div>
                        <form method="post" action="checklogin.php">
						<h5 id='login'>Admin Login</h5>
                        <div class="field">Username:<br /><input type="text" name="username" size="20" /></div><br />
						<div class="field">Password:<br /><input type="password" name="password" size="20" /></div><br />
						<div><button type="submit" name="submit" class="myButton" />LOGIN</button></div><br />	
</form>						
					</div>
				</div>
<!-- box end -->
			</div>
			<div class="content">
				<div class="indent">
					<h2>Little Tree brings you the quality of life</h2>
			        <p class="alt-top">The most recognized name in the industry, Little Tree Hotel stands as the stylish, forward thinking global leader of hospitality. With over 50 years of experience, Little Tree continues to be synonymous with hotel because of our innovative approach to products, amenities and service. We help make traveling easier with our smart design, innovative restaurant concepts, authentic hospitality and commitment to the global community. </p>
			 	  <div class="clear"></div>
					<div class="line-hor"></div>
					<div class="wrapper line-ver">
                    <br /><embed width="600" height="400" src="http://www.youtube.com/v/EKuDP_YElkM?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash">
</embed>
					</div>
			  </div>
			</div>
		</div>
	</div>
<!-- footer -->
	<div id="footer">
  		<ul class="nav">
	 		<li><a href="index.php" class="current">Home</a>|</li>
			<li><a href="reservation1.php">Reservation</a>|</li>
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