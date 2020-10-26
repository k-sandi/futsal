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
<div id="wrapper">
	<div id="header"><h1><center><font color="#FFFFFF" >Selamat Datang Di Sistem Informasi Pembookingan Lapangan Futsal<br><br>Kick Off</font></center></h1 >
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
              
 <?php
	$name=$_POST["name"];
	$email=$_POST["email"];
	$subject=$_POST["subject"];
	$message=$_POST["message"];
	
	if(empty($name) || empty($email) || empty($subject) || empty($message) )
	{
		echo "<script language='JavaScript'>window.alert('Semua data harus diisi!');history.back(1);</script>";
	}
	else{
	include("db.php");

	$sqlstr="insert into contact
            (name,email,subject,message)values
            ('$name','$email','$subject','$message')";
			
	$hasil=@mysql_query($sqlstr);
	
   if($hasil)
   {
       echo("Pesan Anda Telah Sukses Di Kirim!<br>
			<a href='index.php'>Kembali</a>");
   }else
   {
       echo("Pesan Anda Gagal Di Kirim !<br> <a href='contact.php'>Kembali</a>");
   }
   @mysql_close($idkoneksi);
	}
?>			

        </div>
		
    </div>
    <div id="featured">
        <div id="items">
            <div class="item"> <img src="xres/images/5.jpg" alt="" /></a>
            <h3>Executive</a></h3>
            <p></strong><br />
			Layanan Lebih Lengkap di Bandingkan Bus Economy dan Fasilitas Lebih Bagus sepert WC dan AC serta kenyamanan<br /> 
			
            </div>
            <div class="item"><img src="xres/images/6.jpg" alt="" /></a>
            <h3>Economy</a></h3>
            <p><strong></strong><br />
			Layanan Kurang Lengkap dalalm Bus </a></p>  
			</div>
        </div>
    </div>

	<div id="footer">
	<h4>+63(2)3525393 &bull; Sarijadi, Bandung, Indonesia </h4>
	<p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
	<a href="index.php"><img src="xres/images/footer-logo.jpg" alt="James Buchanan Pub and Restaurant" /></a>
	<p>&copy; Copyright 2016 PROYEK 1 D3 Teknik Informatika | All Rights Reserved <br /></p>
</div>
</div>
</body>
</html>
