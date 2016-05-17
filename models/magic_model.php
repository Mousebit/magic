<?php

class Magic_Model extends Model
{

    function __construct()
    {
        parent::__construct();
    }

    public function createcard($data){
        $sth = $this->db->prepare('INSERT INTO cards (`title`, `cost`, `color`, `1st_attribute`, `2nd_attribute`, `3rd_attribute`) VALUES (:title, :cost, :color, :1st_attribute, :2nd_attribute, :3rd_attribute)');
        $sth->execute(array(
            ':title' => $data['title'],
            ':cost' => $data['cost'],
            ':color' => $data['color'],
            ':1st_attribute' => $data['1st_attribute'],
            ':2nd_attribute' => $data['2nd_attribute'],
            ':3rd_attribute' => $data['3rd_attribute'],
        ));

    }
    public function cardList()
    {
        $sth = $this->db->prepare('SELECT * FROM cards');
        $sth->execute();
        return $sth->fetchAll();
    }
}