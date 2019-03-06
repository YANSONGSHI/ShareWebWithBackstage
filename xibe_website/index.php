<?php 

require 'php/common.php';



//查询部分
$Res=mysql_query("select * from strategy limit 0,4");
while ($Row=mysql_fetch_assoc($Res)){
    $list[]=$Row;
}
//查询部分
$top_list=mysql_query("select * from article where top=1 order by add_time desc limit 0,8");
while ($Row=mysql_fetch_assoc($top_list)){
    $top[]=$Row;
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>推荐分享网站</title>
		<link rel="stylesheet" type="text/css" href="css/Global.css" />
		<link rel="stylesheet" type="text/css" href="css/index.css" />
		<link href="css/style.css" type="text/css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="css/common.css">
		<script type="text/javascript" src="js/jquery.1.4.4.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
		<script type="text/javascript" src="js/script.js"></script>
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
						<a href="index.html"><img src="images/logo.png"/></a>
					</div>
					<!--导航条菜单-->
					<div class="head_bar">
						<ul>
							<li><a href="index.php" style="color: #57adfd;">首页</a></li>
							<li><a href="found_page.php">发现</a></li>
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
						
						
						
<!-- 							<a href="login.html">登&nbsp;录</a> -->
			<!-- 	<a href="login.html" style="background: none; color: #000;margin-left: 0px;" class="re">注&nbsp;册</a>   -->
						</div>
					</div>
					
				</div><!--end head-->
			</div>
			<!-- 图片轮播  -->
			<div class="banner">
				<div id="home_banner">
					<a id="big_a">
					   <div id="big_img"> </div>
					</a>
					<div class="relative">
						<div id="small_img">
							<div class="maxwidth">
								<a id="small_pre"><img class="arr" src="images/arr_left.png" width="14px" height="40px" /></a>
								<div id="small_imgs">
									<a href="javascript:;" class="item"><div class="img" b="images/8.png" l="" theid="69"> <img src="images/8.png"/></div></a>
									<a href="javascript:;" class="item"><div class="img" b="images/2.png" l="" theid="69"> <img src="images/2.png"/></div></a>
									<a href="javascript:;" class="item"><div class="img" b="images/9.png" l="" theid="69"> <img src="images/9.png"/></div></a>
									<a href="javascript:;" class="item"><div class="img" b="images/10.png" l="" theid="69"> <img src="images/10.png"/></div></a>
									<a href="javascript:;" class="item"><div class="img" b="images/4.png" l="" theid="69"> <img src="images/4.png"/></div></a>
									<a href="javascript:;" class="item"><div class="img" b="images/6.png" l="" theid="69"> <img src="images/6.png"/></div></a>
								</div><!--end small_pre-->
								<a id="small_next"><img class="arr" src="images/arr_right.png" width="14px" height="40px" /></a>
							</div><!--end maxwidth-->
						</div><!--end small_img-->
					</div><!--end relative-->
				</div><!--end home_banner-->
			</div><!--end banner-->
			<!--
            	页面内容区域
            	包含攻略精选与最新文章两个模块
            -->
			<div class="content">
				<!--攻略精选模块-->
				<div class="strategy_wrap">
					<div class="strategy">
						<h1>攻略精选<a href="found_page.php">查看更多</a></h1>
						<!--攻略精选推荐图片区域-->
						<div class="strategy_img">
							<ul>
							<?php 
                                foreach ($list as $k=>$v){
                             ?>
								<li>
									<img src="<?php echo $v['pro_bg'];?>" />
									<!--产品信息介绍-->
									<div class="product_info">
										<h3>
											<a href="#"><?php echo $v['pro_tittle'];?></a>
										</h3>
										<p>
											<a href="#"><?php echo $v['pro_introduce'];?></a>
										</p>
									</div>
									<a href="#" class="mark_c"></a>
								</li>
								<?php }?>
								<div class="f_clear"></div><!-- 对浮动进行清除 占位 -->
							</ul>
						</div><!--end strategy_img-->
					</div><!--end strategy-->
				</div><!--end strategy_wrap-->
				<!--最新文章模块-->
				<div class="new_article_wrap">
					<div class="new_article">
						<h1>文章推荐</h1>
						<div class="user_art">
							<div class="art_left">
								<!--用户发表文章-->
								<?php 
                                foreach ($top as $k=>$v){
                             ?>
								<div class="u_write">
									<!--用户信息，
									包括头像以及用户名称-->
									<div class="user_info">
										<a href="hot_article.php?id=<?php echo $v['id']?>"> <img src="images/t01.gif" width="50px" height="50px" alt="用户头像"/> </a>
										<div class="u_name"><?php echo $v['user_name']?><br><span><?php echo $v['art_class']?></span></div>
										<div class="u_time"><?php echo $v['add_time']?></div>
										<div class="f_clear"></div>
									</div>
									<!--用户发表的文章内容-->
									<div class="user_msg">
										<!--上传图片-->
										<a href="hot_article.php?id=<?php echo $v['id']?>"> <img src="<?php echo $v['content_img']?>" width="100%" height="238px" alt="文章图片" /> </a>
										<!--标题-->
										<div class="u_title">
											<a href="hot_article.php?id=<?php echo $v['id']?>" title="Super Mario Run 上架 App Store：手机终于可以玩马里奥了"><?php echo $v['art_title']?></a>
										</div>
										<!--该文章内容的简要描述-->
										<div class="u_con"><?php echo $v['content_text']?></div>
									</div>
								</div><!--end u_write-->
								<?php }?>
							
							
							</div><!--end art_left-->
							
							<div class="art_right">
								<div class="channel">
									<p>频道分类</p>
									<ul>
										<li>
											<img src="images/channel01.png" />
											<a href="#">手机</a>
										</li>
										<li>
											<img src="images/channel02.png" />
											<a href="#">家居</a>
										</li>
										<li>
											<img src="images/channel03.png" />
											<a href="#">数码</a>
										</li>
										<li>
											<img src="images/channel04.png" />
											<a href="#">影音</a>
										</li>
										<li>
											<img src="images/channel05.png" />
											<a href="#">音乐</a>
										</li>
										<li>
											<img src="images/channel06.png" />
											<a href="#">摄影</a>
										</li>
										<li>
											<img src="images/channel13.png" />
											<a href="#">视频</a>
										</li>
										<li>
											<img src="images/channel08.png" />
											<a href="#">周边</a>
										</li>
										<li>
											<img src="images/channel09.png" />
											<a href="#">平板</a>
										</li>
										<li>
											<img src="images/channel10.png" />
											<a href="#">图书</a>
										</li>
										<li>
											<img src="images/channel11.png" />
											<a href="#">旅行</a>
										</li>
										<li>
											<img src="images/channel12.png" />
											<a href="#">电脑</a>
										</li>
										<div class="f_clear"></div>
									</ul>
								</div>
								<div class="channel">
									<p>热门专题</p>
									<div class="hot_top">
										<img src="images/top01.png" />
										<img src="images/top02.png" />
										<img src="images/top03.png" />
										<img src="images/top04.png" />
									</div>
								</div>
								<div class="channel">
									<p>精选话题</p>
									<div class="hot_top">
										<img src="images/g01.png" />
										<img src="images/g02.png" />
										<img src="images/g03.png" />
									</div>
								</div>
								
								
							</div><!--end art_right-->
							<div class="f_clear"></div><!-- 对浮动进行清除 占位 -->
						</div><!--end user_art-->
					</div><!--end new_article-->
				</div><!--end new_article_wrap-->
			</div><!--end content-->
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






