<?php

class Routeur {
    
    private $ctrlLogin;
    private $ctrlResetPass;
    private $ctrlNewPass;
    private $ctrlContact;
    private $ctrlAdmin;
    private $ctrlNewsarchive;
    private $ctrlProfils;
    private $ctrlProfiluser;
    private $ctrlPortfolio;
    private $ctrlSuperadmin;
    private $ctrlHome;
    
    
    public function __construct(){
        
        $this->authentification = new Auth();                   // instancie un objet de la classe PageProfils
    }
    
    /**
    * methode pour appeler les different controlleurs en fonction des 
    *
    * @return void
    */
    public function routerRequete(){
        
        if (isset($_POST['deco'])){                                     //si on click sur deconnection
            
            $deconnexion = $this->authentification->destroySession();   //methode qui detruit la session de l'utilisateur 
        }
        
        
        
        if (isset($_GET)){                        //si on a bien une action dans l'url
            
            switch($_GET['action']){                        // on switch en fonction des valeur de 'laction dans l'url
                
                case login:
                $ctrlLogin = new Login();                   // instancie un controlleur (ici : Login)
                $ctrlLogin->controlSession();               // appel de la methode controlSession de la classe Login 
                break;
                case resetpass:
                $ctrlResetPass = new ResetPass();
                $ctrlResetPass->controlResetPass();
                break;
                case newpass:
                $ctrlNewPass = new NewPass();
                $ctrlNewPass->controlNewPass();
                break;
                case contact:
                $ctrlContact = new Contact();
                $ctrlContact->controlContact();
                break;
                
                case newsarchive:
                $ctrlNewsarchive = new Newsarchive();
                $ctrlNewsarchive->controlNewsarchive();
                break;
                
                case profils:
                $ctrlProfils = new Profils();
                $ctrlProfils->controlProfils();
                break;
                
                case profiluser:
                $ctrlProfiluser = new Profiluser();
                $ctrlProfiluser->controlProfiluser();
                break;
                
                case portfolio:
                $ctrlPortfolio = new Portfolio();
                $ctrlPortfolio->controlPortfolio();
                break;
                
                default:                                                // si aucune valeur action dans l'url ne correspond au cas testés
                $ctrlHome = new Home();
                $ctrlHome->controlHome();
                
            }
            
        }
        else{
            
            $ctrlHome = new Home();                                     // si on a aucune valeur action dans l'url
            $ctrlHome->controlHome();
            
            
        }
      
        
    }
}