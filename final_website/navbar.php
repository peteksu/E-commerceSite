<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>SHOPPING</title>
        
        <link rel="stylesheet" href="bootstrap-4.6.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

    <?php
    session_start();
    if (isset($_SESSION["shoppingCart"])){

        $shoppingCart = $_SESSION["shoppingCart"];

        $total_count = $shoppingCart["summary"]["total_count"];
        $total_price = $shoppingCart["summary"]["total_price"];
        $shopping_products = $shoppingCart["products"];
    }else{
        $total_count = 0;
        $total_price = 0;
    }

?>
    <nav class="navbar bg-white navbar-expand-sm navbar-blue fixed-top">
        <div class="container">
            <a href="#" class="navbar-brand" style="color: rgb(209, 29, 134);">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
  <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828l.645-1.937zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.734 1.734 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.734 1.734 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.734 1.734 0 0 0 3.407 2.31l.387-1.162zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L10.863.1z"/>
</svg>    
             PETEK BOUTIQUE
            </a>
            <form class="d-flex " action="search.php" method="post" >
        <input class="form-control me-2" type="search" placeholder="Search product name" aria-label="Search" name="kelime">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

            <ul class="navbar-nav">

                <li class="nav-item">
                    <a href="index.php" class="nav-link ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
  <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg>
                        Home
                    </a>

                </li>
  <style>

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: #fdb515;
}

</style>
            
                <li class="nav-item">
                    <a href="clothes.php" class="nav-link " style="color:#AF1D0D;">
                        Clothes
                    </a>

                </li>

                <li class="nav-item">
                    <a href="shoes.php" class="nav-link " style="color:rgb(67, 175, 81);">
                        Shoes
                    </a>

                </li>
                <li class="nav-item">
                    <a href="accessory.php" class="nav-link " style="color:rgb(85, 65, 102);" >
                        Accessory
                    </a>

                </li>
                
                
                <li class="nav-item">
                    <a href="sign_in.php" class="nav-link active">
                        
                        Sign in
                    </a>
                </li>
                <li class="nav-item">
                    <a href="sign_up.php" class="nav-link active">
                        Sign up
                    </a>
                </li>
                <li class="nav-item">
                    <a href="profile.php" class="nav-link active">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>

                        
                    </a>
                </li>
                
                <li class="nav-item ">
                    <a href="shopping_cart1.php" class="nav-link active" >
                        <span class="glyphicon glyphicon-search"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
  <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
</svg></span>
                        <span class="active1"><?php echo $total_count; ?></span>

                    </a>
                </li>
                
            </ul>
        </div>
        
    </nav>
    <header>

<div class="jumbotron bg-WHİTE text-white">
    <div class="container" id="deneme">
        <div class="col-md-6 px-0">
            
            <h1 class="display-5 font-italic" style="color: rgb(54, 54, 54);">
                PETEK BOUTIQUE
            </h1>
            <p class="lead my-3" style="color: rgb(31, 29, 29);">
                NEW AND TRENDY!
            </p>
            <p class="lead mb-0" >
                <a href="clothes.php" class="text-grey font-weight-bold" > New season sales on all products!</a>
            </p>
        </div>
    </div>
</div>

</header>

<script src="jquery-3.6.0.min.js"></script>
        <script src="cart.js"></script>
        
          
    </body>




</html>