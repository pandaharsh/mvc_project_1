<style>
    .container {
        margin-top: 10px;
    }
</style>

<?php

echo '
<div class="container">
    <form action="index.php" method="post">
        User name:
        <input type="text" name="username" /><br /><br />
        Title:
        <input type="text" name="title" /><br /><br />
        Description: 
        <input type="text" name="description" /><br /><br />
        <input type="submit"  value="Sign up"/><br>
    </form>
</div>           
';

?>