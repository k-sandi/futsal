<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Welcome to Kick Off</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">

		
	

</head>

<body >
<div id="wrapper"><br>
	<div id="header"><h1><center><font color="#FFFFFF" >Aplikasi Pembookingan Lapangan Futsal Kick Off<br><br>Sarijadi - Kota Bandung</font></center></h1 >
    <h1><a href="index.php"></a></h1>
        <ul id="mainnav">
			<li class="current"><a href="index.php">Home</a></li>
            <li><a href="pemesanan.php">Booking</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="info.php">Info Lapangan</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="contact.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="rotator">
              <ul>
                    <li class="show"><img src="xres/images/lapangan.jpg" width="861" height="379"  alt="" /></li>
              </ul>
			  

        </div>
		
    </div>
   

	<div id="footer">
	<h4> Telephone :0634 - 22611 &bull; Sarijadi, Kota Bandung, Indonesia </h4>
	<p>Jasa Penyewaan Lapangan Futsal Kick Off</p>
	<p>&copy; Copyright 2016 Kurniyasaoft  <br /></p>
</div>
</div>
</body>
</html>
