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
							<img alt="Dashboard" src="img/kickoff1.jpg">
							<span>Data Pemesanan</span>
						</a>
					</li>
					
					<li>
						<a href="data_jadwal.php">
							<img alt="Statistics" src="img/unduhan.jpg">
							<span>Data Jadwal</span>
						</a>
					</li>
					<li>
						<a class="active" href="data_booking.php">
							<img alt="Statistics" src="img/m-statistics.png">
							<span>Data Booking</span>
						</a>
					</li>
					<li>
						<a  href="data_contact.php">
							<img alt="Statistics" src="img/m-users.png">
							<span>Contact</span>
						</a>
					</li>
					<div class="clearfix"></div>
				</ul>
				<div id="content" class="clearfix">
					<label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" />
					<table cellpadding="1" cellspacing="1" id="resultTable">
						<thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"><center><font color="#000000" size="2"> Tanggal </th></center>
								<th  style="border-left: 1px solid #C1DAD7"><center><font color="#000000" size="2"> Nama Pembooking </th></center>
								<th><center><font color="#000000" size="2"> Rekening Tujuan</font> </th></center>
								<th><center><font color="#000000" size="2"> Tipe Jadwal </font></th></center>
								<th><center><font color="#000000" size="2"> Kode Transaksi</font> </th></center>
								<th><center><font color="#000000" size="2"> Action</font> </th></center>
							</tr>
						</thead>
						<tbody>
						<?php
							include('../db.php');
							$result = mysql_query("SELECT * FROM reserve");
							while($row = mysql_fetch_array($result))
								{
									echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;"><div align="center"><font color="#000000" size="3">'.$row['date'].'</td>';
									echo '<td style="border-left: 1px solid #C1DAD7;"><div align="center"><font color="#000000" size="3">'.$row['nama'].'</td>';
									echo '<td style="border-left: 1px solid #C1DAD7;"><div align="center"><font color="#000000" size="3">'.$row['n_pemilik_rekening'].'</td>';
									$rrad=$row['lapangan'];
									$results = mysql_query("SELECT * FROM route WHERE id='$rrad'");
									while($rows = mysql_fetch_array($results))
										{
									echo '<td><div align="center"><font color="#000000" size="3">'.$rows['type'].'</div></td>';
										}
									echo '<td><div align="center"><font color="#000000" size="3">'.$row['transactionnum'].'</div></td>';
									echo '<td><div align="center"><font color="#000000" size="3"><a href="#" id="'.$row['id'].'" class="delbutton" title="Click To Delete">delete</a></div></td>';
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
  <script type="text/javascript">
$(function() {


$(".delbutton").click(function(){

//Save the link in a variable called element
var element = $(this);

//Find the id of the link that was clicked
var del_id = element.attr("id");

//Built a url to send
var info = 'id=' + del_id;
 if(confirm("Apakah anda yakin ingin mendelete data booking? Ini tidak dapat di kembalikan!"))
		  {

 $.ajax({
   type: "GET",
   url: "delete_booking.php",
   data: info,
   success: function(){
   
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");

 }

return false;

});

});
</script>
</body>
</html>