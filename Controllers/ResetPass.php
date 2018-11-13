<?php

class ResetPass {


    public $authentification;


    public function __construct(){


        $this->authentification = new Auth();       // instancie un objet de la classe Auth

    }

    public function controlResetPass(){

        try{

                if(isset($_POST['recupPass'])){                                 // si on clique sur recupPass

                    $email=Controls::testInput($_POST['emailUser']);            //securité et test du mail recu par l'utilisateur 

                    $validMail= $this->authentification->checkMail($email);     //methode qui verifie que l'email existe en BDD

                    $message = "un email a éte envoyé à l'adresse renseignée avec les details pour redéfinir votre mot de passe";


                }

            $vue = new Vue('ResetPass');                                        // creer la vue ResetPass
            $vue->generer(array('flash' => $message));                          // envoi les message flash dans la vue (tableau associatif)

        }catch (Exception $e){

             $e->getMessage();


        }

    }

}

