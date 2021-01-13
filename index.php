<?php
session_start();
$con=mysqli_connect('localhost','root','','taobao');
mysqli_query($con, 'set names utf8');
if (isset($_POST['introduce'])) {
    header("localhost:search.php");
}
if (isset($_POST['logout'])) {
	unset($_SESSION['number']);
	unset($_SESSION['user_id']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>淘宝网-淘！我喜欢</title>
    <link rel="stylesheet" href="css/demo.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container-fuild">
        <div class="row">
    <div class="wrapper">
        <!-- 导航条+ad -->
        <div class="top-nav-wrap col-md-12 col-sm-12 col-xs-12">
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
                                    <button class="submit" name="submit">搜索</button>
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
        <!-- 导航条 -->
        <div class="screen-nav">
            <div class="screen-nav-con">
                <h2>主题市场</h2>
                <ul>
                    <li>
                        <a href="#">天猫</a>
                    </li>
                    <li>
                        <a href="#">聚划算</a>
                    </li>
                    <li>
                        <a href="#">天猫超市</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">|</a>
                    </li>
                    <li>
                        <a href="#">淘抢购</a>
                    </li>
                    <li>
                        <a href="#">电器城</a>
                    </li>
                    <li>
                        <a href="#">司法拍卖</a>
                    </li>
                    <li>
                        <a href="#">淘宝心选</a>
                    </li>
                    <li>
                        <a href="#">兴农扶贫</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">|</a>
                    </li>
                    <li>
                        <a href="#">飞猪旅行</a>
                    </li>
                    <li>
                        <a href="#">智能生活</a>
                    </li>
                    <li>
                        <a href="#">苏宁易购</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- 图片主体展示部分 -->
        <div class="screen-box">
            <div class="main">
                <div class="main-inner">
                    <div class="inner-left">
                        <ul>
                            <li>
                                <a href="girlswear.php" target="_blank">女装</a> /
                                <a href="menswear.php" target="_blank">男装</a> /
                                <a href="#">内衣</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">鞋靴</a> /
                                <a href="#">箱包</a> /
                                <a href="#">配饰配件</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">童装玩具</a> /
                                <a href="#">孕产</a> /
                                <a href="#">用品</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">家电</a> /
                                <a href="#">数码</a> /
                                <a href="#">手机</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">美妆</a> /
                                <a href="#">洗护</a> /
                                <a href="#">保健品</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">饰品</a> /
                                <a href="#">珠宝</a> /
                                <a href="#">手表眼镜</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">运动</a> /
                                <a href="#">户外</a> /
                                <a href="#">乐器</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">游戏</a> /
                                <a href="#">动漫</a> /
                                <a href="#">影视</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">美食</a> /
                                <a href="#">生鲜</a> /
                                <a href="#">零食</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">鲜花</a> /
                                <a href="#">宠物</a> /
                                <a href="#">农资</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">工具</a> /
                                <a href="#">装修</a> /
                                <a href="#">建材</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">家具</a> /
                                <a href="#">家饰</a> /
                                <a href="#">家纺</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">汽车</a> /
                                <a href="#">二手车</a> /
                                <a href="#">用品</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">办公</a> /
                                <a href="#">DIY</a> /
                                <a href="#">五金电子</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">百货</a> /
                                <a href="#">餐厨</a> /
                                <a href="#">家庭保健</a>
                                <span></span>
                            </li>
                            <li>
                                <a href="#">学习</a> /
                                <a href="#">卡券</a> /
                                <a href="#">本地服务</a>
                                <span></span>
                            </li>
                        </ul>
                    </div>
                    <div class="inner-content">
                        <div class="pic-box">
                            <img src="img/pic2.png" class="mainImg" />
                            <div class="pagination"><!--分页器-->
                                <!--<div class="active">1</div>
                                <div>2</div>
                                <div>3</div>
                                <div>4</div>
                                <div>5</div>-->
                            </div>
                        </div>
                        <script src="js/jquery.js"></script>
                        <script>
                            var imgs=['./img/pic2.png','./img/xlb1.jpg','./img/xlb2.jpg','./img/xlb3.jpg','./img/xlb4.jpg']
                            // for(var i=0;i<imgs.length;i++){
                            // 	var v=$('<div></div>').text(i+1)
                            // 	if(i===0){
                            // 		v.addClass('active')
                            // 	}
                            // 	$('.pagination').append(v)
                            // }
                            var a=0
                            var play=true
                            setInterval(function(){
                                if(play){
                                    a++
                                    if(a>imgs.length-1){
                                    a=0
                                    }
                                    $('.mainImg').attr('src',imgs[a])//设置src
                                    $('.pagination div').removeClass('active')
                                    $('.pagination div:eq('+a+')').addClass('active')
                                }
                            },3000)
                            $('.container').hover(function(){
                                play=false
                            },function(){
                                play=true
                            })
                        </script>
                        <div class="inner-mall">
                            <div class="head">
                                <img src="./img/tm.png" alt="">
                                <span class="tm">理想生活上天猫</span>
                            </div>
                            <a href="#">
                                <img src="./img/pic3.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="inner-right">
                        <a href="#">
                            <img src="./img/pic1.png" alt="">
                        </a>
                        <div class="hot">
                            <span>今日热卖</span>
                            <a href="#">
                                <img src="./img/pic4.png" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="main-bottom">
                    <div class="content">
                        <div class="logo-box"></div>
                        <a href="#">
                            <img src="./img/pic5.png" alt="">
                            <h4>双11前，全国最大的天猫新零售书店来了</h4>
                            <p>10月26日，全国最大的天猫新零售体验书店正式在杭州开业，成为杭城最新的一道风景线。</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-right">
                <div class="member">
                    <div class="member-head">
                        <div class="header">
                            <a href="#"></a>
                        </div>
                        <span class="info">Hi!
<?php
if(isset($_SESSION['number'])){
    echo $_SESSION['number'];
}
?>
                        </span>
                        <p>
                            <a href="#" class="icon">
                                <span></span>
                                领淘金币抵钱
                            </a>
                            <a href="#" class="club">
                                <span></span>
                                会员俱乐部
                            </a>
                        </p>
                    </div>
                    <div class="member-foot">
                        <a href="login.php" class="login">登录</a>
                        <a href="logon.php">注册</a>
						<a>
							<form action="" method="post">
                        		<button name="logout" style="background:transparent;border:0;color: white;font-weight: 600;">退出登录</button>
							</form>
						</a>
                    </div>
                </div>
                <div class="message">
                    <a href="#">
                        网上有害信息举报
                        <span></span>
                    </a>
                </div>
                <div class="notice">
                    <div class="title">
                        <ul>
                            <li>
                                <a href="#">
                                    公告
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    公告
                                </a>
                            </li>
                            <li>
                                <a href="#" class="active">
                                    论坛
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    公告
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    公告
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="content">
                        <ul>
                            <li>
                                <a href="#" class="active">卖家如何设置公益宝贝</a>
                            </li>
                            <li>
                                <a href="#">卖家如何设置公益宝贝</a>
                            </li>
                            <li>
                                <a href="#">卖家如何设置公益宝贝</a>
                            </li>
                            <li>
                                <a href="#">卖家如何设置公益宝贝</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="module">
                    <ul>
                        <li>
                            <a href="#">
                                <span class="icon1"></span>
                                <p>充话费</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon2"></span>
                                <p>旅行</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon3"></span>
                                <p>车险</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon4"></span>
                                <p>游戏</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon5"></span>
                                <p>彩票</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon6"></span>
                                <p>电影</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon7"></span>
                                <p>飞猪</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon8"></span>
                                <p>游戏</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon9"></span>
                                <p>理财</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon10"></span>
                                <p>找服务</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon11"></span>
                                <p>演出</p>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="icon12"></span>
                                <p>水电煤</p>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="app">
                    <h3>阿里APP
                        <a href="#" class="more">更多></a>
                    </h3>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="./img/smalllogo1.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/smalllogo2.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/smalllogo3.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/smalllogo4.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/smalllogo5.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/smalllogo6.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/smalllogo10.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/smalllogo7.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/smalllogo8.png" alt="">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img src="./img/smalllogo9.png" alt="">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- 展示内容下部分 -->
        <div class="screen-box-bottom">
            <div class="framework">
                <div class="framework-left">
                    <div class="small-box-l">
                        <div class="top">
                            <img src="./img/02.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>【张佳宁同款】Gobi蒙古纯羊绒大衣女士精品女毛呢大衣中长款外套</h6>
                            <h4>￥7608</h4>
                        </div>
                    </div>
                    <div class="small-box-r">
                        <div class="top">
                            <img src="./img/03.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>BEANPOLE滨波 2020秋季新品女士中长款羊毛经典牛角扣连帽大衣</h6>
                            <h4>￥4680</h4>
                        </div>
                    </div>
                    <div class="small-box-l">
                        <div class="top">
                            <img src="./img/01.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>日系潮牌秋冬款青少年猫咪印花连帽夹克加绒厚外套男韩版潮流上衣</h6>
                            <h4>￥218</h4>
                        </div>
                    </div>
                    <div class="small-box-r">
                        <div class="top">
                            <img src="./img/05.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>劲霸奥莱男装秋冬新款白鸭绒立领短版茄克羽绒服男士外套BRDA3151 </h6>
                            <h4>￥649</h4>
                        </div>
                    </div>
                    <div class="small-box-l">
                        <div class="top">
                            <img src="./img/07.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>雅戈尔进口西服秋冬新款商务休闲羊毛修身藏青西装婚礼外套男1455</h6>
                            <h4>￥1599</h4>
                        </div>
                    </div>
                    <div class="small-box-r">
                        <div class="top">
                            <img src="./img/08.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>JackJones杰克琼斯秋冬男百搭休闲工装连帽棉服夹克外套220409010</h6>
                            <h4>￥839.3</h4>
                        </div>
                    </div><div class="small-box-l">
                        <div class="top">
                            <img src="./img/10.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>【新品热卖】Redmi Note 9 Pro小米官方旗舰店红米note9pro</h6>
                            <h4>￥1599</h4>
                        </div>
                    </div>
                    <div class="small-box-r">
                        <div class="top">
                            <img src="./img/11.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>【5G手机】OPPO Reno4 SE opporeno4se 0ppo手机oppo reno5 pror19</h6>
                            <h4>￥2499</h4>
                        </div>
                    </div><div class="small-box-l">
                        <div class="top">
                            <img src="./img/06.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>雅戈尔西装秋冬男士官方纯羊毛商务休闲蓝色婚庆西服正装外套A747</h6>
                            <h4>￥1439</h4>
                        </div>
                    </div>
                    <div class="small-box-r">
                        <div class="top">
                            <img src="./img/04.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>【POPMART联名款】LILY2020冬季新款女装针织拼接环保皮草外套</h6>
                            <h4>￥759</h4>
                        </div>
                    </div><div class="small-box-l">
                        <div class="top">
                            <img src="./img/12.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>当天发货赠299元耳机 iqoou1x新品vivo官方旗舰店vivoiqoou1x</h6>
                            <h4>￥899</h4>
                        </div>
                    </div>
                    <div class="small-box-r">
                        <div class="top">
                            <img src="./img/09.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>LILY2020秋季新款女装复古格子收腰显瘦双排扣西装式长袖连衣裙</h6>
                            <h4>￥390</h4>
                        </div>
                    </div>
                    <div class="small-box-l">
                        <div class="top">
                            <img src="./img/13.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>【10号0点享24期免息】Apple/苹果 iPhone 12 全网通5G新品智能手机苏宁易购官方旗舰正品</h6>
                            <h4>￥6299</h4>
                        </div>
                    </div>
                    <div class="small-box-r">
                        <div class="top">
                            <img src="./img/14.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>5G全网通ivviX12骁龙865处理器一千百元内学生价智能手机送华为oppo小米vivo耳机</h6>
                            <h4>￥789</h4>
                        </div>
                    </div>
                    <div class="small-box-l">
                        <div class="top">
                            <img src="./img/15.jpg" alt="">
                        </div>
                        <div class="bottom">
                            <p>聚划算</p>
                            <h6>【立省20元】OPPO K7X oppok7x手机5g新款上市k7新品oppo手机官方旗舰店官网正品0ppo</h6>
                            <h4>￥1499</h4>
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
    </div>
    </div></div>
</body>
</html>