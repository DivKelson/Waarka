<?php
include("db.php");

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
          <a class="navbar-brand" href="index_admin.php" id="logo"><img src="images/logo.jpg" alt="" id="lg">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span><img src="images/menu.png" alt="" width="30px"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index_admin.php">PRINCIPAL</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Ver_Produto.php">PRODUTO</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="compra.php">COMPRA</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="Ver_pagamento.php">PAGAMENTO</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- top navbar -->




        </div>
    </div>
  </div>
</div>
<!-- other cards -->

<hr widht="" align="center" size="" color="" noshade="">



<form action="#" method="POST">
<h2 align ="center" class="mb-4">Procurar Produto</h2>


<div align ="center" >

                    
<input id="procuraX" type="text" type="text" name="procuraX" placeholder="Digite o nome do produto" size="30" style="border-style: groove; vertical-align: text-top; text-align: center; width: 641px; font-family: 'Times New Roman', Times, serif; font-size: 20px; font-weight: 20; font-style: normal; height: 33px;" >
<!--<input id="btnBuscar" type="submit" value="PESQUISAR PRODUTO" Class="btn" name="btnBuscar"/>-->
<div class="btn"><button>PESQUISAR</button></a></div>                  
</div>                    






<?php
//if(empty($_POST['procuraX']))
//{
   // $procurar_Produto =$_POST['procuraX'];
 //print "Pesquisa o Produto "; return false;
//}
?>             
                         
<table class="table">
<tr>
<th>ID</th>
<th>PRODUTO</th>
<th>PREÇO</th>
<th>DESCRIÇÃO</th>
<th>IMAGEM</th>

</tr>


<?php

$consulta= "select * from Produtos where (nome like '%".$_POST['procuraX']."%')";

//$consulta= "select * FROM tb_produto where produto  LIKE %'$procurar_Produto'%'";

$resultado= mysqli_query($conn,$consulta);
while  ($row=mysqli_fetch_array($resultado))
{

    echo"<tr> <td>".$row['id_produto']."</td><td>".$row['nome']
    ."</td><td>".$row['preco']
    ."</td><td>".$row['descricao']
    ."</td><td><img src ='images/".$row['url_imagem']."' height='90px' width='90px'/></td><td>"
    ?>

    <td>

  
    </td>
    </tr>
    <?php
  
  }




?>





</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</form>

  
</body>
</html>
