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
            $this->param = $_GET['page'];
        }

        if (file_exists('./controller/' . $this->param . '.php')) {

            require_once('./controller/' . $this->param . '.php');
            $obj = new $this->param();

        } else {

            require_once('./controller/home.php');
            $obj = new home;

        }
    }

}

?>