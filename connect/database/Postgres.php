<?php
    namespace Connect\Database;

    use Connect\Database;

    class Postgres implements Database
    {
        protected $dsn;

        public function connect($dsn, $user = "", $pass = "")
        {
            // TODO: Implement connect() method.
        }

    }