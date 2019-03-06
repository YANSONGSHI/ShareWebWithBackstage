<?php
require 'common.php';

$Res = mysql_query("select * from infomation where id = '".$_REQUEST['id']."'");
$Row = mysql_fetch_assoc($Res);

if (!empty($_REQUEST['title']) && !empty($_REQUEST['content'])){
    $updateRes = mysql_query("update infomation set info_title = '".trim($_REQUEST['title'])."', info_introduce = '".trim($_REQUEST['content'])."' , info_img = 'images/".$_FILES["file"]["name"]."' where id = '".$_REQUEST['id']."'");
}
if (!empty($updateRes)){
    if ($updateRes==1){
        echo "
        <script language='javascript'>
            alert('修改成功');
            window.location.href='../info_manage.php';
        </script>
      ";
    }
}
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>文章管理</title>
    <link rel="stylesheet" type="text/css" href="../css/common.css"/>
    <link rel="stylesheet" type="text/css" href="../css/main.css"/>
    <script type="text/javascript" src="../js/libs/modernizr.min.js"></script>
</head>
<body>
<div class="topbar-wrap white">
    <div class="topbar-inner clearfix">
        <div class="topbar-logo-wrap clearfix">
            <h1 class="topbar-logo none"><a href="index.html" class="navbar-brand">后台管理</a></h1>
            <ul class="navbar-list clearfix">
                <li><a class="on" href="../user_manage.php">首页</a></li>
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
                        <li><a href="../user_manage.php"><i class="icon-font">&#xe008;</i>用户管理</a></li>
						<li><a href="../stra_manage.php"><i class="icon-font">&#xe006;</i>首页攻略</a></li>
						<li><a href="../com_manage.php"><i class="icon-font">&#xe004;</i>社区管理</a></li>
						<li><a href="../info_manage.php"><i class="icon-font">&#xe033;</i>资讯管理</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!--/sidebar-->
    <div class="main-wrap">

        <div class="crumb-wrap">
            <div class="crumb-list"><i class="icon-font"></i><a href="../user_manage.php">首页</a><span class="crumb-step">&gt;</span><a class="crumb-name" href="../info_manage.php">资讯管理</a><span class="crumb-step">&gt;</span><span>修改资讯</span></div>
        </div>
        <div class="result-wrap">
            <div class="result-content">
                <form action="" method="post" id="myform"  name="myform" enctype="multipart/form-data">
                    <table class="insert-tab" width="100%">
                        <tbody>
                        <tr>
                            <th width="120">ID：</th>
                            <td>
                                <input type="text" readonly value="<?php echo $Row['id'];?>" style="width:24px;background:#f0f0f0;text-align:center;">
<!--                                 <select name="colId" id="catid" class="required"> -->
<!--                                     <option value="">请选择</option> -->
<!--                                     <option value="19">精品界面</option><option value="20">推荐界面</option> -->
<!--                                 </select> -->
                            </td>
                        </tr>
                            <tr>
                                <th><i class="require-red">*</i>名称：</th>
                                <td>
                                
                                    <input class="common-text required" id="title" name="title" size="50" value="<?php echo $Row['info_title'];?>" type="text">
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>描述：</th>
                                <td>
                                 <textarea name="content" class="common-textarea" id="content" cols="20" style="width: 70%;" rows="3"><?php echo $Row['info_introduce'];?></textarea>
<!--                                     <input class="common-text" name="author" size="50" value="" type="text"> -->
                                </td>
                            </tr>
                            <tr>
                                <th><i class="require-red">*</i>缩略图：</th>
                                <td>
                                    <input type="hidden" name="max_file_size " />
                                    <input type="file" name="file" />
									
<!-- 									<input type="submit" name="submit" value="上传图片"> -->
                                
                                
<!--                                 <input name="smallimg" id="" type="file"> -->
                                <!--<input type="submit" onclick="submitForm('/jscss/admin/design/upload')" value="上传图片"/>-->
                                </td>
                            </tr>
                            <tr>
<!--                                 <th>内容：</th> -->
                                <td>
<!--                                 <div name="content"></div> -->
                                    <?php 
										if(!empty($_FILES["file"]["name"]))
										{
										    require 'imgMsg.php';
										}
									?>
    									    
                            <!--     <textarea name="content" class="common-textarea" id="content" cols="30" style="width: 98%;" rows="10"></textarea>  -->
                                </td>
                            </tr>
                            <tr>
                                <th></th>
                                <td>
                                    <input class="btn btn-primary btn6 mr10" value="提交" type="submit">
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