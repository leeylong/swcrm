<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:62:"D:\wamp64\www\swcrm\public/../app/admin\view\clients\show.html";i:1541841746;s:53:"D:\wamp64\www\swcrm\app\admin\view\public\header.html";i:1542964716;s:51:"D:\wamp64\www\swcrm\app\admin\view\public\foot.html";i:1542966544;}*/ ?>
<!doctype html>
<html lang="en">

<head>
	<title>山东大宇网络</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/static/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/static/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/static/vendor/linearicons/style.css">
	<link rel="stylesheet" href="/static/vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" href="/static/css/app.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/static/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="/static/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="/static/img/apple-icon.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/static/img/favicon.png">
    <!-- javascript -->
	<script src="/static/vendor/jquery/jquery.min.js"></script>
	<!-- X-editable -->
	<link rel="stylesheet" href="/static/editable/x-editable.css">
	<!-- Datetimepicker -->
    <link rel="stylesheet" type="text/css" href="/static/css/bootstrap-datetimepicker.min.css">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.html"><img src="/static/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="lnr lnr-alarm"></i>
								<span class="badge bg-danger">5</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>System space is almost full</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-danger"></span>You have 9 unfinished tasks</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Monthly report is available</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-warning"></span>Weekly meeting in 1 hour</a></li>
								<li><a href="#" class="notification-item"><span class="dot bg-success"></span>Your request has been approved</a></li>
								<li><a href="#" class="more">See all notifications</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="lnr lnr-question-circle"></i> <span>Help</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#">Basic Use</a></li>
								<li><a href="#">Working With Data</a></li>
								<li><a href="#">Security</a></li>
								<li><a href="#">Troubleshooting</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="/static/img/user.png" class="img-circle" alt="Avatar"> <span>Samuel</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
								<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Message</span></a></li>
								<li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
								<li><a href="<?php echo url('/admin/login/loginout'); ?>"><i class="lnr lnr-exit"></i> <span>退出登陆</span></a></li>
							</ul>
						</li>
						<!-- <li>
							<a class="update-pro" href="#downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="<?php echo url("/admin"); ?>" <?php if(request()->controller() == 'Index'): ?>class="active"<?php endif; ?> attr-controller="<?php echo request()->controller(); ?>"><i class="lnr lnr-home"></i> <span>控制面板</span></a></li>
						<li>
							<a href="#subPages" data-toggle="collapse"  <?php if(request()->controller() == 'Clients'): ?>class="active"<?php endif; ?> aria-expanded="true"><i class="lnr lnr-file-empty"></i> <span>客户管理</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse" aria-expanded="true">
								<ul class="nav">
									<li><a href="<?php echo url("/admin/Clients"); ?>" class="">我追踪的客户</a></li>
									<li><a href="<?php echo url("/admin/Clients/addself"); ?>" class="">我添加的客户</a></li>
									<li><a href="<?php echo url("/admin/Clients/gonghai"); ?>" class="">公海</a></li>
								</ul>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">客户详情信息</h3>
							<p class="panel-subtitle">今天是: <?php echo date("Y-m-d"); ?></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<!-- 客户列表开始 -->
									<div class="panel">
										<div class="panel-body">
											<table class="table table-bordered">
												<thead>
													<tr>
														<th>公司名称</th>
														<th>法人</th>
														<th>注册资金</th>
														<th>公司情况</th>
														<th>地址</th>
														<th>网络情况</th>
														<th>联系人信息</th>
														<th>跟进情况</th>
													</tr>
												</thead>
												<tbody>
													<tr>
															<td><?php echo $client['companyname']; ?></td>
															<td><?php echo $client['faren']; ?></td>
															<td><?php echo $client['zijin']; ?></td>
															<td><?php echo $client['profile']; ?></td>
															<td><?php echo $client['address']; ?></td>
															<td><?php echo $client['netsituation']; ?></td>
															<td><?php echo $client['clientcontact']; ?></td>
															<td><?php echo $client['followsituation']; ?></td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!-- 客户列表结束 -->
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->

<!-- 附加信息 -->
					<div class="panel panel-headline">
							<div class="panel-heading">
								<h4 class="panel-title">信息列表</h4>
							</div>
							<div class="message-list">
								<table class="table table-striped">
									<thead>
										<tr>
											<th>留言内容</th>
											<th>留言时间</th>
											<th>新增</th>
										</tr>
									</thead>
									<tbody>
<?php if(is_array($messages) || $messages instanceof \think\Collection || $messages instanceof \think\Paginator): if( count($messages)==0 ) : echo "" ;else: foreach($messages as $key=>$mes): ?>
										<tr>
											<td><?php echo $mes['content']; ?></td>
											<td><?php echo $mes['updatetime']; ?></td>
											<td></td>
										</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
									</tbody>
								</table>
								<div style="padding:14px;">
								<form enctype="multipart/form-data" action="/admin/clients/insertmes.html" method="POST">
									<input type="hidden" name="id" value="<?php echo $client['client_id']; ?>">
									<textarea name="content" class="form-control" placeholder="新的留言" rows="4"></textarea><br />
									<div class="clearfix">
										<button type="submit" class="btn btn-primary pull-right">提交</button>
									</div>
								</form>
								</div>
							</div>
					</div>
<!-- 附加信息结束 -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; <?php echo date("Y");; ?> <a href="http://www.dayu.co/" target="_blank">大宇网络</a>. All Rights Reserved. </p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
		<!-- 表格实时编辑 -->
<script>
	$(function () {
		// $.fn.editable.defaults.mode = 'inline';  变为行内编辑
		$('.editable').editable();
		$('.editable-select').editable({
			source: [
              {value: 0, text: '☆'},
              {value: 1, text: '★'},
              {value: 2, text: '★★'},
              {value: 3, text: '★★★'},
              {value: 4, text: '★★★★'},
              {value: 5, text: '★★★★★'}
           ]
		});
	});
</script>

	<!-- Javascript -->
	<script src="/static/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="/static/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="/static/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="/static/vendor/chartist/js/chartist.min.js"></script>
    <script src="/static/scripts/klorofil-common.js"></script>
    <script src="/static/layer/layer.js"></script>
    <script src="/static/js/dialog.js"></script>
	<script src="/static/editable/x-editable.js"></script>
    <script type="application/javascript" src="/static/js/bootstrap-datetimepicker.js"></script>
    <script type="application/javascript" src="/static/js/bootstrap-datetimepicker.zh-CN.js"></script>
    <script type="application/javascript" src="/static/js/common.js"></script>

</body>
</html>

