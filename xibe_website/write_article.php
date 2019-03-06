<?php 

require 'php/common.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>发表文章页面</title>
		<link rel="stylesheet" type="text/css" href="css/Global.css" />
		<link rel="stylesheet" type="text/css" href="css/write_article.css" />
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
				<div class="create_article_wrap">
					<div class="create_article">
						<div class="ca_send_art">
							<div class="ac_back">
								<img src="images/back1.png" />
								<a href="personal.php">  个人中心 </a>
							</div>
							<div class="ac_content">
								
								<form action="" method="post" name="addForm" enctype="multipart/form-data" id="form1">
									<div class="in_title">
    									<select name="chooseNa"  class="in_sel">
											<option value="其他">选择类别</option>
											<option value="手机">手机</option>
											<option value="摄影">摄影</option>
											<option value="旅游">旅游</option>
											<option value="美食">美食</option>
											<option value="家居">家居</option>
											<option value="视频">视频</option>
											<option value="音乐">音乐</option>
											<option value="图书">图书</option>
    									</select>
										<input type="text" placeholder="请输入标题" name="titleName" class="titName"/>
										<span>最多可输入20个字符</span>
									</div><!--end in_tittle-->
									<div class="in_upload">
									    <div class="up_input">
									        <input type="hidden" name="max_file_size " />
                                            <input type="file" name="file" />
    										
    										<input type="submit" name="submit" value="上传图片">
									    </div>
									</div><!--end in_upload-->
									<div class="in_text">
										<textarea rows="20" cols="70" name="contentText" class="conText"></textarea>
										<div class="up_img" >
									        <?php 
        										if(!empty($_FILES["file"]["name"]))
        										{
        										    require 'php/imgMsg.php';
        										}
    										?>
									    </div>
									    <div class="f_clear"></div>
									</div><!--end in_text-->
									<div class="in_btn">
										<button type="submit"  id="ddd">发表文章</button>
										<button type="submit">保存草稿</button>
										
									</div><!--end in_btn-->
								</form>
							</div>
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
$('#ddd').click(function(){
	$sel=$('.in_sel option:selected').val();
    return articleCheck($('.titName').val(),$sel,$('.conText').val(),$('.up_img>img').attr('src'));
 })
function articleCheck(atitle, aclass,ctext,acimg){
	if(atitle != '' && ctext != ''){
		if(atitle.length >20){
			alert('标题长度不符合格式要求');
		}else{
			$.ajax({
				type:'POST',
				url:'php/addArticle.php?atitle='+atitle+'&aclass='+aclass+'&ctext='+ctext+'&acimg='+acimg,
				success:function (msg)
				{
					if(msg == 1){
						alert('发布成功');
						window.location.href = "community.php";
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
