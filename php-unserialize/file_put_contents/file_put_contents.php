<?php

include 'logging.php';


class ReadFile
{
        public function __tostring()
        {
                return file_get_contents($this->filename);
        }
}

class User
{
        public $username;
        public $isAdmin;

        public function PrintData(){
                if ($this->isAdmin){
                        echo $this->username . " is an admin\n";
                } else {
                        echo $this->username . " is not an admin\n";
                }
        }
}

//$obj = new User();
//$obj->username = 'sailay';
//$obj->isAdmin = False;
//$obj->PrintData();
//echo serialize($obj);
$obj = unserialize($_POST['sailay']);
$obj->PrintData();


echo "\n";

?>
