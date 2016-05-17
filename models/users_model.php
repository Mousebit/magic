<?php

class Users_Model extends Model {

    function __construct() {
        parent::__construct();
    }
    public function userList(){
        $sth = $this->db->prepare("SELECT * FROM users");
        $sth->execute();
        return $sth->fetchAll();
    }
    public function userSingleList($id){
        $sth = $this->db->prepare('SELECT id, username, role FROM USERS');
        $sth->execute(array(':id' => $id));
        return $sth->fetch();
    }
    public function create($data){

        $sth = $this->db->prepare('INSERT INTO users (`username`, `password`, `role`) VALUES (:username, :password, :role)');
        $sth->execute(array(
            ':username'=> $data['username'],
            ':password' => password_hash($data['password'], PASSWORD_DEFAULT),
            ':role' => $data['role']
        ));
        return $sth->fetchAll();
    }
    public function delete($id){
        $sth = $this->db->prepare('DELETE FROM users WHERE id = :id');
        $sth->execute(array(
            ':id' => $id
        ));
    }

}
