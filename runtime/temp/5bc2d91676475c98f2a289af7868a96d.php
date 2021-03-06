<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"D:\wamp64\www\swcrm\public/../app/admin\view\clients\baifang.html";i:1543907422;s:53:"D:\wamp64\www\swcrm\app\admin\view\public\header.html";i:1543884048;s:53:"D:\wamp64\www\swcrm\app\admin\view\public\common.html";i:1543906756;s:51:"D:\wamp64\www\swcrm\app\admin\view\public\foot.html";i:1542966544;}*/ ?>
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
									<li><a href="<?php echo url("/admin/Clients/baifang"); ?>" class="">拜访记录</a></li>
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
							<h3 class="panel-title">拜访记录</h3>
							<p class="panel-subtitle">今天是: <?php echo date("Y-m-d"); ?></p>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">
									<!-- 客户列表开始 -->
									<div class="panel">
										<div class="panel-heading">
											<h3 class="panel-title">拜访记录列表</h3>
										</div>
										<div class="panel-body">
												<div class="select">
														<form class="form-inline" id="" action="<?php echo url("clients/baifang"); ?>" method="get">
															<div class="form-group">
																<label for="exampleInputName2">客户名称：</label>
																<input type="text" name="clientname" class="form-control" id="exampleInputName2" placeholder="可模糊查询" value="">
															</div>
															<div class="form-group">
																	<label for="exampleInputEmail3">某月拜访的客户</label>
																	<input type="text" class="form-control selectTime" name="addtime" placeholder="请直接鼠标点击选择性" id="exampleInputEmail3" value="" autocomplete="off" disableautocomplete />
															</div>
															<button style="margin-left: 16px;" type="submit" class="btn btn-default">查找拜访记录</button>
														</form>
													</div>
											<table class="table table-striped">
												<thead>
													<tr>
														<th>公司名称</th>
														<th>商务</th>
														<th>区域</th>
														<th>地址</th>
														<th>联系方式</th>
														<th>提交时间</th>
													</tr>
												</thead>
												<tbody>
<?php if(is_array($clients_follow_list) || $clients_follow_list instanceof \think\Collection || $clients_follow_list instanceof \think\Paginator): if( count($clients_follow_list)==0 ) : echo "" ;else: foreach($clients_follow_list as $key=>$vo): ?>
													<tr>
														<td><?php echo $vo['clientname']; ?></td>
														<td><?php echo $vo['realname']; ?></td>
														<td><?php echo $vo['area']; ?></td>
														<td><?php echo $vo['address']; ?></td>
														<td><?php echo $vo['tel']; ?></td>
														<td><?php echo $vo['updatetime']; ?></td>
													</tr>
<?php endforeach; endif; else: echo "" ;endif; ?>
												</tbody>
											</table>
											<div class="pages">
												<?php echo $pages; ?>
											</div>
<?php
    $areas = config('area');
?>
<div class="function">
    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#addnewcli">新增客户</button>
    <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#baifangzengjia">添加拜访记录</button>
</div>
<!-- 新增客户功能区开始 -->
<div class="function-rel">
    <!-- Modal -->
        <div class="modal fade" id="addnewcli" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">新增客户</h4>
                </div>
                <form action="<?php echo url("Clients/add"); ?>" method="post">
                <div class="modal-body">
                        <div class="form-group">
                            <label for="InputCompany1">公司名称</label>
                            <input id="companyname" type="text" class="form-control" name="companyname" id="InputCompany1" placeholder="公司名称">
                        </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="sumbit" class="btn btn-primary">保存</button>
                </div>
                </form>
            </div>
        </div>
</div>
<!-- 新增客户功能区结束 -->


<!-- 新增客户拜访区开始 -->
<div class="function-rel">
    <!-- Modal -->
        <div class="modal fade" id="baifangzengjia" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">客户拜访记录新增</h4>
                </div>
                <form action="<?php echo url("Clients/visitadd"); ?>" method="post">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="InputCompany1">客户名称</label>
                        <input type="text" class="form-control" name="clientname" id="InputCompany1" placeholder="公司名称">
                    </div>
                    <div class="form-group">
                        <label for="Inputarea1">地区</label>
                        <select name="area" id="Inputarea1" class="form-control">
                                <option value="0">请选择地区</option>
<?php if(is_array($areas) || $areas instanceof \think\Collection || $areas instanceof \think\Paginator): $k = 0; $__LIST__ = $areas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$area): $mod = ($k % 2 );++$k;?>
                            <option value="<?php echo $k; ?>"><?php echo $area; ?></option>
<?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="InputAddress">公司地址</label>
                        <input type="text" class="form-control" name="address" id="InputAddress" placeholder="公司地址">
                    </div>
                    <div class="form-group">
                        <label for="InputTel">联系方式</label>
                        <textarea class="form-control" name="tel" placeholder="联系方式" rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                <button type="sumbit" class="btn btn-primary">保存</button>
                </div>
                </form>
            </div>
        </div>
</div>
<!-- 新增客户拜访区结束 -->
<script>
    var SCOPE = {
        'check_url' : '<?php echo url("clients/checkData"); ?>',
    }
</script>
											</div>
										</div>
									</div>
								</div>
								<!-- 客户列表结束 -->
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
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
		$('.editable-handle').editable({
			source: [
              {value: 0, text: '公海'},
              {value: 1, text: '私海'},
              {value: -1, text: '删除'},
           ],
		   success:function(response,data){
			   var ret = $.parseJSON(response);
			   var jump_url = window.location.href;

			   console.log(jump_url);
			   if(ret.status == 1){
				   dialog.success("状态更改成功",jump_url);
			   }else{
					dialog.error("状态更改失败");
			   }
		   }
		});
	});
</script>
<script type="text/javascript">
	$(document).ready(function(){
		$(".selectTime").datetimepicker({
			format: 'yyyy-mm-01',//设置时间格式
			weekStart:0,//一周从哪一天开始。0（星期日）到6（星期六）
			startDate:'2015-01-01',//The earliest date that may be selected; all earlier dates will be disabled.
			endDate:'2100-12-31',//The latest date that may be selected; all later dates will be disabled.
			autoclose:1,//当选择一个日期之后是否立即关闭此日期时间选择器。
			startView:3,//日期时间选择器打开之后首先显示的视图。 可接受的值：0 or 'hour' ,1 or 'day',2 or 'month' ,3 or 'year',4 or 'decade'
			minView:3,
	//        0 or 'hour' for the hour view
	//        1 or 'day' for the day view
	//        2 or 'month' for month view (the default)
	//       3 or 'year' for the 12-month overview
	//       4 or 'decade' for the 10-year overview. Useful for date-of-birth datetimepickers.
			todayBtn:0,
			language:'zh-CN'
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

