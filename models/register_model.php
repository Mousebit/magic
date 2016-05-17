<?php

class Register_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function run()
    {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $test = $this->db->prepare("SELECT * from users WHERE username = ?");
        $test->execute(array($username));

        if($test->rowCount() == 0) {

            $sth = $this->db->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
            $sth->execute(array(':username' => $username, ':password' => $hash));
            echo 'The '.$username.' has successfully been registered. <br> <a href="../login">login</a>';
        } else {

            echo $username.' has been taken by another user';

        }



    }
}