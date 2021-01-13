<?php
session_start();
$con=mysqli_connect('localhost','root','','taobao');
mysqli_query($con, 'set names utf8');
if (isset($_POST['submit'])) {
    $image=upload("myFile","img");
    $user_id=$_SESSION['user_id'];
    $introduce=$_POST['introduce'];
    $price=$_POST['price'];
    $original=$_POST['original'];
    $sql="INSERT INTO commodity (user_id,introduce,price,original,sale,image,label) VALUES ('$user_id','$introduce','$price','$original','0','$image','无')";
    mysqli_query($con, $sql);
    header("location:manage.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>淘宝网-淘！我喜欢</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="page">
    <!-- 导航条+ad -->
    <div class="top-nav-wrap">
        <div class="top-nav">
            <ul class="top-nav-l">
                <li class="top-nav-menu china">
                    <span class="c-span">中国大陆</span>
                    <span class="bg-pic xsj-pic"></span>
                </li>
                <li class="top-nav-menu login-sign">
                    <a href="login.php" class="login">亲，请登录</a>
                    <a href="logon.php" class="sign">免费注册</a>
                </li>
                <li class="top-nav-menu">
                    <a href="#">手机逛淘宝</a>
                </li>
            </ul>
            <ul class="top-nav-r">
                <li class="top-nav-menu my-taobao">
                        <a href="index.php">我的淘宝</a>
                        <span class="bg-pic xsj-pic"></span>
                    </li>
                    <li class="top-nav-menu shop-car">
<?php
if (isset($_SESSION['user_id'])) {
?>
                        <a href="shopping.php">
                            <span class="bg-pic shopCar-pic"></span>
                            <span>购物车</span>
                        </a>
                        <span class="bg-pic xsj-pic"></span>
<?php
}
?>
                    </li>
                    <li class="top-nav-menu like">
                        <a href="#">
                            <span class="bg-pic like-pic"></span>
                            <span>收藏夹</span>
                        </a>
                        <span class="bg-pic xsj-pic"></span>
                    </li>
                    <li class="top-nav-menu goods">
                        <a href="#">商品分类</a>
                    </li>
                    <li class="top-nav-menu cut-off">
                        <span>|</span>
                    </li>
                    <li class="top-nav-menu seller">
<?php
if (isset($_SESSION['user_id'])) {
?>
                        <a href="manage.php">
                            <span class="c-span">卖家中心</span>
                            <span class="bg-pic xsj-pic"></span>
                        </a>
<?php
}
?>
                    </li>
                <li class="top-nav-menu cutsomer">
                    <a href="#">
                        <span class="c-span">联系客服</span>
                        <span class="bg-pic xsj-pic"></span>
                    </a>
                </li>
                <li class="top-nav-menu web-nav">
                    <a href="#">
                        <span class="bg-pic web-nav-pic"></span>
                        <span>网站导航</span>
                    </a>
                    <span class="bg-pic xsj-pic"></span>
                </li>
            </ul>
        </div>
        <div class="ad-wrap">
            <div class="ad">
                <img src="img/logo.png" alt="">
            </div>
        </div>
    </div>
    <!-- 主体部分 -->
    <div class="content">
        <div class="login-newbg"></div>
        <div class="login-ad"></div>
        <!-- 注册空间 -->
        <div class="item">
            <div class="item2">
            <form action="" method="post" enctype="multipart/form-data">
            <table cellspacing="0">
                <tr style="width: 280px;height: 40px;">
                    <td colspan="2" style="font-weight: 900;font-size:25px;">商品管理</td>
                </tr>
                <tr style="width: 280px;height: 40px;">
                    <td style="font-weight: 550;font-size:15px;">介绍：</td>
                    <td><input type="text" name="introduce" style="width: 200px; height: 30px;font-size:16px;"></td>
                </tr>
                <tr style="width: 280px;height: 40px;">
                    <td style="font-weight: 550;font-size:15px;">单价：</td>
                    <td><input type="text" name="price" style="width: 200px; height: 30px;font-size:16px;"></td>
                </tr>
                <tr style="width: 280px;height: 40px;">
                    <td style="font-weight: 550;font-size:15px;">原价：</td>
                    <td><input type="text" name="original" style="width: 200px; height: 30px;font-size:16px;"></td>
                </tr>
                <tr style="width: 280px;height: 40px;">
                    <td style="font-weight: 550;font-size:15px;">照片：</td>
                    <td><input type="file" name="myFile" style="width: 200px; height: 22px;font-size:13px;"></td>
                </tr>
                <tr style="width: 280px;height: 40px;">
                    <td colspan="2">
                    <input type="submit" name="submit" value="确定添加" style="width: 247px; height: 32px; font-size: 16px;background-color: red;color: white;border: 0;">
                    </td>
                </tr>
            </table>
            </form>
            </div>
        </div>
    </div>
    <!-- 扩展部分 -->
     <div class="extend"></div>
    <!-- 页脚部分 -->
    <div class="footer">
        <ul class="footer_ul">
            <li>网站首页</li>
            <li>企业合作</li>
            <li>人才招聘</li>
            <li>联系我们</li>
            <li>讲师招募</li>
            <li>帮助中心</li>
            <li>意见反馈</li>
            <li>幕课大学</li>
            <li>代码托管</li>
            <li>友情链接</li>
        </ul>
        <ul class="footer_ul">
            <li>Copyright 2020 inocc.com All Rights Reserved | 京ICP备 120007110号-11 北京伟都文化传媒有限公司 技术支持：都仔工作室</li>
        </ul>
    </div>
</div>
</body>
</html>
<?php
function upload($obj_name,$folder){
    $filename=$_FILES['myFile']['name'];
    $filename=iconv("UTF-8","GB2312",$filename);
    $tmp_filename=$_FILES[$obj_name]['tmp_name'];
    if (move_uploaded_file($tmp_filename,"$folder/$filename")) {
        return "$folder/$filename";
    }
    return "";
}
?>