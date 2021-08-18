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
<?php


        if($_POST) {
        ?>
            <div class="card text-center card text-white bg-info mb-3" style="max-width: 18rem;     position: relative; margin: auto;">
                <fieldset>
                    <?php
 
                    
                    $Username = $_POST["Username"];
                    $Email = $_POST["Email"];
                    $adress = $_POST["adress"];
                    $crpw = $_SESSION["pw"];
                    $pw = $_POST["pw"];

                    if($Username == "" and $Email==""){
                        echo "Empty space!";
                    }else{

                        $connect = mysqli_connect("localhost","root");
                        mysqli_select_db(  $connect, "clothes") or die("it can not connect to mysql!");

                        $update =mysqli_query($connect,"UPDATE members SET
                        Username='$Username',
                        Email='$Email',
                        adress='$adress',
                        pw='$pw' WHERE pw='$crpw'");
                        if($update){
                            echo "updated";
                        }else{
                            echo "Not updated";
                            echo "hata".mysqli_error($connect);
                            
                        }
                    }
                    ?>
                </fieldset>
                
                </div>


        <?php } ?>

        <a href="profile.php" class="link-success">Back to Profile page</a>

<?php include "footer.php"; ?>
<script src="jquery-3.6.0.min.js"></script>
<script src="cart.js"></script>

          
    </body>
      
      
      
      
</html>