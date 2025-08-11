<?php

    namespace App\Config;

    use PDO;
    use PDOException;

    class Database {
        private $conn;

        public function getConnection() {
            $this->conn = null;

            try {
                $dsn = "{$_ENV['DB_CONNECTION']}:host={$_ENV['DB_HOST']};dbname={$_ENV['DB_DATABASE']}";
                $this->conn = new PDO($dsn, $_ENV['DB_USERNAME'], $_ENV['DB_PASSWORD']);
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erro de conexão: " . $e->getMessage());
            }
        }
    }
?>