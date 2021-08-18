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
						<h3>Sign In</h3>
						<form action="#" method="post">
							<div class="key">
								<i class="fa fa-envelope" aria-hidden="true"></i>
								<input  type="text" value="Email"  name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="" >
								<div class="clearfix"></div>
							</div>
							<div class="key">
								<i class="fa fa-lock" aria-hidden="true"></i>
								<input  type="password" value="Password"  name="pw" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
								<div class="clearfix"></div>
							</div>
							<input type="submit" value="Login">
						</form>
					</div>
					<div class="forg">
						<a href="sign_up.php" class="forg-right">sign up</a>
					<div class="clearfix"></div>
                    <a class="btn btn-primary" href="admin_login.php" role="button">Admin Login</a>
					</div>
				</div>
			</div>
				<!--login-->
		</div>
        <?php
        if($_POST){

            $Email = $_POST['Email'];
            $pw = $_POST['pw'];

            if($Email == "" || $pw == "" ){
                echo "Email or password should not be empty!";
            }else{ 
                $connect = mysqli_connect("localhost","root");
                mysqli_select_db(  $connect, "clothes") or die("it can not connect to mysql!");

                $control =mysqli_query($connect, "SELECT * FROM members WHERE pw = '$pw'");

                if(mysqli_num_rows($control) > 0){
                    $parse = mysqli_fetch_array($control);
                    $truepw = $parse['pw'];

                    if($truepw == $pw){
                        echo "Successful Login!";
                        $_SESSION["ID"] = $parse['ID'];
                        $_SESSION["Username"] = $parse['Username'];
                        $_SESSION["Email"] = $parse['Email'];
                        $_SESSION["adress"] = $parse['adress'];
                        $_SESSION["pw"] = $parse['pw'];
                        echo "<a class=\"btn btn-danger\" href=\"profile.php\">Go to Profile</a>";
                    }else{
                        echo "Wrong Password!";
                    }
                }else{
                    echo "User not found!";
                }
            }
        }
        ?>

        




        <script src="jquery-3.6.0.min.js"></script>
        <script src="cart.js"></script>
        <?php include "footer.php"; ?>
          </body>
      
      
      
      
      </html>