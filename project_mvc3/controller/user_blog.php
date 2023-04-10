<?php

include("./core/controller.php");

class userblog extends controller
{

    public function __construct()
    {
        $this->view("user_blog");

    }

}

?>