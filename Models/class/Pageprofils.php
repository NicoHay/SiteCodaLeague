<?php

class Pageprofils {

    private $db;
    public $donnee;


    public function __construct(){


        $database = new Database();
       // $this->db = $database->accesDb("root","motdepasse","localhost","CodaLeague");
     
    }


    public function showProfils( ){

        try{
            $req = $this->db->prepare("SELECT * FROM profils ORDER BY last_name ASC");

            $req->execute();
            $this->donnee= $req->fetchAll();

            return $this->donnee;
        }

        catch(PDOexception $e){

            echo $e->getMessage();

        }

        $req = null;




    }

    public function showProfildetaille($user){

        try{

            $req = $this->db->prepare
            ("SELECT email, description, pseudo_sh,first_name, last_name,
             skill_name, icon, skillvalue.id_skill, skill_value,  image  FROM skillvalue

            INNER JOIN skills ON skillvalue.id_skill = skills.id_skill
            INNER JOIN profils ON skillvalue.id_user = profils.id_user
            INNER JOIN users ON  skillvalue.id_user = users.id_user
            WHERE users.id_user = :id_user and skillvalue.skill_value > 0");

            $req->bindParam(':id_user', $user);


            $req->execute();
            $this->donnee= $req->fetchAll();

            return $this->donnee;
        }


        catch(PDOexception $e){
            echo $e->getMessage();
        }
    }

    public function showProfildetailleAdmin($user){

        try{

            $req = $this->db->prepare
            ("SELECT email, description, pseudo_sh, first_name, last_name,
             skill_name, icon, skillvalue.id_skill, skill_value, image FROM skillvalue

            INNER JOIN skills ON skillvalue.id_skill = skills.id_skill
            INNER JOIN profils ON skillvalue.id_user = profils.id_user
            INNER JOIN users ON  skillvalue.id_user = users.id_user
            WHERE users.id_user = :id_user ");

            $req->bindParam(':id_user', $user);


            $req->execute();
            $this->donnee= $req->fetchAll();

            return $this->donnee;
        }


        catch(PDOexception $e){
            echo $e->getMessage();
        }
    }


    public function updateProfil($user,$description,$value){

        try{

            $req = $this->db->prepare ("UPDATE profils

            INNER JOIN skillvalue ON profils.id_user = skillvalue.id_user
            INNER JOIN skills ON skillvalue.id_skill = skills.id_skill
            SET profils.description = :descriptif,
                skillvalue.skill_value = :skillValue

            WHERE profils.id_user = :user and skills.id_skill = :skillId");

            $req->bindParam(':user', $user);
            $req->bindParam(':descriptif', $description);

            foreach ($value as $key => $valeur) {

              if(is_numeric($key)){

                  $req->bindParam(':skillValue', $valeur);
                  $req->bindParam(':skillId', $key);

                  $req->execute();
            };
         }

        }  catch(PDOexception $e){
            echo $e->getMessage();
        }
        $req = null;

    }


    public function competenceEnAttente($competence){

        try{

            $req = $this->db->prepare ("INSERT INTO messagerie (skill_name) VALUES (:competence)");

            $req->bindParam(':competence', $competence);
            $req->execute();


        }  catch(PDOexception $e){
            echo $e->getMessage();
        }
        $req = null;

    }


    public function showCompetence(){

        try{

            $req = $this->db->prepare ("SELECT * FROM messagerie");
            $req->execute();
            $this->donnee= $req->fetchAll();

            return $this->donnee;

        }  catch(PDOexception $e){
            echo $e->getMessage();
        }
        $req = null;

    }

    public function addCompetence($competence){

      $icon = $competence.".svg";



        try{

          $req = $this->db->prepare ("INSERT INTO skills (skill_name, set_online, icon) VALUES (:competence, 1, :icon)");

          $req->bindParam(':competence', $competence);
          $req->bindParam(':icon', $icon);
          $req->execute();

        }  catch(PDOexception $e){
            echo $e->getMessage();
        }
        $req = null;


        //  en cours
        // $this->fonctionname();



    }



}
