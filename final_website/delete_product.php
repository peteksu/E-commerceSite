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

                        $sil =mysqli_query($connect,"DELETE FROM clothes WHERE clothes_name='$clothes_name'");
                        if($sil){
                            echo "deleted";
                        }else{
                            echo "Not deleted";
                            echo "hata".mysqli_error($connect);
                            
                        }
                    }
                    ?>
                </fieldset>
                </div>


        <?php } ?>

        <a href="admin.php">Back to admin page</a>

