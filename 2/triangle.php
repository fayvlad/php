<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 12.02.2015
 * Time: 15:53
 */
include_once "figure.php";

class triangle extends Figure
{
    function show($x, $y)
    {
        echo('<div class="figure" style="width: 0; height: 0;
                border-left: ' . $x . 'px solid transparent; border-right: ' . $x . 'px solid transparent;
                border-bottom: ' . $y . 'px solid #000000; "></div>');
    }

    function map($x, $y, $map = 0)
    {
        $xmap = $x * $map;
        $ymap = $y * $map;
        $this->show($xmap, $ymap);
    }

    function area($x, $y)
    {
        $s = 0.5 * $x * $y;
        return $s;
    }

}