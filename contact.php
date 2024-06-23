<?php
session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Boostrap links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Boostrap links -->
    <link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
</head> 
<body>
    <!-- top navbar -->
    <div class=" top-navbar">
        <p></p>
        <?php if(isset($_SESSION['usuario_logado'])): ?>
          <div class="icons">
            <span>-><?php echo $_SESSION['usuario_nome']; ?> |</span>
            <a href="logout.php">Terminar Sessão</a>
          </div>
        <?php else: ?>
          <div class="icons">
            <a href="login.php"><img src="./images/register.png" alt="" width="18px">Login</a>
            <a href="register.php"><img src="./images/register.png" alt="" width="18px">Register</a>
          </div>
        <?php endif; ?>
    </div>
    <!-- top navbar -->

    <!-- top navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php" id="logo"><img src="images/logo.jpg" alt="" id="lg">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="product.php">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- top navbar -->



<div class="container" id="contact">
    <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-phone">Phone</i>
                <h6>+244 954 843 646</h6>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-envelope">Email</i>
                <h6>Lojawaarka@gmail.com</h6>
            </div>
        </div>
        <div class="col-md-4 py-3 py-md-0">
            <div class="card">
                <i class="fas fa-location-dot">Address</i>
                <h6>Angola Luanda Viana</h6>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top: 30px;">
      <div class="col-md-4 py-3 py-md-0">
        <input type="text" class="form-control form-control" placeholder="Name">
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <input type="text" class="form-control form-control" placeholder="Email">
      </div>
      <div class="col-md-4 py-3 py-md-0">
        <input type="text" class="form-control form-control" placeholder="Phone">
      </div>
      <div class="form-group" style="margin-top: 30px;">
        <textarea class="form-control" id="" rows="5" placeholder="Message"></textarea>
      </div>
      <div class="messagebtn text-center"><button>Message</button></div>
    </div>
</div>






<!-- footer -->
<footer  id="footer">
   <div class="footer-top">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Loja Waarka</h3>
                <p>
                    Angola <br>
                    Luanda <br>
                    Viana <br>                                                                                   
                </p>
                <strong>Phone:</strong> +244 954 843 646 <br>
                <strong>Email:</strong> Waarkashop@gmail.com <br>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Links Úteis</h4>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us </a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policey </a></li>
                </ul>
            </div>

          

            <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossos Produtos</h4>

            <ul>
                <li><a href="">Iphone</a></li>
                <li><a href="">Computadores</a></li>
                <li><a href="">Laptop</a></li>
                <li><a href="">Android</a></li>
                <li><a href="">Electrodomésticos</a></li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nossas Redes Sociais</h4>
            <p>Apartir dos seguintes links você pode nos contactar e expressar dúvidas e  sugestões.

                <div class="socail-links mt-3">
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-skype"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                </div>
            
            </div>
            
            
        </div>
    </div>
   </div>
   <hr>
   <div class="container py-4">
    <div class="copyright">
        &copy; Copyright <strong><span>Loja Waarka</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="#">SA coding</a>
    </div>
   </div>
</footer>
<!-- footer -->



<a href="#" class="arrow"><h2></h2></a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>