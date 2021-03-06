<div class="clearfix">
<div id="main_sidebar">
<div class="sidebar_inner">
<div class="sidebar-custom navbar-inverse sidebar" role="navigation">
<div class="sidebar-nav navbar-collapse">
	<div class="side_logo text-center sidebar-background">
		<a class='current-parent current' href="<?=base_url();?>"><img src="<?=base_url('assets/images/ProvocativLogoSmall.png')?>" /></a>
	</div>
	<ul class="nav" id="side-menu">
		<li class="small-text-menu hide_el">Navigation</li>
		<li class='current-parent current'>
			<a class='current-parent current' href="<?=base_url('home')?>" data-toggle="side_tooltip" data-placement="right" title="Start"><i class="fa fa-home fa-fw"></i> <span class="menu_title">Start</span></a>
		</li>
		<li>
			<a href="javascript:void(0)" data-toggle="side_tooltip_offset" data-placement="right" title="Interface"><span class="fa arrow"></span><i class="fa fa-star fa-fw"></i> <span class="menu_title">Verizon</span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="<?=base_url('overview/verizon')?>">Channel Overview</a>
				</li>
				<li>
					<a href="#">UCCaaS iLead</a>
				</li>
				<li>
					<a href="#">4G ISR iLead</a>
				</li>
				<li>
					<a href="<?=base_url('stats/view/?id=4')?>">Captain UCCaaS</a>
				</li>
				<li>
					<a href="<?=base_url('stats/view/?id=6')?>">Bookings Calculator</a>
				</li>
				<li>
					<a href="#">EZ-Proposal</a>
				</li>
				<li>
					<a href="<?=base_url('stats/nwnw_view')?>">NoWiresNoWorries.com</a>
				</li>
			</ul>
		</li>
		<li>
			<a href="javascript:void(0)" data-toggle="side_tooltip_offset" data-placement="right" title="Interface"><span class="fa arrow"></span><i class="fa fa-star fa-fw"></i> <span class="menu_title">Orbcomm</span></a>
			<ul class="nav nav-second-level">
				<li>
					<a href="#">Channel Overview</a>
				</li>
			</ul>
		</li>		
		<?php
		if ($user->user_role == 5) {
			?>
			<li>
				<a href="<?= base_url('modules/show') ?>" data-toggle="side_tooltip" data-placement="right"
				   title="Users"><i class="fa fa-cubes"></i> <span class="menu_title">Module Management</span></a>
			</li>
            <li>
				<a href="<?= base_url('roles/show') ?>" data-toggle="side_tooltip" data-placement="right" title="Roles"><i
							class="fa fa-key"></i> <span class="menu_title">Role Management</span></a>
			</li>
			<li>
				<a href="<?= base_url('users/show') ?>" data-toggle="side_tooltip" data-placement="right" title="Users"><i
							class="fa fa-users"></i> <span class="menu_title">User Management</span></a>
			</li>
			<?php
		}
		?>
	</ul>
</div>
<!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
</div>
</div>
<div id="main-content">
	<!-- START Navbar Default -->
<nav class="navbar navbar-default navbar-static-top hidden-xs">
<div class="navbar-header">
<div class="container-fluid">
<div class="navbar-header hidden-lg hidden-md hidden-sm">
</div>
</div>
</div>
<!-- /.navbar-header -->
<ul class="nav navbar-top-links navbar-left hidden-xs">
<li>
<a id="sidebar_toggle" href="#">
	<i class="fa fa-bars fa-fw fa-lg"></i>
</a>
</li>
</ul>
<ul class="nav navbar-top-links navbar-right">
<li class="dropdown">
<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">
	<i class="fa fa-bell fa-lg"></i>
	<i class="fa fa-circle text-info small icon-notification"></i>
</a>
<ul class="dropdown-menu dropdown-alerts">
	<li class="dropdown-header">You Have 0 Notifications</li>
	<li class="divider"></li>
	<li>
		<a href="#">
			<div>
				<span>N/A</span>
				<span class="label label-warning pull-right">Only a test!</span>
			</div>
		</a>
	</li>
</ul>
<!-- /.dropdown-alerts -->
</li>
<!-- /.dropdown -->
<!-- START Avatar -->
<li>
<a class="nav-brand dropdown dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	<img src="<?=base_url('assets/images/business_guy.png')?>" class="img-circle avatar-height-20" alt="Menu"> <span class="caret"></span>
</a>
<ul class="dropdown-menu">
	<li class="dropdown-header">Signed as <?=$user->user_email?></li>
	<li role="separator" class="divider"></li>
	<li><a href="#"><i class="fa fa-user margin-right-5"></i> Your Profile</a></li>
	<li><a href="#"><i class="fa fa-gear margin-right-5"></i> Settings</a></li>
	<li role="separator" class="divider"></li>
	<li><a href="<?=base_url("home/logout")?>"><i class="fa fa-sign-out margin-right-5"></i> Sign Out</a>
	</li>
</ul>
</li>
<!--  Avatar END -->
<!-- /.dropdown -->
<!-- START Avatar -->
<!--  Avatar END -->
</ul>
<!-- /.navbar-top-links -->
</nav>