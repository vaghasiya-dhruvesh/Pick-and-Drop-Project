<?php 
session_start();
if(isset($_POST['submit'])){
$id=$_POST['name'];
$pass=$_POST['pwd'];

include '../dbcon.php';
$query="select * from owner where oid='$id'";
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
	$id=$row['oid'];
    $pwd=$row['pwd'];
    $name=$row['oname'];
?>
<?php 
if($pass==$pwd){
	$_SESSION['name']=$name;
	$_SESSION['oid']= $id;
	header("location:ohome.php?un=".$_SESSION['name'].$_SESSION['oid']);
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

    <form name="login" action="ownerlog.php" method="post">
        <div class="heading">
            <h3>Owner</h3>
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
                <p class="reg"> Not a member? <a href="ownerregist.php">  Register here </a></p>
            </div>
        </div>

    </form>
    <!-- <script src="js/validate_logindata.js"></script> -->
</body>
</html>
