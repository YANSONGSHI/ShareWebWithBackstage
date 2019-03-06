<?php
require 'php/common.php';
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>文章管理</title>
    <link rel="stylesheet" type="text/css" href="css/common.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script type="text/javascript" src="js/libs/modernizr.min.js"></script>
    <script type="text/javascript" src="js/jquery.1.4.4.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="user_manage.php">首页</a></li>
                <li><a href="#" target="_blank">网站首页</a></li>
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
                    <ul class="sub-menu">
                        <li><a href="user_manage.php"><i class="icon-font">&#xe008;</i>用户管理</a></li>
						<li><a href="stra_manage.php"><i class="icon-font">&#xe006;</i>首页攻略</a></li>
						<li><a href="com_manage.php"><i class="icon-font">&#xe004;</i>社区管理</a></li>
						<li><a href="info_manage.php"><i class="icon-font">&#xe033;</i>资讯管理</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="user_manage.php">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="../info_manage.php">资讯管理</a><span class="crumb-step">&gt;</span><span>新增资讯</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody><tr>
                            <th width="120"><i class="require-red">*</i>分类：</th>
                            <td>
                                <select name="colId" id="catid" class="required">
                                    <option value="其他">请选择</option>
                                    <option value="数码">数码</option>
                                    <option value="影音">影音</option>
                                    <option value="音乐">音乐</option>
                                    <option value="摄影">摄影</option>
                                    <option value="家居">家居</option>
                                    <option value="图书">图书</option>
                                    <option value="视频">视频</option>
                                    <option value="旅行">旅行</option>
                                </select>
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>标题：</th>
                                <td>
                                    <input class="common-text required title"  name="title" size="50" value="" type="text" >
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>文章简介：</th>
                                <td><input class="common-text summary" name="art" size="50" value="" type="text"></td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td>
                                <!--     <input name="smallimg" id="" type="file">   -->
                                <input type="hidden" name="max_file_size " />
                                <input type="file" name="file" />
								
								<input type="submit" name="submit" value="上传图片">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>文章内容：</th>
                                <td>
                                    <textarea name="content" class="common-textarea" id="content" cols="30" style="width: 60%;float:left;" rows="20"></textarea>
                                    <div class="c_img" style="float: right;width:300px;">
                                        <?php 
    									if(!empty($_FILES["file"]["name"]))
    									{
    									    require 'php/imgMsg.php';
    									}
    									?>
                                    </div>
                                    <div class="f_clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit" id="ddd">
                                    <input class="btn btn6" onclick="history.go(-1)" value="返回" type="button">
                                </td>
                            </tr>
                        </tbody></table>
                </form>
            </div>
        </div>

    </div>
    <!--/main-->
</div>
</body>
</html>

<script type="text/javascript">
$('#ddd').click(function(){
	$sel=$('#catid option:selected').val();
    return articleCheck($sel,$('.title').val(),$('.summary').val(),$('.common-textarea').val(),$('.c_img>img').attr('src'));
 })
function articleCheck(aclass,atitle,afront,ctext,acimg){
	if(atitle != '' && ctext != ''){
		if(atitle.length >20){
			alert('标题长度不符合格式要求');
		}else{
			$.ajax({
				type:'POST',
				url:'php/add_info.php?aclass='+aclass+'&atitle='+atitle+'&afront='+afront+'&ctext='+ctext+'&acimg='+acimg,
				success:function (msg)
				{
					if(msg == 1){
						alert('发布成功');
						window.location.href = "info_manage.php";
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

