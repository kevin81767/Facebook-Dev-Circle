<?php

// require("Database.php");
class Users extends Database {


    public function getUserswith($phone){

        $req=$this->getPDO()->prepare("SELECT * FROM users WHERE phone_number=?");
		$req->execute(array($phone));
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;
    }


    public function insertUser($first_name,$last_name,$number,$email){

        $req=$this->getPDO()->prepare("INSERT INTO users (first_name,last_name,email,phone_number) values (?,?,?,?)");
		$req->execute(array($first_name,$last_name,$email,$number));
		return $req;
    }
}