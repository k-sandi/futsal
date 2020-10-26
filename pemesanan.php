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
<title>Booking Lapangan</title>
<link rel="stylesheet" type="text/css" href="xres/css/style.css" />
<link rel="icon" type="image/png" href="xres/images/favicon.png" />
<!--[if IE 6]><style type="text/css"> * html img { behavior: url("xres/iepngfix.htc") }</style><![endif]-->
<script src="js/jquery-1.5.min.js" type="text/javascript" charset="utf-8"></script>
<script src="vallenato/vallenato.js" type="text/javascript" charset="utf-8"></script>
<link rel="stylesheet" href="vallenato/vallenato.css" type="text/css" media="screen" charset="utf-8">

		
	<!--sa calendar-->	
		<script type="text/javascript" src="js/datepicker.js"></script>
        <link href="css/demo.css"       rel="stylesheet" type="text/css" />
        <link href="css/datepicker.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
		//<![CDATA[

		/*
				A "Reservation Date" example using two datePickers
				--------------------------------------------------

				* Functionality

				1. When the page loads:
						- We clear the value of the two inputs (to clear any values cached by the browser)
						- We set an "onchange" event handler on the startDate input to call the setReservationDates function
				2. When a start date is selected
						- We set the low range of the endDate datePicker to be the start date the user has just selected
						- If the endDate input already has a date stipulated and the date falls before the new start date then we clear the input's value

				* Caveats (aren't there always)

				- This demo has been written for dates that have NOT been split across three inputs

		*/

		function makeTwoChars(inp) {
				return String(inp).length < 2 ? "0" + inp : inp;
		}

		function initialiseInputs() {
				// Clear any old values from the inputs (that might be cached by the browser after a page reload)
				document.getElementById("sd").value = "";
				document.getElementById("ed").value = "";

				// Add the onchange event handler to the start date input
				datePickerController.addEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		var initAttempts = 0;

		function setReservationDates(e) {
				// Internet Explorer will not have created the datePickers yet so we poll the datePickerController Object using a setTimeout
				// until they become available (a maximum of ten times in case something has gone horribly wrong)

				try {
						var sd = datePickerController.getDatePicker("sd");
						var ed = datePickerController.getDatePicker("ed");
				} catch (err) {
						if(initAttempts++ < 10) setTimeout("setReservationDates()", 50);
						return;
				}

				// Check the value of the input is a date of the correct format
				var dt = datePickerController.dateFormat(this.value, sd.format.charAt(0) == "m");

				// If the input's value cannot be parsed as a valid date then return
				if(dt == 0) return;

				// At this stage we have a valid YYYYMMDD date

				// Grab the value set within the endDate input and parse it using the dateFormat method
				// N.B: The second parameter to the dateFormat function, if TRUE, tells the function to favour the m-d-y date format
				var edv = datePickerController.dateFormat(document.getElementById("ed").value, ed.format.charAt(0) == "m");

				// Set the low range of the second datePicker to be the date parsed from the first
				ed.setRangeLow( dt );
				
				// If theres a value already present within the end date input and it's smaller than the start date
				// then clear the end date value
				if(edv < dt) {
						document.getElementById("ed").value = "";
				}
		}

		function removeInputEvents() {
				// Remove the onchange event handler set within the function initialiseInputs
				datePickerController.removeEvent(document.getElementById("sd"), "change", setReservationDates);
		}

		datePickerController.addEvent(window, 'load', initialiseInputs);
		datePickerController.addEvent(window, 'unload', removeInputEvents);

		//]]>
		</script> 

</head>

<body>
<div id="wrapper">
	<div id="header"><h1><center><font color="#FFFFFF" >Silahkan isi Data Anda</font></center></h1 >
    <h1><a href="index.php"></a></h1>
        <ul id="mainnav">
			<li><a href="index.php">Home</a></li>
            <li><a href="pemesanan.php">Booking</a></li>
            <li><a href="history.php">History</a></li>
            <li><a href="info.php">Info Lapangan</a></li>
            <li><a href="admin.php">Admin</a></li>
            <li><a href="contact.php">Contact Us</a></li>
    	</ul>
	</div>
    <div id="content">
    	<div id="rotator">
            
            <ul>
                    <li>Cara Membooking Lapangan :</li><br></br>
					<li>1. Isi semua data anda pada kolom pengisian data (jangan ada yang kosong).</li><br></br>
					<li>2. Pembookingan lapangan hanya 1jam.</li><br></br>
					<li>3. Apabila ingin membooking lapangan lebih dari 1jam, lakukan pemesanan ulang setelah selesai<br></br> 
					melakukan transaksi booking sebelumnya, dengan mengisi data nama sama.</li><br></br><br></br>
					<li>4. Customer harap membawa bukti transaksi booking ketika datang ke lapangan.</li><br></br>
              </ul>
			  
			  <div id="logo" style="left: 600px; height: auto; top: 1px; width: 260px; position: absolute; z-index:4;">
					
					<h2 class="accordion-header" style="height: 18px; margin-bottom: 15px; color: rgb(255, 255, 255); background: none repeat scroll 0px 0px rgb(53, 48, 48);">Ticket Booking</h2>
					<div class="accordion-content" style="margin-bottom: 15px;">
				<script type="text/javascript">
		function hitungtotal(){

			var booking = (document.form.route.value);
			var jumlahpaket = parseFloat (document.form.qty.value);
			var ht =  0.0 ;
			var sub = 0.0;
			if (booking == 25) {

				ht = 80;
			}
			else if(booking == 26)
			{
				ht =  80
			}
			else if(booking == 27)
			{
				ht= 80
			}
			else if(booking == 28)
			{
				ht= 80
			}
			else if(booking == 29)
			{
				ht= 80
			}
			else if(booking == 30)
			{
				ht= 80
			}
			else if(booking == 31)
			{
				ht= 80
			}
			else if(booking == 32)
			{
				ht= 80
			}
			else if(booking == 33)
			{
				ht= 80;
			}
			else if(booking == 34)
			{
				ht= 100
			}
			else if(booking == 35)
			{
				ht= 100
			}
			else if(booking == 36)
			{
				ht= 100
			}
			else if(booking == 37)
			{
				ht= 100
			}
			else if(booking == 38)
			{
				ht= 100
			}
			else if(booking == 39)
			{
				ht= 100
			}
			else
			{
				ht = 100;
			}

			sub = jumlahpaket*ht;
			if (jumlahpaket >= 3) 
			{
				diskon = 0.0 * sub;
			}
			else
			{
				diskon=0.0;
			}
			total = sub - diskon;
			document.form.otiket.value=eval(ht);
			document.form.osub.value=eval(sub);
			
		}

	</script>
						<form action="hasil_input_pemesanan.php" method="post" style="margin-bottom:none;"name="form" onchange="hitungtotal()">	
						<span style="margin-right: 11px;">Pilih Jadwal: 
						<select name="route"  style="width: 220px; margin-left: 15px; border: 3px double #CCCCCC; padding:2px 2px;">
						<?php
						include('db.php');
						$result = mysql_query("SELECT * FROM route");
						while($row = mysql_fetch_array($result))
							{
								echo '<option value="'.$row['id'].'">';
								echo $row['type'];
								echo '</option>';
							}
						?>
						</select>
						</span><br>
						<span style="margin-right: 11px;">Tanggal: 
						<input type="text" class="w8em format-d-m-y highlight-days-67 range-low-today" name="date" id="sd" value="" maxlength="10" readonly="readonly" style="width: 150px; margin-left: 15px; border: 3px double #CCCCCC; padding:2px 2px;"/>
						</span>
						<span style="margin-right: 11px;">JamBooking : <br>
						<select name="qty">
							<option></option>
							<option value="1">1</option>
						 
						</select>
						</span><br>
						<span style="margin-right: 11px;">Harga IDR : 
						<input type="text"  name="otiket"  style="width: 160px; margin-left: 15px; border: 3px double #CCCCCC; padding:2px 2px;"/>
						</span><br>
						<span style="margin-right: 11px;">Total : 
						<input type="text"  name="osub" style="width: 160px; margin-left: 15px; border: 3px double #CCCCCC; padding:2px 2px;"/>
						</span>
						
						<center><input type="submit" id="submit" value="Next" style="height: 34px; width: 80px; padding: 5px; border: 3px double ;" /></center>
						</form>
					
					</div>
					
				</div>
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
