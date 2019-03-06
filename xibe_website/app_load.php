<?php
require 'php/common.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>社区页面</title>
		<link rel="stylesheet" type="text/css" href="css/Global.css" />
		<link rel="stylesheet" type="text/css" href="css/app_load.css" />
		<link href="css/common.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery.1.4.4.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
	</head>
	<body>
		<!-- 
			全局字体：微软雅黑  ,  字体大小：14px
			头部区域，logo以及网站名称
			
		-->
		<div class="all">
		<!-- 头部导航栏  -->
			<div class="head_wrap">
				<div class="head">
					<!--导航条logo图标-->
					<div class="head_logo">
						<a href="index.php"><img src="images/logo.png"/></a>
					</div>
					<!--导航条菜单-->
					<div class="head_bar">
						<ul>
							<li><a href="index.php">首页</a></li>
							<li><a href="found_page.php">发现</a></li>
							<li><a href="community.php">社区</a></li>
							<li><a href="information.php">资讯</a></li>
							<li><a href="app_load.php" style="color: #57adfd;">APP下载</a></li>
						</ul>
					</div>
					<!--导航条搜索框-->
					<div class="head_ser">
						<div class="ser_bar">
							<input class="search" type="text" placeholder="搜索文章、帖子、用户" />
							<button type="submit" class="s_ser"></button>
						</div>
						
						
						<!--导航条登录按钮-->
						<div class="head_login">
							<?php 
        						session_start();
        						header("Content-type: text/html; charset=utf-8");
        						if (isset($_SESSION['usname'])){
        						    echo "<a href='personal.php' style='background: none; color: #000;margin-left: 0px;'>".$_SESSION['usname']."</a>"."<a href='php/login_out.php' style='background: none; color: #000;margin-left: 0px;'>注销</a>";
        						}else {
        						    echo "<a href='login.html'>登&nbsp;录</a><a href='login.html' style='background: none; color: #000;margin-left: 0px;' class='re'>注&nbsp;册</a>";
        						}
    						?>
						</div>
					</div>
					
				</div><!--end head-->
			</div>
			
			<!--内容页-->
			<div class="model_wrap">
				<div class="model">
					<div class="model_img">
						<div class="model_img_left">
							<img src="images/model.png" width="506px" height="299px"/>
						</div>
						<div class="model_img_right">
							<p>记  录  生 活，分 享 美 好</p>
							<div class="model_code">
								<img src="images/mCode.jpg" />
								<div class="btn_m">
									<ul>
										<li>
											<button type="button">Android</button>
										</li>
										<li>
											<button type="button">iPhone</button>
										</li>
										<li>
											<button type="button">iPad</button>
										</li>
									</ul>
								</div>
								<div class="f_clear"></div>
							</div><!--end model_img-->
						</div><!--end model_img_right-->
						<div class="f_clear"></div>
					</div><!--end model_img-->
					<div class="model_fun">
						<img src="images/bg_model.png" />
					</div>
					<div class="model_bgm">
						<img src="images/bg_m.jpg" width="100%" height="100%"/>
					</div>
				</div>
			</div><!--end model_wrap-->
			<!--尾部-->
			<div class="foot_wrap">
				<div class="foot">
					<!--<div class="bottom_info_link">-->
						<div class="bottom_info">
							<p>喜碧网站</p>
							<ul>
								<li>关于我们</li>
								<li>联系我们</li>
								<li>加入我们</li>
								<li>打赏我们</li>
							</ul>
						</div>
						<div class="bottom_info">
							<p>喜碧推荐</p>
							<ul>
								<li>手机电脑</li>
								<li>视频音乐</li>
								<li>图书插画</li>
								<li>摄影修图</li>
							</ul>
						</div>
						<div class="bottom_info">
							<p>最新资讯</p>
							<ul>
								<li>智能硬件</li>
								<li>软件应用</li>
								<li>摄影秘籍</li>
							</ul>
						</div>
					<!--</div>-->
					<div class="bottom_info_social">
						<img src="images/bottomLogo.png" width="80px" height="40px"/>
						<ul>
							<li>
								<img src="images/bt_b.png"/>
								<span>微博：@浙江工贸</span>
							</li>
							<li>
								<img src="images/bt_w.png"/>
								<span>公众号：浙江工贸</span>
							</li>
							<li>
								<img src="images/bt_q.png"/>
								<span>QQ：199048441</span>
							</li>
						</ul>
					</div>
					<div class="code_QR">
						<img src="images/code_QR.jpg" width="120px" height="120px"/>
					</div>
					
				</div>
				<div class="foot_bottom_wrap">
					<div class="foot_bottom">
						<p>喜碧分享推荐网站(浙studentID：1410305218)浙江工贸-施松雁</p>
					</div>
				</div>
			</div>	<!--end foot_wrap-->
			
		</div>
	</body>
</html>

