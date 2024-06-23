<?php
  require_once './app/databases/database.php';
  require_once './app/controllers/UsuarioController.php';

  $conexao = Database::getConnect();
  $usuarioController = new UsuarioController($conexao);

  if(isset($_POST['btnRegister'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
  
    $retorno = $usuarioController->criarUsuario($nome, $email, $senha, $telefone);

      if(!$retorno) {
        header('location: register.php?erroRegister');
        die();
      }

      header('location: login.php');
    } 


?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="estilo.css">
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
        <div class="icons">
            <a href="login.php"><img src="./images/register.png" alt="" width="18px">login</a>
        </div>
    </div>
    <!-- top navbar -->

    <!-- top navbar -->
    <nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
        <a class="navbar-brand" href="" id="logo"><img src="images/logo.jpg" alt="" id="lg">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Product</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- top navbar -->




    <div class="container" id="login">
    <div class="row">
        <div class="col-md-5 py-3 py-md-0" id="side1">
            <h3 class="text-center">BEM-VINDO</h3>
        </div>
        <div class="col-md-5 py-3 py-md-0" id="side2">
            <h3 class="text-center">Criar Conta</h3>
            <p class="text-center">Crie já a sua conta e usuflua dos nossos produtos </p>
            <div class="input2 text-center">
              <form action="" method="POST">
                <input type="text" placeholder="Name" name="nome">
                <input type="number" placeholder="Phone" name="telefone">
                <input type="email" placeholder="Email" name="email">
                <input type="password" placeholder="Password" name="senha">
             
                <input type="submit" name="btnRegister" value ="Registrar">
                </div>
           
                <?php if(isset($_GET['erroRegister']) && $_GET['erroRegister'] == 'usuario_existe'): ?>
                  <p class="text-center text-danger">Este email já existe!</p>
                <?php endif; ?>

                <?php if(isset($_GET['erroRegister']) && $_GET['erroRegister'] == 'dados_invalidos'): ?>
                  <p class="text-center text-danger">Dados inválidos, preencha corretamente!</p>
                <?php endif; ?>
                </div>
                
              </form>
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
                <h4>Nossas Redes Socias</h4>
                <p>Apartir dos seguintes links você pode nos conatactar e expressar  dúvidas e sugestões.</p>

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



<a href="#" class="arrow"><i><img src="images/" alt=""></i></a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>