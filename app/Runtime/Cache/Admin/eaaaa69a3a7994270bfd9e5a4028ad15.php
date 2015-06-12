<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
	<title>后台管理系统 - 系统状态</title>

<meta name="description" content="overview &amp; stats" />
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="/Public/assets/css/bootstrap.css" />
<link rel="stylesheet" href="/Public/assets/css/font-awesome.css" />

<!-- page specific plugin styles -->

<!-- text fonts -->
<link rel="stylesheet" href="/Public/assets/css/ace-fonts.css" />

<!-- ace styles -->
<link rel="stylesheet" href="/Public/assets/css/ace.css"
	class="ace-main-stylesheet" id="main-ace-style" />

<!--[if lte IE 9]>
	<link rel="stylesheet" href="/Public/assets/css/ace-part2.css" class="ace-main-stylesheet" />
	<![endif]-->

<!--[if lte IE 9]>
	<link rel="stylesheet" href="/Public/assets/css/ace-ie.css" />
	<![endif]-->

<!-- inline styles related to this page -->

<!-- ace settings handler -->
<script src="/Public/assets/js/ace-extra.js" type="text/javascript"></script>

<!-- HTML5shiv and Respond.js for IE8 to support HTML5 elements and media queries -->

<!--[if lte IE 8]>
	<script src="/Public/assets/js/html5shiv.js"></script>
	<script src="/Public/assets/js/respond.js"></script>
	<![endif]-->
</head>

