<?php
include "connect2.php";
session_start();

function addToCart($product_item){
    if(isset($_SESSION["shoppingCart"])){
        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];
    }else{
        $products = array();
    }
//adet kontrolıü
    if(array_key_exists($product_item->ID, $products)){
        $products[$product_item->ID]->count++;
    }else{
        $products[$product_item->ID] = $product_item;
    }
//sepetin hesaplanması
    $total_price = 0;
    $total_count = 0;

    foreach ($products as $product){
        $product->total_price=$product->count * $product->price;
        $total_price = $total_price + $product->total_price;
        $total_count += $product->count;
    }

    $summary["total_price"] = $total_price;
    $summary["total_count"] = $total_count;
    
    $_SESSION["shoppingCart"]["products"]=$products;
    $_SESSION["shoppingCart"]["summary"]=$summary;

    return $total_count; 
}
function removeFromCart($product_id){
    if(isset($_SESSION["shoppingCart"])){
        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];

        //ürünü sepetten çıkar
        if(array_key_exists($product_id, $products)){
            unset($products[$product_id]);
        }
        //tekrar sepeti hesapla
        $total_price = 0;
        $total_count = 0;

        foreach ($products as $product){
            $product->total_price=$product->count * $product->price;
            $total_price = $total_price + $product->total_price;
            $total_count += $product->count;
        }
        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;
    
        $_SESSION["shoppingCart"]["products"]=$products;
        $_SESSION["shoppingCart"]["summary"]=$summary;

        return true;
    }
}
function incCount($product_id){

    if(isset($_SESSION["shoppingCart"])){
        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];

        //adet kontrolü
    
        if(array_key_exists($product_id, $products )){
            $products[$product_id]->count++;
        }

        //sepetin hesaplanması
        $total_price = 0;
        $total_count = 0;

        foreach ($products as $product){
            $product->total_price=$product->count * $product->price;
            $total_price = $total_price + $product->total_price;
            $total_count += $product->count;
        }

        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;
    
    
        $_SESSION["shoppingCart"]["products"]=$products;
        $_SESSION["shoppingCart"]["summary"]=$summary;

        return true;
    }

}
function decCount($product_id){
    if(isset($_SESSION["shoppingCart"])){
        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart["products"];

        //adet kontrolü
    
        if(array_key_exists($product_id, $products )){
            $products[$product_id]->count--;
        }
        if($products[$product_id]->count==0){
            unset($products[$product_id]);

        }

        //sepetin hesaplanması
        $total_price = 0;
        $total_count = 0;
        foreach ($products as $product){
            $product->total_price=$product->count * $product->price;
            $total_price = $total_price + $product->total_price;
            $total_count += $product->count;
        }

        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;
    
    
        $_SESSION["shoppingCart"]["products"]=$products;
        $_SESSION["shoppingCart"]["summary"]=$summary;

        return true;
    }

}
if(isset($_POST["p"])){
    $islem = $_POST["p"];

    if($islem == "addToCart"){
        $id = $_POST["product_id"];
        $product = $connection->query("SELECT * FROM clothes WHERE ID={$id}", PDO::FETCH_OBJ)->fetch();
        $product->count=0;

        echo addToCart($product);
        
        
    }else if($islem == "removeFromCart"){
        $id = $_POST["product_id"];
        echo removeFromCart($id);
    }
}
if(isset($_GET["p"])){

    $islem = $_GET["p"];

    if($islem == "incCount"){

        $id =$_GET["product_id"];
        if(incCount($id)){
            header("Location:shopping_cart1.php");
        }

    }else if($islem == "decCount"){

        $id =$_GET["product_id"];
        if(decCount($id)){
            header("Location:shopping_cart1.php");
        }
    }
}