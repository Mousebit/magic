<div class="row">
    <?php
    $link = $_SERVER['REQUEST_URI'];
    $replace = str_replace("/", "", $link);
    
    echo '<ol class="breadcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="'.URL.'dashboard">Admin</a></li>
                <li><a href="'.URL.'content">Content</a></li>
                <li>Content List</li></ol>';
    ?>
</div>
<div class="row">
    <div class="col-md-12"><h3 id="content-title">Content List</h3></div>
</div>
<div class="row">
    <div class="selecttype col-md-12">
        Filter by Type:
        <select>
            <option>All</option>
            <option>Article</option>
            <option>Blog</option>

        </select>
    </div>
</div>
    <div class="col-md-12">
        <div class="content-view">
            <table id="contentlist">
                <th>Type</th>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
                <th>Message</th>
                <?php
                foreach($this->contentList as $key => $value) {
                    echo '<tr>';
                    echo '<td>'.$value['type'].'</td>';
                    echo '<td>'.$value['title'].'</td>';
                    echo '<td>'.$value['author'].'</td>';
                    echo '<td>'.$value['date'].'</td>';
                    echo '<td>'.$value['message'].'</td>';
                    echo '<td><a href="'.URL.'content/edit/'.$value['id'].'">Edit</a>&nbsp;';
                    echo '<td><a href="'.URL.'content/delete/'.$value['id'].'">Delete</a></td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>
    </div>
</div>

</div>