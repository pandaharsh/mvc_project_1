<?php
include("./core/controller.php");

class signup extends controller
{

    private $username;
    private $title;
    private $description;

    public function __construct()
    {
        include("./view/signup.php");

        //declaring all variables
        $this->username = $_POST['username'];
        $this->title = $_POST['title'];
        $this->description = $_POST['description'];

        $this->model($this->username, $this->title, $this->description);

        $this->view("signup");

    }

}

?>