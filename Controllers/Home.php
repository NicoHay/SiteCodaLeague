<?php

class Home {
    
    
    public $news;
    
    public function __construct(){
        
        $this->news = new News();                       // instancie un objet de la classe News
    }
    /**
    * controller de la page News détalle
    *
    * @return void
    */
    public function controlHome(){
        
        try{
            
            $donnees = $this->news->showNews();         //retourne les news en ligne de la Bdd            
            
            
            $vue = new Vue('Home');                     // creer la vue home
            $vue->generer(array('retour'=> $donnees));  // envoi les news dans la vue
            
        }catch (Exception $e){
            $e->getMessage();
            
            
            
        }
        
    }
    
}