<body class="no-skin">
	<!-- #section:basics/navbar.layout -->
	<div class="navbar navbar-default" id="navbar">
	<script type="text/javascript">try{ace.settings.check('navbar' , 'fixed')}catch(e){}</script>

	<div id="navbar-container" class="navbar-container">
		<!-- #section:basics/sidebar.mobile.toggle -->
		<button data-target="#sidebar" id="menu-toggler" class="navbar-toggle menu-toggler pull-left" type="button">
			<span class="sr-only">Toggle sidebar</span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>

			<span class="icon-bar"></span>
		</button>

		<!-- /section:basics/sidebar.mobile.toggle -->
		<div class="navbar-header pull-left">
			<!-- #section:basics/navbar.layout.brand -->
			<a class="navbar-brand" href="#">
				<small> <i class="fa fa-leaf"></i>
					Ace Admin
				</small>
			</a>

			<!-- /section:basics/navbar.layout.brand -->

			<!-- #section:basics/navbar.toggle -->

			<!-- /section:basics/navbar.toggle -->
		</div>

		<!-- #section:basics/navbar.dropdown -->
		<div role="navigation" class="navbar-buttons navbar-header pull-right">
			<ul class="nav ace-nav">
				<li class="grey">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ace-icon fa fa-tasks"></i>
						<span class="badge badge-grey">4</span>
					</a>

					<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-check"></i>
							4 Tasks to complete
						</li>

						<li class="dropdown-content ace-scroll" style="position: relative;">
							<div class="scroll-track" style="display: none;">
								<div class="scroll-bar"></div>
							</div>
							<div class="scroll-content" style="max-height: 200px;">
								<ul class="dropdown-menu dropdown-navbar">
									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Software Update</span>
												<span class="pull-right">65%</span>
											</div>

											<div class="progress progress-mini">
												<div class="progress-bar" style="width:65%"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Hardware Upgrade</span>
												<span class="pull-right">35%</span>
											</div>

											<div class="progress progress-mini">
												<div class="progress-bar progress-bar-danger" style="width:35%"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Unit Testing</span>
												<span class="pull-right">15%</span>
											</div>

											<div class="progress progress-mini">
												<div class="progress-bar progress-bar-warning" style="width:15%"></div>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">Bug Fixes</span>
												<span class="pull-right">90%</span>
											</div>

											<div class="progress progress-mini progress-striped active">
												<div class="progress-bar progress-bar-success" style="width:90%"></div>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="dropdown-footer">
							<a href="#">
								See tasks with details
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>

				<li class="purple">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="ace-icon fa fa-bell icon-animated-bell"></i>
						<span class="badge badge-important">8</span>
					</a>

					<ul class="dropdown-menu-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-exclamation-triangle"></i>
							8 Notifications
						</li>

						<li class="dropdown-content ace-scroll" style="position: relative;">
							<div class="scroll-track" style="display: none;">
								<div class="scroll-bar"></div>
							</div>
							<div class="scroll-content" style="max-height: 200px;">
								<ul class="dropdown-menu dropdown-navbar navbar-pink">
									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-pink fa fa-comment"></i>
													New Comments
												</span>
												<span class="pull-right badge badge-info">+12</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<i class="btn btn-xs btn-primary fa fa-user"></i>
											Bob just signed up as an editor ...
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-success fa fa-shopping-cart"></i>
													New Orders
												</span>
												<span class="pull-right badge badge-success">+8</span>
											</div>
										</a>
									</li>

									<li>
										<a href="#">
											<div class="clearfix">
												<span class="pull-left">
													<i class="btn btn-xs no-hover btn-info fa fa-twitter"></i>
													Followers
												</span>
												<span class="pull-right badge badge-info">+11</span>
											</div>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="dropdown-footer">
							<a href="#">
								See all notifications
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>

				<li class="green">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
						<span class="badge badge-success">5</span>
					</a>

					<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
						<li class="dropdown-header">
							<i class="ace-icon fa fa-envelope-o"></i>
							5 Messages
						</li>

						<li class="dropdown-content ace-scroll" style="position: relative;">
							<div class="scroll-track" style="display: none;">
								<div class="scroll-bar"></div>
							</div>
							<div class="scroll-content" style="max-height: 200px;">
								<ul class="dropdown-menu dropdown-navbar">
									<li>
										<a class="clearfix" href="#">
											<img alt="Alex's Avatar" class="msg-photo" src="/Public/assets/avatars/avatar.png">
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Alex:</span>
													Ciao sociis natoque penatibus et auctor ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>a moment ago</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a class="clearfix" href="#">
											<img alt="Susan's Avatar" class="msg-photo" src="/Public/assets/avatars/avatar3.png">
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Susan:</span>
													Vestibulum id ligula porta felis euismod ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>20 minutes ago</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a class="clearfix" href="#">
											<img alt="Bob's Avatar" class="msg-photo" src="/Public/assets/avatars/avatar4.png">
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Bob:</span>
													Nullam quis risus eget urna mollis ornare ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>3:15 pm</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a class="clearfix" href="#">
											<img alt="Kate's Avatar" class="msg-photo" src="/Public/assets/avatars/avatar2.png">
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Kate:</span>
													Ciao sociis natoque eget urna mollis ornare ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>1:33 pm</span>
												</span>
											</span>
										</a>
									</li>

									<li>
										<a class="clearfix" href="#">
											<img alt="Fred's Avatar" class="msg-photo" src="/Public/assets/avatars/avatar5.png">
											<span class="msg-body">
												<span class="msg-title">
													<span class="blue">Fred:</span>
													Vestibulum id penatibus et auctor  ...
												</span>

												<span class="msg-time">
													<i class="ace-icon fa fa-clock-o"></i>
													<span>10:09 am</span>
												</span>
											</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<li class="dropdown-footer">
							<a href="inbox.html">
								See all messages
								<i class="ace-icon fa fa-arrow-right"></i>
							</a>
						</li>
					</ul>
				</li>

				<!-- #section:basics/navbar.user_menu -->
				<li class="light-blue">
					<a class="dropdown-toggle" href="#" data-toggle="dropdown">
						<img alt="Jason's Photo" src="/Public/assets/avatars/user.jpg" class="nav-user-photo">
						<span class="user-info">
							<small>Welcome,</small>
							Jason
						</span>

						<i class="ace-icon fa fa-caret-down"></i>
					</a>

					<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
						<li>
							<a href="#">
								<i class="ace-icon fa fa-cog"></i>
								Settings
							</a>
						</li>

						<li>
							<a href="profile.html">
								<i class="ace-icon fa fa-user"></i>
								Profile
							</a>
						</li>

						<li class="divider"></li>

						<li>
							<a href="#">
								<i class="ace-icon fa fa-power-off"></i>
								Logout
							</a>
						</li>
					</ul>
				</li>

				<!-- /section:basics/navbar.user_menu -->
			</ul>
		</div>

		<!-- /section:basics/navbar.dropdown -->
	</div>
	<!-- /.navbar-container -->
