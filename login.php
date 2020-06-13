<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="adescription" content="Skin products store for Ecommerce for Advanced Web Class">
    <meta name="keywords" content="Skin Product, Skin Routine, Care, Beauty">
    <meta name="author" content="Victor Cardoso - 6930">
   
    <!-- Bootstrap reference -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/stylesheet.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    
    <title>Login Page</title>
</head>
    
    <body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">Ready Skin</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="signup.php">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="goShopping.php">Go Shopping</a>
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <br>
        
        <main>
            <div class="container text-center">
                <h1 style="color:Tomato;">Log In</h1>
            </div>
            
            
            <div class="container">
                <div class="d-flex justify-content-center">
                    <div class="row">
                <div class="col-md-9">
                    <!--displaying a message according to User status-->
                    <?php

                        if(isset($_SESSION['userId'])){
                            echo '<p class="login-status"> You are logged IN</p>';
                        }
                        else{
                            echo '<p class="login-status"> You are logged OUT</p>';
                        }

                    ?>
                            <!--Below we have the handler to show different button option according if the user is Logged in or if the user is logged out-->
                            <?php
                                //in case the user is LOGGE IN it will show the option to log out.
                                if(isset($_SESSION['userId'])){
                                    echo '<form action="includes/logout.inc.php" method="post"></form>
                                <button type="submit" name="logout-submit">Logout</button>
                                <a href="signup.php">Signup</a>';
                                }
                            else{

                                echo '<div class="container">';
                                //If the user is LOGGED OUT it will show the option to log in
                                echo '<form action="includes/login.inc.php" method="post">
                                <div class="row">
                                    <input type="text" name="mailuid" placeholder="Username/E-mail...">
                                </div>
                                <br>
                                <div class="row">
                                    <input type="password" name="pwd" placeholder="Password...">
                                </div>
                                <br>
                                <div class="row">
                                    <button type="submit" name="login-submit" class="button">LOGIN</button>
                                </div>
                                </form></div>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
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

        </main>

    </body>
</html>
