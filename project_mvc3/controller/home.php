<?php

include("./core/controller.php");

class home extends controller
{

    protected $username;
    protected $title;
    protected $description;

    public function __construct()
    {

        $this->username = $_POST['username'];
        $this->title = $_POST['title'];
        $this->description = $_POST['description'];

        $this->view("signup");

        $this->model($this->username, $this->title, $this->description);

    }

}

?>