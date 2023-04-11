<style>
    .info {
        margin-top: 10px;
        border: 2px solid black;
        letter-spacing: 1px;
        width: 50%;
        text-align: center;

    }

    h3,
    h4,
    p {
        font-size: 20px;
        margin: 30px 0px;
    }
</style>


<?php

$con = mysqli_connect('localhost', 'root');
$DB_NAME = "Blogs";
$TABLE_NAME = "User_blog";

mysqli_select_db($con, $DB_NAME);

$sql = " SELECT * from $TABLE_NAME ";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if ($num > 0) {
    for ($i = 0; $i < $num; $i++) {

        echo "<div class=info>";

        $row = mysqli_fetch_array($result);

        echo ("<h4>" . $row["username"] . "</h4>" . "<h3> Title </h3> <p>" . $row["title"] . "</p> <h3> Description </h3> <p>" . $row["description"] . "</p>");

        echo "</div>";
    }

} else {
    echo "no data in the table";
}

?>