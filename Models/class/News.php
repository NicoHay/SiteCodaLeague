<?php

class News {
    
    private $db;
    public $donnee;
    
    
    public function __construct(){
        
        $database = new Database();
        // $this->db = $database->accesDb("root","motdepasse","localhost","CodaLeague");
     
    }
    
    
    /**
    * cree une news 
    *
    * @param string $id_user
    * @param string $title_art
    * @param string $img_art
    * @param string $content_art
    * @return void
    */
    public function createNews($id_user,$title_art,$img_art,$content_art){
        
        try{
            
            $req = $this->db->prepare("INSERT INTO news (id_user,title,img,content )VALUES (:id_user ,:title_art,:img_art,:content_art )");
            
            $req->bindParam(':id_user', $id_user);
            $req->bindParam(':title_art', $title_art);
            $req->bindParam(':img_art', $img_art);
            $req->bindParam(':content_art', $content_art);
            
            $req->execute();
            
        }
        catch(PDOexception $e){
            echo $e->getMessage();
            
        }
        $req = null;
    }
    
    /**
    * Supprime une news
    *
    * @param int $id
    * @return void
    */
    public function deleteNews($id){
        
        try{
            $req = $this->db->prepare("DELETE FROM news WHERE id_news = :id");
            $req->bindParam(':id', $id);
            
            $req->execute();
        }
        catch(PDOexception $e){
            echo $e->getMessage();
            
        }
        $req = null;
    }
    
    /**
    * publie une news 
    *
    * @param int $id_news
    * @return void
    */
    public function publishNews($id_news){
        try{
            
            $req = $this->db->prepare("UPDATE news SET set_online = 1 WHERE id_news = :id_news");
            $req->bindParam(':id_news', $id_news);
            
            $req->execute();
        }
        catch(PDOexception $e){
            echo $e->getMessage();
            
        }
        $req = null;
        
    }
    
    /**
    * recupere toutes les news
    *
    * @return array associatif
    */
    public function showNews(){
        try{
            $req = $this->db->prepare("SELECT * FROM news WHERE set_online = 1 ORDER BY published_at DESC");
            
            $req->execute();
            
            $this->donnee= $req->fetchAll();
            
            return $this->donnee;
        }
        catch(PDOexception $e){
            echo $e->getMessage();
            
        }
        $req = null;
        
    }
    /**
    * recupere toutes les news qui ne sont pas valider par le superadmin
    * (set_online=0) 
    * 
    *
    * @return array associatif
    */
    public function showUnvalidatedNews(){
        try{
            $req = $this->db->prepare
            ("SELECT *, profils.pseudo_sh FROM news
            
            INNER JOIN profils ON news.id_user = profils.id_user
            
            WHERE news.set_online = 0
            ORDER BY published_at ASC");
            
            $req->execute();
            $this->donnee= $req->fetchAll();
            
            return $this->donnee;
        }
        catch(PDOexception $e){
            echo $e->getMessage();
            
        }
        $req = null;
        
    }
    
    /**
    * effectue tous les controle sur les fichiers uploadés
    * 
    * 
    *
    * @param array $image
    * @return void
    */
    public function controlUploadNews($image){
        
        $accepted = ["jpg","png","jpeg","svg","gif"];           //extensions acceptées
        $chemin = "Ressources/img/imgNews/";                    // chemin de destination
        $extension= pathinfo($image["name"])["extension"];      //recuperation de lextension du fichier uploadé
        $name = Controls::tokenGen(10).".".$extension;          //genere un nom de fichier et ajoute l'extension du fichier
        
        $image_info = getimagesize($image["tmp_name"]);         //recupere les dimensions de limage
        $image_width = $image_info[0];
        $image_height = $image_info[1];
        
        
        if((in_array($extension,$accepted)) ){                      //si lextension est acceptée
            
            if($image["size"] > 2000000) {                          //si a taille est inferieure a 2mo
                echo'L\'image ne doit pas dépasser 2Mo';
            }
            
            else if($image_width < 400 && $image_height < 400) {    //si les dimensions correspondent
                echo'L\'image doit faire au moins 400 x 400px';
            }
            
            else{
                move_uploaded_file($image["tmp_name"], $chemin.$name);      // deplacement du fichier du dossier temporaire au dossier de destination
                
                // creation de la news
                $this->createNews($_SESSION['id'],$_POST['title_article'],$name,$_POST['content_article']); 
            }
            
        }
        else {
            echo'Veuillez choisir une image avec une extension valide (.jpg, .jpeg, .png , .svg, .gif)';
        }
    }
}
