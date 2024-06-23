

<?php


// require_once '../databases/Database.php';

    class ProdutoController {
        
        private $conexao;
        
        public function __construct ($conexao) {
            $this->conexao = $conexao;
        }

        public function criarProduto ($nome, $descricao, $preco, $id_categoria) {
            $sql = "INSERT INTO produtos (nome, descricao, preco, id_categoria) values (:nome, :descricao, :preco, :id_categoria)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":descricao", $descricao);
            $stmt->bindValue(":preco", $preco);
            $stmt->bindValue(":id_categoria", $id_categoria);
            $stmt->execute();
            return true;
        }
        
        public function obterProdutosPorNome ($nome) {
            $sql = "SELECT id_produto, nome, descricao, preco, url_imagem FROM produtos WHERE nome LIKE :nome";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(":nome", "$nome%");
            
            $stmt->execute();
            $produtos = $stmt->fetchAll(PDO::FETCH_OBJ);
            
            return $produtos;
        }
        
        public function listarProdutosPorCategoria ($id_categoria) {
            $sql = "SELECT nome, descricao, preco, url_imagem FROM produtos WHERE id_categoria = :id_categoria";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(":id_categoria", $id_categoria);
            
            $stmt->execute();
            $produto = $stmt->fetch(PDO::FETCH_OBJ);
            
            return $produto;
        }

        public function listarProdutos () {
            $sql = "SELECT id_produto, nome, descricao, preco, url_imagem FROM produtos";
            $stmt = $this->conexao->query($sql);

            $stmt->execute();
            $produtos = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $produtos;
        }

        public function listarProdutosHome () {
            $sql = "SELECT id_produto, nome, descricao, preco, url_imagem FROM produtos ORDER BY nome DESC LIMIT 8 ";
            $stmt = $this->conexao->query($sql);

            $stmt->execute();
            $produtos = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $produtos;
        }

    }
