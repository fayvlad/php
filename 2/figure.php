<?php

/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 12.02.2015
 * Time: 15:52
 */
abstract class figure implements iFigure
{
//Фигура должна быть абстрактным классом.
//Этот класс хранит координаты х и у - расположения фигуры.
//Поведение (методы) класса должны быть заданы интерфейсом.
    public $x;
    public $y;
}

/*
 * Методы класса:
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
    abstract function alert()
    {

    }

    public function drag($x, $y)
    {

    }

    public function map($x, $y, $map)
    {

    }

    public function area($x, $y)
    {

    }
}

class circle extends figure
{

}

class rectangle extends figure
{

}

class triangle extends figure
{

}