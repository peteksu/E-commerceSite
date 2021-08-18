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

<?php require_once "connect2.php"; 
$clothes = $connection->query("SELECT*FROM clothes WHERE ID<10", PDO::FETCH_OBJ)->fetchAll();
?>
<div class="container">
    <div class="row">
<?php foreach ($clothes as $clothe) { ?>    
        
<div class="my-2 px-2" >
   <div class="card text-center ürünler" style="width: 16rem;">
   <img src="images/<?php echo $clothe->image_name; ?>" class="card-img-top" alt="...">
   <div class="card-body">
     <h5 class="card-title"><?php echo $clothe->clothes_name; ?></h5>
     <p class="card-text"><?php echo $clothe->property; ?></p>
     <p class= "text-right price-container"><strong>$<?php echo $clothe->price; ?></strong>
     <button product-id="<?php echo $clothe->ID; ?>" class="btn btn-primary butonlar">Add Basket</button>
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