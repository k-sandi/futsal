<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Info Lapangan</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<link type="text/css" href="css/styles.css" rel="stylesheet" media="all" />
</head>

<body>
<div id="wrapper"><br><br>
	<div id="header"><h1><center><font color="#FFFFFF" >Daftar Pembookingan Lapangan Futsal Kick Off</font></center></h1 >
    
        <ul id="mainnav">
			<table width="708" border="2" cellpadding="3" cellspacing="5 " >
			<center><li><a href="index.php">Home</a></li>
            <li><a href="pemesanan.php">Booking</a></li>
            <li><a href="history.php">History</a></li>
            <li class="current"><a href="info.php">Info Lapangan</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="contact.php">Contact Us</a></li></center>
		
    	</ul>
		</table>
	</div>
    <div id="content"><br><br>
	<table width="900" border="4" cellpadding="6" cellspacing="5 " bgcolor="#FFFFFF">
						<thead>
							<tr bgcolor="#000000">
								<td style="border-left: 10px solid black"><center><font color="#FFFFFF"size="4">Nama Pembooking </font></td></center>
								<th style="border-left: 10px solid black"><center><font color="#FFFFFF"size="4"> Jadwal</font> </th></center>
								<th  style="border-left: 10px solid black"><center><font color="#FFFFFF"size="4"> Tanggal</font></th></center>
								<th  style="border-left: 10px solid black"><center><font color="#FFFFFF"size="4">Status</font> </th></center>
								
							</tr>
						</thead>
					
						<tbody>
						<?php
							$mysql_hostname = "localhost";
							$mysql_user = "root";
							$mysql_password = "";
$mysql_database = "booking";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
mysql_select_db($mysql_database, $bd) or die("Could not select database");
							$result = mysql_query("SELECT * FROM customer");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;"><div align="center"><font color="#000000" size="3">'.$row['fname'].$row['lname'].'</td>';
									$rrad=$row['lapangan'];
									$dddd=$row['transactionum'];
									$results = mysql_query("SELECT * FROM route WHERE id='$rrad'");
									while($rows = mysql_fetch_array($results))
										{
									echo '<td><div align="center"><font color="#000000" size="3">'.$rows['type'].'</div></td>';
										}
									$resulta = mysql_query("SELECT * FROM reserve WHERE transactionnum='$dddd'");
									while($rowa = mysql_fetch_array($resulta))
										{
									echo '<td><div align="center"><font color="#000000" size="3">'.$rowa['date'].'</div></td>';
										}
									echo '<td><div align="center"><font color="#000000" size="3">'.$row['status'].'</div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
    	<div id="gallerycontainer">
	
					
			
				</div>
				
		
	</div>

<div id="footer">
	<h4> Telephone :0634 - 22611 &bull; Sarijadi, Bandung, Indonesia </h4>
	<p>Jasa Penyewaan Lapangan Futsal Kick Off</p>
	<p>&copy; Copyright 2016 PROYEK 1 D3 Teknik Informatika  <br /></p>
</div>

</div>
</body>
</html>
