<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 12.02.2015
 * Time: 15:53
 */
include_once "figure.php";

class rectangle extends Figure
{

    function show($x, $y)
    {
        echo('<div class="figure" style="border: 0 solid; background-color: #000000; width: ' . $x . ';height: ' . $y . '"></div>');
    }

    function map($x, $y, $map = 0)
    {
        $xmap = $x * $map;
        $ymap = $y * $map;
        $this->show($xmap, $ymap);
    }

    function area($x, $y)
    {
        $s = $x * $y;
        return $s;
    }

}