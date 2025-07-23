<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page in HTML</title>
    <link rel="stylesheet" href="css/csslogin.css">
    <script>
        function checkpass(){
            let pass  = document.getElementById('pwd');
            let cpass  = document.forms["UpdatePassword"]["cpass"].value;
            if(pass.value.length<8) {
                alert("*Error:- Required aleast 8 character long password");
                return false;
            }
            if(!pass.value.match(/[0-9]/)) {
                alert("*Error:- Required aleast one number");
                return false;
            }
            if(!pass.value.match(/[A-Z]/)) {
                alert("*Error:- Required aleast one uppercase letter");
                return false;
            }
            if(!pass.value.match(/[a-z]/)) {
                alert("*Error:- Required aleast one lowercase letter");
                return false;
            }
            if(!pass.value.match(/[!\@\#\$\&\*\^\?\%\(\)\_\-\+\=\>\<\.\,]/)) {
                alert("*Error:- Required aleast one special character");
                return false;
            }
            if(pass!=cpass){
                alert("*Error:-  Please enter same password");
                return false;
            }
        }
    </script>
</head>
<body>

    <form name="UpdatePassword" action="ostorepass.php" method="post" onsubmit="return checkpass()">
        <div class="heading">
            <h3>Forgot Password</h3>
        </div>

        <!-- Main container for all inputs -->
        <div class="Container1">
			New Password
			<input type="password" name="npass" placeholder="Enter Password" id="pwd" required>
			<br><br>
			Confirm Password
			<input type="password" name="cpass" placeholder="Enter Password" required> 
            <br><br>
            <button type="submit">Change</button>
        </div>

    </form>
</body>
</html>