<?php
session_start();
$_SESSION["uid"]="123";
include "db.php";
if(isset($_POST["category"])){
$cat_sql="SELECT * FROM category ORDER BY id ";
$C_results= mysqli_query($connection,$cat_sql);
if(mysqli_num_rows($C_results) > 0){
    echo "<ul class='list-group list-group-flush'><h4>Filter Poducts</h4>";
    while($row = mysqli_fetch_array($C_results)){
      $cat_id = $row["id"];
      $cat_title = $row["cat_title"];
      echo "<li class='list-group-item '><a href='#' class='category' cid='$cat_id' >$cat_title</a></li>";
     
  }   
  } echo "</ul>";
}

/* The below code will select the products and display them in random way on the shopping page
*/


if(isset($_POST["products"])){
    
      $prod_sql="SELECT * FROM products ORDER BY RAND() LIMIT 0,12";

$P_results= mysqli_query($connection,$prod_sql);
if(mysqli_num_rows($P_results) > 0){
    while($row = mysqli_fetch_array($P_results)){
        $prod_id = $row["idProd"];
        $prod_category = $row["categoryProd"];
        $prod_volume = $row["volumeProd"];
        $prod_title = $row['titleProd'];
        $prod_price = $row["priceProd"];
        $prod_description = $row["descriptionProd"];
        $prod_image = $row["imageProd"];
        $prod_brand= $row["brandProduct"];
        echo "
       
    
      <div class='col-md-4' data-keywords='$prod_brand'>
                    <div class='panel panel-success'>
                      <div class='panel-heading description'>$prod_title</div>
                        <div class='panel-body' style=' height: 200px; overflow: hidden;'>
                        <a href='product_page.php?prod_id={$prod_id}'  class='each_product' ><img src='images/$prod_image'  class='img-thumbnail'/></a></div>
                         <div class='panel-heading'>$$prod_price
                          <button style='float:right;'  class='btn btn-danger btn-xs add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
                        </div>
                    </div>    
            </div>
       
      ";
  }   
    
}
}

/*** the below code is to
 ** filter products by category
 ** display individual product
  ***/

if(isset($_POST["categories"])){
     $cid = $_POST["cat_id"];
   
     //select products based on specific category id
       $sql="SELECT * FROM products WHERE categoryProd ='$cid'";
        
    
    $results= mysqli_query($connection,$sql);
    
     while($row = mysqli_fetch_array($results)){
         $prod_id = $row["idProd"];
         $prod_category = $row["categoryProd"];
         $prod_volume = $row["volumeProd"];
         $prod_title = $row['titleProd'];
         $prod_price = $row["priceProd"];
         $prod_description = $row["descriptionProd"];
         $prod_image = $row["imageProd"];
         $prod_brand= $row["brandProduct"];
         
         echo "
       
    
      <div class='col-md-4' data-keywords='$prod_brand'>
                    <div class='panel panel-danger'>
                      <div class='panel-heading description'>$prod_title</div>
                        <div class='panel-body' style=' height: 200px; overflow: hidden;'>
                            <a href='#'  class='each_product' >
                            <img src='images/$prod_image'  class='img-thumbnail'/></a></div>
                            <div class='panel-heading'>$$prod_price
                            <button style='float:right;'  class='btn btn-dark btn-xs add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
                        </div>
                    </div>    
            </div>
       
      "; 
         
     }
         
}


/***  
****the below code is for 
 ** search for a keyword
 ** filter products by category
  ***/

if(isset($_POST["categories"]) || isset($_POST["search_keyword"])){
    if(isset($_POST["categories"])){
        $cid = $_POST["cat_id"];
    // category ID for all option
       if($cid ==6 || isset($_POST["products"])){        //select all products
       $sql="SELECT * FROM products ORDER BY RAND() LIMIT 0,12";  
       }else{
     //select products based on specific category id
       $sql="SELECT * FROM product WHERE categoryProd ='$cid'";
      }
      } else{
         if(isset($_POST["search_key"])){
          $search_wd = $_POST["search_key"];
          $sql="SELECT * FROM products WHERE keyWord LIKE '%$search_wd%'";
        }}
    
    $results= mysqli_query($connection,$sql);
    
     while($row = mysqli_fetch_array($results)){
         $prod_id = $row["idProd"];
         $prod_category = $row["categoryProd"];
         $prod_volume = $row["volumeProd"];
         $prod_title = $row['titleProd'];
         $prod_price = $row["priceProd"];
         $prod_description = $row["descriptionProd"];
         $prod_image = $row["imageProd"];
         $prod_brand= $row["brandProduct"];
         $prod_keyword= $row["keyWord"];
         
         
         
         echo "
         <div class='col-md-4' data-keywords='$prod_brand'>
                    <div class='panel panel-danger'>
                      <div class='panel-heading description'>$prod_title</div>
                        <div class='panel-body' style=' height: 200px; overflow: hidden;'>
                            <a href='#'  class='each_product' >
                            <img src='images/$prod_image'  class='img-thumbnail'/></a></div>
                            <div class='panel-heading'>$$prod_price
                            <button style='float:right;'  class='btn btn-dark btn-xs add_product' pid='$prod_id' id='$prod_id'>Add To Cart</button>
                        </div>
                    </div>    
            </div>
         
         
         ";
     
     }
}



////////////////// Add products to shopping cart /////////////////////////////


   
    if(isset($_POST["addproduct"])){  
     
    $p_id=$_POST["ProId"];
    $user_id=$_SESSION["uid"];
    
    $sql = "SELECT * FROM cart WHERE idProd ='$p_id' AND idUsers='$user_id'";
        
    $results= mysqli_query($connection,$sql); 
    $count = mysqli_num_rows($results);
       
    if($count > 0){
        echo "Product added already ...";
    }else{
         $sql = "SELECT * FROM products WHERE idProd ='$p_id'";
         $results= mysqli_query($connection,$sql); 
         $row = mysqli_fetch_array($results);
       
         $id= $row["idProd"];
         $title= $row["titleProd"];
         $description= $row["descriptionProd"];
         $price= $row["priceProd"];
         $image= $row["imageProd"];
         $qty = 1;
         $total_price = $price*$qty;
         $sql_insert = " INSERT INTO `cart` (`quantity`, `price`, `totalPrice`, `idProd`, `titleProd`, `imageProd`, `idUsers`) VALUES ('$qty', '$price', '$total_price', '$id', '$title', '$image', '$user_id')";
          
        if($execute =mysqli_query($connection,$sql_insert)){
             echo "Product Added to cart.";
         } else {
               echo mysqli_error($connection);
          }
    
    }
    }


///////Display cart /////////

if(isset($_POST["displayCart"])){
$user_id=$_SESSION["uid"];
  $prod_sql="SELECT * FROM cart WHERE idUsers='$user_id'";

$P_results= mysqli_query($connection,$prod_sql);
if(mysqli_num_rows($P_results) > 0){
    while($row = mysqli_fetch_array($P_results)){
        $product = $row["titleProd"];
        echo $product;
        $price = $row["price"];
        echo $price;
        $quantity = $row["quantity"];
        echo $quantity;
        $totalPrice = $row["totalPrice"];
        echo $totalPrice."<br/>";

  }   
    
}
}


?>