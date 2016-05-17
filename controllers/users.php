<?php

class Users extends Controller {

    function __construct()
    {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        if ($logged == false){
            Session::destroy();
            header('location: ../login');
            exit;
        }
        $this->view->js = array('users/js/default.js');

    }
    function index()
    {
        $this->view->userList = $this->model->userList();
        $this->view->render('users/index');
    }
    public function create()
    {
        $data = array();
        $data['username'] = $_POST['username'];
        $data['password'] = $_POST['password'];
        $data['role'] = $_POST['role'];

        //Do your error checking

        $this->model->create($data);
        header('location: ' . URL . 'users');
    }
    public function edit($id){

        //fetch individual user
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render('users/edit');

    }

    public function delete($id){
        $this->model->delete($id);
        header('location: ' . URL . 'users');
    }
     function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
}