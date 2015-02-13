<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 13.02.2015
 * Time: 11:38
 */
include 'autoload.php';
$rectangle = new rectangle();

$height = $_GET['width'];
$a = $_GET['height'];
$map = 0;
$dragx = 0;
$dragy = 0;
if (isset($_GET['map'])) {
    $map = $_GET['map'];
}
if (isset($_GET['X'], $_GET['Y'])) {
    $dragx = $_GET['X'];
    $dragy = $_GET['Y'];
    $rectangle->drag($dragx, $dragy);
}
?>

<div><p>Фигура</p><?php $rectangle->show($height, $a) ?></div>
<div><p>Площадь = <?php echo $rectangle->area($height, $a); ?></p>
</div>

<div>
    <form>
        <p>Map</p>
        <label for="map">Map</label>
        <input type="text" name="map">
        <input type="hidden" name="width" value="<?php echo $height ?>">
        <input type="hidden" name="height" value="<?php echo $a ?>">
        <input type="hidden" name="X" value="<?php echo $dragx ?>">
        <input type="hidden" name="Y" value="<?php echo $dragy ?>">
        <input type="submit">
    </form>
</div>
<hr>
<div>
    <?php $rectangle->map($height, $a, $map); ?>
</div>
<hr>
<div>
    <form action="">
        <p>Drag</p>
        <label for="X">X</label>
        <input type="text" name="X">
        <label for="Y">Y</label>
        <input type="text" name="Y">
        <input type="hidden" name="width" value="<?php echo $height ?>">
        <input type="hidden" name="height" value="<?php echo $a ?>">
        <input type="hidden" name="map" value="<?php echo $map ?>">
        <input type="submit">
    </form>
</div>
<hr>