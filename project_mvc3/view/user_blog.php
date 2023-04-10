<style>
    .info {
        margin-top: 10px;
        border: 2px solid black;
        letter-spacing: 1px;
        font-size: 20px;
    }
</style>


<?php

class blogsview
{
    public function __construct($con, $DB_NAME, $TABLE_NAME, $username)
    {

        mysqli_select_db($con, $DB_NAME);

        $sql = " SELECT * from $TABLE_NAME WHERE username=>'$username' ";
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);

        if ($num > 0) {

            echo "<div class=info>";
            $row = mysqli_fetch_array($result);

            echo ("<h1>Hello!! my name is " . $row["username"] . "</h1>" . "<br>" . "<h1> Title </h1> <br>" . $row["title"] . "<h1> Description </h1> <br>" . $row["description"]);

            echo "</div>";

        } else {
            echo "no data in the table";
        }
    }
}

?>