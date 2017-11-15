<?php

class Questions extends Database{

    public function addQuestion($id_user,$content){
        $req=$this->getPDO()->prepare("INSERT INTO questions (id_user,content,dateOfPost) values (?,?,NOW())");
		$req->execute(array($id_user,$content));
		return $req;
    }

    public function getQuestions(){
        $req=$this->getPDO()->query("SELECT a.first_name, a.last_name, b.id_user,b.id, b.content, b.dateOfPost FROM users a, questions b WHERE b.id_user=a.id ORDER BY b.id DESC");
		$res=$req->fetchAll();
		return $res;
    }

    public function getQuestionBy($id)
    {
        $req=$this->getPDO()->query("SELECT a.id, a.first_name, b.id, b.id_user, b.content, b.dateOfPost FROM users a, questions b WHERE b.id_user = a.id  AND b.id = $id ");
        
		$res=$req->fetchAll(PDO::FETCH_OBJ);
		return $res;;
    }

    // public function getCommentBy($id){
    //     $req=$this->getPDO()->query("SELECT a.id, a.first_name, a.last_name, b.id, b.id_user, b.content, b.dateOfPost, c.id, c.cont, c.id_question, c.dateOfCom FROM users a, questions b, comments c WHERE b.id_user=a.id AND b.id=c.id_question AND a.id=c.id_user ORDER BY c.id DESC");
	// 	$res=$req->fetchAll();
	// 	return $res;
    // }
}