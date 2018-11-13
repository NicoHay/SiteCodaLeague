<?php

class Newsarchive {
    
    
    public $news;
    
    public function __construct(){
        
        $this->news = new News();               // instancie un objet de la classe News
        
        
    }

    /**
    * controller de la page NewsArchive
    *
    * @return void
    */
    public function controlNewsarchive(){
        
        try{
            
            
            $donnees = $this->news->showNews();             //methode qui recupere toutes les news online en BDD
            
            
            $vue = new Vue('Newsarchive');                  // creer la vue newsarchive
            $vue->generer(array('retour'=> $donnees));      // envoi les news dans la vue (tableau associatif)
            
        }catch (Exception $e){
            $e->getMessage();
            
            
            
        }
        
    }
    
}
