<?php
session_start();
session_destroy();
unset($_SESSION['cid']);
if(isset($_SESSION['cid'])){
    echo "Something went wrong. Not able to logout";
}else{
    header('location:../../../index.php');
}
?>