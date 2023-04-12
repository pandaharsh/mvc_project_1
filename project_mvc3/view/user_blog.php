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

$sql = " SELECT username from $TABLE_NAME";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if ($num > 0) {

    echo "<ol>";
    for ($i = 0; $i < $num; $i++) {
        echo '<li><div class= "info" >';
        $row = mysqli_fetch_array($result);
        echo ('<a href="./index.php?action=view&username=' . $row["username"] . '">' . $row["username"] . "</a></br>");
        echo "</li>";

    }
    echo "</ol>";
} else {
    echo "no data in the table";
}



?>