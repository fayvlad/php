<?php
include_once "db.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `fio` WHERE id = '$id'";
    $query = mysql_query($sql) or die(mysql_error());
    header("Location: index.php");
}