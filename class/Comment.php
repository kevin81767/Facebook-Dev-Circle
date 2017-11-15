<?php
class Comment extends Database{

    public function addComment($id_question,$id_user,$cont){
        $req=$this->getPDO()->prepare("INSERT INTO comments (id_question,id_user,cont,dateOfCom) values (?,?,?,NOW())");
		$req->execute(array($id_question,$id_user,$cont));
		return $req;
    }

    public function getComment($id){
        $req=$this->getPDO()->query("SELECT users.first_name, comments.cont
        FROM ((questions
        INNER JOIN comments ON comments.id_question = $id)
        INNER JOIN users ON questions.id_user = users.id);  ORDER BY c.id DESC");
		$res=$req->fetchAll();
		return $res;
    }
}