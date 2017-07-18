<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="empty_page.html#">
                        <span class="clear"> <span class="block m-t-xs"> 
                        	<strong class="font-bold"><?=Auth::user()->name?></strong>
                        </span> 
                        <span class="text-muted text-xs block"><?=Auth::user()->role?> 
                        <b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                       
                        <li class="divider"></li>
                        <li><a href="<?=url("auth/logout")?>">Logout</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    IN+
                </div>
            </li>
            <li class="active">
                <a href="#"><i class="fa fa-th-large"></i> <span class="nav-label">Opex</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li ><a href="<?=url("opex/create")?>">Create</a></li>
                   
                </ul>
            </li>
            
            
        </ul>

    </div>
</nav>