<?php
session_start();
if(isset($_SESSION['aid'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="dashadmin.css">
	<!-- <script type="text/javascript">
		function preventBack(){window.history.forward()};
		setTimeout("preventBack()", 0);
		window.onunload=function(){null;}
	</script> -->
	<?php include 'head.php'; ?>
	<?php include 'sidepanel.php'; ?>
</head>
<body>
	<div class="body">
<form action="status.php" method="post" style="width:760px;">
<span style="margin-left:200px;">Search Booked/Available Vehicle </span>
	 <br>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="day">
		 <select name="status">
			 <option value="0">Available</option>
			 <option value="1">Booked</option>
			</select>
	</div>
	<input type="submit" name="submit" value="Submit">
</form>

<form action="cbday.php" method="post" style="margin-top:300px; width:760px;">
<span style="margin-left:50px;">Check Customer who booked vehicle greater than entered days</span>
	 <br>
	<div class="day">Days: <input type="number" Placeholder="Enter number of days" name="day"></div>
	<input type="submit" name="submit" value="Submit">
</form>

<form action="custdate.php" method="post" style="margin-top:500px; width:760px;">
<span style="margin-left:100px;">Check Customer who booked vehicle in specified Date</span>
	 <br>
	<div class="day">Date: <input type="Date"  name="date"></div>
	<input type="submit" name="submit" value="Submit">
</form>

<form action="custveh.php" method="post" style="margin-top:700px; width:760px;">
	<span style="margin-left:40px;">Check Customer who Booked vehicle more than specified number</span>
	 <br>
	<div class="day">Vehicle: <input type="number" Placeholder="Enter number of vehicle" name="num"></div>
	<input type="submit" name="submit" value="Submit">
</form>

<form action="ownveh.php" method="post" style="margin-top:900px; width:760px;">
	<span>Check Vehicle Owner who registered vehicle more than specified number</span>
	 <br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="day">Vehicle: <input type="number" Placeholder="Enter number of vehicle" name="num"></div>
	<input type="submit" name="submit" value="Submit">
</form>

<form action="price.php" method="post" style="margin-top:1100px; width:760px;">
<span style="margin-left:40px;">Check Vehicle Price whose vehicle price is more than specified price</span>
	 <br>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="day">Price: <input type="number" Placeholder="Enter vehicle price" name="price"></div>
	<input type="submit" name="submit" value="Submit">
</form>

<form action="color.php" method="post" style="margin-top:1300px; width:760px;">
<span style="margin-left:170px;">Check Vehicle based upon specified color</span>
	 <br>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="day">Color: <input type="text" Placeholder="Enter vehicle color" name="color"></div>
	<input type="submit" name="submit" value="Submit">
</form>

<form action="brand.php" method="post" style="margin-top:1500px; width:760px;">
<span style="margin-left:170px;">Check Vehicle based upon specified brand</span>
	 <br>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="day">Brand: <input type="text" Placeholder="Enter vehicle brand" name="brand"></div>
	<input type="submit" name="submit" value="Submit">
</form>

<form action="type.php" method="post" style="margin-top:1700px; width:760px;">
<span style="margin-left:180px;">Check Vehicle based upon specified type</span>
	 <br>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<div class="day">Type: <select name="type" id="vcl">
                <option value="suv">SUV</option>
                <option value="hatchback">HATCHBACK</option>
                <option value="sedan">SEDAN</option>
                <option value="truck">TRUCK</option>
                <option value="van">VAN</option>
                <option value="sports">SPORTS CAR</option>
                <option value="motorcycle">MOTORCYCLE</option>
                <option value="luxury car">LUXURY CAR</option>
                <option value="tractor">TRACTOR</option>
                <option value="electric vehicle">ELECTRIC VEHICLE</option>
            </select></div>
	<input type="submit" name="submit" value="Submit">
</form>

<form action="seat.php" method="post" style="margin-top:1900px; width:760px;">
<span style="margin-left:180px;">Check Vehicle based upon specified seat</span>
	 <br>
	 <div class="day" style="margin-left:300px;">Seat: 
	 <select name="seat" id="seat">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </select>
	 </div>
	<input type="submit" name="submit" value="Submit">
</form>
     
<form action="fuel.php" method="post" style="margin-top:2100px; width:760px;">
<span style="margin-left:180px;">Check Vehicle based upon specified fuel</span>
	 <br>
	 <div class="day" style="margin-left:300px;">fuel: 
	 <select name="fuel" id="ftype">
                <option value="petrol">PETROL</option>
                <option value="diesel">DIESEL</option>
                <option value="lpg">LPG</option>
                <option value="electric">ELECTRIC</option>
    </select>
	 </div>
	<input type="submit" name="submit" value="Submit">
</form>
<?php
}else{
    ?>
    <script>
        alert("You Need To Login First");
    </script>
    <?php
}?>