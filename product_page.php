<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Skin products store for Ecommerce for Advanced Web Class">
        <meta name="keywords" content="Skin Product, Skin Routine, Care, Beauty">
        <meta name="author" content="Victor Cardoso - 6930">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="myscript.js"></script>
    </head>

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
                    <li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name="search" placeholder="Serach"></li>
                    <li style="left:2px;top:10px;">
                        <a href="#" class="btn btn-outline-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span> Search 
                        </a>         
                    </li>
                </ul>
            </div>
        </nav>

        <p><br></p>
        
        <div class="container-fluid">
            <div class="row">
               <div class="col-md-8">
                   <div>
                       <?php
                        include "db.php";

                        //var_dump($_GET);exit;
                        //isset($_GET["prod_id"])?$_GET["prod_id"]:null;
                        $pid = $_GET["prod_id"];



                        //select products based on specific product id
                            $sql="SELECT * FROM products WHERE idProd ='$pid'";
                            $product = $connection->query($sql)->fetch_assoc();

                                if(!$product){
                                    echo "Product Not find!!";exit;

                                }

                                 $prod_id = $product["idProd"];
                                 $prod_category = $product["categoryProd"];
                                 $prod_volume = $product["volumeProd"];
                                 $prod_title = $product['titleProd'];
                                 $prod_price = $product["priceProd"];
                                 $prod_description = $product["descriptionProd"];
                                 $prod_image = $product["imageProd"];
                                 $prod_brand= $product["brandProduct"];

                              echo "

                              <div class='col-md-10'>
                                <div class='panel panel-default'>
                                    <div class='panel-heading'>$prod_description</div>
                                        <div class='panel-body' style=' height: auto; overflow: hidden;'><img class='img-responsive' src='images/$prod_image'/></div>
                                            <div class='panel-heading'>$prod_price 
                                            <button style='float:right;' class='btn btn-info btn-xs'>Add To Cart</button>
                                            </div>
                                        </div>    
                                    </div>
                                    ";
                             ?>
                   </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div> 
        

    
    </body>


    
    </html>