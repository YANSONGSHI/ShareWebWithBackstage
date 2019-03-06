<?php
require 'php/common.php';
session_start();
//获取这个表里的总数
$countRes=mysql_query("select count(id) from article where user_name=".$_SESSION['usname']);
$countList=mysql_fetch_assoc($countRes);
$count = $countList['count(id)'];
$pages = ceil($count/5);

if (empty($_REQUEST['page'])){
    $start=0;
}else {
    $start=$_REQUEST['page']*5;
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>个人中心</title>
		<link rel="stylesheet" type="text/css" href="css/Global.css" />
		<link rel="stylesheet" type="text/css" href="css/personal.css" />
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
        						
        						header("Content-type: text/html; charset=utf-8");
        						if (isset($_SESSION['usname'])){
        						    echo "<a href='personal.php' style='background: none; color: #000;margin-left: 0px;'>".$_SESSION['usname']."</a>"."<a href='php/login_out.php' style='background: none; color: #000;margin-left: 0px;'>注销</a>";
        						}else {
        						    echo "<a href='login.html'>登&nbsp;录</a><a href='login.html' style='background: none; color: #000;margin-left: 0px;' class='re'>注&nbsp;册</a>";
        						}
    						?>
						
						<!-- 	<a href="login.html">登&nbsp;录</a>
							<a href="login.html" style="background: none; color: #000;margin-left: 0px;" class="re">注&nbsp;册</a>  -->
						</div>
					</div>
				</div><!--end head-->
			</div>
			
			<!--中间内容页面-->
			<div class="personal_wrap">
				<div class="personal_head_img">
					<!--<img src="images/phead.jpg" height="100%"/>-->
				</div>
				<div class="personal">
					<!--用户信息-->
					<div class="pu_info">
						<div class="pu_head">
							<img src="images/t01.gif" />
						</div>
						<div class="pu_name">
							<p><?php echo $_SESSION['usname']?></p>
							<a href="#">普通用户</a>
						</div>
						<div class="pu_send">
							<a href="write_article.php">+ 发表新文章</a>
						</div>
						<div class="f_clear"></div>
					</div><!--end pu_info-->
					
					<!--列表选项卡-->
					<div class="pu_tab">
						<div class="tab_cho">
							<ul>
								<li id="tab1" class="a" style="border-bottom: 4px solid #57ADFD">
									<span>我的文章</span>
								</li>
								<li id="tab2" class="a">
									<span>个人信息</span>
								</li>
								<li id="tab3" class="a">
									<span>信息修改</span>
								</li>
							</ul>
						</div>
						<!--清除浮动-->
						<div class="f_clear"></div>
						<div class="tab_con">
							<div class="pu_tab_css" id="tab1_content" >
								<div class="us_article">
								    <ul>
								    <?php
								        
								          $sql="select * from article where user_name ='".$_SESSION['usname']."' limit ".$start.",5";
								          $Res=mysql_query($sql);
								          while ($Row=mysql_fetch_assoc($Res)){
								              $list[]=$Row;
								          }
								          if(!empty($list))
								          {
								          foreach ($list as $k=>$v){
								        ?>
								        <li>
								        
								            <span class="del_title"><?php  echo $v['art_title']?></span>
								            <a href="php/del_us_article.php?id=<?php echo $v['id'];?>" class="del">删除</a>
								            <div class="f_clear"></div>
								        </li>
								        <?php }}
								        else{?>
								        <p style="color:#999;margin-top:100px;text-align: center;font-size:24px;">暂没有发布的文章</p>
								        <?php }?>
								    </ul>
								</div>
								<div class="fen_page">
								    <?php 
                                        for ($i=0;$i<$pages;$i++){
                                    ?>
                                    <a href = "personal.php?page=<?php echo $i;?>"><?php echo $i+1;?></a>
                                    <?php }?>
								</div>
							</div>
							
							<div class="pu_tab_css" id="tab2_content" style="display: none">
							    <div class="us_infomation">
									<form action="" method="post" name="">
										<table>
										 <?php
										 $sqlInfo="select * from user_infomation where user_name ='".$_SESSION['usname']."'";
										 $infoRes=mysql_query($sqlInfo) or die(mysql_error());
								        ?>
											<tr>
												<th>用户名：</th>
												<td><?php echo $_SESSION['usname']?></td>
											</tr>
											<tr>
												<th>个人简介：</th>
												<td>
												    <?php 
												     if (!empty($infoRes)){
										     $infoRow=mysql_fetch_assoc($infoRes);
												       echo $infoRow['per_introduce'];}
												       ?>
												</td>
											</tr>
										</table>
									</form>
								</div>
							</div>
							<div class="pu_tab_css" id="tab3_content" style="display: none">
							    <div class="us_infomation">
									<form action="" method="post" name="perForm">
										<table>
											<tr>
												<th>个人简介：</th>
												<td>
													<textarea name="pInfo" rows="2" cols="50"></textarea>
												</td>
											</tr>
										</table>
									</form>
									<div class="save_per">
										<button type="submit"  onclick = "return personCheck(perForm.pInfo.value);">保存</button>
										<a href="#">修改</a>
									</div>
								</div>
							</div>
						</div><!--end tab_con-->
					</div>
					
				</div>
			</div>
			
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
<script type="text/javascript">
function personCheck(perinfo){
	if(perinfo != ''){
		if(perinfo.length >20){
			alert('个人简介长度不符合格式要求');
		}else{
			$.ajax({
				type:'POST',
				url:'php/addPersonInfo.php?perinfo='+perinfo,
				success:function (msg)
				{
					if(msg == 1){
						alert('个人简介添加成功');
						window.location.href = "personal.php";
					}else{
						alert(msg);
					}
				}
			});
		}
		
	}
	return false;
}
</script>
