<?php

class controller
{
    public function model($username, $title, $description)
    {
        include("./model/Database.php");

        $db = new database;

    }
    public function view($name)
    {
        include('./view/' . $name . '.php');
    }

}

?>