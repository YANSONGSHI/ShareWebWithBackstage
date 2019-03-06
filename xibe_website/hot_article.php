<?php
require 'php/common.php';

//查询部分
$Res=mysql_query("select * from article where id='".$_REQUEST['id']."'");
while ($Row=mysql_fetch_assoc($Res)){
    $list[]=$Row;
}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>管理员文章页面</title>
		<link rel="stylesheet" type="text/css" href="css/Global.css" />
		<link rel="stylesheet" type="text/css" href="css/manage_article.css" />
		<link href="css/common.css" type="text/css" rel="stylesheet" />
		<script type="text/javascript" src="js/jquery.1.4.4.js"></script>
		<script type="text/javascript" src="js/common.js"></script>
	</head>
	<body>
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
        						    echo "<a href='' style='background: none; color: #000;margin-left: 0px;'>".$_SESSION['usname']."</a>"."<a href='php/login_out.php' style='background: none; color: #000;margin-left: 0px;'>注销</a>";
        						}else {
        						    echo "<a href='login.html'>登&nbsp;录</a><a href='login.html' style='background: none; color: #000;margin-left: 0px;' class='re'>注&nbsp;册</a>";
        						}
    						?>
						</div>
					</div>
				</div><!--end head-->
			</div>
			<!--中间内容区域-->
			<div class="article_content_wrap">
			<?php 
                foreach ($list as $k=>$v){
             ?>
				<div class="article_content">
					<div class="ac_top">
						<div class="ac_top_img">
							<img src="<?php echo $v['content_img'];?>" width="100%" height="330px"/>
						</div>
						
						<div class="ac_class">
							<p>
								<a href="#"><?php echo $v['art_class'];?></a>
								<span><?php echo $v['add_time']?></span>
							</p>
						</div>
					</div>
					<div class="ac_bottom">
						<div class="ac_left">
							<div class="ac_title">
								<a href="#"><?php echo $v['art_title'];?></a>
							</div>
							<div class="ac_date">
								<p>
									<!-- <img src="images/com.png" width="26px" style="float: left;"/> -->
									原作者：<span style="padding: 0 16px;"><?php echo $v['user_name']?></span>
								</p>
							</div>
							<div class="f_clear"></div>
							<!--文章内容-->
							<div class="ac_con">
								<div class="ac_text">
									<p><?php echo $v['content_text'];?></p>
								</div>
								
							</div><!--end ac_con-->
							<div class="ac_wonder">
								 <div class="praise">
								<span id="praise"><img src="images/zan.png" id="praise-img" /></span>
								<span>赞</span>
								<span id="add-num"><em>+1</em></span>
							</div>
						</div>
						<div class="ac_comment">
							<div class="ac_user_img">
								<img src="images/t01.gif" width="50px" height="50px" />
							</div>
							<div class="user_com">
								<textarea cols="60" rows="3"></textarea>
							</div>
							<div class="f_clear"></div>
						</div>
						<div class="ac_zan">
						    <button type="button">发表评论</button>
						</div>
					</div>
					<!--点赞 -->
						<script>
							$(function(){
                    		$("#praise").click(function(){
                    			var praise_img = $("#praise-img");
                    			var text_box = $("#add-num");
                    			var praise_txt = $("#praise-txt");
                    			var num=parseInt(praise_txt.text());
                    			if(praise_img.attr("src") == ("images/yizan.png")){
                    				$(this).html("<img src='images/zan.png' id='praise-img' class='animation' />");
                    				praise_txt.removeClass("hover");
                    				text_box.show().html("<em class='add-animation'>-1</em>");
                    				$(".add-animation").removeClass("hover");
                    				num -=1;
                    				praise_txt.text(num)
                    			}else{
                    				$(this).html("<img src='images/yizan.png' id='praise-img' class='animation' />");
                    				praise_txt.addClass("hover");
                    				text_box.show().html("<em class='add-animation'>+1</em>");
                    				$(".add-animation").addClass("hover");
                    				num +=1;
                    				praise_txt.text(num)
                    			}
                    		});
                    	})
                    </script>
					<div class="ac_right">
					   <div class="ct_info">
					       <div class="act_top">
						        <div class="act_top_left">
						            <img alt="用户头像" src="images/head6.jpg" width="100px">
						            <span>管理人员</span>
						        </div>
						        <div class="act_top_right">
						            <h3>admin</h3>
						            <p>个人简介：<span>一个管理员</span></p>
						        </div>
						        <div class="f_clear"></div>
    						</div><!-- end act_top -->
					   </div><!-- end ct_info -->
						<div class="ct_new">
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
										<a href="#">深夜俱乐部 | 聊聊你正在使用的输入法</a>
									</li>
									<li>
										<a href="#">城市边缘的新家</a>
									</li>
									<li>
										<a href="#">深夜俱乐部 | 聊聊你正在使用的输入法</a>
									</li>
									<li>
										<a href="#">城市边缘的新家</a>
									</li>
									<li>
										<a href="#">深夜俱乐部 | 聊聊你正在使用的输入法</a>
									</li>
								</ul>
							</div><!--end info_hot_list-->
						</div><!--end info_hot-->
						</div>
					</div>
						<div class="f_clear"></div>
					</div>
					
				</div>
				<?php }?>
			</div><!--end article_content_wrap-->
			
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
