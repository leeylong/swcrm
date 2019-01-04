<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:66:"/www/wwwroot/webli/swcrm/public/../app/admin/view/login/index.html";i:1545301184;}*/ ?>
<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>登陆-山东大宇网络</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="/static/css/bootstrap.min.css">
	<link rel="stylesheet" href="/static/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="/static/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/static/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="/static/css/demo.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="/static/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/static/img/favicon.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="/static/img/logo-dark.png" alt="Klorofil Logo"></div>
								<p class="lead">大宇客户管理</p>
							</div>
							<form class="form-auth-small" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input type="email" name="username" class="form-control" id="signin-email" value="" placeholder="请输入用户名">
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input type="password" name="password" class="form-control" id="signin-password" value="" placeholder="请输入密码">
								</div>
								<div class="form-group clearfix">
									<!-- <label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>记住用户名</span>
									</label> -->
								</div>
								<button type="button" class="btn btn-primary btn-lg btn-block" onclick="login.check();">登陆</button>
								<!-- <div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="javascript:dialog.error('！');">忘记密码?</a></span>
								</div> -->
							</form>
						</div>
					</div>
					<div class="right">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">山东大宇网络科技有限公司</h1>
							<p>我们坚信，通过我们专业的技术和优质的服务，一定能够实现与中小企业的互利共赢！
                            </p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
    <!-- END WRAPPER -->
<script src="/static/vendor/jquery/jquery.min.js"></script>
<script src="/static/layer/layer.js"></script>
<script src="/static/js/dialog.js"></script>
<script src="/static/js/login.js"></script>
</body>
</html>