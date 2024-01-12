<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>

    <!-- FONT CSS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

    <!-- FONT CSS ENDS HERE -->

    <link rel="stylesheet" href="signup.css">

    <title>Payment</title>
</head>

<body>
    <div id="main">
        <span class="logo"><img src="/img/logo2.png" alt=""></span>
        <div id="centerbox">
            <div class="forms">
                <span class="head">
                    payment
                </span>
                <form action="" method="POST">
                    <span class="formtext">Card holder name</span>
                    <i class="fas fa-user"></i>
                    <input type="text" name="name" id="user" placeholder="@Card holder name">

                    <span class="formtext">Card no.</span>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="cnum" id="password" placeholder="********">

                    <span class="formtext">Cvv</span>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="cvv" id="cpassword" placeholder="********">
                    <button type="submit" name="submit" id="btn">0.99$  </button>
                </form>
                <div class="login">
                  <a href="index.php">Home</a>
                </div>
            </div>
        </div>
    </div>
    <?php
      if (isset($_POST['submit'])) {
        $conn=mysqli_connect("localhost", "root", "");
        $db=mysqli_select_db($conn, 'gag_1');

        $holder=$_POST['name'];
        $cnum=$_POST['cnum'];
        $cpass=$_POST['cvv'];
        session_start();
        $uid=$_SESSION['uid'];
        echo $uid;

        // echo '<script>alert("payment successfully $uid");</script>' ;
        // $query="SELECT * from payment where Card holder name ='$uname'";
        // $res=mysqli_query($conn, $query);

      
        //  if($res){
                $sql="INSERT INTO `payment` (`uid`, `holder_name`, `card_no`, `cvv`, `dt`) VALUES ('$uid', '$holder', '$cnum', '$cpass', current_timestamp());";
                $res=mysqli_query($conn, $sql);
                if($holder!="" and $cnum!="" and $cpass!=""){ 

                echo '<script>alert("payment successfully");</script>';
                     header("location:index.php");
                
                }
            


            // else if($res){
            //         echo '<script>alert("payment successfully")';
            //         header("location:analysis.php");
            //     }
                else {
                    echo '<script>alert("payment denied");</script>';
                }
             
            }
    ?>
</body>

</html>