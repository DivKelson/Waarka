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
<h2 align ="center" class="mb-4">Visualizar Pagamento</h2>


       
                   
<table class="table">
<tr>
<th>ID</th>
<th>CLIENTE</th>
<th>VALOR</th>
<th>DATA</th>
<th>PAGAMENTO</th>



</tr>


<?php

$consulta= " select t1.idpagamento as 'ID', t2.nome as 'CLIENTE', T1.VALOR, T1.DATA, 'PAGAMENTO' ' CONFIRMADO' FROM pagamento as t1 JOIN usuarios as t2 on t2.telefone=t1.telefone ";

//$consulta= "select * FROM tb_produto where produto  LIKE %'$procurar_Produto'%'";

$resultado= mysqli_query($conn,$consulta);
while  ($row=mysqli_fetch_array($resultado))
{

    echo
     "<tr> <td>".$row['ID']
    ."</td><td>".$row['CLIENTE']
    ."</td><td>".$row['VALOR']
    ."</td><td>".$row['DATA']

    ."</td><td>".$row['PAGAMENTO']
    ?>

    </tr>
    <?php
  
  }




?>





</table>


<B>
<I>
<U>
TOTAL DOS PAGAMENTO CONFIRMADOS

</B>
</I>
</U>
<table class="table">
<tr>
<th>Valor expresso em Kwanza</th>

</tr>


<?php

$consulta= "select SUM( T1.VALOR) AS TOTAL FROM pagamento as t1 JOIN usuarios as t2 on t2.telefone=t1.telefone";

//$consulta= "select * FROM tb_produto where produto  LIKE %'$procurar_Produto'%'";

$resultado= mysqli_query($conn,$consulta);
while  ($row=mysqli_fetch_array($resultado))
{

    echo
    "<tr> <td>".$row['TOTAL']

    ?>


    </tr>
    <?php
  
  }




?>





</table>



        <hr widht="30" align="center" size="30" color="yellow" noshade="">
        

<h5 align="center">Loja Waarka, localizado em Angola Provincia de Luanda, Minicipio de Viana, Phone:</small> +244 954 843 646, Email:</small> Waarkashop@gmail.com </h5>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>