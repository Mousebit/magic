<div class="row">
    <div class="col-md-3">
        <div id="create card">
            <form method="post" action="<?php echo URL;?>magic/createcard">
                <div class="form-group">
                    <label name="Title">Title:</label>
                    <input class="form-control" type="text" name="title">
                </div>
                <div class="form-group">
                    <label name="Cost">Cost:</label>
                    <input class="form-control" type="text" name="cost">
                </div>
                <div class="form-group">
                    <label name="color">Color</label>
                    <input class="form-control" type="text" name="color">
                </div>
                <div class="form-group">
                    <label name="attribute_one">1st Attribute:</label>
                    <input class="form-control" type="text" name="1st_attribute">
                </div>
                <div class="form-group">
                    <label name="attribute_two">2nd Attribute:</label>
                    <input class="form-control" type="text" name="2nd_attribute">
                </div>
                <div class="form-group">
                    <label name="attribute_three">3rd Attribute:</label>
                    <input class="form-control" type="text" name="3rd_attribute">
                </div>
                    <div class="form-group">
                        <label name="image">Image:</label>
                        <input class="form-control" type="file" name="image">
                    </div>
                <button class="btn btn-default">Submit</button>
                    </div>
            </form>
        </div>
    <div class="col-md-9">
        <div class="content-view">
            <table id="contentlist">
                <td>ID</td>
                <th>Title</th>
                <th>Cost</th>
                <th>Color</th>
                <th>1st Attribute:</th>
                <th>2nd Attribute:</th>
                <th>3rd Attribute:</th>
                <th>image:</th>
                <?php
                foreach($this->cardList as $key => $value) {
                    echo '<tr>';
                    echo '<td>'.$value['id'].'</td>';
                    echo '<td>'.$value['title'].'</td>';
                    echo '<td>'.$value['cost'].'</td>';
                    echo '<td>'.$value['color'].'</td>';
                    echo '<td>'.$value['1st_attribute'].'</td>';
                    echo '<td>'.$value['2nd_attribute'].'</td>';
                    echo '<td>'.$value['3rd_attribute'].'</td>';
                    echo '<td>'.$value['image'].'</td>';
                    echo '</tr>';
                }
                ?>
            </table>
        </div>

    </div>
</div>