<?php include("db.php");  
if (isset($_GET['telefone']))
{ 
    $telefone=$_GET['telefone'];  
    $query="SELECT T1.telefone,t1.nome as 'cliente',    sum(quantidade*T3.preco) 'total' FROM usuarios AS T1 JOIN compras AS T2 ON T2.id_usuario=T1.id_usuario JOIN produtos AS T3 ON T3.id_produto=T2.id_produto WHERE telefone = $telefone";   


    $result=mysqli_query($conn,$query);     
    if(mysqli_num_rows($result)==1) 
    {
        $row = mysqli_fetch_array($result);       
        $telefone =$row['telefone'];       
        $total =$row['total'];       
    } 
    }  
if (isset($_POST['CONFIRMAR']))
{ 
    $telefone=$_GET['telefone']; 
    $total = $_POST['valor']; 
    $data = $_POST['data']; 

    $query="INSERT INTO pagamento (valor,data,telefone) VALUES('$total','$data','$telefone')";
    $result=mysqli_query($conn,$query);
   
    echo '<CENTER>REGISTRO FOI FEITO COM SUCESSO</CENTER>';  
  //  header("Location: visualizar_Pessoa.php"); 
}  
    
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




<div class="container" id="login">
    <div class="row">
        <div class="col-md-5 py-" id="side1">
            <h3 class="text-center">CONFIRMAR O PAGAMENTO</h3>
        </div>
        <div class="col-md-5 py-3 py-md-0" id="side2">
         <form action="" method="POST">    
           
              <label>Valor </label> 
              <input type="text" placeholder="Degite o valor pago da Compra" size="38" name="valor" value="<?php echo $total ?>"> 
                  <p> </p>
                  <label>Telefone </label> 
              <input type="text" placeholder="Degite o telefone do cliente"  size="38" name="telefone" value="<?php echo $telefone ?>">
                  <p> </p>
                  <label>Data de Pagamento </label> 
              <input type="datetime-local"   size="38"  name="data">
              <p> </p>
              <button class="form-control" type="submit" name="CONFIRMAR">CONFIRMAR PAGAMENTO</button>
           
        
            </form>
            
        </div>
    </div>
    </div>

<h5 align="center">Loja Waarka, localizado em Angola Provincia de Luanda, Minicipio de Viana, Phone:</small> +244 954 843 646, Email:</small> Waarkashop@gmail.com </h5>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    
</body>
</html>