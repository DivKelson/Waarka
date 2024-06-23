

<?php

    class CategoriaController {
        
        private $conexao;
        
        public function __construct ($conexao) {
            $this->conexao = $conexao;
        }

        public function validarCategoriaPorNome($nome) {
            $categoria = $this->obterCategoriaPorNome($nome);
            
            if($categoria) {
                echo 'Categoria já existe!';
                die();
            }

            return true;
        }

        public function criarCategoria ($nome, $descricao) {

            $this->validarCategoriaPorNome($nome);

            $sql = "INSERT INTO categorias (nome, descricao) values (:nome, :descricao)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->execute();
            return true;
        }

        public function obterCategoriaPorNome ($nome) {
            $sql = "SELECT nome, descricao FROM categorias WHERE nome = :nome";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            
            $stmt->execute();
            $categoria = $stmt->fetch(PDO::FETCH_OBJ);
            
            return $categoria;
        }

        public function listarCategorias () {
            $sql = "SELECT nome, descricao FROM categorias";
            $stmt = $this->conexao->query($sql);

            $stmt->execute();
            $categorias = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $categorias;
        }

    }
