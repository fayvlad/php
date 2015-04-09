<?php
include_once "db.php";
if (isset($_POST['ok'])) {
    $date = $_POST["date"];
    $name = $_POST["name"];
    $sname = $_POST["sname"];
    $pname = $_POST["pname"];
    $address = $_POST["address"];
    $tel = $_POST["tel"];
    $idpos = $_POST["dolg"];
    $iddir = $_POST["director"];
    $id = $_POST["id"];
    $upd = "INSERT INTO `fio`(`id`, `name`, `sname`, `pname`, `address`, `tel`, `id_pos`, `id_director`, `date`)
    VALUES (NULL,'$name','$sname','$pname','$address','$tel','$idpos','$iddir','$date')";
    $queryupd = mysql_query($upd) or die(mysql_error());
    header("Location: index.php");
}
?>
<link href="css/style.css" rel="stylesheet">
<form method="post" action="add.php">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

    <div class="main">
        <div class="photo">
        </div>
        <div class="info">
            <div class="data">
                <input name="sname" type="text" placeholder="Фамилия">
            </div>
            <div class="data">
                <input name="name" type="text" placeholder="Имя">
            </div>
            <div class="data">
                <input name="pname" type="text" placeholder="Отчество">
            </div>
            <div class="data">
                <select name="director">
                    <?php
                    $sqldir = "SELECT * FROM director";
                    $querydir = mysql_query($sqldir) or die(mysql_error());
                    while ($rowdir = mysql_fetch_assoc($querydir)) {
                        ?>
                        <option value="<?php echo $rowdir['id'] ?>"><?php echo $rowdir['director'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="data">
                <input name="date" type="date">
            </div>
            <div class="data">
                <select name="dolg">
                    <?php
                    $sqldir = "SELECT * FROM posada";
                    $querydir = mysql_query($sqldir) or die(mysql_error());
                    while ($rowdir = mysql_fetch_assoc($querydir)) {
                        ?>
                        <option value="<?php echo $rowdir['id'] ?>"><?php echo $rowdir['posada'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="data">
                <input name="address" type="text" placeholder="Адрес">
            </div>
            <div class="data">
                <input name="tel" type="text" placeholder="Тел">
            </div>
        </div>
    </div>
    <input type="submit" name="ok">
</form>