<?php
session_start();
$vid=$_GET['vid'];
$_SESSION['vid']=$vid;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="paybook.css">

</head>
<body>

<div class="container">
    <form action="addbookdata1.php" method="post">
        <div class="row">
            <div class="col">
                <h3 class="title">Billing address</h3>
                <div class="inputBox">
                    <span>full name :</span>
                    <input type="text" name="name"  placeholder="john deo" required>
                    <input type="hidden" name="vid" value="<?php echo $vid; ?>">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" name="cid" placeholder="example@example.com" required>
                </div>
                <div class="inputBox">
                    <span>pickup date :</span>
                    <input type="date" name="pdate" placeholder="room - street - locality" required>
                </div>
                <div class="inputBox">
                    <span>pickup time :</span>
                    <input type="time" name="ptime" placeholder="mumbai" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>drop date :</span>
                        <input type="date" name="ddate" placeholder="india" required>
                    </div>
                    <div class="inputBox">
                        <span>drop time :</span>
                        <input type="time" name="dtime" placeholder="123 456" required>
                    </div>
                </div>

            </div>

            <div class="col">

                <h3 class="title">Payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="image/card_img.png" alt="" required>
                </div>
                <div class="inputBox">
                    <span>name on card :</span>
                    <input type="text" placeholder="mr. john deo" required>
                </div>
                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" placeholder="1111-2222-3333-4444" required>
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" placeholder="january" required>
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" placeholder="2022" required>
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" placeholder="1234" required>
                    </div>
                    <!-- <div class="inputBox">
                        <span>amount :</span>
                        <input type="number" name="amt" placeholder="1234" required>
                    </div> -->
                </div>
            </div>
        </div>
        <input type="submit" value="proceed to checkout" class="submit-btn">
    </form>
</div>    
</body>
</html>