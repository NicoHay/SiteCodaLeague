<?php

class Profils {

public $apprenant;


    public function __construct(){

      $this->apprenant= new Pageprofils();                  // instancie un objet de la classe PageProfils


    }
/**
 * Controlleur de la page Portfolio
 *
 * @return void
 */
    public function controlProfils(){

        try{

    $donnees = $this->apprenant->showProfils();             //methode qui recupere tous les profils en BDD

            $vue = new Vue('Profils');                      // creer la vue Profils
            $vue->generer(array('profilUser'=> $donnees));  // envoi les differents profils dans la vue (tableau associatif)

        }catch (Exception $e){
             $e->getMessage();


        }

    }

}
