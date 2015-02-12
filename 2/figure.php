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
    public $type;

    public function getByType()
    {
        if ($this->type == 1) {
            return new Circle();
        }
        if ($this->type == 2) {
            return new Rectangle();
        }
        if ($this->type == 3) {
            return new Triangle();
        }
    }

    public function alert()
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
        getByType();
    }
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
    public function alert();

    public function drag($x, $y);

    public function map($x, $y, $map);

    public function area($x, $y);
}
