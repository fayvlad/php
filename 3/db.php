<?php
/**
 * Created by PhpStorm.
 * User: ПК
 * Date: 13.02.2015
 * Time: 16:38
 *
 *
 * mysql_connect('mysql6.000webhost.com','a9618704_fayvlad','gs46k85') or die('Подключение к серверу MySQL не удалось');
 * mysql_select_db('a9618704_fay') or die(mysql_error());
 * mysql_query("SET CHARACTER SET 'utf8'");
 * mysql_query("SET NAMES 'utf8'");*/
mysql_connect('localhost', 'root', '') or die('Подключение к серверу MySQL не удалось');
mysql_select_db('anderson') or die(mysql_error());
mysql_query("SET CHARACTER SET 'utf8'");
mysql_query("SET NAMES 'utf8'");
