<?php

class Profiluser {
    
    
    public $detailprofil;
    
    
    public function __construct(){
        
        $this->detailprofil = new Pageprofils();          // instancie un objet de la classe PageProfils
                
    }
    
    /**
    * Controlleur de la page profil detailler
    *
    * @return void
    */
    public function controlProfiluser(){
        
        try{
            
            //methode qui recupere le profil d'un etudiant particulier correspondant a l'id dans  url
            $donnees = $this->detailprofil->showProfildetaille($_GET['id']); 
            
            
            $vue = new Vue('Profiluser');                           // creer la vue Portfolio
            $vue->generer(array('profildetaille'=> $donnees));      // envoi le profil dans la vue (tableau associatif)

        }catch (Exception $e){

            $e->getMessage();
            
            
        }
        
    }
    
}
