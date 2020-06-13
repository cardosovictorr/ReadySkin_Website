

<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Skin products store for Ecommerce for Advanced Web Class">
        <meta name="keywords" content="Skin Product, Skin Routine, Care, Beauty">
        <meta name="author" content="Victor Cardoso - 6930">
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="myscript.js"></script>
    </head>

<body>
 <body>
    <!-- Navigation -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php" >Ready Skin</a>
                </div>
                <ul class="nav navbar-nav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="goShopping.php">Go Shopping</a></li>
                    <li><a href="login.php">Log In</a></li>
                    <li><a href="signup.php">SignUp</a></li>
                    <li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name="search" placeholder="Search"></li>
                    <li style="left:2px;top:10px;">
                        <a href="#" class="btn btn-outline-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span> Search 
                        </a>         
                    </li>
                </ul>
            </div>
        </nav>

        <p><br></p> 
<p><br></p>
<p><br></p>
<p><br></p>
 <div class="container-fluid">
  <div class="row">
    <div class="col-md-1"></div>
      <div class="col-md-2">
       <div id="cat_div" class="nav nav-pills nav-stacked">
        
           <!--categories displayed here -->  
           
        </div>
        <div id="size_div" class="nav nav-pills nav-stacked">
           <!-- <li><a href="#"><h4>Shop By Size</h4></a></li>
            <li><a href="#">Small</a></li>
            <li><a href="#">Medium</a></li>
            <li><a href="#">Large</a></li>
            <li><a href="#">Oversized</a></li>-->
            
        </div>
      </div>
      <div class="col-md-8">
          <div class="panel panel-default">
           <!-- <div class="panel-heading">Photography Artwork</div>-->
            <div class="panel-body">

                
    <?php 
       include "db.php";
        $search_results ="";
        if(isset($_GET["search"])){
        $search_wd = $_GET["search"];

        $sql="SELECT * FROM product  WHERE key_words LIKE '%$search_wd%'";

        $results= mysqli_query($connection,$sql);
         if(mysqli_num_rows($results) > 0){
            while($row = mysqli_fetch_array($results)){
               $prod_id = $row["idProd"];
               $prod_category = $row["categoryProd"];
               $prod_size = $row["volumeProd"];
               $prod_price = $row["priceProd"];
               $prod_description = $row["descriptionProd"];
               $prod_image = $row["imageProd"];
               $search_results.= "

              <div class='col-md-4'>
                            <div class='panel panel-default'>
                              <div class='panel-heading'>$prod_description</div>
                                <div class='panel-body' style=' height: 200px; overflow: hidden;'><a href='Images/$prod_image' 'class='each_product' pid='$prod_id' id='$prod_id' data-fancybox><img src='Images/$prod_image'  class='img-thumbnail' /></a></div>
                                 <div class='panel-heading'>$$prod_price 
                                  <button style='float:right;' class='btn btn-info btn-xs'>Add To Cart</button>
                                </div>
                            </div>    
                    </div>



              ";
          }   

        }   
        }
?>
                <div id="products_info"> </div>
               
                
          </div>
      
      </div>
     
      <div class="col-md-1"></div>
  </div>  
 </div>    
</div>  
  <!--  <script>
        $(window).load(function(){
        $('img').on('click', function(){
            var img-src=$(this).attr('src');
            alert(img-src);
        });
        });
    </script>-->
</body>

</html>