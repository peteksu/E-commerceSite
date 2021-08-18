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

<div class="container">

<br>
<br>
    <?php if($total_count > 0) { ?>

        
        <h2 class="text-center">There are <strong class ="color-danger"><?php echo $total_count; ?></strong> product in basket.</h2>
        <hr>
        <div class="row sepet" >
    <div class="col-md-8 col-md-offset-2">
        <table class="table table-hover table-bordered table-striped">

        <thead>
            <th class="text-center">Product image</th>
            <th class="text-center">Product name</th>
            <th class="text-center">Price</th>
            <th class="text-center">Number Of Product</th>
            <th class="text-center">Total</th>
            <th class="text-center">Remove From Basket</th>
        </thead>

        <tbody>
            <?php foreach ($shopping_products as $product) { ?>
                <tr>
                <td class="text-center" width="120">
                    <img src="images/<?php echo $product->image_name; ?>" alt="" width="50">
                
                </td>
                <td class="text-center"><?php echo $product->clothes_name; ?></td>
                <td class="text-center"><strong>$<?php echo $product->price; ?></strong></td>
                <td class="text-center">
                    <a href="cart_db.php?p=incCount&product_id=<?php echo $product->ID; ?>" class="btn btn-xs btn-success">
                        <span clas="glyphicon glyphicon-plus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
</svg></span>
                    </a> 
                    <input type="text" class="item-count-input" value="<?php echo $product->count;?>">
                    <a href="cart_db.php?p=decCount&product_id=<?php echo $product->ID; ?>" class="btn btn-xs btn-danger">
                        <span clas="glyphicon glyphicon-minus"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
  <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
</svg></span>
                    </a>

                </td>
                <td class="text-center">$<?php echo $product->total_price; ?></td>
                <td class="text-center">
                    <button product-id="<?php echo $product->ID; ?>" class="btn btn-danger btn-sm removeFromCartBtn">
                        <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-x" viewBox="0 0 16 16">
  <path d="M6.146 6.146a.5.5 0 0 1 .708 0L8 7.293l1.146-1.147a.5.5 0 1 1 .708.708L8.707 8l1.147 1.146a.5.5 0 0 1-.708.708L8 8.707 6.854 9.854a.5.5 0 0 1-.708-.708L7.293 8 6.146 6.854a.5.5 0 0 1 0-.708z"/>
  <path d="M4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4zm0 1h8a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1z"/>
</svg></span>
                        Remove
                </a>
            </tr>

            <?php } ?> 
            
        </tbody>
        <tfoot>
            <th colspan="2" class="text-right">
                Total number : <span class="color-danger"><?php echo $total_count; ?>products</span>
            </th>
            <th colspan="4" class="text-right">
                Total Price : <span class="color-danger">$<?php echo $total_price; ?> </span>
            </th>
        </tfoot>
        
        </table>
        <a class="btn btn-primary" href="payment.php" role="button">Payment</a>
        <a href="clothes.php" class="btn btn-danger" >Back to shopping</a>
    </div>
    
</div>

    <?php }else { ?>
        <div class="alert alert-info">
            <strong>There is no product in basket. If you want to add something, <a href="clothes.php"> click</a></strong>
        </div>

    <?php } ?>
</div>
<hr>

        <script src="jquery-3.6.0.min.js"></script>
        <script src="cart.js"></script>
        
    </body>
</html>
