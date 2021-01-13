<?php
session_start();
$con=mysqli_connect('localhost','root','','taobao');
mysqli_query($con, 'set names utf8');
if (isset($_POST['introduce'])) {
    header("localhost:search.php");
}
$sql="SELECT * FROM commodity WHERE label='热卖男装'";
$res=mysqli_query($con, $sql);
if (isset($_POST['submit'])) {
    $shopping_commodity_id=$_POST['commodity_id'];
    if(isset($_SESSION['user_id'])){
        $user_id=$_SESSION['user_id'];
        $sql_shopping="INSERT INTO shopping (user_id,commodity_id) VALUES ($user_id,$shopping_commodity_id)";
        mysqli_query($con, $sql_shopping);
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
    <title>-@港仔文艺男装-淘宝网</title>
    <link rel="stylesheet" href="css/decorate.css">
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
                    <img src="img/adv.jpg" alt="">
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
                            <form action="search.php"  method="post">
                                <div class="btn">
                                    <button class="submit">搜索</button>
                                </div>
                                <div class="search-inp-box">
                                    <div class="search-inp">
                                        <input type="text" placeholder="荣耀10降价" name="introduce">
                                    </div>
                                </div>
                            </form>
                            <a href="#" class="camera"></a>
                        </div>
                    </div>
                    <div class="search-bl">
                        <a href="#" class="active">眼霜 </a>
                        <a href="#">化妆品</a>
                        <a href="#" class="active">口红 </a>
                        <a href="#">套装女春装 </a>
                        <a href="#">护肤品 </a>
                        <a href="#">新款男鞋 </a>
                        <a href="#" class="active">衬衫 </a>
                        <a href="#">男士外套 </a>
                        <a href="#">牛仔裤</a>
                        <a href="#">夹克</a>
                        <a href="#">时尚休闲裤</a>
                        <a href="#">男运动鞋</a>
                    </div>
                </div>
                <div class="code-box">
                    <a href="#" class="phone">手机淘宝</a>
                    <a href="#" class="code"></a>
                    <a href="#" class="close">X</a>
                </div>
            </div>
        </div>
        <!-- 菜单项部分 -->
        <div class="box">
            <div class="menu">
                <ul>
                    <li><a href="index.php" target="_self">首页</a></li>
                    <li><a href="menswear.php" target="_self">男装<table><tr><td>
                        <ul>
                            <li><a href="#">毛衣</a></li>
                            <li><a href="#">卫衣</a></li>
                            <li><a href="#">裤子</a></li>
                            <li><a href="#">夹克</a></li>
                            <li><a href="#">配件</a></li>
                        </ul></td></tr>
                    </table></a>
                    </li>
                    <li><a href="girlswear.php" target="_blank">女装<table><tr><td>
                        <ul>
                            <li><a href="#">毛衣</a></li>
                            <li><a href="#">卫衣</a></li>
                            <li><a href="#">裤子</a></li>
                            <li><a href="#">夹克</a></li>
                            <li><a href="#">配件</a></li>
                        </ul></td></tr>
                    </table></a>
                    </li>
                    <li>
                        <a href="phone.php">手机<table><tr><td>
                            <ul>
                                <li><a href="#">华为</a></li>
                                <li><a href="#">OPPO</a></li>
                                <li><a href="#">VIVO</a></li>
                                <li><a href="#">Apple</a></li>
                            </ul></td></tr>
                        </table></a>
                    </li>
                    <li>
                        <a href="#">鞋靴<table><tr><td>
                            <ul>
                                <li><a href="#">休闲鞋</a></li>
                                <li><a href="#">商务休闲鞋</a></li>
                                <li><a href="#">正装鞋</a></li>
                                <li><a href="#">马丁靴</a></li>
                                <li><a href="#">高跟鞋</a></li>
                            </ul></td></tr>
                        </table></a>
                        </li>
                    <li><a href="#">运动户外<table><tr><td>
                        <ul>
                            <li><a href="#">篮球鞋</a></li>
                            <li><a href="#">跑步机</a></li>
                            <li><a href="#">山地车</a></li>
                            <li><a href="#">运动包</a></li>
                            <li><a href="#">体育用品</a></li>
                        </ul></td></tr>
                    </table></a>
                    </li>
                    <li><a href="#">箱包<table><tr><td>
                        <ul>
                            <li><a href="#">拉杆箱</a></li>
                            <li><a href="#">电脑包</a></li>
                            <li><a href="#">商务公文包</a></li>
                            <li><a href="#">男士皮带</a></li>
                            <li><a href="#">品质专柜</a></li>
                        </ul></td></tr>
                    </table></a>
                    </li>
                    <li>
                        <a href="">其他<table><tr><td>
                            <ul>
                                <li><a href="#">钟表珠宝</a></li>
                                <li><a href="#">数码</a></li>
                                <li><a href="#">汽车</a></li>
                                <li><a href="#">工具</a></li>
                                <li><a href="#">生活用品</a></li>
                            </ul></td></tr>
                        </table></a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 小插图部分 -->
        <div class="part">
            <img src="./img/qc.jpg" alt="">
        </div>
        <!-- 展示栏 -->
        <div class="showcase">
            <div class="showcase-box">
                <div class="main">
                    <div class="main-inner"></div>
                    <div class="main-content">
                        <a href="http://" target="_blank" rel="noopener noreferrer">
                            <img src="./img/rm.png" alt="123">
                            <div class="content">
                                <span>热卖男装分会场</span>
                                <img src="./img/yj.png" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="main-bootom"></div>
                    <div class="main-footer"></div>
                </div>
            </div>
        </div>
        <!-- 小部件部分 -->
        <div class="components">
            <img src="./img/dd.png" alt="" class="img-left">
            <span>店铺精选</span>
            <img src="./img/yd.png" alt="" class="img-right">
        </div>
        <!-- 主体部分 -->
        <div class="screen">
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