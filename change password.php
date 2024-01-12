<!DOCTYPE html>
<html lang="en">

<head>

<?php
    
?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Colorlib">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <!-- Page Title -->
    <title>Change Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="style.css">
 
</head>

<body >
    
        <div id="centerbox">
            <div class="forms" >
                <span class="head">
                  Change Password
                </span>
                <br><br>
                <form action="" method="post" style="align-items: center;
    justify-content: center;">
                    <span class="formtext">Email</span>
                    <i class="fas fa-user"></i>
                    <input type="text" name="email" id="user" placeholder="@email" required>

                    <span class="formtext">New Password</span>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password1" id="password" placeholder="new pass**" required >

                    <span class="formtext">Confirm New Password</span>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password2" id="password" placeholder="confirm new pass**" required>

                    <button type="submit" name="change" value="change" id="btn">Change</button>
                   
                </form>
                
            </div>
            </div>
            
        
    </div></br></br></br></br></br>
	
	
	</div></br></br></br></br></br></br></br></br></br></br></br>
	
	
	

    <?php
     $conn = mysqli_connect("localhost", "root", "", "gag_9");
    if(isset($_POST['change']))
    {
        $email=$_POST['email'];
        $pass1=$_POST['password1'];
        $pass2=$_POST['password2'];
        $query = mysqli_query($conn,"SELECT * from login where email='$email'");
        if (mysqli_num_rows($query)==0) 
        {
            echo '<div class="alert alert-danger alert-dismissible mx-5" role="alert" style="    margin-right: 56rem!important;
            margin-left: 30rem!important;
            position: absolute !important;
            top: 84px !important;
            height: 8%;
            width: 36.5% !important;">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            Email not found. Kindly enter registered email.
            </div>';
        }
        else
        {
            if($pass1!=$pass2) {
                echo '<div class="alert alert-danger alert-dismissible -mx-5" role="alert" style="    margin-right: 56rem!important;
                margin-left: 30rem!important;
                position: absolute !important;
                top: 84px !important;
                height: 8%;
                width: 36.5% !important;">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                 New Password and Confirm New Password do not match.
                </div>';
            }
            else
            {
                $sql3="UPDATE login SET pass='$pass2' where email='$email'";
                $res= mysqli_query($conn, $sql3);

                           
                if($res)
                {
                    echo'<script>alert("Password Changed Successfully")</script>';
                    header("location:login.php");
                

                }
            }

        }

    }
?>

  
</body>

</html>