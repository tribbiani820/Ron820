<header>
    <div class="topbar d-flex align-items-center">
    	<nav class="navbar navbar-expand">
    		<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
    		</div>

    		<div class="top-menu ms-auto">
    			<ul class="navbar-nav align-items-center">
    				<li class="nav-item mobile-search-icon">
    					<a class="nav-link" href="#">	<i class='bx bx-search'></i>
    					</a>
    				</li>
    
    				<li class="nav-item dropdown dropdown-large">
    					<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">0</span>
    						<i class='bx bx-bell'></i>
    					</a>
    					<div class="dropdown-menu dropdown-menu-end">
    						<div class="header-notifications-list"></div>
    					</div>
    				</li>
    				<li class="nav-item dropdown dropdown-large">
    					<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span class="alert-count">0</span>
    						<i class='bx bx-comment'></i>
    					</a>
    					<div class="dropdown-menu dropdown-menu-end">
    						<div class="header-message-list"></div>
    					</div>
    				</li>
    			</ul>
    		</div>
    		<div class="user-box dropdown">
    			<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
    				<img src="static/new-Ron820/picture/avatar-2.png" class="user-img" alt="user avatar">
    				<div class="user-info ps-3">
    					<p class="user-name mb-0"><?php echo $_SESSION['adminuser']['uname'];?></p>
    					<p class="designattion mb-0">
    					    <?php
    					        if($_SESSION['adminuser']['id'] == 0){
    					            echo "总代理";
    					        }else {
    					            echo "代理";
    					        }
    					    
    					    ?>
    					    </p>
    				</div>
    			</a> 
    			<ul class="dropdown-menu dropdown-menu-end">
    				<li><a class="dropdown-item" href="resetpass.php"><i class="bx bx-user"></i><span>修改密码</span></a>
    				</li>
    				<li>
    					<div class="dropdown-divider mb-0"></div>
    				</li>
    				<li><a class="dropdown-item" href="logout.php"><i class='bx bx-log-out-circle'></i><span>退出登录</span></a>
    				</li>
    			</ul>
    		</div>
    	</nav>
    </div>
</header>