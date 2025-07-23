<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page in HTML</title>
    <link rel="stylesheet" href="css/regist.css">
</head>
<body>

    <form name="registration"  action="custinsertdata.php" method="post" onsubmit="return validateForm()" enctype="multipart/form-data">
        <div class="heading"> 
            <h1>Customer Registration</h1>
        </div>
        <!-- Main container for all inputs -->
        <div class="Container1">
            Name:
            <input type="text" placeholder="Enter your full name" name="cname" required>

            <br><br>
            <label class="cust">Number:</label>
            <input type="number" placeholder="Enter your number" name="cno" required>

          
            <label class="bdate">Birthdate:</label>
            <input type="date" placeholder="Enter your Birthdate" name="cbdate" required>

            <br><br>
            <label class="city">City:</label>
            <input type="text" placeholder="Enter your city" name="c_city" required>

            <br><br>
            Username:
            <input type="email" placeholder="Enter Username" name="cid" required>

            <br><br>
            <label class="pass">Password:</label>
            <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required>


            <br><br>
                 Address:
            <div class="add"> 
                <textarea name="cadd" placeholder="Enter your Address" cols="63" rows="3" required></textarea>
            </div> 
    
            <br><br>
                Role Model:
                <input type="text" placeholder="Enter your role model" name="role" style="margin-left: 23px;" required>

            <br><br>
                Aadhar Card:
                <input type="file" name="idproof" accept="application/pdf"  id="card" required> *Note:- Please insert pdf file
            <br><br>
                Licence:
                <input type="file" name="licence" accept="application/pdf"  id="lic" required>  *Note:- Please insert pdf file
            <br><br>
            <div class="btn">
               	 <button type="submit" >Submit</button>
            </div>
        </div>
    </form>
    <script src="js/validate_registdata.js"></script>
</body>
</html>