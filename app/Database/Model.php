<?php
    namespace App\Database;

    use App\Database\Connect\DBInterface\DatabaseInterface;
    use \PDO;
    use \PDOException;

    class Model implements DatabaseInterface
    {
        /**
         * @choose databse type
         * return [RDBM] [postgres, mysql]
        */
        private $dbtype = 'pgsql';

        /** --Database Object-- */
        private $db;
        private $config;

        public function __construct($config)
        {
            $this->config = ($config[$this->dbtype]) ;
        }

        /**
         * Query Executor
        */
        protected function query ($query)
        {
            return $this->db->query($query);
        }

        public function connect()
        {
            // TODO: Implement connect() method.
            $this->db = $this->try_connect($this->config);
            return $this->db;
        }

        /**
         * try connecting to database
         * return [connected : die(error)]
        */
        public function try_connect ($config)
        {
            try {
                $dsn =  "{$this->dbtype}:host={$config["host"]};port={$config["port"]};dbname={$config["database"]};";
                $connected = new PDO($dsn, $config["username"], $config["password"], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
            } catch (PDOException $e) {
                die($e->getMessage());
            }

            return $connected;
        }
    }
