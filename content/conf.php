<?php
$kasutaja="";
$andmebaas="";
$parool="";
$serverinimi="";
$yhendus=new mysqli($serverinimi, $kasutaja, $parool, $andmebaas);
$yhendus->set_charset("utf8");

