<!DOCTYPE html>
<html>
    <head>
        <title>Ready Skin </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Skin products store for Ecommerce for Advanced Web Class">
        <meta name="keywords" content="Skin Product, Skin Routine, Care, Beauty">
        <meta name="author" content="Victor Cardoso - 6930">
        
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="myscript.js"></script>
    </head>
    
    <body>
        
        
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
                    <li><a href="cart.php">Cart</a></li>
                    <li>
                    <form class="form-inline" id="search_form" >
                       <div class="form-group mb-2">
                            <input type="text" class="form-control" name="search" id="search" placeholder="Search for...">
                            <button id="k_search" class="btn btn-primary mb-2" >Search</button>
                      </div>
                    </form>
                        </li>
                    <!--
                    <li style="width:300px;left:10px;top:10px;"><input type="text" class="form-control" id="search" name="search" placeholder="Search"></li>
                    <li style="left:2px;top:10px;">
                        <a href="#" class="btn btn-outline-primary" id="k_search"><span class="glyphicon glyphicon-search"></span> Search 
                        </a>         
                    </li>
                    -->
                </ul>
                
            </div>
        </nav>
        
        <p><br></p>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-2">
                    <div id="cat_div" class="nav nav-pills nav-stacked">
        
                        <!--categories displayed here -->  
           
                    </div>
        
                </div>
                <div class="col-md-8">
                            <div id="products_info"></div>
             
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                </div>
        
        
        <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Ready Skin 2020</p>
        </div>
            
        <div class="container ">
            <div class="m-0 text-center">
                <pre><p><i class="fa social fa-facebook"></i> <a href="https://www.facebook.com/">Facebook </a></p></pre>


                <pre><p><i class="fa social fa-twitter"></i><a href="https://twitter.com/explore">Twitter</a></p></pre>


                <pre><p><i class="fa social fa-instagram"></i><a href="https://www.instagram.com/?hl=pt">Instagram</a></p></pre>
            </div>
            
            
            
        </div>
        
        
            <!-- /.container -->
    </footer>
    </body>
</html>