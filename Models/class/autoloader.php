<?php

spl_autoload_register('app_autoload');

/**
 * charge la bonne classe quand elle est appelée
 *
 * @param class $class
 * @return void
 */
function app_autoload( $class){

    if(file_exists("Models/class/".$class.".php")){

        require "Models/class/".$class.".php";

    }if (file_exists("Controllers/".$class.".php")){

        require "Controllers/".$class.".php";
    }

    if(file_exists("vue/".$class.".php")){

        require "vue/".$class.".php";

    }
}

