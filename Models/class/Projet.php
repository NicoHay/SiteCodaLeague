<?php

class Projet {

    private $db;
    public $donnee;


    public function __construct(){


        $database = new Database();
       // $this->db = $database->accesDb("root","motdepasse","localhost","CodaLeague");
     
    }


    public function createProjet($id_user,$title_projet,$content_projet,$img_projet,$participant,$technologie,$lien){


        try{


            $req = $this->db->prepare("INSERT INTO projets (id_user,title,content,img,participant,technologie,lien )
                                       VALUES (:id_user,:title_projet,:content_projet,:img_projet,:participant,:technologie,:lien)");

            $req->bindParam(':id_user', $id_user);
            $req->bindParam(':title_projet', $title_projet);
            $req->bindParam(':content_projet', $content_projet);
            $req->bindParam(':img_projet', $img_projet);
            $req->bindParam(':participant', $participant);
            $req->bindParam(':technologie', $technologie);
            $req->bindParam(':lien', $lien);

             $req->execute();


        }
        catch(PDOexception $e){
            echo $e->getMessage();

        }
        $req = null;
    }


    // public function updateProjet($title_art,$content_art,$img_art,$id_news){

    //     try{
    //         $req = $this->db->prepare("UPDATE news SET title = :title_art, content = :content_art, img = :img_art; published_at = NOW() WHERE id_news = :id_news");
    //         $req->bindParam(':title_art', $title_art);
    //         $req->bindParam(':content_art', $content_art);
    //         $req->bindParam(':img_art', $img_art);
    //         $req->bindParam(':id_news', $id_news);

    //         $req->execute();
    //     }
    //     catch(PDOexception $e){
    //         echo $e->getMessage();

    //     }
    //     $req = null;






    // }

    public function deleteProjet($id_projets){

        try{
            $req = $this->db->prepare("DELETE FROM projets WHERE id_projets = :id_projets");
            $req->bindParam(':id_projets', $id_projets);

            $req->execute();
        }
        catch(PDOexception $e){
            echo $e->getMessage();

        }
        $req = null;
    }





    public function publishProjet($id_projets){
        try{

             $req = $this->db->prepare("UPDATE projets SET set_online = 1 WHERE id_projets = :id_projets");
            $req->bindParam(':id_projets', $id_projets);

            $req->execute();
        }
        catch(PDOexception $e){
            echo $e->getMessage();

        }
        $req = null;




    }

    public function showProjet(){
        try{
            $req = $this->db->prepare("SELECT * FROM projets WHERE set_online = 1 ORDER BY published_at DESC");

            $req->execute();

            $this->donnee= $req->fetchAll();

            return $this->donnee;
        }
        catch(PDOexception $e){
            echo $e->getMessage();

        }
        $req = null;




    }

    public function showUnvalidatedProjet(){
        try{
            $req = $this->db->prepare
            ("SELECT *, profils.pseudo_sh FROM projets

            INNER JOIN profils ON projets.id_user = profils.id_user

            WHERE projets.set_online = 0
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


    public function controlUploadProjet($image){

             $accepted = ["jpg","png","jpeg"];
             $chemin = "Ressources/img/imgProjet/";
             $extension= pathinfo($image["name"])["extension"];
             $name = Controls::tokenGen(10).".".$extension;

             if($image["size"] < 2000000 && (in_array($extension,$accepted)) ){

                 move_uploaded_file($image["tmp_name"], $chemin.$name);
                 $this->createProjet($_SESSION['id'],$_POST['title_Projet'],$_POST['content_Projet'],$name,$_POST['participant_Projet'],$_POST['techno_Projet'],$_POST['lien_Projet']);

             }else{
                 echo'le Projet ne peut pas etre cree';
             }



    }

}
