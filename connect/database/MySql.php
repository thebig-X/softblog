<?php
    namespace Connect\Database;

    use Connect\Database;

    class MySql implements Database
    {
        protected $dsn;

        public function __construct()
        {
        }

        public function connect($dsn, $user = "", $pass = "")
        {
            // TODO: Implement connect() method.
        }

        public function query()
        {
            // TODO: Implement query() method.
        }

    }