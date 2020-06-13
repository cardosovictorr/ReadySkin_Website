<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Skin products store for Ecommerce for Advanced Web Class">
        <meta name="keywords" content="Skin Product, Skin Routine, Care, Beauty">
        <meta name="author" content="Victor Cardoso - 6930">

        <!-- Bootstrap reference -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <!-- Custom styles -->
        <link rel="stylesheet" href="css/stylesheet.css">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
        <title>Sign Up Page</title>
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
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
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
        
        <main>
            <div class="container text-center">
                <h1 style="color:Tomato;">SignUp</h1>
            
                
                <?php
                /*
                // handling error message is not working properly, so I commented and will work on it later

                    if(isset($_GET['error'])){
                        if($_GET['error'] == "emptyfields"){
                            echo '<p class="signuperror">Fill in all fields!<p>';
                        }
                        else if($_GET['error'] == "invaliduidmail"){
                            echo '<p class="signuperror">Invalid username and email!</p>';
                        }
                        else if($_GET['error'] == "invaliduid"){
                            echo '<p class="signuperror">Invalid username!</p>';
                        }
                        else if($_GET['error'] == "invalidmail"){
                            echo '<p class="signuperror">Invalid e-mail!</p>';
                        }
                        else if($_GET['error'] == "passwordcheck"){
                            echo '<p class="signuperror">Password does not check! </p>';
                        }
                        else if($_GET['error'] == "usertaken"){
                            echo '<p class="signuperror">Username is already taken!</p>';
                        }
                    }
                    else if($_GET['signup'] == "success"){
                        echo '<p class="signuperror"> Signup Successfull</p>';
                    }
                    */
                ?>

                <div class="d-flex justify-content-center">
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-8">
                            <form action="includes/signup.inc.php" method="post">
                                <div class="row">
                                    <input type="text" name="uid" placeholder="Username">
                                </div>
                                <br>
                                <div class="row">
                                    <input type="text" name="mail" placeholder="E-mail">
                                </div>
                                <br>
                                <div class="row">
                                    <input type="password" name="pwd" placeholder="Password">
                                </div>
                                <br>
                                <div class="row">
                                    <input type="password" name="pwd-repeat" placeholder="Repeat Password">
                                </div>
                                <br>
                                <div class="row">
                                    <button type="submit" name="signup-submit" class="button">Signup</button>
                                </div>
                            </form>
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