

<?php
        //session_start();
        $codigoV= session_id();
     
    class CompraController {
        
        private $conexao;
        
        public function __construct ($conexao) {
            $this->conexao = $conexao;
        }


        // ver a questao do status tambem(de modo a ser preenchido automaticamente)
        public function criarCompra ($id_usuario, $id_produto, $endereco, $quantidade) {
            $sql = "INSERT INTO compras (id_usuario, id_produto, endereco, quantidade, codigoV) values (:id_usuario, :id_produto, :endereco, :quantidade , :codigoV)";
            $stmt = $this->conexao->prepare($sql);
            $stmt->bindValue(":id_usuario", $id_usuario);
            $stmt->bindValue(":id_produto", $id_produto);
            $stmt->bindValue(":endereco", $endereco);
            $stmt->bindValue(":quantidade", $quantidade);
            $stmt->bindValue(":codigoV", session_id());
            $stmt->execute();
            return true;
        }

        // melhorar este metodo para trazer nomes e não ids
        public function listarCompras () {
            $sql = "SELECT id_usuario, id_produto, status FROM compras";
            $stmt = $this->conexao->query($sql);

            $stmt->execute();
            $compras = $stmt->fetchAll(PDO::FETCH_OBJ);

            return $compras;
        }

    }
