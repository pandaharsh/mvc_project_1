<?php

class signup
{

    public function __construct()
    {
        include("./view/signup.php");

        //declaring all variables
        $username = $_POST['username'];
        $title = $_POST['title'];
        $description = $_POST['description'];


        include("./controller/control.php");

        $obj = new controlmodel($username, $title, $description);

    }

}

?>