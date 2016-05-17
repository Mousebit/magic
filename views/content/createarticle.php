<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
<h5>Create New Article</h5>

<form method="post" action="<?php echo URL;?>content/createarticle">
    <label>Title:</label><input type="text" class="form-control" name="title"><br>
    <label>Author:</label><input type="text" class="form-control" name="author"><br>
    <label>Date:</label><input type="text" class="form-control date" name="date" value="<?php echo date('m/d/y');?>"><br>
    <label>Message:</label><textarea class="form-control" rows="3" name="message"></textarea><br>
    <div class="checkbox">
  <label>
    <input type="checkbox" value="">
   Post to Front Page.
  </label>
</div>
    <button type="submit">Submit</button>
</form>
</div>
<div class="col-md-2"></div>
</div>



