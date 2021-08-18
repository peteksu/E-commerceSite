$(document).ready(function (){
    $(".butonlar").click(function() {
        var url = "http://localhost/final_website/cart_db.php";
        var data ={
        p:"addToCart",
        product_id : $(this).attr("product-id")
        }

        $.post(url,data,function(response){
            $(".active1").text(response);
            console.log(response);
        })
    })

    $(".removeFromCartBtn").click(function() {
        var url = "http://localhost/final_website/cart_db.php";
        var data ={
        p:"removeFromCart",
        product_id : $(this).attr("product-id")
        }

        $.post(url,data,function(response){
            window.location.reload();
        })
    })
})