</div>
	<!-- /section:basics/navbar.layout -->
	<div class="main-container container" id="main-container ">
		<script type="text/javascript">
			try {
				ace.settings.check('main-container', 'fixed')
			} catch (e) {
			}
		</script>

		<!-- #section:basics/sidebar -->
		<div class="sidebar                  responsive" id="sidebar" data-sidebar="true" data-sidebar-scroll="true" data-sidebar-hover="true">
			<script type="text/javascript">try{ace.settings.check('sidebar' , 'fixed')}catch(e){}</script>

			<div id="sidebar-shortcuts" class="sidebar-shortcuts">
				<div id="sidebar-shortcuts-large" class="sidebar-shortcuts-large">
					<button class="btn btn-success">
						<i class="ace-icon fa fa-signal"></i>
					</button>

					<button class="btn btn-info">
						<i class="ace-icon fa fa-pencil"></i>
					</button>

					<!-- #section:basics/sidebar.layout.shortcuts -->
					<button class="btn btn-warning">
						<i class="ace-icon fa fa-users"></i>
					</button>

					<button class="btn btn-danger">
						<i class="ace-icon fa fa-cogs"></i>
					</button>

					<!-- /section:basics/sidebar.layout.shortcuts -->
				</div>

				<div id="sidebar-shortcuts-mini" class="sidebar-shortcuts-mini">
					<span class="btn btn-success"></span>

					<span class="btn btn-info"></span>

					<span class="btn btn-warning"></span>

					<span class="btn btn-danger"></span>
				</div>
			</div>
			<!-- /.sidebar-shortcuts -->

			<ul class="nav nav-list" style="top: 0px;">
				<li class="active">
					<a href=#>
						<i class="menu-icon fa fa-tachometer"></i>
						<span class="menu-text"><?php echo L('home_start');?></span>
					</a> <b class="arrow"></b>
				</li>

				<li class="">
					<a class="dropdown-toggle" href="#">
						<i class="menu-icon fa fa-desktop"></i>
						<span class="menu-text"><?php echo L('system_setting');?></span> <b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="">
							<a href="<?php echo U('setting/');?>">
								<i class="menu-icon fa fa-caret-right"></i>
								<?php echo L('basic_setting');?>
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="elements.html">
								<i class="menu-icon fa fa-caret-right"></i>
								<?php echo L('email_setting');?>
							</a>

							<b class="arrow"></b>
						</li>
					</ul>
				</li>

				<li class="">
					<a class="dropdown-toggle" href="#">
						<i class="menu-icon fa fa-list"></i>
						<span class="menu-text"><?php echo L('article_manage');?></span>

						<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="">
							<a href="tables.html">
								<i class="menu-icon fa fa-caret-right"></i>
								<?php echo L('article_list');?>
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="jqgrid.html">
								<i class="menu-icon fa fa-caret-right"></i>
								<?php echo L('sort_list');?>
							</a>

							<b class="arrow"></b>
						</li>
						<li class="">
							<a href="jqgrid.html">
								<i class="menu-icon fa fa-caret-right"></i>
								<?php echo L('comment_list');?>
							</a>

							<b class="arrow"></b>
						</li>
					</ul>
				</li>

				<li class="">
					<a class="dropdown-toggle" href="#">
						<i class="menu-icon fa fa-pencil-square-o"></i>
						<span class="menu-text"><?php echo L('page_manage');?></span>

						<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="">
							<a href="form-elements.html">
								<i class="menu-icon fa fa-caret-right"></i>
								<?php echo L('add_one_page');?>
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="form-elements-2.html">
								<i class="menu-icon fa fa-caret-right"></i>
								<?php echo L('one_page_list');?>
							</a>

							<b class="arrow"></b>
						</li>

						
					</ul>
				</li>

				<li class="">
					<a class="dropdown-toggle" href="#">
						<i class="menu-icon fa fa-picture-o"></i>
						<span class="menu-text"><?php echo L('gallery_manage');?></span>

						<b class="arrow fa fa-angle-down"></b>
					</a>

					<b class="arrow"></b>

					<ul class="submenu">
						<li class="">
							<a href="form-elements.html">
								<i class="menu-icon fa fa-caret-right"></i>
								<?php echo L('gallery_list');?>
							</a>

							<b class="arrow"></b>
						</li>

						<li class="">
							<a href="form-elements-2.html">
								<i class="menu-icon fa fa-caret-right"></i>
								<?php echo L('gallery_add');?>
							</a>

							<b class="arrow"></b>
						</li>

						
					</ul>
				</li>
			

				<li class="">
					<a href="gallery.html">
						<i class="menu-icon fa fa-cogs"></i>
						<span class="menu-text"><?php echo L('logout');?></span>
					</a>

					<b class="arrow"></b>
				</li>

			</ul>
			<!-- /.nav-list -->

			<!-- #section:basics/sidebar.layout.minimize -->
			<div id="sidebar-collapse" class="sidebar-toggle sidebar-collapse">
				<i data-icon2="ace-icon fa fa-angle-double-right" data-icon1="ace-icon fa fa-angle-double-left" class="ace-icon fa fa-angle-double-left"></i>
			</div>

			<!-- /section:basics/sidebar.layout.minimize -->
			<script type="text/javascript">try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}</script>
		</div>
		<!-- /section:basics/sidebar -->
		
	<div class="main-content">
		<div class="main-content-inner">
			<div id="breadcrumbs" class="breadcrumbs">
			<script type="text/javascript">
				try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
			</script>
			<ul class="breadcrumb">
				<li>
					<i class="ace-icon fa fa-home home-icon"></i>
						<a href="#"><?php echo L('home');?></a>
					</li>
					<li class="active highlight"><?php echo L('system_status');?></li>
			</ul>
		</div>
		<div class="page-content">
			<div class="page-header">
				<h1>
					<?php echo L('system_status');?>
					<small>
						   <i class="ace-icon fa fa-angle-double-right"></i>
							<?php echo L('overview');?>
						   </small>
						   </h1>
				</div>
		<div class="row">
							<div class="col-xs-12">
								<table border='1' style='border-collapse:collapse;' class='table table-striped table-bordered table-hover'>
								<thead>
									<th width='20%'>属性</th>
									<th width="30%">状态</th>
									<th width="20%">属性</th>
									<th width="30%">状态</th>
								</thead>
								<tr>
									<td>服务器域名：</td>
									<td><?php echo ($_SERVER['SERVER_NAME']); ?></td>
									<td>服务器IP：</td>
									<td><?php echo (gethostbyname($_SERVER['SERVER_NAME'])); ?></td>
								</tr>
								<tr>
									<td>网站目录</td>
									<td><?php echo ($_SERVER['DOCUMENT_ROOT']); ?></td>
									<td>当前脚本：</td>
									<td><?php echo ($_SERVER['SCRIPT_NAME']); ?></td>
								</tr>
								<tr>
									<td>PHP版本号：</td>
									<td><?php echo (PHP_VERSION); ?></td>
									<td>MySQL版本号：</td>
									<td><?php echo mysql_version();?></td>
								</tr>
								</table>
							</div>
						</div>

				<div class="row">
							<div class="col-xs-12">
								<table border='1' style='border-collapse:collapse;' class='table table-striped table-bordered table-hover'>
								<thead>
									<th colspan="4">统计</th>
								</thead>
								<tr>
									<td>文章数量：</td>
									<td><?php echo ($_SERVER['SERVER_NAME']); ?></td>
									<td>单页数量：</td>
									<td><?php echo (gethostbyname($_SERVER['SERVER_NAME'])); ?></td>
								</tr>
								<tr>
									<td>评论数量</td>
									<td><?php echo ($_SERVER['DOCUMENT_ROOT']); ?></td>
									<td>相册数量：</td>
									<td><?php echo ($_SERVER['SCRIPT_NAME']); ?></td>
								</tr>
								<tr>
									<td>友情链接数量：</td>
									<td><?php echo (PHP_VERSION); ?></td>
									<td>联系方式：</td>
									<td>917802561@qq.com</td>
								</tr>
								</table>
							</div>
						</div>
		</div>
	</div>
	</div>

		<!-- /.main-content -->
		<div class="footer">
			<div class="footer-inner">
				<!-- #section:basics/footer -->
				<div class="footer-content">
					<span class="bigger-120">
						<span class="blue bolder">Ace</span>
						Application &copy; 2013-2014
					</span>
					&nbsp; &nbsp;
					<span class="action-buttons">
						<a href="#">
							<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
						</a>

						<a href="#">
							<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
						</a>
					</span>
				</div>

				<!-- /section:basics/footer -->
			</div>
		</div>
		<a href="#" id="btn-scroll-up"
			class="btn-scroll-up btn btn-sm btn-inverse"> <i
			class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
		</a>
	</div>
	<!-- /.main-container -->

	<!-- basic scripts -->

	<!--[if !IE]>
	-->
	<script type="text/javascript">
		window.jQuery
				|| document
						.write("<script src='/Public/assets/js/jquery.js'>"
								+ "<"+"/script>");
	</script>

	<!-- <![endif]-->

	<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/Public/assets/js/jquery1x.js'>"+"<"+"/script>");</script>
