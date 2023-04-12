<?php

class app
{
    protected $param = 'signup';

    public function __construct()
    {

        include("./view/nav.php");
        $this->parseurl();

    }

    public function parseurl()
    {
        if (isset($_GET['action'])) {

            $this->param = $_GET['action'];
        }

        if (file_exists('./controller/' . $this->param . '.php')) {

            require('./controller/' . $this->param . '.php');
            $obj = new $this->param();

        } else {

            echo "Error!! File does not exist. ";

        }
    }

}

?>