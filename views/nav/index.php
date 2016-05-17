<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Mousebit Web Solutions</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php echo URL; ?>">Home<span class="sr-only">(current)</span></a></li>
                <li><a href="<?php echo URL; ?>contact">Contact Us</a></li>
                <li><a href="<?php echo URL; ?>blog">Blog</a></li>
                <?php
                if ((Session::get('loggedIn') == true) && (Session::get('role') == 'admin') or (Session::get('role') == 'Owner')):?>
                    <li><a href="<?php echo URL; ?>dashboard">Admin</a></li>
                <?php endif; ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <!--<li><a href="<?php echo URL; ?>login">login</a></li>-->
                        <?php
                        if (Session::get('loggedIn') == true):?>
                            <li><a href="<?php echo URL; ?>dashboard/logout">Logout</a></li>
                        <?php else: ?>
                            <li><a href="<?php echo URL; ?>login">Login</a></li>
                        <?php endif; ?>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>