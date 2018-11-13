<?php

class Login {
    
    
    public $auth;
    public $superAdmin;
    public $admin;
    public $article;
    public $profils;
    public $projet;
    
    public function __construct(){
        
        $this->auth = new Auth();                   // instancie un objet de la classe Auth
        $this->article = new News();                // instancie un objet de la classe News
        $this->projet = new Projet();               // instancie un objet de la classe Projet
        $this->profils = new Pageprofils();         // instancie un objet de la classe Pageprofils
        
    }
    /**
    * Controlleur de la session
    *
    * @return void
    */
    public function controlSession(){
        
        if(isset($_SESSION['grade']) ){                     // si on a un grade de la session
            
            switch (true) {                                 //on check le grade de la session
                
                case admin:                                 //si il a le grade admin dans sa session
                
                $this->admin = new Admin();                 // instancie un objet de la classe Admin
                $this->admin->controlAdmin();               // appele la methode controlAdmin
                
                $myprofil = $this->profils->showProfildetailleAdmin($_SESSION['id']);   //methode qui affiche le profil detaillé de l'admin
                
                $vue = new Vue('Admin');                    // creer la vue admin
                $vue->generer(array("profil"=> $myprofil)); // envoi le profil detaillé dans la vue
                
                break;
                
                
                case superadmin:                                //si il a le grade superadmin dans sa session
                
                $this->superAdmin = new Superadmin();               // instancie un objet de la classe SuperAdmin
                $this->superAdmin->controlSuperadmin();             // appele la methode controlSuperAdmin
                
                $vue = new Vue('Superadmin');                       // creer la vue superadmin
                
                $myprofil = $this->profils->showProfildetailleAdmin($_SESSION['id']);   //methode qui affiche le profil detaillé de l'admin (ici du superadmin)
                $donnees = $this->article->showUnvalidatedNews();                       //methode qui affiche les news en attente de validation 
                $donneesProjet = $this->projet->showUnvalidatedProjet();                //methode qui affiche les projets en attente de validation 
                $listCompetence = $this->profils->showCompetence();


                $vue->generer(array('listeNews'=> $donnees,                             // envoi le profil detaillé de l'admin (ici du superadmin) a la vue
                "profil"=> $myprofil,                               // envoi les news en attente de validation a la vue
                'listeProjets' => $donneesProjet,
                'listeCompetences' => $listCompetence));                 // envoi les projets en attente de validation a la vue
                break;
                
            }
            
        }

        else{
            $this->controlLogin();                                  // appelle le controlleur de la page login
        }
    }
    /**
     * control pagelOGIN
     *
     * @return void
     */
    public function controlLogin(){
        
        try{
            
            if ( isset($_POST["connect"]) && isset($_POST['login']) && isset($_POST['password']) ){ //si on recupere les POST connect, login,password
                
                $login = Controls::testInput($_POST['login']);                          //securité et test du login recu par l'utilisateur
                $password = Controls::testInput($_POST['password']);                    //securité et test du mot de passe reçu par l'utilisateur
                
                
                $connexion = $this->auth->isAuth($login,$password);                     //appel de la methode isAuth de la classe Auth
                
            }
            
            $vue = new Vue('Login');                                // creer la vue admin
            $vue->generer(array('flash'=> $connexion));             // envoi les message flash  dans la vue
            
        }catch (Exception $e){
            $e->getMessage();
            
            
        }
        
    }
    
}
