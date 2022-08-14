<?php
/* Smarty version 3.1.38, created on 2022-07-03 10:12:52
  from 'D:\phpstudy\WWW\index\templates\default\index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_62c0fb240aff66_83774852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29f9870450be63a934a8b4c1e151e647bfc27993' => 
    array (
      0 => 'D:\\phpstudy\\WWW\\index\\templates\\default\\index.html',
      1 => 1656814365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62c0fb240aff66_83774852 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!--favicon-->
		<link rel="icon" href="../public/default/assets/images/favicon-32x32.png" type="image/png" />
		<!--plugins-->
		<link href="../public/default/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
		<link href="../public/default/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
		<link href="../public/default/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
		<link href="../public/default/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
		<!-- loader-->
		<link href="../public/default/assets/css/pace.min.css" rel="stylesheet" />
		<?php echo '<script'; ?>
 src="../public/default/assets/js/pace.min.js"><?php echo '</script'; ?>
>
		<!-- Bootstrap CSS -->
		<link href="../public/default/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
		<link href="../public/default/assets/css/app.css" rel="stylesheet">
		<link href="../public/default/assets/css/icons.css" rel="stylesheet">
		<!-- Theme Style CSS -->
		<link rel="stylesheet" href="../public/default/assets/css/dark-theme.css" />
		<link rel="stylesheet" href="../public/default/assets/css/semi-dark.css" />
		<link rel="stylesheet" href="../public/default/assets/css/header-colors.css" />

		<title>分类</title>
	</head>
	<body>
		<div class="wrapper">

			<div class="sidebar-wrapper" data-simplebar="true">
				<div class="sidebar-header">
					<div>
						<img src="../public/default/assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
					</div>
					<div>
						<h4 class="logo-text">ZHEYI</h4>
					</div>
					<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
					</div>
				</div>
				<!--navigation-->
				<ul class="metismenu" id="menu">
					<li>
						<a href="javascript:;" class="has-arrow">
							<div class="parent-icon"><i class='bx bx-home-circle'></i>
							</div>
							<div class="menu-title">网站首页</div>
						</a>
						<ul>
							<li> <a href="index.php"><i class="bx bx-right-arrow-alt"></i>网站首页</a>
							</li>
						</ul>
					</li>
					<li class="menu-label">- 壁纸分类- </li>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fenlei']->value, 'foo', false, 'k');
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
?>
					<li>
						<a href="javascript:class_p(<?php echo $_smarty_tpl->tpl_vars['foo']->value['old_id'];?>
)">
							<div class="menu-title"><?php echo $_smarty_tpl->tpl_vars['foo']->value['category'];?>
</div>
						</a>
					</li>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</ul>
			</div>
			<header>
				<div class="topbar d-flex align-items-center">
					<nav class="navbar navbar-expand">
						<div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
						</div>
						<div class="search-bar flex-grow-1">
							<div class="position-relative search-bar-box">
								<input type="text" class="form-control search-control" placeholder="查询订单号">
								<span class="position-absolute top-50 search-show translate-middle-y"><i
										class='bx bx-search'></i></span>
								<span class="position-absolute top-50 search-close translate-middle-y"><i
										class='bx bx-x'></i></span>
							</div>
						</div>
						<div class="top-menu ms-auto">
							<ul class="navbar-nav align-items-center">
								<li class="nav-item mobile-search-icon">
									<a class="nav-link" href="#"> <i class='bx bx-search'></i>
									</a>
								</li>
								<li class="nav-item dropdown dropdown-large">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button"
										data-bs-toggle="dropdown" aria-expanded="false"> <i class='bx bx-category'></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<div class="row row-cols-3 g-3 p-3">
											<div class="col text-center">
												<div class="app-box mx-auto bg-gradient-cosmic text-white"><i
														class='bx bx-group'></i>
												</div>
												<div class="app-title">用户管理</div>
											</div>
											<div class="col text-center">
												<div class="app-box mx-auto bg-gradient-burning text-white"><i
														class='bx bx-atom'></i>
												</div>
												<div class="app-title">最新动态</div>
											</div>
											<div class="col text-center">
												<div class="app-box mx-auto bg-gradient-blues text-dark"><i
														class='bx bx-file'></i>
												</div>
												<div class="app-title">订单管理</div>
											</div>
										</div>
									</div>
								</li>
								<li class="nav-item dropdown dropdown-large">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
										href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
											class="alert-count">7</span>
										<i class='bx bx-bell'></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="javascript:;">
											<div class="msg-header">
												<p class="msg-header-title">Notifications</p>
												<p class="msg-header-clear ms-auto">Marks all as read</p>
											</div>
										</a>
										<div class="header-notifications-list">
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="notify bg-light-danger text-danger"><i
															class="bx bx-cart-alt"></i>
													</div>
													<div class="flex-grow-1">
														<h6 class="msg-name">New Orders <span
																class="msg-time float-end">2
																min
																ago</span></h6>
														<p class="msg-info">You have recived new orders</p>
													</div>
												</div>
											</a>
										</div>
										<a href="javascript:;">
											<div class="text-center msg-footer">查看全部</div>
										</a>
									</div>
								</li>
								<li class="nav-item dropdown dropdown-large">
									<a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
										href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <span
											class="alert-count">8</span>
										<i class='bx bx-comment'></i>
									</a>
									<div class="dropdown-menu dropdown-menu-end">
										<a href="javascript:;">
											<div class="msg-header">
												<p class="msg-header-title">Messages</p>
												<p class="msg-header-clear ms-auto">Marks all as read</p>
											</div>
										</a>
										<div class="header-message-list">
											<a class="dropdown-item" href="javascript:;">
												<div class="d-flex align-items-center">
													<div class="user-online">
														<img src="../public/default/assets/images/avatars/avatar-11.png"
															class="msg-avatar" alt="user avatar">
													</div>
													<div class="flex-grow-1">
														<h6 class=" msg-name">Johnny Seitz <span
																class="msg-time float-end">5 days
																ago</span></h6>
														<p class="msg-info">All the Lorem Ipsum generators</p>
													</div>
												</div>
											</a>
										</div>
										<a href="javascript:;">
											<div class="text-center msg-footer">查看全部</div>
										</a>
									</div>
								</li>
							</ul>
						</div>
					</nav>
				</div>
			</header>


			<div class="page-wrapper">
				<div class="page-content" id="f5">

					<div class="card-group shadow" id="enlargeurl" style="display:none">
						<div class="card border-end shadow-none">
							<img id="kaptcha" src="" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title" id="kaptcha1">1</h5>
								<p class="card-text" id="kaptcha2">2</p>
							</div>
							<div class="card-footer bg-white">
								<a class="btn btn-outline-warning" href="javascript:savepic()">
									<i class="bx bx-cloud-light-rain me-0"></i>立即下载
								</a>
							</div>
						</div>
					</div>

					<div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2" id="enlarge">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tupian']->value, 'foo', false, 'k');
$_smarty_tpl->tpl_vars['foo']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->do_else = false;
?>
						<div class="col">
							<div class="card bg-dark text-white">
								<img src="<?php echo $_smarty_tpl->tpl_vars['foo']->value['url'];?>
" class="card-img" alt="www.999il.cn">
								<div class="card-img-overlay">
									<h5 class="card-title text-white"><?php echo $_smarty_tpl->tpl_vars['foo']->value['category'];?>
</h5>
									<p class="card-text"><?php echo $_smarty_tpl->tpl_vars['foo']->value['tag'];?>
</p>
								</div>
								<div class="card-footer bg-white">
									<div class="col">
										<center>
											<div class="btn-group" role="group" aria-label="Basic example">
												<a href="javascript:enlarge('<?php echo $_smarty_tpl->tpl_vars['foo']->value['url'];?>
','<?php echo $_smarty_tpl->tpl_vars['foo']->value['category'];?>
', '<?php echo $_smarty_tpl->tpl_vars['foo']->value['tag'];?>
');"
													class="btn btn-outline-info">
													<i class="bx bx-search-alt me-0"></i>查看大图
												</a>
												&nbsp;
												<a class="btn btn-outline-warning" href="<?php echo $_smarty_tpl->tpl_vars['foo']->value['url'];?>
">
													<i class="bx bx-cloud-light-rain me-0"></i>立即下载
												</a>
											</div>
										</center>
									</div>
								</div>
							</div>

						</div>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</div>
				</div>

			</div>
		</div>
		<a class="page-footer btn btn-outline-warning" href="">
			<i class="bx bx-cloud-light-rain me-0"></i>获取更多
		</a>
		<?php echo '<script'; ?>
 src="../public/default/assets/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
		<!--plugins-->
		<?php echo '<script'; ?>
 src="../public/default/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../public/default/assets/plugins/metismenu/js/metisMenu.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../public/default/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../includes/assets/layer/layer.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../includes/assets/ajax/function.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="../includes/assets/ajax/index.js"><?php echo '</script'; ?>
>
		<!--app JS-->
		<?php echo '<script'; ?>
 src="../public/default/assets/js/app.js"><?php echo '</script'; ?>
>

		<!-- 滚动导航栏 -->
		<?php echo '<script'; ?>
 src="../public/default/assets/plugins/simplebar/js/simplebar.min.js"><?php echo '</script'; ?>
>
	</body>

</html>
<?php }
}
