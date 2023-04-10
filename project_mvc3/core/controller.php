<?php

class controller
{
    public function model($username, $title, $description)
    {
        include("./model/Database.php");

        $db = new database($username, $title, $description);

    }
    public function view($name)
    {
        include('./view/' . $name . '.php');
    }

    public function blogview()
    {

        include("/view/user_blog.php");
    }

}

?>