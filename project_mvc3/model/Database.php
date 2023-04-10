<?php
class database
{
    protected $conn;
    protected $DB_NAME = "Blogs";
    protected $TABLE_NAME = "User_blog";

    public function __construct($username, $title, $description)
    {
        $con = mysqli_connect('localhost', 'root');

        if ($con) {
            $this->conn = $con;
            $this->create($username, $title, $description);

        } else {
            echo "connection failed";
        }
    }

    public function create($username, $title, $description)
    {

        //select database
        $is_selected = mysqli_select_db($this->conn, $this->DB_NAME);

        if ($is_selected) {

            $this->insert($username, $title, $description);

        } else {

            // Create database
            $sql = "CREATE DATABASE " . $this->DB_NAME;
            if (mysqli_query($this->conn, $sql)) {
                echo "Database created successfully";
            } else {
                echo "Error creating database: " . mysqli_error($this->conn);
            }

        }

    }
    public function insert($username, $title, $description)
    {

        // insert into database

        $sql = " SELECT * from " . $this->TABLE_NAME;
        if (!is_null($username) && !is_null($title)) {

            if (mysqli_query($this->conn, $sql)) {
                $sql = "INSERT INTO " . $this->TABLE_NAME . " (username, title, description) values ('" . $username . "' , '" . $title . "' , '" . $description . "');";

            } else {
                $sql = "CREATE TABLE " . $this->TABLE_NAME . "(id INT AUTO_INCREMENT PRIMARY KEY, username varchar(255), title varchar(255), description varchar(700) );";
            }

            if (mysqli_query($this->conn, $sql)) {
                echo ("<br>data submitted");
            } else {
                echo mysqli_error($this->conn);
            }
        } else {
            echo "no data here";
        }
    }
}

?>