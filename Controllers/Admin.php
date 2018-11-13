<?php

class Admin {
    
    public $article;
    public $authentification;
    public $projet;
    public $profil;
    
    
    
    public function __construct(){
        
        $this->article = new News();            // instancie un objet de la classe News
        $this->authentification = new Auth();   // instancie un objet de la classe Auth
        $this->projet = new Projet();           // instancie un objet de la classe Projet
        $this->profil = new Pageprofils();      // instancie un objet de la classe Pageprofils
        
        
        
    }
    /**
    * Controller de la page admin
    *
    * @return void
    */
    public function controlAdmin(){
        
        if(isset($_POST)){
            
            try{
                
                switch (true) {
                    case createArticle:                         // si on clique sur creer un article
                    
                    $image = $_FILES["imageArticle"];           //recuperation du fichier uploadé
                    $this->article->controlUploadNews($image);  // traitement du fichier uploadé 
                    break;
                    
                    case createProjet:                          // si on clique sur creer un un projet
                    
                    $image = $_FILES["imageProjet"];
                    $this->projet->controlUploadProjet($image);
                    break;
                    case contactSuperAdmin :
                    $mesdemandes =  $this->profil->competenceEnAttente($_POST['demande_competence']);
                    break;
                    
                    case modifierProfil:                        // si on clique pour modifier son profils
                        
                    $myprofil = $this->profils->updateProfil($_SESSION['id'],$_POST['description']); //modification du profils
                    break;
                        
                        
                    }
                    
                }catch (Exception $e){
                    $e->getMessage();
                    
                    
                    
                }
                
            }
            
        }
    }
