<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SHOPPING</title>
        
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

    echo "<div class=\"card\" style=\"width: 600px; position:absolute; left: 30%;\">";
  echo "<h5 class=\"card-header\">Payment</h5>";
  echo "<div class=\"card-body\">";
    echo "<h5 class=\"card-title\">Adress Information</h5>";
    echo "<p class=\"card-text\">";
    echo $_SESSION["adress"];
    echo"</p>";
    echo "<h6 class=\"card-title\">Cargo is free!</h6>";
    echo "<h5 class=\"card-title\">Choose payment option:</h5>";
    echo "<div class=\"form-check\">";
  echo "<input class=\"form-check-input\" type=\"checkbox\"  id=\"flexCheckDefault\">";
  echo "<label class=\"form-check-label\" for=\"flexCheckDefault\">";
   echo "Credit cart";
  echo "</label>";
echo "</div>";
echo "<div class=\"form-check\">";
  echo "<input class=\"form-check-input\" type=\"checkbox\" id=\"flexCheckChecked\" checked>";
  echo "<label class=\"form-check-label\" for=\"flexCheckChecked\">";
    echo "Transfer";
  echo "</label>";
echo "</div>";
    echo "<input class=\"btn btn-danger\" type=\"button\" value=\"Pay Now\" onclick=\"alert('Your order has been received. It will be delivered within 3 working days.');\">";
  echo "</div>";
echo "</div>";

     } ?>

   








    <script src="jquery-3.6.0.min.js"></script>
        <script src="cart.js"></script>
        
        
    </body>




</html>