<![endif]-->
	<script type="text/javascript">
		if ('ontouchstart' in document.documentElement)
			document
					.write("<script src='/Public/assets/js/jquery.mobile.custom.js'>"
							+ "<"+"/script>");
	</script>
	<script src="/Public/assets/js/bootstrap.js" type="text/javascript"></script>

	<!-- page specific plugin scripts -->

	<!--[if lte IE 8]>
<script src="/Public/assets/js/excanvas.js"></script>
<![endif]-->
	<script src="/Public/assets/js/jquery-ui.custom.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/jquery.ui.touch-punch.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/jquery.easypiechart.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/jquery.sparkline.js"
		type="text/javascript"></script>


	<!-- ace scripts -->
	<script src="/Public/assets/js/ace/elements.scroller.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/elements.colorpicker.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/elements.fileinput.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/elements.typeahead.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/elements.wysiwyg.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/elements.spinner.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/elements.treeview.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/elements.wizard.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/elements.aside.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/ace.js" type="text/javascript"></script>

	<script src="/Public/assets/js/ace/ace.touch-drag.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/ace.sidebar.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/ace.sidebar-scroll-1.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/ace.submenu-hover.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/ace.widget-box.js"
		type="text/javascript"></script>
	
	<script src="/Public/assets/js/ace/ace.widget-on-reload.js"
		type="text/javascript"></script>
	<script src="/Public/assets/js/ace/ace.searchbox-autocomplete.js"
		type="text/javascript"></script>

	<!-- inline scripts related to this page -->
	

	<!-- the following scripts are used in demo only for onpage help and you don't need them -->
	
</body>
</html>