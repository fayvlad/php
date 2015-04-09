<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 13.02.2015
 * Time: 16:19
 */
include_once "db.php";

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="main">
    <div class="head">
        <div class="td">
            Имя
        </div>
        <div class="td">
            Фамилия
        </div>
        <div class="td">
            Отчество
        </div>
        <div class="dell">

        </div>
    </div>

    <?php
    $sql = "SELECT * FROM fio";
    $query = mysql_query($sql) or die(mysql_error());
    while ($row = mysql_fetch_assoc($query)) {
        ?>
        <a href="worker.php?id=<?php echo($row['id']); ?>">
            <div class="">
                <div class="td">
                    <?php echo $row['sname'] ?>
                </div>
                <div class="td">
                    <?php echo $row['name'] ?>
                </div>
                <div class="td">
                    <?php echo $row['pname'] ?>
                </div>
                <a href="del.php?id=<?php echo($row['id']); ?>">
                    <div class="dell">
                        X
                    </div>
                </a>
                <a href="reduct.php?id=<?php echo($row['id']); ?>">
                    <div class="reduct">
                        O
                    </div>
                </a>
            </div>
        </a>
    <?php
    }
    ?>

</div>
<a href="add.php"><input type="button" value="add"></a>
</body>
</html>