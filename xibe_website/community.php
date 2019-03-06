<?php
require 'php/common.php';

//获取这个表里的总数
$countRes=mysql_query("select count(id) from article");
$countList=mysql_fetch_assoc($countRes);
// _print($countList);
$count = $countList['count(id)'];
$pages = ceil($count/10);

if (empty($_REQUEST['page'])){
    $start=0;
}else {
    $start=$_REQUEST['page']*10;
}

//查询部分
$Res=mysql_query("select * from article order by id desc limit ".$start.",10");
while ($Row=mysql_fetch_assoc($Res)){
    $list[]=$Row;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>社区页面</title>
		<link rel="stylesheet" type="text/css" href="css/Global.css" />
		<link rel="stylesheet" type="text/css" href="css/community.css" />
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
							<li><a href="community.php" style="color: #57adfd;">社区</a></li>
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
		<!--帖子外套-->
			<div class="postbar_wrap">
				<!--定义了1000px，居中-->
				<div class="postbar">
					<!--左边-->
					<div class="bar_left">
						<div class="classify">
							<ul class="cur">
								<li>
									<a href="#" style="color: #4284C7;"><span style="background: url(images/act_tubiao01.png) no-repeat center;"></span>全部</a>
								</li>
								<li>
									<a href="#"><span style="background: url(images/tubiao02.png) no-repeat center;"></span>晒单</a>
								</li>
								<li>
									<a href="#"><span style="background: url(images/tubiao03.png) no-repeat center;"></span>问题</a>
								</li>
								<li>
									<a href="#"><span style="background: url(images/tubiao04.png) no-repeat center;"></span>建议</a>
								</li>
								<li>
									<a href="#"><span style="background: url(images/tubiao05.png) no-repeat center;"></span>公告</a>
								</li>
								<li>
									<a href="#"><span style="background: url(images/tubiao06.png) no-repeat center;"></span>其他</a>
								</li>
							</ul>
						</div><!--end classify-->
						<div class="user_post_bar">
							<p>全部帖子</p>
							<ul class="user_p">
                							<?php 
                                foreach ($list as $k=>$v){
                             ?>
								<li>
									<div class="user_img">
										<img src="images/t01.gif"/>
									</div>
									<div class="user_title">
										<h2>
											<a href="article.php?id=<?php echo $v['id']?>"><?php echo $v['art_title'];?></a>
										</h2>
										<div class="user_id">
											<a href="#"><?php echo $v['user_name'];?></a>
											<span><?php echo $v['add_time']?></span>
										</div>
									</div>
									<div class="f_clear"></div>
								</li>
								<?php }?>
							</ul>
							<div class="fen_page">
							 <a href = "community.php?page=0">第一页</a>
                         <?php 
                for ($i=0;$i<$pages;$i++){
            ?>
            <a href = "community.php?page=<?php echo $i; ?>"><?php echo $i+1;?></a>
            <?php }?>
            <a href = "community.php?page=<?php echo $pages-1; ?>">最后一页</a>
					</div>
						</div><!--end user_post_bar-->
					</div><!--end bar_left-->
					<!--右边-->
					<div class="bar_right">
						<!--热门资讯块-->
						<div class="info_hot">
							<p>热门帖子</p>
							<div class="info_hot_list">
								<ul>
									<li>
										<a href="#">深夜俱乐部 | 晒晒你的锁屏壁纸吧！</a>
									</li>
									<li>
										<a href="#">深夜俱乐部｜你现役的电脑是什么型号的呢？</a>
									</li>
									<li>
										<a href="#">深夜俱乐部 | 聊聊你正在使用的输入法</a>
									</li>
									<li>
										<a href="#">城市边缘的新家</a>
									</li>
									<li>
										<a href="#">深夜俱乐部丨分享下你当前的手机卡套餐吧！</a>
									</li>
									<li>
										<a href="#">一生必须到过的地方，带上妹子来青海旅拍</a>
									</li>
									<li>
										<a href="#">年度征文 | 2016我眼中的上海</a>
									</li>
									<li>
										<a href="#">「年度征文」街头点滴——那些感动我的瞬间</a>
									</li>
									<li>
										<a href="#">年度征文｜近年手机摄影分享</a>
									</li>
								</ul>
							</div><!--end info_hot_list-->
						</div><!--end info_hot-->
						<!--热门专题块-->
						<div class="info_hot">
							<p>话题活动</p>
							<div class="info_hot_list">
								<ul>
									<li>
										<a href="#">深夜俱乐部丨推荐一部冷门但是很好看的剧吧</a>
									</li>
									<li>
										<a href="#">深夜俱乐部 | 对于诺基亚的回归，你会买单</a>
									</li>
									<li>
										<a href="#">深夜俱乐部丨推荐一款你喜欢的零食</a>
									</li>
									<li>
										<a href="#">深夜俱乐部 | 你对如今手机的什么卖点免疫</a>
									</li>
									<li>
										<a href="#">深夜俱乐部 | 你最不能忍受的产品缺点是什么</a>
									</li>
									<li>
										<a href="#">深夜俱乐部丨你喜欢收藏数码产品吗？</a>
									</li>
								</ul>
							</div><!--end info_hot_list-->
						</div><!--end info_hot-->
						
					</div><!--end bar_right-->
					<div class="f_clear"></div>
					
				</div><!--end postbar-->
			</div><!--end postbar_wrap-->
			<!--底部-->
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
