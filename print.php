<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,";  
  disp_setting+="scrollbars=yes,width=1300, height=540, left=30, top=50"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>Transaksi Kick Off</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 1200px; font-size:50px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body><table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<center><a href="javascript:Clickheretoprint()">Print/Cetak Tiket</a><a href="index.php"><center>Home</a></center><br><br>
<div id="print_content" style="width:1350;">
	<img src="xres/images/kickoff.jpg">
<center><font color="#000000" size="7">Jasa Penyewaan Lapangan Futsal Kick Off</font></center>

<strong><font color="#000000" size="5">Harap melakukan pembayaran paling lama 30 menit setelah waktu pemesanan atau dianggap batal</font></strong><br>
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="5">Rincian Pembookingan</font></strong><br>
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>

<?php
include('db.php');
$id=$_GET['id'];
$setnum=$_GET['setnum'];
$result = mysql_query("SELECT * FROM customer WHERE transactionum='$id'");
while($row = mysql_fetch_array($result))
	{
		echo '<font color=#"000000" size="3">Nomor Transaksi: '.$row['transactionum'].'<br><br>';
		echo 'Nama : '.$row['fname'].' '.$row['lname'].'<br><br>';
		echo 'No Hp: '.$row['contact'].'<br><br>';
		echo 'Harga IDR: '.$row['payable'].'<br><br>';
		echo 'Pembayaran Melalui Bank: '.$row['bank'].'<br><br>';
	}
$results = mysql_query("SELECT * FROM reserve WHERE transactionnum='$id'");
while($rows = mysql_fetch_array($results))
	{
		$ggagaga=$rows['lapangan'];
		echo 'Jadwal Booking :  ';
		$resulta = mysql_query("SELECT * FROM route WHERE id='$ggagaga'");
		while($rowa = mysql_fetch_array($resulta))
			{
			echo $time=$rowa['time'];
			echo '<br><br>';
			}
		echo 'Tanggal : '.$rows['date'].'<br><br>';
		
	}
	
?>
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="4">Harap Membawa Bukti Transaksi ini Ketika Datang Ke Kick Off	
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table>
<strong><font color="#000000" size="4">Pembayaran Dapat Melalui Transfer Ke Rekening Berikut			
<table width="1350" border="2" cellpadding="4" cellspacing="5 " bgcolor="#FFFFFF"></table><br>
<table width="708" border="2" cellpadding="3" cellspacing="5 " bgcolor="#276501">
<tr bgcolor="#000000">
<td><center><font color="#FFFFFF">Daftar Nama Bank</font></center></td>
  <td><center><font color="#FFFFFF">BRI </font></center></td>
  <td><center><font color="#FFFFFF">BNI</font></center></td>
  <td><center><font color="#FFFFFF">BCA</font></center></td>
</tr>
<tr bgcolor="#000000">
<td><center><font color="#FFFFFF">No Rekening</font></center></td>
  <td><center><font color="#FFFFFF"> 533901006701531</font></center></td>
  <td><center><font color="#FFFFFF"> 0170507446</font></center></td>
  <td><center><font color="#FFFFFF"> 89478293747382</font></center></td>
</tr>
<tr bgcolor="#000000">
<td><center><font color="#FFFFFF">Atas Nama</font></center></td>
  <td><center><font color="#FFFFFF">Rizqi Nusabbih</font></center></td>
  <td><center><font color="#FFFFFF">Andika Oktapiyana</font></center></td>
  <td><center><font color="#FFFFFF">Mahmuda</font></center></td>

