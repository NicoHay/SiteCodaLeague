<?php

class Superadmin {
    
    public $article;
    public $authentification;
    public $profils;
    public $projet;
    
    
    
    public function __construct(){
        
        $this->article = new News();                        // instancie un objet de la classe News
        $this->authentification = new Auth();               // instancie un objet de la classe Auth
        $this->profils = new Pageprofils();                 // instancie un objet de la classe Pageprofils
        $this->projet = new Projet();                       // instancie un objet de la classe Projet
        
    }

    /**
     * controlleur de la page SuperAdmin
     *
     * @return void
     */
    public function controlSuperadmin(){
        
        try{
            
            switch (isset($_POST)){     //test des post envoyer

                case createArticle:
                
                $image = $_FILES["imageArticle"];               
                $this->article->controlUploadNews($image);      //methode qui effectue les controles suite a un upload 
                break;
                
                case createProjet:
                
                $image = $_FILES["imageProjet"];

                $this->projet->controlUploadProjet($image);     //methode qui effectue les controles suite a un upload 
                
                break;
                
                case modifierProfil:
                    
                $values = $_POST;
                //methode qui effectue les controles suite a un upload 
                $myprofil = $this->profils->updateProfil($_SESSION['id'],$_POST['description'],$values);    
                
                break;
                

                
                case bouton:                                        // check si l'admin publie ou supprime une news  
                $retour = json_decode($_POST['bouton']);
                    
                    switch($retour[0]) {
                        
                        case 'del-but':
                        $this->article->deleteNews($retour[1]);     //methode qui supprime une news 
                        break;
                        
                        case 'ok-but':
                        $this->article->publishNews($retour[1]);    //methode qui met en ligne une news 
                        break;
                    }
                case bouton2:                                       // check si l'admin publie ou supprime un projet 

                $retour = json_decode($_POST['bouton2']);
                    
                    switch($retour[0]) {
                        
                        case 'del-but':
                        $this->projet->deleteProjet($retour[1]);    //methode qui supprime un projet
                        break;
                        
                        case 'ok-but':
                        $this->projet->publishProjet($retour[1]);   //methode qui met en ligne un projet
                        break;
                    }
                    
                    
                }
                
            }catch (Exception $e){
                $e->getMessage();
                
                
                
            }
        }
        
    }
