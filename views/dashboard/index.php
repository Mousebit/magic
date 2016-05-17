<?php
$link = $_SERVER['REQUEST_URI'];
$replace = str_replace("/", "", $link);


echo '<ol class="breadcrumb">
                <li><a href="index">Home</a></li></ol>';

?>



<div class="row">

<div class="col-md-2">
    <div class="admin_menu">
        <h4>Admin Menu</h4>
        <hr>
        <ul>
            <li><a href="users">Users</a></li>
            <li><a href="content">Content</a></li>
            <li><a href="appearance">Appearance</a></li>
        </ul>
    </div>

</div>

<div class="col-md-6">
    <div class="dashboardcontent">
    <div class="dashboardtitle">

   <h5>
Welcome to the Admin Dashboard
</h5>
        </div>
        </div>
</div>


<div class="col-md-4">

<div class="site_stats">

    <h4>Web Stats</h4>

    <p>This is where data goes.</p>



</div>

   </div>

    </div>