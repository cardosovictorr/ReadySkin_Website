<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Skin products store for Ecommerce for Advanced Web Class">
    <meta name="keywords" content="Skin Product, Skin Routine, Care, Beauty, SHampoo, COnditioner, Laroche, Natura Siberica">
    <meta name="author" content="Victor Cardoso - 6930">    
   
    <!-- Bootstrap reference -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/script.js"></script>
    
    <title>HOME PAGE</title>
</head>
   
<body id="page-top">
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
    
    <img src="images/painted_ground.jpg" class="img-fluid" alt="Home Page Image - Pastle Clock">
    
    <header class="bg-info text-white">
        <div class="container text-center">
            <h1>Ready Skin</h1>
            <p class="lead">The Beauty Connection</p>
            <p> Skin Care is a growing topic in our everyday life, but not just basic care, we are getting more worried about routines and what kind of product should we use and also how to use them. 
            </p>
            <br>
            <p> Ready Skin propose to sell Skin Care renowned brands, but we have current information from profissional from the area. We will do than connect you with the best product, we are going to help you to make our care routine easy and fun.</p>
            <br>
        </div>
    </header>
   
    <! How to use the website section>
   
    <section id="howToUse">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h2>How to start your Routine</h2>
                    <p class="lead">Follow the easiest step below and be Ready!</p>
                    <ul>
                        <li>Sign Up to Ready Skin</li>
                        <li>Find the best products in our Store</li>
                        <li>Find useful information and easy Routines to follow</li>
                        <li>Start/keep your Routine</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
   
    <section id="carouselHomePage">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/Colorful%20Eye%20Makeup.jpg" alt="Primeiro Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/makeup_cosmopolitan_Looks.jpg" alt="Segundo Slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/skincare_routine_Looks.jpg" alt="Terceiro Slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>
    
    
    </section>
   
    <section id="contact">
        <div class="container">
            <div style="text-align:center">
                <h2>SEND US A REVIEW</h2>
                <p> Leave us a message:</p>
            </div>
            <form action="includes/contact.inc.php" method="post">
                <input class="row" type="text" name="name-contact-form" placeholder="Your name...">
                <br>
                <input class="row" type="text" name="mail-contact-form" placeholder="Your email">
                <br>
                <input class="row" type="text" name="subject-contact-form" placeholder="Subject...">
                <br>
                <textarea class="row" name="message-contact-form" placeholder="Your message goes here..." style="width:400px"></textarea>
                <br>
                <button class="row" type="submit" name="submit-contact-form">SEND EMAIL</button>
                <br>
            </form>
        </div>
    </section>
   
    <!-- Footer -->
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
   
<script>
    $(document).ready(function(){
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip(); 
        
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                
                // Prevent default anchor click behavior
                event.preventDefault();
                
                // Store hash
                var hash = this.hash;
                // Using jQuery's animate() method to add smooth page scroll
                // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 900, function(){
   
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            } // End if
        });
    })
</script>

</body>
</html>