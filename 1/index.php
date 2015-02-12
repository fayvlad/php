<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 12.02.2015
 * Time: 9:00
 */

$displayfirst = 'none';
$secondtask = 'none';
if (isset($_POST['submit'])) {
    if (strlen($_POST['number']) > 0) {
        if (is_numeric($_POST['number'])) {
            $number = $_POST['number'];
            $displayfirst = 'block';
            $summresult = 0;
            for ($i = 1; $i <= $number; $i++) {
                $resultkvadrat[$i] = $i * $i;
                $summresult += $resultkvadrat[$i];
            }
            $result = implode(" , ", $resultkvadrat);
        } else {
            $displayfirst = 'block';
            $number = 'Введите ЧИСЛО';
            $result = $number;
            $summresult = $number;
        }

    }
    if (strlen($_POST['fio']) > 0) {
        $secondtask = 'block';
        $fio = $_POST['fio'];
        $fio = mb_convert_case($fio, MB_CASE_TITLE, "UTF-8");
        $fio = explode(' ', $fio);
        $fname = $fio[0];
        $fsoname = $fio[1];
        $fsoname = mb_substr($fsoname, 0, 2);
        $fparent = $fio[2];
        $fparent = mb_substr($fparent, 0, 2);
        $fioresult = $fname.' '.$fsoname.'. '.$fparent.'.';
    }
}

?>

<form action="index.php" method="post">
    <label for="number">Задание 1</label>
    <input type="text" name="number">
    <br>
    <label for="fio">Задание 2</label>
    <input type="text" name="fio">
    <br>
    <input type="hidden" name="submit">
    <input type="submit">
</form>

<div class="result" style="display: <?= $displayfirst ?>">
    <h3><p>Число = <?= $number ?></p></h3>
    <h4><p>Квадраты чисел</p><?= $result ?></h4>
    <h4><p>Сумма квадратов чисел</p><?= $summresult ?></h4>
</div>


<div class="secondtask" style="display: <?= $secondtask ?>">
    <h3>Сокращенное ФИО</h3>

    <p><?= $fioresult ?></p>
</div>