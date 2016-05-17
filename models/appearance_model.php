<?php

class Appearance_Model extends Model {

    function __construct() {
        parent::__construct();
    }
    function showBreadCrumb(){
        $link = $_SERVER['REQUEST_URI'];
        $replace = str_replace("/", "",$link);

        echo '<ol class="breadcrumb">
    <li><a href="index">Home</a></li>
    <li><a href="dashboard">Admin</a></li>
    <li class='.$replace.'">'.ucfirst($replace).'</li>
</ol>';
    }

}
