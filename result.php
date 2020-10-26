<!--

<Ticket-Booking>
Copyright (C) <2013>  
<Abhijeet Ashok Muneshwar>
<openingknots@gmail.com>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
 any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

-->

<!DOCTYPE HTML>

<?php
	include('db_login.php');
	session_start();
	$connection = mysql_connect($db_host, $db_username, $db_password);
	if (!$connection)
	{
		die ("Could not connect to the database: <br />". mysql_error());
	}
	mysql_select_db('booking');
?>

<HTML>

	<HEAD>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Ticket Booking</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
	</HEAD>

	<BODY>
		<br /><br /><br />
		<div class="container">
			<div class="row well">
				<div class="span10">
					<form action="book.php" method="POST" onsubmit="return validateCheckBox();">
						<center>
							
							
							<?php
								$query=mysql_query("select * from pemesanan where transactionum='$_POST[doj]'");
								$hasil=mysql_fetch_array($query);
								
							?>
							<table border="1">
							<tr>
							<td width="200">Kode Pemesanan   </td>

							<td width="200"><?php echo $hasil['transactionum']; ?></td>
							</tr>
							<tr>
							<td width="200">Nama Pemesan</td>
							<td width="200"><?php echo $hasil['fname']; ?></td>
							</tr>
							<td width="200">Rute</td>
							<td width="200"><?php echo $hasil['route']; ?></td>
							</tr>
							<tr>
							<td width="200">Tipe</td>
							<td width="200"><?php echo $hasil['type']; ?></td>
							</tr>
							<tr>
							<td width="200">Tanggal</td>
							<td width="200"><?php echo $hasil['date']; ?></td>
							</tr>
							</table>
							
							<br><br>
							<?php
							if($hasil['status']!=""){
							?>
							<button type="submit" class="btn btn-info">
								<i class="icon-ok icon-white"></i> Print
							</button>
							<?php
							}
							?>
							<a href="batal.php?id=<?php echo $hasil['transactionum']; ?>" class="btn btn-danger"><i class="icon-arrow-left icon-white"></i>Batalkan</a>
						</center>
					</form>
				</div>
			</div>
		</div>

		<script src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
		<script type="text/javascript">
			function validateCheckBox()
			{
				var c = document.getElementsByTagName('input');
				for (var i = 0; i < c.length; i++)
				{
					if (c[i].type == 'checkbox')
					{
						if (c[i].checked) 
						{
							return true;
						}
					}
				}
				alert('Please select at least 1 ticket.');
				return false;
			}
		</script>
	</BODY>
</HTML>