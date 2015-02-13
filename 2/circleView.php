<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 13.02.2015
 * Time: 11:38
 */
include 'autoload.php';
$circle = new circle();
$height = $_GET['radius'];
$map = 0;

if (isset($_GET['map'])) {
    $map = $_GET['map'];
}
if (isset($_GET['X'], $_GET['Y'])) {
    $dragx = $_GET['X'];
    $dragy = $_GET['Y'];
    $circle->drag($dragx, $dragy);
}
?>

<div><p>Фигура</p><?php $circle->show($height, 0) ?></div>
<div><p>Площадь = <?php echo $circle->area($height, 0); ?></p>
</div>

<div>
    <form>
        <p>Map</p>
        <label for="map">Map</label>
        <input type="text" name="map">
        <input type="hidden" name="radius" value="<?php echo $height ?>">
        <input type="hidden" name="X" value="<?php echo $dragx ?>">
        <input type="hidden" name="Y" value="<?php echo $dragy ?>">
        <input type="submit">
    </form>
</div>
<hr>
<div>
    <?php $circle->map($height, 0, $map); ?>
</div>
<hr>
<div>
    <form action="">
        <p>Drag</p>
        <label for="X">X</label>
        <input type="text" name="X">
        <label for="Y">Y</label>
        <input type="text" name="Y">
        <input type="hidden" name="radius" value="<?php echo $height ?>">
        <input type="hidden" name="map" value="<?php echo $map ?>">
        <input type="submit">
    </form>
</div>
<hr>

