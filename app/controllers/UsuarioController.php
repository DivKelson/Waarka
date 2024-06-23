

<?php

    class UsuarioController {
        
        private $conexao;
        
        public function __construct ($conexao) {
            $this->conexao = $conexao;
        }

        public function validarCamposUsuario($nome, $email, $senha) {
            if($nome == '' || $email == '' || $senha == '' ) {
                header('location: register.php?erroRegister=dados_invalidos');
                die();
            }
        
        }

        public function validarUsuarioPorEmail($email) {
            $usuario = $this->obterUsuarioPorEmail($email);
            
            if($usuario) {
                header('location: register.php?erroRegister=usuario_existe');
                die();
            }

            return true;
        }

        public function obterUsuarioPorEmailRetornandoSenha ($email) {
            $sql = "SELECT id_usuario, nome, email, senha FROM usuarios WHERE email = :email";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(":email", $email);
            $stmt->execute();

            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_OBJ);

            return $usuario;
        }

        public function obterUsuarioPorEmail ($email) {
            $sql = "SELECT nome, email FROM usuarios WHERE email = :email";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(":email", $email);
            $stmt->execute();

            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_OBJ);

            return $usuario;
        }

        public function criarUsuario ($nome, $email, $senha, $telefone) {

            $this->validarCamposUsuario($nome, $email, $senha);

            $this->validarUsuarioPorEmail($email);

            $sql = "INSERT INTO usuarios (nome, email, senha, telefone) values (:nome, :email, :senha, :telefone)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":senha", $senha);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->execute();
            return true;
        }

        public function listarUsuarios () {
            $sql = "SELECT nome, email FROM usuarios";
            $stmt = $this->conexao->query($sql);

            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $usuarios;
        }

    }
