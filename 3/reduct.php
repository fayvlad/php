<?php
include_once "db.php";
$select = '';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM fio WHERE id = '$id'";
    $query = mysql_query($sql) or die(mysql_error());
    $row = mysql_fetch_assoc($query);
} elseif (isset($_POST['ok'])) {
    $date = $_POST["date"];
    $name = $_POST["name"];
    $sname = $_POST["sname"];
    $pname = $_POST["pname"];
    $address = $_POST["address"];
    $tel = $_POST["tel"];
    $idpos = $_POST["dolg"];
    $iddir = $_POST["director"];
    $id = $_POST["id"];
    $upd = "UPDATE `fio` SET
    `name`= '$name',
    `sname`= '$sname',
    `pname`= '$pname ',
    `address`= '$address',
    `tel`= '$tel',
    `id_pos`= '$idpos',
    `id_director`= '$iddir',
    `date`= '$date'
    WHERE `id`='$id'";
    $queryupd = mysql_query($upd) or die(mysql_error());
    header("Location: index.php");
}
?>
<link href="css/style.css" rel="stylesheet">
<form method="post" action="reduct.php">
    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">

    <div class="main">
        <div class="photo">
        </div>
        <div class="info">
            <div class="data">
                <input name="sname" type="text" value="<?php echo $row['sname'] ?>">
            </div>
            <div class="data">
                <input name="name" type="text" value="<?php echo $row['name'] ?>">
            </div>
            <div class="data">
                <input name="pname" type="text" value="<?php echo $row['pname'] ?>">
            </div>
            <div class="data">
                <select name="director">
                    <?php
                    $sqldir = "SELECT * FROM director";
                    $querydir = mysql_query($sqldir) or die(mysql_error());
                    while ($rowdir = mysql_fetch_assoc($querydir)) {
                        if ($rowdir['id'] == $row['id_director']) {
                            $select = 'selected';
                            echo $select;
                        }
                        ?>
                        <option <?php echo $select ?>
                            value="<?php echo $rowdir['id'] ?>"><?php echo $rowdir['director'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="data">
                <input name="date" type="date" value="<?php echo $row['date'] ?>">
            </div>
            <div class="data">
                <select name="dolg">
                    <?php
                    $sqldir = "SELECT * FROM posada";
                    $querydir = mysql_query($sqldir) or die(mysql_error());
                    while ($rowdir = mysql_fetch_assoc($querydir)) {
                        if ($rowdir['id'] == $row['id_pos']) {
                            $select = 'selected';
                            echo $select;
                        }
                        ?>
                        <option <?php echo $select ?>
                            value="<?php echo $rowdir['id'] ?>"><?php echo $rowdir['posada'] ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="data">
                <input name="address" type="text" value="
            <?php echo $row['address'] ?>">
            </div>
            <div class="data">
                <input name="tel" type="text" value="
            <?php echo $row['tel'] ?>">
            </div>
        </div>
    </div>
    <input type="submit" name="ok">
</form>
