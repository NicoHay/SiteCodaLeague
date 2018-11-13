<?php


class Database{

    public $pdo;




/**
 * Undocumented function
 *
 * @param string $login
 * @param string $password
 * @param string $host
 * @param string $database_name
 * 
 * @return object PDO
 */
    public function accesDb($login,$password,$host='localhost',$database_name){
        
        // si aucun objet PDO existe creer une connection
        if(!$this->pdo){

            $this->pdo =new PDO("mysql:dbname=$database_name;host=$host",$login,$password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);

        }


        return $this->pdo;
    }


}

