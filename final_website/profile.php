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
    if (!isset($_SESSION["ID"])){
        echo "<a class=\"btn btn-danger\" href=\"sign_in.php\">Please sign in</a>";
    }
    
     else{ 
        
        
        echo "<h2 class= \"text-center\"> User Informations </h2>";
    echo "<ol class=\"list-group list-group-numbered\" style=\"width: 600px; position:absolute; left: 30%;\">";
    
    
  echo "<li class=\"list-group-item d-flex justify-content-between align-items-start\">";
    echo "<div class=\"ms-2 me-auto\">";
      echo"<div class=\"fw-bold\">Username</div>";
       echo $_SESSION["Username"]; 
    echo "</div>";

    
  echo "</li>";
  echo "<li class=\"list-group-item d-flex justify-content-between align-items-start\">";
    echo "<div class=\"ms-2 me-auto\">";
      echo "<div class=\"fw-bold\">Email</div>";
       echo $_SESSION["Email"]; 
    echo "</div>";

    echo "<li class=\"list-group-item d-flex justify-content-between align-items-start\">";
    echo "<div class=\"ms-2 me-auto\">";
      echo"<div class=\"fw-bold\">Adress</div>";
       echo $_SESSION["adress"]; 
    echo "</div>";
    
  echo "</li>";
  echo "<li class=\"list-group-item d-flex justify-content-between align-items-start\">";
    echo "<div class=\"ms-2 me-auto\">";
    echo "<div class=\"fw-bold\">Password</div>";
       echo $_SESSION["pw"];
    echo "</div>";
    
  echo "</li>";
  echo "<a href=\"logout.php\" class=\"btn btn-danger\">Log out </a>";
  
echo "</ol> ";
  
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 echo "<br>";
 


echo "<div class=\"container\">";
          echo "<h2 style=\"color: black\">Update Information</h2>";
          echo "<form action=\"update_profile.php\" method =\"post\">";
            
            echo "<div class=\"form-group\">";
              
              echo "<input type=\"text\" class=\"form-control\"  placeholder=\"Enter new username\" name=\"Username\">";
            echo "</div>";
            echo "<div class=\"form-group\">";
              
              echo "<input type=\"text\" class=\"form-control\"  placeholder=\"Enter new email\" name=\"Email\">";
            echo "</div>";
            echo "<div class=\"form-group\">";
               
                echo "<input type=\"text\" class=\"form-control\"  placeholder=\"Enter new adress\" name=\"adress\">";
              echo "</div>";
              

              echo "<div class=\"form-group\">";
                
                echo "<input type=\"text\" class=\"form-control\"  placeholder=\"Enter new password\" name=\"pw\">";
              echo "</div>";
            
              echo "<input class=\"btn btn-danger\"  type=\"submit\" value=\"Update\" /></a>";
                 
          echo"</form>";
        echo"</div>";
     } ?>


       
    



    







        
        <script src="jquery-3.6.0.min.js"></script>
        <script src="cart.js"></script>
        <?php include "footer.php"; ?>
          
    </body>




</html>