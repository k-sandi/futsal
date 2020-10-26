<?php
include('db.php');
function createRandomPassword() {
	$chars = "abcdefghijkmnopqrstuvwxyz023456789";
	srand((double)microtime()*1000000);
	$i = 0;
	$pass = '' ;
	while ($i <= 7) {
		$num = rand() % 33;
		$tmp = substr($chars, $num, 1);
		$pass = $pass . $tmp;
		$i++;
	}
	return $pass;
}
$confirmation = createRandomPassword();
$fname=$_POST['fname'];
$qty=$_POST['qty'];
$lname=$_POST['lname'];
$busnum=$_POST['busnum'];
$setnum=$_POST['setnum'];
$date=$_POST['date'];
$contact=$_POST['contact'];
$bank=$_POST['bank'];
$n_pemilik_rekening=$_POST['n_pemilik_rekening'];
$result = mysql_query("SELECT * FROM route WHERE id='$busnum'");
while($row = mysql_fetch_array($result))
	{
	$price=$row['price'];
	}
	$payable=$_POST['ototal'];
mysql_query("INSERT INTO customer (tanggal ,fname, lname,  contact, lapangan, transactionum, payable,bank)
VALUES ('$date', '$fname', '$lname', '$contact', '$busnum', '$confirmation','$payable','$bank')");
mysql_query("INSERT INTO reserve (date, nama, lapangan, seat_reserve, transactionnum, n_pemilik_rekening)
VALUES ('$date', '$fname $lname', '$busnum', '$qty', '$confirmation', '$bank: $n_pemilik_rekening')");
header("location: print.php?id=$confirmation&setnum=$setnum");
?>