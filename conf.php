<?php
$kasutaja='maxx';
$serverinimi='localhost';
$parool='123456';
$andmebaas='maxxdb';
$yhendus=new mysqli($serverinimi, $kasutaja, $parool, $andmebaas);
$yhendus->set_charset('UTF8');