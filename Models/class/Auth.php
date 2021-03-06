<?php

class Auth{
    
    private $db;
    private $cont;
    
    public $donnee;
    
    
    public function __construct(){
        
        $database = new Database();
        // $this->db = $database->accesDb("root","motdepasse","localhost","CodaLeague");     
      
        
    }
    
    /**
    * change le password d'un utilisateur
    *  le token est remis à null et la date du reset pass est mise a null
    *
    * @param string $pseudo
    * @param string $newPassword
    * 
    * @return void
    */
    public function resetPassword( $pseudo,$newPassword){
        
        $passHash = password_hash($newPassword, PASSWORD_BCRYPT); // hashache du mot de passe
        
        try{
            
            $req= $this->db->prepare("UPDATE users SET password_user = :newpass , token_pass = NULL , reset_pass_at = NULL WHERE id_user = :user");
            
            $req->bindParam(':user', $pseudo);
            $req->bindParam(':newpass', $passHash);
            
            $req->execute();
            
            
        }
        catch(PDOexception $e){
            
            echo $e->getMessage();
            
        }
        
        $req = null;
        
        
        
        
    }
    /**
    * check si le token est conforme a
    * le token doit correspondre a l'user ET
    * la demande de reset doit avoir moins de 24h
    *
    * @param string $user
    * @param int $token
    * 
    * @return bool 
    */
    public function checkResetToken( $user,  $token){
        
        try{
            
            $req = $this->db->prepare("SELECT * FROM users
            WHERE id_user = :user
            AND token_pass IS NOT NULL
            AND token_pass = :token
            AND NOW() < reset_pass_at + INTERVAL 24 hour");
            
            $req->bindParam(':user', $user);
            $req->bindParam(':token', $token);
            
            
            $req->execute();
            
            $this->donnee = $req->fetchAll();
            
            return $this->donnee;
        }
        
        catch(PDOexception $e){
            echo $e->getMessage();
            
        }
        $req = null;
        
        
    }
    
    /**
    * verification du mail soumis lors de mot de passe oublié 
    * ET recuperation de l'ID user du mail associé
    * 
    * controle si l'email correspond bien a un user dans la BDD
    * et appelle la methode sendMail
    *
    * @param string $mail
    * @return void
    */
    public function checkMail($mail){
        
        try{
            
            
            $req = $this->db->prepare("SELECT id_user , pseudo_log FROM users WHERE pseudo_log = :email ");
            
            $req->bindParam(':email', $mail);
            
            
            $req->execute();
            $resultat = $req->fetch();
            
            
            
            $this->sendMail($resultat);
            
        }
        
        catch(PDOexception $e){
            echo $e->getMessage();
            
        }
        $req = null;
    }
    
    /**
    * envoie de mail pour changer de password
    *
    * @param array $value array associatif
    * @return void
    */
    public function sendMail($value){
        
        
        $token = Controls::tokenGen(30);            //genere un token de 60 characteres
        
        //envoie du mail avec token
        mail($value->pseudo_log,"Réinitialisation de votre mot de passe sur codaleague.org","Bonjour, \n
        Pour changer votre mot de passe, veuillez cliquez sur le lien suivant: \n
        http://192.168.3.125/sitecodaleague/index.php?action=newpass&id=$value->id_user&token=$token
        Nous vous remercions pour votre confiance. \n
        Lequipe CodaLeague.");
        
        
        //enregistre token en bdd et update de la date du reset
        $req= $this->db->prepare("UPDATE users SET token_pass = :token , reset_pass_at = NOW()
        WHERE id_user = :id_user");
        
        $req->bindParam('token', $token);
        $req->bindParam('id_user', $value->id_user);
        
        $req->execute();
        
    }
    
    
    
    
    /**
    * control si un utilisateur est authentifier
    * SI oui recupere sont grade en BDD
    * ET ensuite enregistre sont grade dans la session
    * 
    * appelle la methode makesession
    *
    * @param string $login
    * @param string $password
    * @return boolean
    */
    public function isAuth($login,$password){
        
        
        $req= $this->db->prepare("SELECT password_user, grade, id_user FROM users WHERE pseudo_log = :login") ;
        $req->bindParam('login',$login);
        
        $req->execute();
        $passDb =$req->fetch();
        
        
        $grade = $passDb->grade;
        
        if(password_verify($password,$passDb->password_user)){
            
            $_SESSION['id']= $passDb->id_user;
            
            $this->makeSession($login,$grade);
            
            
            
        }else{
            
            
            return $message ='Mot de passe ou login incorrect ';
            
        }
        
        
        
    }
    
    /**
    * Affecte le grade a la session de l'user 
    * ET le renvoie sur la page login
    *
    * @param string $user
    * @param int $grade
    * @return void
    */
    public function makeSession($user,$grade){
        
        
        
        if($grade == 1){
            
            $_SESSION['grade'] = 'admin';
            
            
        }elseif($grade == 2){
            
            $_SESSION['grade'] = 'superadmin';
            
            
            
        }
        
        header("Location: index.php?action=login");
        
        
    }
    
    /**
    * detruit la session 
    *
    * @return void
    */
    public function destroySession(){ 
        
        session_destroy();
        header("Location: index.php?action=login");
        
    }
    
    /**
    * Controlle du nouveau mot de passe recu
    *
    * @param string $pass1
    * @param string $pass2
    * 
    * @return bool
    */
    public function checkNewPass($pass1,$pass2){
        
        //check si le mot de passe comporte 1 chiffre / 1 majuscule / a plus de 8 characteres
        $verify = preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$#',$pass1); 
        
        if(($pass1 === $pass2) && ($verify == 1)){      //check si les deux mot de passe saisis sont identiques 
            
            return true;
            
        }else{
            
            return false;
        }
        
    }
    
    
    
    
}
