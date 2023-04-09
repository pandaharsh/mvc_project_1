<?php

class controlmodel
{

    public function __construct($username, $title, $description)
    {
        include("./model/Database.php");

        $db = new database;


    }

}

?>