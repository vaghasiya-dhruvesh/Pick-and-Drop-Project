<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page in HTML</title>
    <link rel="stylesheet" href="css/csslogin.css">
    <script>
        function validateForm(){
            let mail = document.forms["verify"]["id"].value;
            let role  = document.forms["verify"]["role"].value;
            if((mail.charAt(mail.length-4)!='.') && (mail.charAt(mail.length-3)!='.')){
                alert("*Error:- Invalid . Position");
                return false;
            }
            if(mail.length>50){
                alert("*Error:- Email id length is too long");
                return false;
            }
            if(role.length>30){
                alert("*Error:- Role Model name is too long");
                return false;
            }
        }
    </script>
</head>
<body>

    <form name="verify" action="forgotpass.php" method="post" onsubmit="return validateForm()">
        <div class="heading">
            <h3>Forgot Password</h3>
        </div>

        <!-- Main container for all inputs -->
        <div class="Container1">
            Your Email
            <input type="email" placeholder="Enter Email id" name="id" required>
            <br><br>
            Role Model
            <input type="text" placeholder="Enter Role Model Name" name="role" required>
            <br><br>

            <div class="Container2">
                <p class="fpwd"> <a href="Reset.php">Reset Role Model</a></p>
            </div>
            <button type="submit">Verify</button>
        </div>

    </form>
</body>
</html>