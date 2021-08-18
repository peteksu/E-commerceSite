<?php 
        if($_POST) {
        ?>
            <div>
                <fieldset>
                    <?php
 
                    $Username_admin = $_POST["Username_admin"];
                    $Email_admin = $_POST["Email_admin"];
                    $pw_admin = $_POST["pw_admin"];
                    

                    if($Username_admin == "" and $Email_admin==""){
                        echo "Empty space!";
                    }else{

                        $connect = mysqli_connect("localhost","root");
                        mysqli_select_db(  $connect, "clothes") or die("it can not connect to mysql!");

                        $ekle =mysqli_query($connect,"INSERT INTO admin_user SET
                        Username_admin ='$Username_admin',
                        Email_admin='$Email_admin',
                        pw_admin='$pw_admin'
                        ");
                        if($ekle){
                            echo "inserted";
                        }else{
                            echo "Not inserted";
                            echo "hata".mysqli_error($connect);
                            
                        }
                    }
                    ?>
                </fieldset>
                </div>


        <?php } ?>

        <a href="admin.php">Back to admin page</a>