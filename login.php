<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 

    <!-- FONT CSS-->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">

    <!-- FONT CSS ENDS HERE -->

    <link rel="stylesheet" href="style.css">

    <title>LogIn</title>
    <style>
        .mx-5{
            margin: 0 20% !important;
        }
    </style>
</head>

<body>
    <div id="main">
        <span class="logo"><img src="/img/logo2.png" alt=""></span>
        <?php
      if (isset($_POST['submit'])) {
        $conn=mysqli_connect("localhost", "root", "");
        $db=mysqli_select_db($conn, 'gag_1');

        $uname=$_POST['user'];
        $pass=$_POST['password'];

        $query="SELECT * from login where uname='$uname' and pass='$pass'";
        $res=mysqli_query($conn, $query);

        if ($res) {
          if(mysqli_num_rows($res)>0)
          {
			    //   echo 'Login Success';
            $row = mysqli_fetch_assoc($res);
            $uid=$row['id'];
            $type=$row['type'];
            
            session_start();
            $_SESSION['loggedin']=true;
            $_SESSION['name']=$uname;
            $_SESSION['uid']=$uid;

            if ($uname == 'admin' && $pass == 'admin') {
                header("location:admin.php");    
            }
            else{
                header("location:analysis.php");
            }

            // REMOVE THIS COMMENT TO MAKE PAGE REDIRECT AFTER LOGIN

          }
		    else
			    //   echo '<script>alert("Login Failed"); </script>';
                echo '<div class="alert alert-danger mx-5" role="alert">
                Login Failed!
                </div>';
        }
		}
    ?>
        <div id="centerbox">
            <div class="forms">
                <span class="head">
                    LogIn
                </span>
                <form action="" method="post">
                    <span class="formtext">Username</span>
                    <i class="fas fa-user"></i>
                    <input type="text" name="user" id="user" placeholder="@username">

                    <span class="formtext">Password</span>
                    <i class="fas fa-lock"></i>
                    <input type="password" name="password" id="password" placeholder="********">

                    <button type="submit" name="submit" id="btn">Login</button>
                </form>
                <div class="login">
                    Dont have an account? <a href="signup.php" target="_blank">Signup here</a><br>
                    
                </div>
            </div>
            </div>
           

        
    </div>
</body>

</html>