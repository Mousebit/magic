<?php
$link = $_SERVER['REQUEST_URI'];
$replace = str_replace("/", "", $link);


echo '<ol class="breadcrumb">
                <li><a href="index">Home</a></li>
                <li><a href="'.URL.'dashboard">Admin</a></li>
                <li>'.ucfirst($replace).'</li></ol>';

?>

<h3 id="usertitle">Users</h3>


<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-4">
        <button id="createuser" onclick="">Add User</button>

        <div class="user-form">
            <table>
                <form method="post" action="<?php echo URL;?>users/create">
                    <tr>
                        <td><label>Login</label></td><td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td><label>Password</label></td><td><input type="text" name="password"></td>
                    </tr>
                    <tr>
                        <td><label>Role</label></td>

                        <td><select name="role">
                                <option value="admin">Admin</option>
                                <option value="member">Member</option>

                            </select></td>

                    </tr>
                    <tr>
                        <td><label>&nbsp;</label></td><td><input type="submit"></td>
                    </tr>

                </form>
            </table>

        </div>

    </div>
    <div class="col-md-3"></div>
    <div class="col-md-4">
    <table>
        <tr>
            <td>
        <input type="text" id="search" class="form-control" placeholder="Search Users"></td><td><button>Search</button></td>
        </tr>
    </table>


    </div>
</div>





<div class="row">

    <div class="col-md-1"></div>
    <div class="col-md-10">
            <hr>
            <div class="userlist">
            <table id="userinfo">
                <th>ID</th>
                <th>UserName</th>
                <th>Role</th>
            <?php
            foreach($this->userList as $key => $value) {
                echo '<tr>';
                echo '<td>' . $value['id']. '</td>';
                echo '<td>' . $value['username']. '</td>';
                echo '<td>' . $value['role']. '</td>';
                echo '<td><a href="'.URL.'users/edit/'.$value['id'].'">Edit</a>&nbsp;';

                 if($value['role'] !== "Owner") {
                 echo '<a href="'.URL.'users/delete/'.$value['id'].'">Delete</a></td>';
                 }


                echo '</tr>';
            }
            ?>
                </table>
        </div>
    </div>
    <div class="col-md-1"></div>

</div>