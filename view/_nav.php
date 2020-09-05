<nav class="navbar navbar-fixed-top">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <i class="material-icons">apps</i>
        </button>
        <a class="navbar-brand" href="index.html">
            <img class="main-logo" src="assets/dist/img/light-logo.png" id="bg" alt="">
        </a>
    </div>
    
    <div class="nav-container">
        <!-- /.navbar-header -->
        <ul class="nav navbar-nav hidden-xs">
            <li>
                <a id="fullscreen" href="#">
                    <i class="material-icons">fullscreen</i> 
                </a>
            </li>
        </ul>

        <ul class="nav navbar-top-links navbar-right">
        
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="material-icons">person_add</i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="edit_user.php?id=<?php echo base64_encode($user_id) ?>" class="bfont"><i class="ti-user"></i>&nbsp;  پرفیل  </a></li>
                    <li><a href="lockscreen.php" class="bfont" ><i class="ti-lock"></i>&nbsp; قفل صفخه  </a></li>
                    <li><a href="logout.php"  class="bfont" ><i class="ti-layout-sidebar-left"></i>&nbsp; خارج شدن  </a></li>
                </ul><!-- /.dropdown-user -->
            </li><!-- /.Dropdown -->
        
            <li class="log_out">
                <a href="logout.php">
                    <i class="material-icons">power_settings_new</i>
                </a>
            </li>

        </ul> 
    </div>
</nav>