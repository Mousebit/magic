<?php

class Dashboard extends Controller {

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
        $auth = Session::get('role');
        if(($auth !== 'Owner') && ($auth !== 'admin')){
            Session::destroy();
            header('location: ../login');
        }

        $this->view->js = array('dashboard/js/default.js');

    }

    function index()
    {
        $this->view->render('dashboard/index');
    }
    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
    function xhrInsert()
    {
        $this->model->xhrInsert();
    }

}