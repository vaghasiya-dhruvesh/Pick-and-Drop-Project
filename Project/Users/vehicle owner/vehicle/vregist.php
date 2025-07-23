<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Registration</title>
    <link rel="stylesheet" href="../css/vehreg.css">
    <script src="sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <form name="registration"  action="addvehicle.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
        <div class="heading">
            <h1>Vehicle Registration</h1>
        </div>
        <!-- Main container for all inputs -->
        <div class="Container1">
            <label class="cust">Vehicle Name:</label>
            <input type="text" placeholder="Enter your Vehicle name" name="vname" >

            <br><br>
            <label class="cust">Vehicle Number:</label>
            <input type="text" placeholder="Enter your vehicle number" name="vno" >

            <br><br>
            <label class="brand">Brand:</label>
            <input type="text" placeholder="Enter your vehicle brand" name="brand">

            <br><br>
            <label class="color">Color:</label>
            <input type="text" placeholder="Enter your vehicle color" name="color">

            <br><br>
            <label class="price">Rent Price:</label>
            <input type="text" placeholder="Enter your vehicle rental price/day" name="price">

            <br><br>
            <label class="type">Type:</label>&nbsp;&nbsp;
            <select name="type" id="vcl">
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
            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <label class="photo">Photo:</label>
            <input type="file" name="photo"  id="photo">

            <br><br>
            <label class="fuel_type">Fuel Type:</label>&nbsp;&nbsp;
            <select name="fuel" id="ftype">
                <option value="petrol">PETROL</option>
                <option value="diesel">DIESEL</option>
                <option value="lpg">LPG</option>
                <option value="electric">ELECTRIC</option>
            </select>

            <label class="puc">PUC:</label>
            <input type="file" accept="application/pdf" name="puc"   id="puc">

            <br><br>
            <label class="vdate">Duration Date:</label>
            <input type="date"  name="vdate">&nbsp;

            <label class="Rcbook">RCBOOK:</label>
            <input type="file"  accept="application/pdf" name="rcbook"   id="rcbook">

            <br><br>
            <label class="seat">SEAT:</label>&nbsp;&nbsp;
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
            </select>&nbsp;
            
            <label class="insurance">INSURANCE:</label>
            <input type="file" accept="application/pdf" name="insurance"  id="ins">
            <br><br><br>
            <center>*Note:- Please insert pdf file only</center>
            <br>
            <div class="btn">
               	 <button type="submit" >Submit</button>
            </div>
        </div>
    </form>
    <script src="../js/validate_vdata.js"></script>
</body>
</html>