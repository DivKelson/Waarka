

<?php

    class ContaController {

        private $usuarioController;        
        private $conexao;
        
        public function __construct ($conexao) {
            $this->conexao = $conexao;
            $this->usuarioController = new UsuarioController($conexao);
        }

      
        public function login ($email, $senha) {

            $usuario = $this->usuarioController->obterUsuarioPorEmailRetornandoSenha($email);

            if(!$usuario) {
                header("location: login.php?erroLogin");
                die();
            }

            if($usuario->senha !== $senha) {
                header("location: login.php?erroLogin");
                die(); 
            }


if($usuario->senha == $senha && $senha=="admin")
 {
    $_SESSION['usuario_logado'] = true;
    $_SESSION['usuario_id'] = $usuario->id_usuario;
    $_SESSION['usuario_nome'] = $usuario->nome;
    $_SESSION['usuario_email'] = $usuario->email;

   header("location: index_admin.php");

}

else


{
    $_SESSION['usuario_logado'] = true;
    $_SESSION['usuario_id'] = $usuario->id_usuario;
    $_SESSION['usuario_nome'] = $usuario->nome;
    $_SESSION['usuario_email'] = $usuario->email;

   header("location: index.php");

}


/*
            if($usuario->senha == $senha) {
                $_SESSION['usuario_logado'] = true;
                $_SESSION['usuario_id'] = $usuario->id_usuario;
                $_SESSION['usuario_nome'] = $usuario->nome;
                $_SESSION['usuario_email'] = $usuario->email;

               header("location: index.php");

            }


*/


        }


    }
