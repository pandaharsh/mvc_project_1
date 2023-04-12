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

mysqli_select_db($con, $DB_NAME);

if (isset($_GET['username'])) {

    $username = $_GET['username'];
    $title = $_GET['title'];
    $sql = " SELECT * from $TABLE_NAME Where username = '$username' AND title ='$title' ";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);

    if ($sql) {
        if ($num > 0) {

            echo "<div class=info>";

            $row = mysqli_fetch_array($result);

            echo ("<h4>" . $row["username"] . "</h4>" . "<h3> Title </h3> <p>" . $row["title"] . "</p> <h3> Description </h3> <p>" . $row["description"] . "</p>");

            echo "</div>";

        } else {
            echo "no data in the table";
        }
    }

}

?>