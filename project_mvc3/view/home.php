<style>
    .info {
        margin-top: 10px;
        letter-spacing: 1px;

    }

    .info a {
        font-size: 20px;
    }
</style>


<?php

mysqli_select_db($con, $DB_NAME);

$sql = " SELECT * from $TABLE_NAME  ORDER BY id DESC";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if ($num > 0) {

    echo "<ul>";
    for ($i = 0; $i < 5; $i++) {

        $row = mysqli_fetch_array($result);
        echo "<li><div class=info>";
        echo ('<a href="./index.php?action=view&username=' . $row["username"] . '">' . $row["username"] . "</a></br>");
        echo "</div></li>";
    }
    echo "</ul>";

} else {
    echo "no data in the table";
}

?>