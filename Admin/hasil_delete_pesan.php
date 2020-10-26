<?php
	require_once('auth.php');
?>
<html>
<head>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="febe/style.css" type="text/css" media="screen" charset="utf-8">
<script src="argiepolicarpio.js" type="text/javascript" charset="utf-8"></script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>
<body>
	<div id="container">
		<div id="adminbar-outer" class="radius-bottom">
			<div id="adminbar" class="radius-bottom">
				<a id="logo" href="dashboard.php"></a>
				<div id="details">
					<a class="avatar" href="javascript: void(0)">
					<img width="36" height="36" alt="avatar" src="img/avatar.jpg">
					</a>
					<div class="tcenter">
					Hi
					<strong>Admin</strong>
					!
					<br>
					<a class="alightred" href="../index.php">Logout</a>
					</div>
				</div>
			</div>
		</div>
		<div id="panel-outer" class="radius" style="opacity: 1;">
			<div id="panel" class="radius">
				<ul class="radius-top clearfix" id="main-menu">
					<li>
						<a href="data_pemesanan.php">
							<img alt="Dashboard" src="img/m-dashboard.png">
							<span>Data Pemesanan</span>
						</a>
					</li>
					
					<li>
						<a class="active" href="tujuan.php">
							<img alt="Statistics" src="img/m-custom.png">
							<span>Data Jadwal</span>
						</a>
					</li>
					<li>
						<a href="data_tiket.php">
							<img alt="Statistics" src="img/m-statistics.png">
							<span>Data Booking</span>
						</a>
					</li>
					<li>
						<a href="pesan_user.php">
							<img alt="Statistics" src="img/m-statistics.png">
							<span>Contact</span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<?php

   $id_tujuan = $_GET['id_tujuan'];
   
  include("koneksi.php");

   $sqlstr="delete from tujuan where id_tujuan='$id_tujuan'";
   $hasil=@mysql_query($sqlstr,$idkoneksi);

   if($hasil)
   {
       echo("Data berhasil di hapus !<br><br/>Kembali ke <a href='bodat3.php'>Halaman sebelumnya</a>");
   }
   else
   {
       echo("Data gagal di hapus !<br><br/>Kembali ke <a href='index.php'>Halaman sebelumnya</a>");
   }
   @mysql_close($idkoneksi);
?>
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"><font color="#000000" size="2"> Tipe Jadwal </th>
								<th><font color="#000000" size="2"> Nama</font> </th>
								<th><font color="#000000" size="2"> Email</font> </th>
								<th><font color="#000000" size="2"> Subject</font> </th>
								<th><font color="#000000" size="2"> Komentar</font> </th>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../db.php');
							$result = mysql_query("SELECT * FROM contact");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;"><font color="#000000" size="3">'.$row['name'].'</td>';
									echo '<td><div align="center"><font color="#000000" size="3">'.$row['email'].'</div></td>';
									echo '<td><div align="center"><font color="#000000" size="3">'.$row['subject'].'</div></td>';
									echo '<td><div align="center"><font color="#000000" size="3">'.$row['message'].'</div></td>';
									echo '<td><div align="center"><font color="#000000" size="3"> <a href="hasil_delete_pesan" class="delbutton" title="Click To Delete">delete</a></div></td>';
									echo '</tr>';
								}
							?> 
						</tbody>
					</table>
				</div>
				<div id="footer" class="radius-bottom">
					2015-16 ©
					<a class="afooter-link" href="">Politeknik Pos Indonesia</a>
					by
					<a class="afooter-link" href="">Andika Oktapiyana & Rizqi Nusabbih Hidayatullah Gaja</a>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
	<script src="js/jquery.js"></script>
</body>
</html>