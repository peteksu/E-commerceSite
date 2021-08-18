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

<?php require_once "connect2.php"; 
$accessories = $connection->query("SELECT*FROM clothes WHERE ID>=19", PDO::FETCH_OBJ)->fetchAll();


?>




<div class="container">
    <div class="row">
<?php foreach ($accessories as $accessory) { ?>    
        
    <div class="my-2 px-2" >
   <div class="card text-center ürünler" style="width: 16rem;">
   <img src="images/<?php echo $accessory->image_name; ?>" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title"><?php echo $accessory->clothes_name; ?></h5>
     <p class="card-text"><?php echo $accessory->property; ?></p>
     <p class= "text-right price-container"><strong>$<?php echo $accessory->price; ?></strong>
     <button product-id="<?php echo $accessory->ID; ?>" class="btn btn-primary butonlar">Add Basket</button>
  </div>
</div>
</div>

<?php } ?>


</div>
</div>
<?php include "footer.php"; ?>
<script src="jquery-3.6.0.min.js"></script>
<script src="cart.js"></script>

          
    </body>
      
      
      
      
</html>