<h1>User: Edit</h1>

<?php

print_r($this->users);

?>

<form method="post" action="<?php echo URL;?>users/create">
    <label width=100px>Login</label><input type="text" name="username"><br>
    <label width=100px>Password</label><input type="text" name="password"><br>
    <label>Role</label>
    <select name="role">
        <option value="admin">Admin</option>
        <option value="member">Member</option>

    </select>
    <label>&nbsp;</label><br><input type="submit">

</form>
