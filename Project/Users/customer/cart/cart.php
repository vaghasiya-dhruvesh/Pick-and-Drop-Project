<html>
    <head>
        <title>My Cart</title>
        <link rel="stylesheet" href="cart.css">
    </head>
<body>
<div class="cart">My Cart</div>
<?php
session_start();
$remove1=1;
if(isset($_POST['submit1']) || isset($_SESSION['count1'])){
    $_SESSION['count1']=1;
    $remove1 = $_POST['vid'];
}
$remove2=1;
if(isset($_POST['submit2']) || isset($_SESSION['count2'])){
    $_SESSION['count2']=1;
    $remove2 = $_POST['vid'];
}
$remove3=1;
if(isset($_POST['submit3']) || isset($_SESSION['count3'])){
    $_SESSION['count3']=1;
    $remove3 = $_POST['vid'];
}
$id1 = 2;
$id2 = 3;
$id3 = 4;
$count=3;
$con=mysql_connect("localhost","root");
$db=mysql_selectdb("project");
if($remove1){    // if $remove variable value is 1/set then it will go inside 
    $qry="SELECT * FROM vehicle WHERE vid=$id1";    // Item number 1 ---------------------------------------
    $cmd=mysql_query($qry,$con);
    while($row=mysql_fetch_array($cmd)){
        $vid=$row[vid];
        $name=$row[vname];
        $price=$row[price];
        $date=$row[date];
        $photo=$row[photo];
    ?>
    <!-- Container 1 -->
    <div class="container1">
        <div class="img">
            <img src=" <?php echo "../../vehicle owner/owner_data/".$photo; ?>" alt="image not found" width="700px" height="426px">
        </div>
        <div class="vr1"></div>
        <div class="data">
            <div class="vr2"></div>
            <div class="name">
                <h2><?php echo $name;?></h2>
            </div>
            <div class="btn1">
                <button name="rent" id="rent">Rent Now</button>
            </div>
            <div class="price">
            <h1>&#8377;<?php echo $price?>/day</h1>
                <p>Booking till:- <?php echo $date?></p>
            </div>
            <div class="btn2">
                <form action="cart.php" method="POST">
                    <input type="hidden" name="vid" value="0">
                    <input type="submit" name="submit1" value="Remove">
                </form>
            </div>
            <div class="details">
                <form action="../../vehicle owner/vehicle/vehicle details/vdata.php" method="POST">
                    <input type="hidden" name="vid" value="<?php echo $vid;?>">
                    <input type="submit" name="submit" value="Show More Details">
                </form>
            </div>
        </div>
    </div>
<?php 
}  // closing bracket of line 28
}  // closing bracket of line 31

// Item number 2 ---------------------------------------------------------------------------------------------->

if($remove2){
    if($count>1){
        $qry="SELECT * FROM vehicle WHERE vid=$id2";
        $cmd=mysql_query($qry,$con);
        while($row=mysql_fetch_array($cmd)){
                $vid=$row[vid];
                $name=$row[vname];
                $price=$row[price];
                $date=$row[date];
                $photo=$row[photo];
        ?>
    <!-- Container 2 -->
    <div class="container1">
        <div class="img">
            <img src=" <?php echo "../../vehicle owner/owner_data/".$photo; ?>" alt="image not found" width="700px" height="426px">
        </div>
        <div class="vr1"></div>
        <div class="data">
            <div class="vr2"></div>
            <div class="name">
                <h2><?php echo $name?></h2>
            </div>
            <div class="btn1">
                <button name="rent" id="rent">Rent Now</button>
            </div>
            <div class="price">
            <h1>&#8377;<?php echo $price?>/day</h1>
                <p>Booking till:- <?php echo $date?></p>
            </div>
            <div class="btn2">
                <form action="cart.php" method="POST">
                    <input type="hidden" name="vid" value="0">
                    <input type="submit" name="submit2" value="Remove">
                </form>
            </div>
            <div class="details">
                <form action="../../vehicle owner/vehicle/vehicle details/vdata.php" method="POST">
                    <input type="hidden" name="vid" value="<?php echo $vid;?>">
                    <input type="submit" name="submit" value="Show More Details">
                </form>
            </div>
        </div>
    </div>
<?php
}   //closing tag of line 80  
}   //closing tag of line 77
}   //closing tag of line 75

// Item number 3 -------------------------------------------------------------------------------------------->
if($remove3){
    if($count>2){
        $qry="SELECT * FROM vehicle WHERE vid=$id3";
        $cmd=mysql_query($qry,$con);
        while($row=mysql_fetch_array($cmd)){
                $vid=$row[vid];
                $name=$row[vname];
                $price=$row[price];
                $date=$row[date];
                $photo=$row[photo];
        ?>
    <!-- Container 3 -->
    <div class="container1">
        <div class="img">
            <img src=" <?php echo "../../vehicle owner/owner_data/".$photo; ?>" alt="image not found" width="700px" height="426px">
        </div>
        <div class="vr1"></div>
        <div class="data">
            <div class="vr2"></div>
            <div class="name">
                <h2><?php echo $name?></h2>
            </div>
            <div class="btn1">
                <button name="rent" id="rent">Rent Now</button>
            </div>
            <div class="price">
            <h1>&#8377;<?php echo $price?>/day</h1>
                <p>Booking till:- <?php echo $date?></p>
            </div>
            <div class="btn2">
                <form action="cart.php" method="POST">
                    <input type="hidden" name="vid" value="0">
                    <input type="submit" name="submit2" value="Remove">
                </form>
            </div>
            <div class="details">
                <form action="../../vehicle owner/vehicle/vehicle details/vdata.php" method="POST">
                    <input type="hidden" name="vid" value="<?php echo $vid;?>">
                    <input type="submit" name="submit" value="Show More Details">
                </form>
            </div>
        </div>
    </div>
<?php 
}   //closing tag of line 130
}   //closing tag of line 127
}   //closing tag of line 125
// unset($_SESSION['count1']);
// unset($_SESSION['count2']);
// unset($_SESSION['count3']);
?>
</body>
</html>