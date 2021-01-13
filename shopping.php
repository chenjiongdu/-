<?php
session_start();
$con=mysqli_connect('localhost','root','','taobao');
mysqli_query($con, 'set names utf8');
if (isset($_POST['introduce'])) {
    header("localhost:search.php");
}
if (isset($_SESSION['user_id'])) {
	$user_id=$_SESSION['user_id'];
	$sql_commodity="SELECT * FROM shopping WHERE user_id='$user_id'";
    $res_commodity=mysqli_query($con, $sql_commodity);
}
if (isset($_POST['submit'])) {
	$shopping_commodity_id=$_POST['commodity_id'];
	$sql_shopping="DELETE FROM shopping WHERE commodity_id='$shopping_commodity_id'";
	mysqli_query($con, $sql_shopping);
	$sql_commodity="SELECT * FROM shopping WHERE user_id='$user_id'";
    $res_commodity=mysqli_query($con, $sql_commodity);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>-购物车-淘宝网</title>
    <link rel="stylesheet" href="css/shopping.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style2.css">
    <script src="js/jquery-3.2.1.js"></script>
</head>
<script>
    $(document).ready(function () {
        $('.num').click(function () {
            var num = $(this).val();
            var result = +num + 1;//parseInt和+是一样的，把字符串转整形
        })
        $(".subtraction").click(function () {
            var num = $(this).parent().siblings('.num').val();//找到当前点击加减按钮旁边的数量输入框，才不会影响其他的输入框
            if (+num == 1)
                return;
            var result = +num - 1;
            $(this).parent().siblings('.num').val(result);
        })
        $(".addition").click(function () {
            var num = $(this).parent().siblings('.num').val();
            var result = +num + 1;
            $(this).parent().siblings('.num').val(result);
        })

    });
</script>
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
        <!-- 隔离部分 -->
        <div class="part"></div>
        <!-- 展示部分 -->
        <div class="screen">
            <div class="container">
                <!-- 商品类型 -->
                <div class="row cart">
                    <div class="col-md-6">
                        <label class=""><input type="checkbox" value="1" id="opt"><span class="all">全选</span></label></li>
                        <span class="info">商品信息</span>
        
                    </div>
                    <div class="col-md-6">
                        <div class="col-md-3 ">单价</div>
                        <div class="col-md-3 ">数量</div>
                        <!-- <div class="col-md-3 ">金额</div> -->
                        <div class="col-md-3 ">操作</div>
                    </div>
                </div>
<?php
while (@$row_commodity=mysqli_fetch_assoc($res_commodity)) {
	$commodity_id=$row_commodity['commodity_id'];
	$sql="SELECT * FROM commodity WHERE id=$commodity_id";
    $res=mysqli_query($con, $sql);
    $row=mysqli_fetch_assoc($res);
?>
                <!-- 店铺名称 -->
                <!-- <div class="row cart">
                    <div class="col-md-6">
                        <label><input type="checkbox" value="2" class="shop"><span class="all">店铺：</span></label></li>
                        <span class="infoa">灰姑娘极品小店</span>
                    </div>
                </div> -->
                <div class="header-a">
                    <div class="row">
                        <!-- 左边 -->
                        <div class="col-md-6">
                            <div class="col-md-4 imgs">
                                <label><input type="checkbox" value="3" class="pricet"></label></li>
                                <span><img src="<?php echo $row['image']; ?>" alt="" style="width: 80px;height: 80px;"></span>
                            </div>
                            <div class="col-md-4 main">
                                <ul>
                                    <li><a href="#"><?php echo $row['introduce']; ?></a></li>
        
                                </ul>
                                <span class="card">
                                    <img src="img/xcard.png" alt="">
                                    <img src="img/hp.png" alt="">
                                    <img src="img/sz.jpg" alt="">
                                </span>
                            </div>
                        </div>
                        <!-- 右边 -->
                        <div class="col-md-6">
                            <div class="col-md-3">￥<?php echo $row['price']; ?></div>
                            <div class="col-md-3 price">
                                <span><a href="#" class="subtraction">&nbsp;-</a></span><input type="text" value="1" class="num"><span><a href="#" class="addition">+</a></span>
                            </div>
                            <!-- <div class="col-md-3 money">￥65.00</div> -->
                            <div class="col-md-3 main">
                                <ul>
                                    <li>
                                    	<form action="" method="post">
                                    		&nbsp;&nbsp;
                                    		<input type="text" name="commodity_id" value="<?php echo $commodity_id; ?>" style="display: none;">
                                    		<input type="submit" name="submit" value="删除" style="background:transparent;border:0">
                                    	</form>
                                    </li><br/>
                                    <li>&nbsp;&nbsp;&nbsp;<a href="#">相似宝贝</a></li>
                                    <li>&nbsp;&nbsp;&nbsp;<a href="#">移入收藏夹</a></li><br/>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
<?php
}
?>
                <div>
                    <div class="col-md-6  amout">金额：</div>
                    <div class=".col-md-6">总计：</div>
                </div>
            </div>
            <div class="partaway"></div>
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
<script>
    $(document).ready(function () {
        $("#opt").click(function () {
            var an = $("#opt").is(":checked");
            console.log(an);
            if (an == true) {
                $("#opt").next().text("取消");
                $(".shop").add(".pricet").each(function (e) {
                    $(this).prop("checked", true)
                });
            } else {
                $("#opt").next().text("全选");
                $(".shop").add(".pricet").each(function (e) {
                    $(this).prop("checked", false)
                });
            }
        });
    });
</script>
</html>