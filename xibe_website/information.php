<?php
require 'php/common.php';

//获取这个表里的总数
$countRes=mysql_query("select count(id) from infomation");
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
$Res=mysql_query("select * from infomation order by id desc limit ".$start.",5");
while ($Row=mysql_fetch_assoc($Res)){
    $list[]=$Row;
}
?>

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>资讯页面</title>
		<link rel="stylesheet" type="text/css" href="css/Global.css" />
		<link rel="stylesheet" type="text/css" href="css/information.css" />
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
							<li><a href="information.php" style="color: #57adfd;">资讯</a></li>
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
		<!--内容区域-->
			<div class="information_content_wrap">
				<div class="content_img">
					<a href="#">
						<img src="images/z1.png" />
					</a>
					<div class="information_content">
    					<div class="info_left">
    					<?php 
                            foreach ($list as $k=>$v){
                         ?>
    					  	<div class="new_info"> 
    							<img src="<?php echo $v['info_img'];?>" />
    							<div class="info_introduce">
    								<a href="manage_article.php?id=<?php echo $v['id']?>"><?php echo $v['info_title'];?></a>
    								<p><?php echo $v['info_introduce'];?></p>
    							</div>
    							<span><?php echo date('Y-m-d H:i:s',$v['add_time']);?></span>
    							<div class="f_clear"></div>
    						</div><!--end new_info-->
    					<?php }?>
                        </div>
    					<div class="info_right">
    						<div class="info_search">
    							<p>资讯分类</p>
    							<div class="info_ser_bar">
    								<input type="text" />
    								<button type="submit" class="b_ser"></button>
    							</div>
    							<ul>
    								<li><a href="#">新闻</a></li>
    								<li><a href="#">设备</a></li>
    								<li><a href="#">评论</a></li>
    								<li><a href="#">文化</a></li>
    							</ul>
    							<div class="f_clear"></div>
    						</div>
    						<div class="info_hot">
    							<p>热门资讯</p>
    							<div class="info_hot_list">
    								<ul>
    									<li>
    										<a href="#">Super Mario Run 上架 App Store：
    										终于可以在手机上玩马里奥了！</a>
    									</li>
    									<li>
    										<a href="#">联想 ZUK Edge 登场：既有「全面屏」，
    											又有「隐藏指纹」</a>
    									</li>
    									<li>
    										<a href="#">年终盘点｜2016 年最火的这些智能硬件，
    											你都玩过么？</a>
    									</li>
    								</ul>
    							</div>
    						</div>
    					</div><!--end info_right-->
    					<div class="f_clear"></div>
    				</div>
    				<div class="fen_page">
                		<?php 
                            for ($i=0;$i<$pages;$i++){
                        ?>
                        <a href = "information.php?page=<?php echo $i; ?>"><?php echo $i+1;?></a>
                        <?php }?>
    				</div>
 				</div><!--end content_img -->
			</div>
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
