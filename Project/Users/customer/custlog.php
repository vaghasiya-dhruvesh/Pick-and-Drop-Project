<?php 
session_start();
if(isset($_POST['submit'])){
$id=$_POST['name'];
$pass=$_POST['pwd'];

include '../dbcon.php';
$query="select * from customer where cid='$id'";
$cmd=mysqli_query($con,$query);
$num=mysqli_num_rows($cmd);
if($num==0){
    ?>
    <script>
        alert("Please enter correct email id");
    </script>
    <?php
}
while($row=mysqli_fetch_array($cmd)){
    $pwd=$row['pwd'];
    $id=$row['cid'];
?>
<?php
if($pass==$pwd){
	$_SESSION['cid']=$id;
	header("location:chome.php?un=".$_SESSION['cid']);
}
else{	
	?>
    <script>
        alert("Please enter correct password");
    </script>
    <?php
}
?>

<?php }}?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login page in HTML</title>
    <link rel="stylesheet" href="css/csslogin.css">
    <script type="text/javascript">
		function preventBack(){window.history.forward()};
		setTimeout("preventBack()", 0);
		window.onunload=function(){null;}
	</script>
</head>
<body>

    <form name="login" action="custlog.php" method="post">
        <div class="heading">
            <h3>Customer Login</h3>
            <p>Login in with your username and password</p>
        </div>

        <!-- Main container for all inputs -->
        <div class="Container1">
            Your Email
            <input type="email" placeholder="Enter Email id" name="name" required>

            <br><br>
            Your password
            <input type="password" placeholder="Enter Password" name="pwd" id="pwd" required>

            <div class="Container2">
                <p class="fpwd"> <a href="forgot/verification.php">Forgot Password?</a></p>
            </div>

            <button type="submit" name="submit">Login</button>

            <div class="Container3">
                <p class="reg"> Not a member? <a href="custregist.php">  Register here </a></p>
            </div>
        </div>

    </form>
    <!-- <script src="js/validate_logindata.js"></script> -->
</body>
</html>
