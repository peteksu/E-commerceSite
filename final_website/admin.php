 
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

echo '
<div class="container">
          <h2 style="color: rgb(40, 112, 194);">Create Admin</h2>
          <form action="create_admin.php" method ="post">
            
            <div class="form-group">
              <label >Username</label>
              <input type="text" class="form-control"  placeholder="Username" name="Username_admin">
            </div>
            <div class="form-group">
              <label >Email</label>
              <input type="text" class="form-control"  placeholder="Email" name="Email_admin">
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="text" class="form-control"  placeholder="password" name="pw_admin">
              </div>
              
            
              <input style="background-color: dodgerblue; color: white; padding: 12px 30px;
                border: 1px ;" type="submit" value="Create Admin" /></a>
          </form>
        </div>


        <br>
        <br>
        <div class="container">
          <h2 style="color: rgb(40, 112, 194);">Create Product</h2>
          <form action="create_product.php" method ="post">
            
            <div class="form-group">
              <label >Product Name</label>
              <input type="text" class="form-control"  placeholder="product name" name="clothes_name">
            </div>
            <div class="form-group">
              <label >Property</label>
              <input type="text" class="form-control"  placeholder="property" name="property">
            </div>
            <div class="form-group">
                <label >Price</label>
                <input type="text" class="form-control"  placeholder="price" name="price">
              </div>
              <div class="form-group">
                <label >Image name</label>
                <input type="text" class="form-control"  placeholder="image name" name="image_name">
              </div>
            
              <input style="background-color: dodgerblue; color: white; padding: 12px 30px;
                border: 1px ;" type="submit" value="Create Product" /></a>
          </form>
        </div>
        
		

        
        
<br>
<br>
<br>

        <div class="container">
          <h2 style="color: rgb(40, 112, 194);">Delete Product</h2>
          <form action="delete_product.php" method ="post">
            
            <div class="form-group">
              <label >Product Name</label>
              <input type="text" class="form-control"  placeholder="The name of the product you want to delete" name="clothes_name">
            </div>
            <div class="form-group">
              <label >Property</label>
              <input type="text" class="form-control"  placeholder="property" name="property">
            </div>
            <div class="form-group">
                <label >Price</label>
                <input type="text" class="form-control"  placeholder="price" name="price">
              </div>
              <div class="form-group">
                <label >Image name</label>
                <input type="text" class="form-control"  placeholder="image name" name="image_name">
              </div>
            
              <input style="background-color: dodgerblue; color: white; padding: 12px 30px;
                border: 1px ;" type="submit" value="Delete Product" /></a>
          </form>
        </div>
        <br>
        <br>


        <div class="container">
          <h2 style="color: rgb(40, 112, 194);">Update Product</h2>
          <form action="update_product.php" method ="post">
            
            <div class="form-group">
              <label >Product Name</label>
              <input type="text" class="form-control"  placeholder="the name of the product you want to update" name="clothes_name">
            </div>
            <div class="form-group">
              <label >Property</label>
              <input type="text" class="form-control"  placeholder="Enter new property" name="property">
            </div>
            <div class="form-group">
                <label >Price</label>
                <input type="text" class="form-control"  placeholder="Enter new price" name="price">
              </div>
              <div class="form-group">
                <label >Image name</label>
                <input type="text" class="form-control"  placeholder="Enter new image name" name="image_name">
              </div>
            
              <input style="background-color: dodgerblue; color: white; padding: 12px 30px;
                border: 1px ;" type="submit" value="Update Product" /></a>
          </form>
        </div>
        <br>
        <br>
        <br>

        

        ';
     
     echo "<a href=\"logout.php\" class=\"btn btn-danger\">Log out </a>";
     } ?>
     
        





        
        <script src="jquery-3.6.0.slim.js"></script>
        <script src="cart.js"></script>
        
        <?php include "footer.php"; ?>
          
    </body>




</html>
