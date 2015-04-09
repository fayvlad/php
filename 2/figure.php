<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 12.02.2015
 * Time: 15:52
 * Фигура должна быть абстрактным классом.
 * Этот класс хранит координаты х и у - расположения фигуры.
 * Поведение (методы) класса должны быть заданы интерфейсом.
 */
abstract class Figure implements iFigure
{
    public $x;
    public $y;
    public static $type;

    static function getChild($name)
    {
        return new $name();
    }

    abstract function show($x, $y);

    function drag($x = 0, $y = 0)
    {
        echo('
    <style type="text/css">
    .figure {
        margin-top: ' . $x . 'px;
        margin-left: ' . $y . 'px;
    }
    </style>
    ');

    }

    abstract function map($x, $y, $map);

    abstract function area($x, $y);

}

/*
Методы класса:
1) абстрактный метод вывода на экран;
2) метод для перемещения;
3) абстрактный метод масштабирования - умножения значений координат на масштабный коэффициент.
4) абстрактный метод подсчета площади
Круг, Прямоугольник (Rectangle) и Треугольник (Triangle) должны наследовать Фигура.
Определить следующие методы классов:
- расчет площади фигур;
- вывод фигур (в браузер).
 */

interface iFigure
{
    public function show($x, $y);

    public function drag($x, $y);

    public function map($x, $y, $map);

    public function area($x, $y);
}
