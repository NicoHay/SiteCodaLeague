<?php

class NewPass {
    
    
    public $auth;
    
    
    public function __construct(){
        
        $this->auth = new Auth();                   // instancie un objet de la classe Auth
        
    }
    /**
    * controller de la page newPass
    *
    * @return void
    */
    public function controlNewPass(){
        
        try{
            
            if (isset( $_GET['id'] ) && isset( $_GET['token'] )){                        // si on a bien une url contenant un id et un token
                
                
                $verif = $this->auth->checkResetToken( $_GET['id'] , $_GET['token'] );   //methode qui verifie que le token et l'id correspondent dans la bdd
                
                
                if( $verif ){                               // si tout est ok 
                    
                    
                    
                    if(isset( $_POST['newpass'])) {         // si on soumet le formulaire
                        
                        $pass1= Controls::testInput($_POST['pass1']);               //securité et test du pass1 recu par l'utilisateur 
                        $pass2= Controls::testInput($_POST['pass2']);               //securité et test du pass2 recu par l'utilisateur
                        
                        $isvalid = $this->auth->checkNewPass($pass1,$pass2);        //methode qui verifie que les mot de passe repondent aux critères
                        
                        if ($isvalid){                      // si tout est ok 
                            
                            $this->auth->resetPassword($_GET['id'],$pass1);         //methode qui modifie le  mot de passe 
                            
                            $message = 'Le nouveau mot de passe est enregistre';    // ajout du message flash
                            
                            
                        }else{
                            
                            $message = 'Les mots de passe sont differents ou/et les conditions ne sont pas respectées'; 
                        }
                    }
                    
                    $vue = new Vue('NewPass');                                      // creer la vue newpass
                    $vue->generer(array('flash'=> $message));                       // envoi les message flash  dans la vue
                    
                } else{
                    
                    echo  'le token est invalide ou depassé';                       // si l'url  ne contient PAS d'id NI de token                    
                }
                
            }
            
            
        }catch (Exception $e){
            $e->getMessage();        
        } 
        
        
    }   
}