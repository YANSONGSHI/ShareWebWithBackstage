<?php
    require 'php/common.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>发现页面</title>
		<link rel="stylesheet" type="text/css" href="css/Global.css" />
		<link rel="stylesheet" type="text/css" href="css/found_page.css" />
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
							<li><a href="found_page.php" style="color: #57adfd;">发现</a></li>
							<li><a href="community.php">社区</a></li>
							<li><a href="information.php">资讯</a></li>
							<li><a href="app_load.php">APP下载</a></li>
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
			<!--发现页面模块-->
			<div class="find_wrap">
				<div class="find">
					<div class="find_left">
						<ul>
							<li>
								<img src="images/f1.jpg" />
								<!--一层阴影覆盖-->
								<div class="cover">
									<a href="#">2016 | 年度热门美食作品</a>
								</div>
							</li>
							<li>
								<img src="images/f2.jpg" />
								<!--一层阴影覆盖-->
								<div class="cover">
									<a href="#">谁说童话是孩子们的专利？</a>
								</div>
							</li>
							<li>
								<img src="images/f3.jpg" />
								<!--一层阴影覆盖-->
								<div class="cover">
									<a href="#">印品 | 如果这个圣诞有你陪伴</a>
								</div>
							</li>
							<li>
								<img src="images/f4.jpg" />
								<!--一层阴影覆盖-->
								<div class="cover">
									<a href="#">图鉴 | 复刻时尚</a>
								</div>
							</li>
							<li>
								<img src="images/f5.jpg" />
								<!--一层阴影覆盖-->
								<div class="cover">
									<a href="#">摄芯 | 影子在说话</a>
								</div>
							</li>
							<li>
								<img src="images/f6.jpg" />
								<!--一层阴影覆盖-->
								<div class="cover">
									<a href="#">图荐 | 你再不来我就要下雪了</a>
								</div>
							</li>
						</ul>
					</div>
					<div class="find_right">
						<img src="images/ff.png" />
					</div>
					<div class="f_clear"></div>
				</div><!--end find-->
				<div class="find_list_wrap">
					<div class="find_list">
						<a href="#">
							<dl>
								<dt>美食圈</dt><br />
								<dd>相关文章1120</dd>
							</dl>
						</a>
						<a href="#">
							<dl>
								<dt>旅游攻略</dt><br />
								<dd>相关文章11202</dd>
							</dl>
						</a>
						<a href="#">
							<dl>
								<dt>摄影作品</dt><br />
								<dd>相关文章1031</dd>
							</dl>
						</a>
						<a href="#">
							<dl>
								<dt>家居推荐</dt><br />
								<dd>相关文章330</dd>
							</dl>
						</a>
						<a href="#">
							<dl>
								<dt>图文集</dt><br />
								<dd>相关文章1320</dd>
							</dl>
						</a>
						<a href="#">
							<dl>
								<dt>其他分类</dt><br />
								<dd>相关文章2017</dd>
							</dl>
						</a>
					</div><!--end find_list-->
				</div>
				<div class="re_article">
					<!--最热文章，居于上方-->
					<div class="hot_art">
						<div class="join_left">
							<a href="#">
								<img src="images/img09.png" />
							</a>
							<div class="join_conten">
								<a href="#">就你好看｜洛斐 DOT 蓝牙机械键盘数字尾巴</a>
								<p>你不是不知道，能用颜值解决的事情，就不要再找别的麻烦了。 
									目前大部分的机械键盘无论是其定位还是外观造型上，都更倾向于游戏化、
									科技化。但是有一款机械键盘，有七款颜色，可以同时匹配三台设备，满足了我在颜值 ...
								</p>
							</div>
						</div>
						<div class="join_right">
							<div class="right_title">
								<p>大航海</p>
							</div>
							<div class="right_list">
								<ul>
									<li class="bg_list">
										<img src="images/img09.png" />
										<span>就你好看｜洛斐 DOT 蓝牙机械键盘</span>
									</li>
									<li>士郎正宗 x ELECOM EHP-SH1000耳塞</li>
									<li>玩转 2K 大屏，荣耀 NOTE8 数字尾巴大航海</li>
									<li>给你第一副好眼镜，Tapole x 大航海</li>
									<li>秉持不讲就，一加手机3数字尾巴大航海</li>
									<li>照亮你的美，vivo X7手机大航海</li>
									<li>全部活动</li>
								</ul>
							</div>
						</div>
						<div class="f_clear"></div>
					</div><!--end hot_art-->
					<!--内容区域，列表以及图片-->
					<div class="hot_con">
						<!--分为左右区域-->
						<div class="hot_con_left">
							<div class="l_top">
								<div class="l_top_top">
									<div class="top_title">
										<p>沙龙TIME</p>
									</div>
									<div class="top_content">
										<img src="images/img01.png" />
										<p>就是要玩得出色！邦克仕才艺双全邦帮赛回顾
										<span>集玩游戏和拿奖品的数字尾巴沙龙在 10 月 23 日再次举办了，
											这次是与邦克仕一起为尾巴们带来一场才艺双全的邦帮赛，
											主题自然还是玩游戏和拿奖品了！本次的大奖是</span>
										</p>
									</div><!--end top_content-->
								</div><!--end l_top_top-->
								<div class="l_bom_left">
									<ul>
										<li><a href="#">就是要玩得出色！邦克仕才艺双全邦帮赛回顾</a></li>
										<li><a href="#">芯动感觉就要痛快，Qualcomm 骁龙 &联想 Z</a></li>
										<li><a href="#">感受虚拟的真实，数字尾巴 VR 奇幻之旅沙龙</a></li>
										<li><a href="#">I need that code！宝箱争夺战明基沙龙回顾</a></li>
									</ul>
								</div>
								<div class="l_bom_right">
									<ul>
										<li><a href="#">尾巴校园行，深圳大学手机摄影分享会回顾</a></li>
										<li><a href="#">极速美拍，Qualcomm 骁龙 & 一加手机尾巴沙</a></li>
										<li><a href="#">五月搞机季，数字尾巴深圳沙龙回顾</a></li>
										<li><a href="#">宝箱争夺战，明基鹰眼微投 x 数字尾巴 深圳</a></li>
									</ul>
								</div><!--end l_bom_right-->
								<div class="f_clear"></div>
							</div><!--end l_top-->
							<div class="l_bottom">
								<div class="l_bom_left">
									<div class="top_title">
										<p>热门话题</p>
									</div>
									<!--<div class="hot_topic">
										<img src="images/img03.jpg" />
									</div>-->
									<div class="top_content">
										<img src="images/img03.jpg" />
										<ul>
											<li><a href="#">深夜俱乐部丨推荐一款你最喜欢的蓝牙音箱吧！</a></li>
											<li><a href="#">深夜俱乐部｜你更喜欢用哪一个共享单车？</a></li>
											<li><a href="#">深夜俱乐部 | 今年你最想吐槽的一部手机</a></li>
											<li><a href="#">深夜俱乐部｜在新的一年里，你最想学会什么技能呢？</a></li>
											<li><a href="#">深夜俱乐部丨大家都在谈的那个小程序，你怎么看？</a></li>
										</ul>
									</div><!--end top_content-->
								</div>
								<div class="l_bom_right">
									<div class="top_title">
										<p>相关活动</p>
									</div>
									<div class="b_act">
										<ul>
											<li>
												<img src="images/img02.jpg" />
											</li>
											<li>
												<img src="images/img04.jpg" />
											</li>
											<li>
												<img src="images/img05.jpg" />
											</li>
											<li>
												<img src="images/img06.jpg" />
											</li>
											<li>
												<img src="images/img07.jpg" />
											</li>
											<li>
												<img src="images/img08.jpg" />
											</li>
										</ul>
									</div><!--end b_act-->
								</div>
								<div class="f_clear"></div>
							</div><!--end l_bottom-->
						</div><!--end hot_con_left-->
						<!--右边达人头像区域-->
						<div class="hot_con_right">
							<div class="top_title">
								<p>达人用户</p>
							</div>
							<div class="user_fashion">
								<dl>
									<dt>
										<a href="#">
											<img src="images/img10.jpg" width="50"/>
										</a>
									</dt>
									<dd>
										<a href="#">八九月未央</a>
									</dd>
								</dl>
								<dl>
									<dt>
										<a href="#">
											<img src="images/head3.jpg" width="50"/>
										</a>
									</dt>
									<dd>
										<a href="#">庆庆庆庆</a>
									</dd>
								</dl>
								<dl>
									<dt>
										<a href="#">
											<img src="images/head1.jpg" width="50"/>
										</a>
									</dt>
									<dd>
										<a href="#">Eloyr</a>
									</dd>
								</dl>
								<dl>
									<dt>
										<a href="#">
											<img src="images/head2.jpg" width="50"/>
										</a>
									</dt>
									<dd>
										<a href="#">风efeng</a>
									</dd>
								</dl>
								<dl>
									<dt>
										<a href="#">
											<img src="images/head5.jpg" width="50"/>
										</a>
									</dt>
									<dd>
										<a href="#">甜豆腐脑</a>
									</dd>
								</dl>
							</div>
							<!--<div class="f_clear"></div>-->
						</div><!--end hot_con_right-->
						<div class="f_clear"></div>
					</div>
				</div><!--end re_article-->
			</div><!--end find_wrap-->
			
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
			
		</div><!--end all-->
	</body>
</html>
