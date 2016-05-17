<?php

class Content_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }
    function showBreadCrumb()
    {
        $link = $_SERVER['REQUEST_URI'];
        $replace = str_replace("/", "", $link);


        echo '<ol class="breadcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="http://amz.mousebit.com/dashboard">Admin</a></li>
                <li class=' . $replace . '">' . ucfirst($replace) . '</li>
        </ol>';
    }
    public function contentList()
    {
        $sth = $this->db->prepare('SELECT * FROM content');
        $sth->execute();
        return $sth->fetchAll();
    }
    public function createarticle($data){
        $sth = $this->db->prepare('INSERT INTO content (`type`, `title`, `author`, `date`, `message`) VALUES (:type, :title, :author, :date, :message)');
        $sth->execute(array(
            ':type' => 'article',
            ':title' => $data['title'],
            ':author' => $data['author'],
            ':date' => $data['date'],
            ':message' => $data['message']
        ));
    }
    
     public function createblog($data){
        $sth = $this->db->prepare('INSERT INTO content (`type`, `title`, `author`, `date`, `message`) VALUES (:type, :title, :author, :date, :message)');
        $sth->execute(array(
            ':type' => 'blog',
            ':title' => $data['title'],
            ':author' => $data['author'],
            ':date' => $data['date'],
            ':message' => $data['message']
        ));
    }
    
    
    public function delete($id){
        $sth = $this->db->prepare('DELETE FROM content WHERE id = :id');
        $sth->execute(array(
            ':id' => $id
        ));
    }

}