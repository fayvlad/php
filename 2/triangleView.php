<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 13.02.2015
 * Time: 12:01
 */
include 'autoload.php';
$triangle = new triangle();
$height = $_GET['height'];
$a = $_GET['A'];
$map = 0;
$dragx = 0;
$dragy = 0;
if (isset($_GET['map'])) {
    $map = $_GET['map'];
}
if (isset($_GET['X'], $_GET['Y'])) {
    $dragx = $_GET['X'];
    $dragy = $_GET['Y'];
    $triangle->drag($dragx, $dragy);
}
?>

<div><p>Фигура</p><?php $triangle->show($height, $a) ?></div>
<div><p>Площадь = <?php echo $triangle->area($height, $a); ?></p>
</div>

<div>
    <form>
        <p>Map</p>
        <label for="map">Map</label>
        <input type="text" name="map">
        <input type="hidden" name="height" value="<?php echo $height ?>">
        <input type="hidden" name="A" value="<?php echo $a ?>">
        <input type="hidden" name="X" value="<?php echo $dragx ?>">
        <input type="hidden" name="Y" value="<?php echo $dragy ?>">
        <input type="submit">
    </form>
</div>
<hr>
<div>
    <?php $triangle->map($height, $a, $map); ?>
</div>
<hr>
<div>
    <form action="">
        <p>Drag</p>
        <label for="X">X</label>
        <input type="text" name="X">
        <label for="Y">Y</label>
        <input type="text" name="Y">
        <input type="hidden" name="height" value="<?php echo $height ?>">
        <input type="hidden" name="A" value="<?php echo $a ?>">
        <input type="hidden" name="map" value="<?php echo $map ?>">
        <input type="submit">
    </form>
</div>
<hr>