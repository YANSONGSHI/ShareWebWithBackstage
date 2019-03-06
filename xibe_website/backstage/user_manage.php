<?php
require 'php/common.php';

//获取这个表里的总数
$countRes=mysql_query("select count(id) from user_infomation");
$countList=mysql_fetch_assoc($countRes);
// _print($countList);
$count = $countList['count(id)'];
$pages = ceil($count/5);

if (empty($_REQUEST['page'])){
    $start=0;
}else {
    $start=$_REQUEST['page']*5;
}

//查询部分
$Res=mysql_query("select * from user_infomation order by id desc limit ".$start.",5");
while ($Row=mysql_fetch_assoc($Res)){
    $list[]=$Row;
}
?>
<!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>用户管理</title>
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		<script type="text/javascript" src="js/libs/modernizr.min.js"></script>
	</head>

	<body>
		<div class="topbar-wrap white">
			<div class="topbar-inner clearfix">
				<div class="topbar-logo-wrap clearfix">
					<h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
					<ul class="navbar-list clearfix">
						<li><a class="on" href="user_manage.php">首页</a></li>
						<li><a href="../index.php" target="_blank">网站首页</a></li>
					</ul>
				</div>
				<div class="top-info-wrap">
					<ul class="top-info-list clearfix">
					    <?php 
                            session_start();
                            header("Content-type: text/html; charset=utf-8");
                            if (isset($_SESSION['adname'])){
                                echo "<li><a href='#'>管理员:".$_SESSION['adname']."</a></li>"."<li><a href='pwd_manage.php'>修改密码</a></li>"."<li><a href='php/login_out.php'>退出</a></li>";
                            }
                        ?>
<!-- 						<li><a href="#">管理员</a></li> -->
<!-- 						<li><a href="#">修改密码</a></li> -->
<!-- 						<li><a href="#">退出</a></li> -->
					</ul>
				</div>
			</div>
		</div>
		<div class="container clearfix">
			<div class="sidebar-wrap">
				<div class="sidebar-title">
					<h1>菜单</h1>
				</div>
				<div class="sidebar-content">
					<ul class="sidebar-list">
						<li>
<!-- 							<a href="#"><i class="icon-font">&#xe003;</i>常用操作</a> -->
							<ul class="sub-menu">
								<li><a href="user_manage.php"><i class="icon-font">&#xe008;</i>用户管理</a></li>
        						<li><a href="stra_manage.php"><i class="icon-font">&#xe006;</i>首页攻略</a></li>
        						<li><a href="com_manage.php"><i class="icon-font">&#xe004;</i>社区管理</a></li>
        						<li><a href="info_manage.php"><i class="icon-font">&#xe033;</i>资讯管理</a></li>
							</ul>
						</li>
<!-- 						<li> -->
<!-- 							<a href="#"><i class="icon-font">&#xe018;</i>系统管理</a> -->
<!-- 							<ul class="sub-menu"> -->
<!-- 								<li><a href="system.html"><i class="icon-font">&#xe017;</i>系统设置</a></li> -->
<!-- 								<li><a href="system.html"><i class="icon-font">&#xe037;</i>清理缓存</a></li> -->
<!-- 								<li><a href="system.html"><i class="icon-font">&#xe046;</i>数据备份</a></li> -->
<!-- 								<li><a href="system.html"><i class="icon-font">&#xe045;</i>数据还原</a></li> -->
<!-- 							</ul> -->
<!-- 						</li> -->
					</ul>
				</div>
			</div>
			<!--/sidebar-->
			<div class="main-wrap">

				<div class="crumb-wrap">
					<div class="crumb-list"><i class="icon-font"></i><a href="user_manage.php">首页</a><span class="crumb-step">&gt;</span><span class="crumb-name">用户管理</span></div>
				</div>
				<div class="search-wrap">
					<div class="search-content">
						<form action="#" method="post">
							<table class="search-tab">
								<tr>
									</td>
									<th width="70">关键字:</th>
									<td><input class="common-text" placeholder="搜索用户" name="keywords" value="" id="" type="text"></td>
									<td><input class="btn btn-primary btn2" name="sub" value="查询" type="submit"></td>
								</tr>
							</table>
						</form>
					</div>
				</div>
				<div class="result-wrap">
					<form name="myform" id="myform" method="post">
						<div class="result-title">
							<div class="result-list">
								<a href="insert.html"><i class="icon-font"></i>全选</a>
								<a id="batchDel" href="javascript:void(0)"><i class="icon-font"></i>批量删除</a>
							</div>
						</div>
						<div class="result-content">
							<table class="result-tab" width="100%">
								<tr>
									<th class="tc" width="5%"><input class="allChoose" name="" type="checkbox"></th>
									<th>ID</th>
									<th>用户名</th>
									<th>个人简介</th>
									<th>添加时间</th>
									<th>操作</th>
								</tr>
								<?php 
                                foreach ($list as $k=>$v){
                             ?>
								<tr>
									<td class="tc"><input name="id[]" value="59" type="checkbox"></td>
									<td><?php echo $v['id'];?></td>
									<td><?php echo $v['user_name'];?></td>
									<td title="个人简介"><a target="_blank" href="#" title="个人简介"><?php echo $v['per_introduce'];?></a> …</td>
									<td><?php echo date('Y-m-d H:i:s',$v['add_time']);?></td>
									<td>
										<a class="link-del" href="php/del_user.php?id=<?php echo $v['id'];?>">删除</a>
									</td>
								</tr>
								<?php }?>
							</table>
							<div class="list-page"> 
							     <?php 
                for ($i=0;$i<$pages;$i++){
            ?>
            <a href = "user_manage.php?page=<?php echo $i; ?>"><?php echo $i+1;?></a>
            <?php }?>
							</div>
						</div>
					</form>
				</div>
			</div>
			<!--/main-->
		</div>
	</body>
</html>

