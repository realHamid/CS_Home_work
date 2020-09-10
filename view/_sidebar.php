<div class="sidebar" role="navigation">          
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            
            <li class="nav-heading ">
                <span>  خوش آمدیدی   [ محمد جان  ] </span>
            </li>

            <li>
                <a href="index.html" class="material-ripple ">
                    <i class="material-icons">home</i> خانه  
                </a>
            </li>

            <li class="<?php if(!empty($menu) and $menu == 'ADMIN' ) echo "active" ?>">
                <a href="#" class="material-ripple"><i class="material-icons">local_shipping</i>  ادمین    <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="<?php if(!empty($menu) and !empty($subMenu) and $subMenu == 'ADD')  echo 'active'?>"><a href="add_user.php"> ثبت ادمین  </a></li>
                    <li class="<?php if(!empty($menu) and !empty($subMenu) and $subMenu == 'LIST') echo 'active'?>" ><a href="list_users.php"> لیست ادمین </a></li>
                </ul>
            </li>
            
            
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>