<?php

class controller
{
    public function model($username, $title, $description)
    {
        include("./model/Database.php");

        $db = new database;
        $db->connect($username, $title, $description);

    }
    public function view($name)
    {
        require_once("./model/connection.php");
        include('./view/' . $name . '.php');

    }
}

?>