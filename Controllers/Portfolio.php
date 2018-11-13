<?php

class Portfolio {


    public $projet;


    public function __construct(){

        $this->projet = new Projet();                  // instancie un objet de la classe News


    }

    /**
     * Controlleur de la page Portfolio
     *
     * @return void
     */
    public function controlPortfolio(){

        try{

            $donnees=$this->projet->showProjet();           //methode qui recupere toutes les news online en BDD

            $vue = new Vue('Portfolio');                    // creer la vue Portfolio
            $vue->generer(array( 'retour' => $donnees ));   // envoi les projets dans la vue (tableau associatif)

        }catch (Exception $e){
             $e->getMessage();

        }

    }

}
