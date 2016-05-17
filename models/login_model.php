<?php

class Login_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }
    public function run()
    {
        $sql = 'SELECT * FROM users WHERE username = :username';
        $data = $this->db->prepare($sql);
        $data->execute(array(':username' => $_POST['username']));

        while($data_array = $data->fetch()){
            if(password_verify($_POST['password'],$data_array['password'])){
                Session::init();
                Session::set('role',$data_array['role']);
                Session::set('loggedIn', true);
                if(($data_array['role'] == 'Owner') or ($data_array['role'] == 'admin')) {
                    header('location: ../dashboard');
                } else {
                    header('location: ../index');
                }
            } else {
                header('location: ../login');
            }

        }

    }


}