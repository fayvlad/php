<?php
include 'autoload.php';

?>


<style type="text/css">
    body {
        width: 600px;
    }

    p {
        color: #1b15ee;
    }
</style>
<hr>
<div>
    <form action="circleView.php">
        <p>Circle</p>
        <label for="radius">radius</label>
        <input type="text" name="radius">
        <input type="submit">
    </form>
</div>
<hr>
<div>
    <form action="rectangleView.php">
        <p>Rectangle</p>
        <label for="height">height</label>
        <input type="text" name="height">
        <label for="width">width</label>
        <input type="text" name="width">
        <input type="submit">
    </form>
</div>
<hr>
<div>
    <form action="triangleView.php">
        <p>Triangle</p>
        <label for="height">height</label>
        <input type="text" name="height">
        <label for="A">A</label>
        <input type="text" name="A">
        <input type="submit">
    </form>
</div>
<hr>
