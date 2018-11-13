<?php

class Contact {

/**
 * controller de la page contact
 *
 * @return void
 */
    public function controlContact(){

        try{
            // creer la vue contact
            $vue = new Vue('Contact');
            $vue->generer();

        }catch (Exception $e){
             $e->getMessage();

       

        }

    }

}