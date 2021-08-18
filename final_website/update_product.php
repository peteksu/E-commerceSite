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
            <div>
                <fieldset>
                    <?php
 
                    
                    $clothes_name = $_POST["clothes_name"];
                    $property = $_POST["property"];
                    $price = $_POST["price"];
                    $image_name = $_POST["image_name"];


                    if($clothes_name == "" and $price==""){
                        echo "Empty space!";
                    }else{

                        $connect = mysqli_connect("localhost","root");
                        mysqli_select_db(  $connect, "clothes") or die("it can not connect to mysql!");

                        $update =mysqli_query($connect,"UPDATE clothes SET
                        clothes_name='$clothes_name',
                        property='$property',
                        price='$price',
                        image_name='$image_name' WHERE clothes_name='$clothes_name'");
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

        <a href="admin.php" class="link-success">Back to admin page</a>

<?php include "footer.php"; ?>
<script src="jquery-3.6.0.min.js"></script>
<script src="cart.js"></script>

          
    </body>
      
      
      
      
</html>