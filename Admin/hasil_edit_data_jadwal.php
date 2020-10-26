<?php
	include('../db.php');
	$roomid = $_POST['roomid'];
	$type=$_POST['type'];
	$price=$_POST['price'];
	$seat=$_POST['seat'];
	$time=$_POST['time'];
	mysql_query("UPDATE route SET type='$type', price='$price', numseats='$seat', time='$time' WHERE id='$roomid'");
	header("location: data_jadwal.php");
?>