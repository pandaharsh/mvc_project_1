<?php

//html of student form
$form = '
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Document</title>
    </head>
    <body>
        <form action="index.php" method="post">
            User name:
            <input type="text" name="username" /><br /><br />
            password:
            <input type="text" name="title" /><br /><br />
            User as admin: 
            <input type="text" name="description" /><br /><br />
            <input type="submit"  value="Sign up"/>
        </form><br /><br />

    </body>
</html>
';

// rendering form
echo $form;

?>