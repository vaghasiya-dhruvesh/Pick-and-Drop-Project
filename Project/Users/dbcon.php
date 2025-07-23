<?php
$con=mysqli_connect('localhost','root', '1618');
$db=mysqli_select_db($con,'project');
if($con){
    // echo "database connected";
}else{
?>
    <script>
        alert("connection unsuccesful");
    </script>
<?php
}
?>