<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 12.02.2015
 * Time: 17:38
 */
spl_autoload_register ('autoload');
function autoload ($className) {
    $fileName = $className . '.php';
    include  $fileName;
}