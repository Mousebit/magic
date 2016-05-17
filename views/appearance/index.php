<?php
$link = $_SERVER['REQUEST_URI'];
$replace = str_replace("/", "", $link);


echo '<ol class="breadcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="'.URL.'dashboard">Admin</a></li>
                </ol>';

?>


<div class="row">

    <div class="col-md-12">

        <h3>Appearance</h3>

        <h6>Change Page Background</h6>

        <h6>Change Logo Color</h6>

        <h6>Change Column Type</h6>

    </div>

</div>