<?php
    require_once('database.php');
    $db = new numair76();

    $un = $_POST['username'];
    $pass = $_POST['pwd'];

    $db->signup($un,$pass);
?>