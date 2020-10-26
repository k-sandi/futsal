<?php
	include('../db.php');
	$roomid = $_POST['roomid'];
	$status=$_POST['status'];
	$bank=$_POST['bank'];
	mysql_query("UPDATE customer SET status='$status'
										WHERE id='$roomid'");
	header("location: data_pemesanan.php");
?>