<?php

class app
{
    protected $param = 'home';

    public function __construct()
    {

        $this->parseurl();

    }

    public function parseurl()
    {
        if (isset($_GET['page'])) {

            include("./view/nav.php");
            $this->param = $_GET['page'];
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