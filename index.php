<?php
session_start();

require 'Models/class/autoloader.php';
require 'Controllers/Routeur.php';

$routeur = new Routeur();
$routeur->routerRequete();
