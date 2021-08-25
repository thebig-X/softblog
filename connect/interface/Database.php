<?php
    namespace Connect;

    interface Database
    {
        public function connect ($dsn, $user="", $pass="");
    }