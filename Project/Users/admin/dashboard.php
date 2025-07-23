<?php
session_start();
if(isset($_SESSION['name'])){
    $name=$_SESSION['name'];
    $id=$_SESSION['aid'];
    
    include '../dbcon.php';
    $query="select * from admin where aid='$id'";
    $cmd=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($cmd)){
        $aid=$row['aid'];
        $pwd=$row['pwd'];
        $aname=$row['name'];
    ?>
    <?php
        echo $aid." ".$pwd." ".$aname;
}
}else{
    echo "Please first login";
}
?>