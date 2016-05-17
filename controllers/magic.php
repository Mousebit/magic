<?php

class Magic extends Controller
{

    function __construct()
    {
        parent::__construct();
    }
    function index()
    {
        $this->view->cardList = $this->model->cardList();
        $this->view->render('magic/index');
    }

    public function createcard(){
        $data = array();
        $data['title'] = $_POST['title'];
        $data['cost'] = $_POST['cost'];
        $data['color'] = $_POST['color'];
        $data['1st_attribute'] = $_POST['1st_attribute'];
        $data['2nd_attribute'] = $_POST['2nd_attribute'];
        $data['3rd_attribute'] = $_POST['3rd_attribute'];
        //$data['image'] = $_POST['image'];

        //Do error checking
        $this->model->createcard($data);
        header('Location: ' . URL . 'magic');


    }

}