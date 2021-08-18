<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SHOPPING</title>
        <script src="jquery-3.6.0.slim.js"></script>
        <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

    <?php include "navbar.php"; ?>

    <div class="content">
				<!--login-->
			<div class="login">
				<div class="main-agileits">
					<div class="form-w3agile">
						<h3>Admin Login</h3>
						<form action="" method="post">
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text"  name="Email_admin" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" >
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="Password" name="pw_admin" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="" >
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Login">
						</form>
					
				</div>
			</div>
				<!--login-->
		</div>
		<!--content-->

        

        <?php
        
        ob_start();

        if($_POST){


            $Email_admin = $_POST['Email_admin'];
            $pw_admin = $_POST['pw_admin'];
            

            if($Email_admin == "" || $pw_admin == "" ){
                echo "Email or password should not be empty!";
            }else{
                
                $connect = mysqli_connect("localhost","root");
                mysqli_select_db(  $connect, "clothes") or die("it can not connect to mysql!");

                $control =mysqli_query($connect, "SELECT * FROM admin_user WHERE pw_admin = '$pw_admin'");

                if(mysqli_num_rows($control) > 0){
                    $parse = mysqli_fetch_array($control);
                    $truepw = $parse['pw_admin'];

                    if($truepw == $pw_admin){
                        
                        echo "Successful Login!";
                        $_SESSION["ID"] = $parse['ID'];
                        $_SESSION["Username_admin"] = $parse['Username_admin'];
                        $_SESSION["Email_admin"] = $parse['Email_admin'];
                       
                        $_SESSION["pw_admin"] = $parse['pw_admin'];
                        echo "<a href=\"admin.php\" class=\"btn btn-danger\">admin page</a>";
                        
                        
                       
                    }else{
                        echo "Wrong Password!";
                    }
                }else{
                    echo "User not found!";
                }
            }

        }

       
?>
<?php include "footer.php"; ?>
          
        <script src="jquery-3.6.0.min.js"></script>
        <script src="cart.js"></script>
          
          </body>
      
      
      
      
      </html>

        
        
        
        
    