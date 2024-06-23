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




<div class="container" id="about">
    <h3>ABOUT</h3>
    <hr><p>A loja Waarka é uma empresa criada no ano de 2022 por três (3) estudantes do ensino médio que sonhavam e renovar e melhor o mercado virtual angolano, mais com passar do tempo 
      eles virão que não seria nada facíl o fazer, mais ainda sim eles não desistiram estudaram e aprenderam tudo aquilo que os ajudaria na criação do mesmo   projecto ,de início o 
      parecia tudo tão complicado e complexo mais com a determinação e persistência seis meses depois eles conseguiram criar o primeiro prótotico da Waarka, mais não havia sequer 
      atingido as expectativas criadas por eles, por motivos pessoais um dos membros da equipe de Desenvolveres (Divs) desiste e começa a trabalhar de maneira indivídual os dois restantes 
      não desistem e lutam afim de provar que aquela ideia um dia haveria de resultar, então após um ano de muito mais muito trabalho eles apresentem pela primeira vez a Waarka ao 
      mundo isso em 2024 e desde já, ela não só atingiu as expectativas mais também as superou, então nunca desista ! 
    </p>
    <hr>
    <div class="row" style="margin-top: 50px;">
    <div class="col-md-5 py-3 py-md-0">
        <div class="card">
                <img src="images/logo.jpg" alt="">
            </div>
        </div>
        <div class="col-md-7 py-3 py-md-0">
                <p>A história desta Loja começa como mais uma brincadeira de amigos, na real a ideia delas sempre foi vender mais não sabiam o quê ou como vender então após inumeros análises eles decidem que venderiam comidas online, mais virão que não haveria nem impacto nem lucrativadade então decidem pensar dentro da caixa, já que nós somos Informáticos seria melhor se agente comercializa-se máterias deste que conhece e utiliza então em 2023 eles tentão mais uma vez e ainda não era oque eles desejaram ou sonharam então era mais um motivo para se recomeçar, para evitar retrabalho e esforço desnecessário eles decidiram primeiro estabelecer tudo que eles queriam o Sistema fizessé neste caso a Loja, e para que contribuissem eles determinaram que cada um deveria se especializar ou doniminar uma certa área do projecto, fazendo a repartição de que fica com o Design (UI e UX) outro pegaria o Front-END (Html,CSS e JavaScript) e o último ficou com a responsabilidade de implementar e Back-END (Php, MySQL) que seria utilizado na realização do projecto. </p>
                <p>Passando assim entre cinco à seis meses depois um dos membros decide que já iria continuar a trabalhar naquele projecto, e assim os restantes membros respeitaram  e aceitaram a decidasão tomada, e marcando o membro para sempre eles decideram nunca trocar o nome do projecto até poderiam trocar a ideia de comercialização mais nunca pensariam em trocar o nome da Empresa porque é nele onde tudo começou e pra eles aquelas seis letras simbolizavam uma ideia génial numa grande geração, os dois membros sentiam que estavam cada vez mais perto de atingirem o que sempre criam, que pra eles era ter uma Loja Virtual funcionando então em Março de 2024 eles conseguem terminar o projecto de anos de trabalho com algumas funciinalidades novas que na real não constavam na ideia inícial mais que ao serem implementadas formam vistas como um sucesso, mais ela só foi vista a pública pela primeira vez em Abríl do mesmo ano, porque antes de ela ser observada por todos ela deveria passar inicíalmente pela fase de testes e assim e passou e hoje a grande loja que todos nós conhecemos </p>
         </div>    
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
            <p>Apartir dos seguintes links você pode nos contactar e expressar  dúvidas e sugestões.</p>

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



<a href="#" class="arrow"><h2>^</h2></a>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>