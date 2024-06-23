<?php

    class Database {

    
        public static function getConnect(){
            try {

                $conn = new PDO("mysql:dbname=waarka;host=localhost", "root", "");
                return $conn;
                
            } catch (PDOException $e) {
                echo 'Erro na conexão: ', $e->getMessage();
            }
        }

    }