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
  <body bgcolor="#000000">
  <center>
			<a href="index.php"><font color="#FFFFFF" size="4">Home</a></font>
            <a href="pemesanan.php"><font color="#FFFFFF" size="4">Booking</a></font>
            <a href="history.php"><font color="#FFFFFF" size="4">History</a>
            <a href="info.php"><font color="#FFFFFF" size="4">Info Lapangan</a>
            <a href="admin.php"><font color="#FFFFFF" size="4">Admin</a>
            <a href="contact.php"><font color="#FFFFFF" size="4">Contact Us</a></center>
<style>

body{
font-family:"Lucida Grande", "Lucida Sans Unicode", Verdana, Arial, Helvetica, sans-serif;
font-size:12px;
}
p, h1, form, button{border:0; margin:0; padding:0;}
.spacer{clear:both; height:1px;}
/* ----------- My Form ----------- */
.myform{
margin:0 auto;
width:400px;
padding:14px;
}

/* ----------- stylized ----------- */
#stylized{
border:solid 2px #b7ddf2;
background:#ebf4fb;
}
#stylized h1 {
font-size:14px;
font-weight:bold;
margin-bottom:8px;
}
#stylized p{
font-size:11px;
color:#666666;
margin-bottom:20px;
border-bottom:solid 1px #b7ddf2;
padding-bottom:10px;
}
#stylized label{
display:block;
font-weight:bold;
text-align:right;
width:140px;
float:left;
}
#stylized .small{
color:#666666;
display:block;
font-size:11px;
font-weight:normal;
text-align:right;
width:140px;
}
#stylized input{
float:left;
font-size:12px;
padding:4px 2px;
border:solid 1px #aacfe4;
width:200px;
margin:2px 0 20px 10px;
}
#stylized button{
clear:both;
margin-left:150px;
width:125px;
height:31px;
background:#666666 url(img/button.png) no-repeat;
text-align:center;
line-height:31px;
color:#FFFFFF;
font-size:11px;
font-weight:bold;
}
</style>
<?php
include('db.php');
$busnum=$_POST['route'];
$date=$_POST['date'];
$qty=$_POST['qty'];
$ototal=$_POST['osub'];
$result = mysql_query("SELECT * FROM route WHERE id='$busnum'");
while($row = mysql_fetch_array($result))
	{
		$numofseats=$row['numseats'];
		$query = mysql_query("SELECT sum(seat_reserve) FROM reserve where date = '$date'");
							while($rows = mysql_fetch_array($query))
							  {
							  $inogbuwin=$rows['sum(seat_reserve)'];
							  }
		$avail=$numofseats-$inogbuwin;
		$setnum=$inogbuwin+1;
	}
?>
<?php
if ($avail < $qty){
echo 'Jadwal telah di booking';
}
else if($avail > 0)
{
?>
<script type="text/javascript">
function validateForm()
{
var x=document.forms["form"]["fname"].value;
if (x==null || x=="")
  {
  alert("Nama Depan Tidak Boleh Kosong");
  return false;
  }
var y=document.forms["form"]["lname"].value;
if (y==null || y=="")
  {
  alert("Nama Belakang Tidak Boleh Kosong");
  return false;
  }
var a=document.forms["form"]["contact"].value;
if (a==null || a=="")
  {
  alert("Nomor Kontak Tidak Boleh Kosong");
  return false;
  }

}
</script><center><font color="#FFFFFF" size="3">Silahkan isi data yang sesuai</font></center>
<div id="stylized" class="myform">

<form id="form" name="form" action="save.php" method="post"  onsubmit="return validateForm()">
<input type="hidden" value="<?php echo $busnum ?>" name="busnum" />
<input type="hidden" value="<?php echo $date ?>" name="date" />
<input type="hidden" value="<?php echo $qty ?>" name="qty" />
<input type="hidden" value="<?php echo $ototal ?>" name="ototal" />

<?php
$N = $qty;
for($i=0; $i < $N; $i++)
{
echo $i+$setnum.', ';
} 
 ?>

<label><font color="#000000"size="2">Nama Depan
<span class="small">Masukkan Nama depan</span>
</label>
<input type="text" name="fname"  id="name"/><br>
<label><font color="#000000"size="2">Nama Belakang
<span class="small">Masukkan Nama belakang</span>
</label>
<input type="text" name="lname"  id="name"/><br>

<label><font color="#000000"size="2">Contact
<span class="small">Masukkan No Hp</span>
</label>
<input type="text" name="contact"  id="name"/><br>
<label><font color="#000000"size="2">Pilih No Rekening
<span class="small"></span>
</label>
<select name="bank"  style="width: 169px; margin-left: 15px; border: 3px double #CCCCCC; padding:2px 2px;"/>
							<option value="BRI">BRI : 533901006701531</option>
							<option value="BNI">BNI : 0170507446</option>
							<option value="BCA">BCA : 89478293747382</option>
						</select><br>
<label><font color="#000000"size="2"> Nama pemilik rekening

<span class="small"></span>
</label>
<select name="n_pemilik_rekening"  style="width: 169px; margin-left: 15px; border: 3px double #CCCCCC; padding:2px 2px;"/>
							<option value="Rizqi Nusabbih">Rizqi Nusabbih</option>
							<option value="Andika Oktapiyana">Andika Oktapiyana</option>
							<option value="Mahmuda">Mahmuda</option>
						</select><br><br>
<button type="submit">Konfirmasi</button>
</form>
</div>
<center><strong><font color="#FFFFFF" size="4">Pembayaran Dapat Melalui Transfer Ke Rekening Berikut		
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
</tr>
</table>

	<h4> Telephone :0634 - 22611 &bull; Sarijadi, Bandung, Indonesia </h4>
	<p>Jasa Penyewaan Lapangan Futsal Kick Off</p>
	<p>&copy; Copyright 2016 PROYEK 1 D3 Teknik Informatika  <br /></p>
<?php
}
else if($avail <= 0)
{
echo 'no available sets';
}
?>
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
		