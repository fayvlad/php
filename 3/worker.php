<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 13.02.2015
 * Time: 17:14
 */
include_once "db.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM fio WHERE id = '$id'";
    $query = mysql_query($sql) or die(mysql_error());
    $row = mysql_fetch_assoc($query);
    $pos = $row['id_pos'];
    $sqldol = "SELECT posada FROM posada WHERE id='$pos'";
    $querypos = mysql_query($sqldol) or die(mysql_error());
    $posada = mysql_fetch_assoc($querypos);
    $dir = $row['id_director'];
    $querydir = mysql_query("SELECT director FROM director WHERE id='$dir'")
    or die(mysql_error());
    $director = mysql_fetch_assoc($querydir);
}
?>
<link href="css/style.css" rel="stylesheet">
<div class="main">
    <div class="photo">

    </div>
    <div class="info">
        <div class="data">Имя -
            <?php echo($row['sname'] . " " . $row['name'] . " " . $row['pname']) ?>
        </div>
        <div class="data">Должность -
            <?php echo $posada['posada'] ?>
        </div>
        <div class="data">Принят -
            <?php echo $row['date'] ?>
        </div>
        <div class="data">Директор -
            <?php echo $director['director'] ?>
        </div>
        <div class="data">Адресс -
            <?php echo $row['address'] ?>
        </div>
        <div class="data">Телефон -
            <?php echo $row['tel'] ?>
        </div>

    </div>
</div>