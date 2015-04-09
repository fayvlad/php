<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 12.02.2015
 * Time: 9:00
 */
$displayfirst = 'none';
$secondtask = 'none';
$thirdtask = 'none';
$taskfour = 'none';
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
        $fioresult = $fname . ' ' . $fsoname . '. ' . $fparent . '.';
    }
    if (strlen($_POST['array']) > 0) {
        $count = $_POST['array'];
        $thirdtask = 'block';
        $summ = 1;
        for ($i = 1; $i <= $count; $i++) {
            $myarr[$i] = mt_rand(1, 100);
            if ($myarr[$i] > 0 && $i % 2 == 0) {
                $summ = $summ * $myarr[$i];
            }
            if ($myarr[$i] > 0 && $i % 2 != 0) {
                $nepar[] = $myarr[$i];
            }
        }
        $myarr = implode(" _ ", $myarr);
        $nepar = implode(" _ ", $nepar);
    }
    if (strlen($_POST['karti']) > 0) {
        $value = $_POST['karti'];
        $taskfour = 'block';
        $cardresult = '';
        $card["Шестерка"] = 6;
        $card["Семерка"] = 7;
        $card["Восьмерка"] = 8;
        $card["Девятка"] = 9;
        $card["Десятка"] = 10;
        $card["Валет"] = 11;
        $card["Дама"] = 12;
        $card["Король"] = 13;
        $card["Туз"] = 14;
        foreach ($card as $key => $val) {
            if ($val == $value) {
                $cardresult = $key;
            } elseif ($value < 6 || $value > 14 || is_numeric($value) == false) {
                $cardresult = 'Карты не существует';
            }
        }
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
    <label for="array">Задание 3</label>
    <input type="text" name="array">
    <br>
    <label for="array">Задание 4</label>
    <input type="text" name="karti">
    <br> <br>
    <input type="hidden" name="submit">
    <input type="submit">
</form>

<div class="result" style="display: <?= $displayfirst ?>">
    <h3><p>Число = <?= $number ?></p></h3>
    <h4><p>Квадраты чисел</p><?= $result ?></h4>
    <h4><p>Сумма квадратов чисел</p><?= $summresult ?></h4>
</div>


<div style="display: <?= $secondtask ?>">
    <h3>Сокращенное ФИО</h3>

    <p><?= $fioresult ?></p>
</div>

<div style="display: <?= $thirdtask ?>">
    <p>

    <h3>Массив </h3><?= $myarr ?></p>

    <p>

    <h3>Произведение парных индексов = </h3> <?= $summ ?></p>

    <p>

    <h3>Не парные индексы = </h3> <?= $nepar ?></p>

</div>

<div style="display: <?= $taskfour ?>">
    <h3>Ваша карта - </h3>

    <p><?= $cardresult ?></p>
</div>