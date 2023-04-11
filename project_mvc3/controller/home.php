<?php

include("./core/controller.php");

class home extends controller
{

    public function __construct()
    {

        $this->view("home");

    }

}

?>