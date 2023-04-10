<?php

class app
{
    private $param = 'home';

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

            require('./controller/' . $this->param . '.php');
            $obj = new $this->param();

        } else {

            require('./controller/signup.php');
            $obj = new signup();

        }
    }

}

?>