<?php

class Content extends Controller {

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

    }
    function index()
    {
        $this->view->render('content/index');
    }
    function logout()
    {
        Session::destroy();
        header('location: ../login');
        exit;
    }
    public function createarticle(){
        $data = array();
        $data['type'] = "article";
        $data['title'] = $_POST['title'];
        $data['author'] = $_POST['author'];
        $data['date'] = $_POST['date'];
        $data['message'] = $_POST['message'];
        
        //Do error checking
        $this->model->createarticle($data);
    
        header('Location: ../content');    
      
        
    }
    
     public function createblog(){
        $data = array();
        $data['type'] = "blog";
        $data['title'] = $_POST['title'];
        $data['author'] = $_POST['author'];
        $data['date'] = $_POST['date'];
        $data['message'] = $_POST['message'];
        
        //Do error checking
        $this->model->createblog($data);
    
        header('Location: ../content');    
      
        
    }
    
    public function contentFormBlog(){
        $this->view->render('content/createblog');
        
    }
    
    public function contentForm(){
        $this->view->render('content/createarticle');
    }
    public function viewContent(){
        $this->view->contentList = $this->model->contentList();
        $this->view->render('content/viewcontent');
    }


    public function edit($id){

        //fetch individual user
        $this->view->user = $this->model->contentList($id);
        $this->view->render('content/edit');
    }
    public function delete($id){
        $this->model->delete($id);
        header('location: ' . URL . 'content');
    }


}