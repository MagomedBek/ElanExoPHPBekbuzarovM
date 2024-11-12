<h1>POO BANNQUE</h1>

<?php

//require "Entrepise.php";
//require "Employe.php";

spl_autoload_register(function ($class_name){
    require "classes/". $class_name.".php";
});