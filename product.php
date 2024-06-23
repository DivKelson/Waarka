<?php
session_start();
require_once './app/databases/Database.php';
require_once './app/controllers/ProdutoController.php';


$database = Database::getConnect();
$produtoController = new ProdutoController($database);

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
            <span>|user:<?php echo $_SESSION['usuario_nome']; ?> |</span>
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
            <form class="d-flex" action="product.php" method="POST">
              <input class="form-control me-2" name="search_produto" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" name="search_name" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>
    <!-- top navbar -->




    


    <!--Product cards-->
    <div class="container" id="product-cards">
        <h1 class="text-center">PRODUCTS</h1>
        <div class="row" style="margin-top: 30px;">
        
        <?php 

          if(!isset($_POST['search_name'])):
        
            $produtos = $produtoController->listarProdutos();

            foreach ($produtos as $produto): ?>

            <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="images/<?php echo $produto->url_imagem; ?>" alt=""  height="200"  >
                            <div class="card-body">
                                <h3 class="text-center"><?php echo $produto->nome;?></h3>
                                <p class="text-center"><?php echo $produto->descricao;?></p>
                                <div class="star text-center">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                </div>
                                <div class="btn"><a href="pagamento.php?id_produto=<?php echo $produto->id_produto;?>"><button>Shop Now</button></a></div>
                                <h2 class="text-center">$<?php echo $produto->preco;?> <span><i class="fa-solid fa-cart-shopping"></i></span></h2>
                            </div>
                        </div>
                    </div>

        <?php endforeach; else: ?>
        <?php 
            $searchProduto = $_POST['search_produto'];
            $produtosFiltrados = $produtoController->obterProdutosPorNome($searchProduto);
          
          ?>

          <?php if($produtosFiltrados): 
              foreach ($produtosFiltrados as $produtoFiltrado): ?>
            
              <div class="col-md-3 py-3 py-md-0">
                        <div class="card">
                            <img src="images/<?php echo $produtoFiltrado->url_imagem; ?>" alt="">
                            <div class="card-body">
                                <h3 class="text-center"><?php echo $produtoFiltrado->nome;?></h3>
                                <p class="text-center"><?php echo $produtoFiltrado->descricao;?></p>
                                <div class="star text-center">
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                    <i class="fa-solid fa-star checked"></i>
                                </div>
                                <div class="btn"><a href="pagamento.php?id_produto=<?php echo $produtoFiltrado->id_produto;?>"><button>Shop Now</button></a></div>
                                <h2 class="text-center">$<?php echo $produtoFiltrado->preco;?> <span><i class="fa-solid fa-cart-shopping"></i></span></h2>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; else: ?>
                      <p>Não temos produtos com este nome!</p>

                    <?php endif; endif;?>
       
       
  </div>
</div>

<!-- offer -->
<div class="container" id="offer">
<div class="row">
    <div class="col-md-3 py-3 py-md-0">
        <i class="fa-solid fa-cart-shopping"></i>
        <h3>Frete Grátis</h3>
        <p>Encomenda superior a $15000kz</p>
    </div>
    <div class="col-md-3 py-3 py-md-0">
        <i class="fa-solid fa-rotate-left"></i>
        <h3>Devoluções Grátis</h3>
        <p>No prazo de 30 dias</p>
    </div>
    <div class="col-md-3 py-3 py-md-0">
        <i class="fa-solid fa-truck"></i>
        <h3>Entrega Rápida</h3>
        <p>A nível nacional</p>
    </div>
    <div class="col-md-3 py-3 py-md-0">
        <i class="fa-solid fa-thumbs-up"></i>
        <h3>Grande escolha</h3>
        <p>De produtos</p>
    </div>
</div>
</div>
<!-- offer -->


  <!-- newslater -->
  <div class="container" id="newslater">
    <h3 class="text-center">Inscreva-se na Loja Waarka para mais actualização.</h3>
    <div class="input text-center">
        <input type="text" placeholder="Enter Your Email...">
        <button  class="btn" id="subscribe">SUBSCRIBE</button>
    </div>
</div>
<!-- newslater -->

<!-- footer -->
<footer  id="footer">

<DIV align="CENTER">
<h3 class="BTN">PRODUTOS EM PROMOÇÃO</h3>
 </DIV>
   <div class="footer-top">
    <div class="container">

        <div class="row">
      
            <div class="col-lg-3 col-md-6 footer-contact">
                <h3>Computadores</h3>
                <img src="images/destaques1-removebg-preview.png" alt=""widht="30" height="150" > 
           
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Samsung</h4>
                <img src="images/destaques2-removebg-preview.png" alt=""widht="30" height="150" > 
        
            </div>

          

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Smart Watch</h4>
                <img src="images/destaques3-removebg-preview.png" alt=""widht="30" height="150" > 
       
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Tablet Apple</h4>
                <img src="images/destaques4-removebg-preview.png" alt=""widht="30" height="150" > 
               
         
            
            </div>
            
            
        </div>
    </div>
   </div>
   <hr>
   <div class="container py-4">
    <div class="copyright">
        &copy; Copyright <strong><span>Electronic Shop</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Empresa <a href="#"> Loja Waarka</a>
    </div>
   </div>
</footer>
<!-- footer -->


<h5 align="center">Loja Waarka, localizado em Angola Provincia de Luanda, Minicipio de Viana, Phone:</small> +244 954 843 646, Email:</small> Waarkashop@gmail.com </h5> <br>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>