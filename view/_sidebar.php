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
                    <li class="<?php if(!empty($menu) and $menu == 'ADMIN' and !empty($subMenu) and $subMenu == 'ADD')  echo 'active'?>"><a href="add_user.php"> ثبت ادمین  </a></li>
                    <li class="<?php if(!empty($menu) and $menu == 'ADMIN' and !empty($subMenu) and $subMenu == 'LIST') echo 'active'?>" ><a href="list_users.php"> لیست ادمین </a></li>
                </ul>
            </li>

            <li class="<?php if(!empty($menu) and $menu == 'PROVINCE' ) echo "active" ?>">
                <a href="#" class="material-ripple"><i class="material-icons">local_shipping</i>  ولایت     <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="<?php if(!empty($menu) and $menu == 'PROVINCE' and !empty($subMenu) and $subMenu == 'ADD')  echo 'active'?>"><a href="add_province.php"> ثبت ولایت  </a></li>
                    <li class="<?php if(!empty($menu) and $menu == 'PROVINCE' and !empty($subMenu) and $subMenu == 'LIST') echo 'active'?>" ><a href="list_province.php"> لیست ولایت  </a></li>
                </ul>
            </li>


            <li class="<?php if(!empty($menu) and $menu == 'DISTRICT' ) echo "active" ?>">
                <a href="#" class="material-ripple"><i class="material-icons">local_shipping</i>  ولاسوالی     <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="<?php if(!empty($menu) and $menu == 'DISTRICT' and !empty($subMenu) and $subMenu == 'ADD')  echo 'active'?>"><a href="add_district.php"> ثبت ولاسوالی  </a></li>
                    <li class="<?php if(!empty($menu) and $menu == 'DISTRICT' and !empty($subMenu) and $subMenu == 'LIST') echo 'active'?>" ><a href="list_district.php"> لیست ولاسوالی  </a></li>
                </ul>
            </li>

            <li class="<?php if(!empty($menu) and $menu == 'CATEGORY' ) echo "active" ?>">
                <a href="#" class="material-ripple"><i class="material-icons">local_shipping</i>  دسته بندی      <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="<?php if(!empty($menu) and $menu == 'CATEGORY' and !empty($subMenu) and $subMenu == 'ADD')  echo 'active'?>"><a href="add_category.php"> ثبت دسته بندی   </a></li>
                    <li class="<?php if(!empty($menu) and $menu == 'CATEGORY' and !empty($subMenu) and $subMenu == 'LIST') echo 'active'?>" ><a href="list_category.php"> لیست دسته بندی   </a></li>
                </ul>
            </li>

        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>