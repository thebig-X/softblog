<?php
    namespace Connect\Database;

    use Connect\Database;

    class SqLite implements Database
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