<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 12.02.2015
 * Time: 15:54
 */
include_once "figure.php";

class circle extends Figure
{

    function show($x, $y)
    {
        echo('<div class="figure" style="border-radius: 50%; background-color: #000000; border: 0 solid; width: ' . $x / 2 . ';height: ' . $x / 2 . '">
        </div>');

    }

    function map($x = 0, $y = 0, $map = 0)
    {
        $xmap = $x * $map;
        $this->show($xmap, $xmap);
    }

    function area($x, $y = 0)
    {
        $s = 3.14 * ($x * 0.5) * ($x * 0.5);
        return $s;
    }

}