<?php
$link = $_SERVER['REQUEST_URI'];
$replace = str_replace("/", "", $link);


echo '<ol class="breadcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="'.URL.'dashboard">Admin</a></li>
                <li>'.ucfirst($replace).'</li></ol>';

?>
<div class="row">
    <div class="col-md-12 pagetitle"><h2>Content</h2></div>

</div>


<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-2"><div class="content-button"><a href="<?php URL ?>content/contentForm">Create Article</a></div></div>
    <div class="col-md-2"><div class="content-button"><a href="<?php URL ?>content/contentFormBlog">Create Blog</a></div></div>
    <div class="col-md-2"><div class="content-button"><a href="<?php URL ?>content/viewContent">View Content</a></div></div>
    <div class="col-md-3"></div>
</div>