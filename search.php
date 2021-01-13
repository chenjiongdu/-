<?php
session_start();
$con=mysqli_connect('localhost','root','','taobao');
mysqli_query($con, 'set names utf8');
$introduce=@$_POST['introduce'];
if ($introduce=='') {
    $introduce='请输入要搜索的词';
}
else{
    $sql="SELECT * FROM commodity WHERE introduce LIKE '%$introduce%'";
    $res=mysqli_query($con, $sql);
}
if (isset($_POST['submit'])) {
    $shopping_commodity_id=@$_POST['commodity_id'];
    if(isset($_SESSION['user_id'])){
        $user_id=$_SESSION['user_id'];
        $sql_shopping="INSERT INTO shopping (user_id,commodity_id) VALUES ($user_id,$shopping_commodity_id)";
        mysqli_query($con, $sql_shopping);
        $sql="SELECT * FROM commodity WHERE introduce LIKE '%$introduce%'";
        $res=mysqli_query($con, $sql);
    }
    else{
        echo "<script>alert('请先登录');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>淘宝搜索</title>
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="wrapper">
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
                    <img src="./img/adv.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- 搜索区域 -->
        <div class="search-wrap">
            <div class="search-con">
                <div class="logo-box"></div>
                <div class="search-box">
                    <div class="search-t">
                        <div class="search-tab">
                            <ul>
                                <li class="select">宝贝</li>
                                <li>天猫</li>
                                <li>店铺</li>
                            </ul>
                        </div>
                        <div class="search-panel">
                            <a href="#" class="sousuo"></a>
                            <form action="" method="post">
                                <div class="btn">
                                    <button class="submit">搜索</button>
                                </div>
                                <div class="search-inp-box">
                                    <div class="search-inp">
                                        <input type="text" placeholder="<?php echo $introduce; ?>" name="introduce">
                                    </div>
                                </div>
                            </form>
                            <a href="#" class="camera"></a>
                        </div>
                    </div>
                </div>
                <div class="code-box">
                    <a href="#" class="phone">手机淘宝</a>
                    <a href="#" class="code"></a>
                    <a href="#" class="close">X</a>
                </div>
            </div>
        </div>
        <!-- 主体部分 -->
        <div class="screen" style="background-color: white;">
            <div class="screen-box">
                <div class="framework">
                    <div class="framework-left">
<?php
while (@$row=mysqli_fetch_assoc($res)) {
?>
                        <div class="small-box-l">
                            <a href="#">
                                <div class="top">
                                    <img src="<?php echo $row['image']; ?>" alt="">
                                </div>
                                <div class="bottom">
                                    <div class="content-top"><?php echo $row['introduce']; ?></div>
                                    <div class="content-middle">
                                        <p>
                                            <span class="sub">淘宝双12</span>
                                            <span class="money">￥</span>
                                            <span class="sup"><?php echo $row['price']; ?></span>
                                        </p>
                                    </div>
                                    <div class="content-bottom">
                                        <p><span class="top">￥</span><?php echo $row['original']; ?></p>
                                        <span class="bottom">累计售出<?php echo $row['sale']; ?>件</span>
                                    </div>
                                    <div class="content-footer">
                                        <form action="" method="post">
                                            <input type="submit" name="submit" value="加入购物车" style="background:transparent;border:0;">
                                            <input type="text" name="commodity_id" value="<?php echo $row['id']; ?>" style="display: none;">
                                            <input type="text" name="introduce" value="<?php echo $introduce; ?>" style="display: none;">
                                        </form>
                                    </div>
                                </div>
                            </a>
                        </div>
<?php
}
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
</body>
</html>