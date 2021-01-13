/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : taobao

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2020-12-28 10:57:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for commodity
-- ----------------------------
DROP TABLE IF EXISTS `commodity`;
CREATE TABLE `commodity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `introduce` varchar(100) DEFAULT NULL,
  `price` float(11,2) DEFAULT NULL,
  `original` float(11,2) DEFAULT NULL,
  `sale` int(11) DEFAULT NULL,
  `image` varchar(20) DEFAULT NULL,
  `label` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=83 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of commodity
-- ----------------------------
INSERT INTO `commodity` VALUES ('3', '3', '日系潮牌秋冬款青少年猫咪印花连帽夹克加绒厚外套男韩版潮流上衣', '218.00', '226.00', '17', './img/01.jpg', '无');
INSERT INTO `commodity` VALUES ('4', '3', '劲霸奥莱男装秋冬新款白鸭绒立领短版茄克羽绒服男士外套BRDA3151 ', '649.00', '688.00', '28', './img/05.jpg', '无');
INSERT INTO `commodity` VALUES ('80', '1', '大衣火狐大衣雪狐大衣白狼大衣黑狼大衣', '312.00', '411.00', '0', 'img/04.jpg', '无');
INSERT INTO `commodity` VALUES ('6', '3', 'JackJones杰克琼斯秋冬男百搭休闲工装连帽棉服夹克外套220409010', '839.30', '864.00', '67', './img/08.jpg', '无');
INSERT INTO `commodity` VALUES ('79', '1', '大衣火狐大衣雪狐大衣白狼大衣黑狼大衣', '241.00', '312.00', '0', './img/38.jpg', '无');
INSERT INTO `commodity` VALUES ('82', '1', '化石化作用抗生素出过问题报告', '123.00', '321.00', '0', 'img/08.jpg', '无');
INSERT INTO `commodity` VALUES ('9', '3', '雅戈尔西装秋冬男士官方纯羊毛商务休闲蓝色婚庆西服正装外套A747', '1439.00', '1899.00', '134', './img/06.jpg', '无');
INSERT INTO `commodity` VALUES ('10', '4', '【POPMART联名款】LILY2020冬季新款女装针织拼接环保皮草外套', '759.00', '777.00', '31', './img/04.jpg', '无');
INSERT INTO `commodity` VALUES ('11', '3', '当天发货赠299元耳机 iqoou1x新品vivo官方旗舰店vivoiqoou1x', '899.00', '911.00', '11', './img/12.jpg', '无');
INSERT INTO `commodity` VALUES ('12', '3', 'LILY2020秋季新款女装复古格子收腰显瘦双排扣西装式长袖连衣裙', '390.00', '444.00', '31', './img/09.jpg', '无');
INSERT INTO `commodity` VALUES ('13', '1', '【新品热卖】Redmi Note 9 Pro小米官方旗舰店红米note9pro', '598.00', '2798.00', '162', './img/10.jpg', '无');
INSERT INTO `commodity` VALUES ('14', '3', '5G全网通ivviX12骁龙865处理器一千百元内学生价智能手机送华为oppo小米vivo耳机', '789.00', '821.00', '41', './img/14.jpg', '无');
INSERT INTO `commodity` VALUES ('15', '1', '【新品热卖】Redmi Note 9 Pro小米官方旗舰店红米note9pro', '1598.00', '2798.00', '61', './img/10.jpg', '无');
INSERT INTO `commodity` VALUES ('16', '9', 'BEANPOLE滨波 2020秋季新品女士中长款羊毛经典牛角扣连帽大衣', '2130.00', '3180.00', '68', './img/03.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('17', '9', '【张佳宁同款】Gobi蒙古纯羊绒大衣女士精品女毛呢大衣中长款外套', '3280.00', '3640.00', '88', './img/02.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('18', '9', '【POPMART联名款】LILY2020冬季新款女装针织拼接环保皮草外套', '759.00', '1599.00', '89', './img/04.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('19', '9', 'LILY2020秋季新款女装复古格子收腰显瘦双排扣西装式长袖连衣裙 ', '390.00', '520.00', '68', './img/09.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('20', '12', '[聚] Vero Moda新款翻领双排扣毛呢大衣318327564  ', '360.00', '1599.00', '28', './img/21.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('21', '9', '限时7折| ONLY新款宽松卡通印花针织休闲抽绳百搭卫衣女11939S577 ', '129.00', '349.00', '138', './img/22.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('22', '9', '[聚]| ONLY新款收腰系带纯色长款绒面皮衣外套女118310533  ', '989.00', '3799.00', '19', './img/23.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('23', '12', '[聚]ONLY新款可拆卸毛领宽松短款厚棉服外套女|119322502 ', '359.00', '999.00', '79', './img/26.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('24', '12', '[聚]【关晓彤同款】ONLY新款轻薄短款收腰羽绒服女|119323520 ', '599.00', '799.00', '148', './img/27.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('25', '12', '[聚]ONLY冬季新款高领打底衫堆堆领显瘦内搭百搭针织女120424070  ', '269.00', '399.00', '18', './img/28.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('26', '9', '南瓜谷双面呢大衣女新款2018中长款全羊毛小个子毛呢外套女MN100', '688.99', '899.99', '59', './img/38.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('27', '9', '南瓜谷 网红奶奶裤秋冬季宽松直筒百搭羊毛加厚阔腿针织裤女 K514', '299.99', '369.99', '58', './img/39.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('28', '9', '南瓜谷黑色小西裤直筒高腰宽松显瘦休闲百搭西装裤新款裤子女K557', '169.99', '279.99', '38', './img/40.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('29', '9', '南瓜谷 廓形西装外套女春秋休闲气质高级感2020显瘦西服上衣X031', '309.99', '429.99', '38', './img/41.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('30', '9', '南瓜谷 毛衣女宽松外穿2020年新款套头内搭慵懒风百搭针织衫 Z545  ', '289.99', '419.99', '89', './img/42.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('31', '9', '南瓜谷 网红小西装外套女2020年春夏设计感小众薄款西服上衣 X035', '289.99', '409.99', '79', './img/44.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('32', '9', '南瓜谷 直角肩小西装外套女chic薄款宽松休闲春夏西服女上衣 X036 ', '299.99', '419.99', '226', './img/43.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('33', '9', '南瓜谷 夏日薄款通勤裤~女休闲裤小脚烟管裤百搭直筒拖地裤 K587  ', '179.99', '279.99', '78', './img/45.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('34', '9', '南瓜谷流光衬衫~女设计感小众长袖宽松气质粉色夏季上衣衬衣C0069 ', '179.99', '279.99', '81', './img/46.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('35', '9', '南瓜谷薄薄裤~裤子女2020新款直筒宽松显瘦西裤薄款休闲裤子K0025', '169.99', '279.99', '73', './img/47.jpg', '热卖女装');
INSERT INTO `commodity` VALUES ('36', '10', '日系潮牌秋冬款青少年猫咪印花连帽夹克加绒厚外套男韩版潮流上衣', '218.00', '300.00', '108', './img/01.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('37', '10', '劲霸奥莱男装秋冬新款白鸭绒立领短版茄克羽绒服男士外套BRDA3151', '399.00', '649.00', '238', './img/05.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('38', '10', '雅戈尔进口西服秋冬新款商务休闲羊毛修身藏青西装婚礼外套男', '1455.00', '1599.00', '89', './img/07.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('39', '10', '雅戈尔西装秋冬男士官方纯羊毛商务休闲蓝色婚庆西服正装外套A747', '672.00', '1439.00', '568', './img/06.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('40', '10', 'JackJones杰克琼斯秋冬男百搭休闲工装连帽棉服夹克外套220409010', '839.30', '1300.00', '208', './img/08.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('41', '12', '[聚] Jack Jones杰克琼斯男新款舒适棉服风衣外套218309518', '300.00', '1499.00', '138', './img/16.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('42', '12', '[聚] JackJones杰克琼斯男新款针织衫毛衣上衣218325508  ', '150.00', '699.00', '389', './img/17.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('43', '12', '[聚]SELECTED思莱德男士双面穿棒球领休闲短夹克棉服419322501 ', '389.00', '1099.00', '79', './img/18.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('44', '12', '[聚]SELECTED思莱德男新款绒毛内里中长款羽绒服419412516', '519.00', '1699.00', '438', './img/19.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('45', '10', '[抢]SELECTED思莱德新款男狐狸毛鸭绒防水羽绒服419412554', '1214.00', '2699.00', '138', './img/20.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('46', '10', '@港仔文艺男 秋冬季潮牌牛仔裤韩版宽松潮流百搭长裤复古阔腿裤男', '68.00', '156.00', '59', './img/32.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('47', '10', '绫致JackJones杰克琼斯冬季棉质百搭休闲长裤男219114572  ', '139.00', '599.00', '158', './img/24.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('48', '12', '[聚]JackJones杰克琼斯男打底圆领休闲毛衣针织衫219124511 ', '129.00', '499.00', '308', './img/25.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('49', '10', '@港仔文艺男 学生百搭潮流宽松短袖T恤夏季韩版嘻哈潮牌情侣衣服', '37.00', '78.00', '738', './img/29.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('50', '10', '@港仔文艺男 男士直筒牛仔裤2020秋冬季新款韩版潮流长裤百搭裤子', '88.00', '176.00', '89', './img/30.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('51', '10', '@港仔文艺男 秋冬圆领纯色港风宽松加绒加厚保暖卫衣韩版潮流外套', '48.00', '110.00', '79', './img/31.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('52', '10', '@港仔文艺男 宽松工装休闲裤男士韩版潮流直筒束脚伞兵裤加厚加绒 ', '78.00', '156.00', '266', './img/33.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('53', '10', '@港仔文艺男 欧美潮流工装夹克连帽潮牌外套宽松百搭休闲秋冬上衣   ', '108.00', '216.00', '278', './img/34.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('54', '10', '@港仔文艺男 秋季ins韩版纯色长袖T恤纯棉宽松潮流打底衫潮牌卫衣 ', '29.00', '58.00', '87', './img/35.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('55', '10', '@港仔文艺男港风情侣卫衣男士韩版秋冬季宽松加绒加厚休闲ins外套', '83.00', '156.00', '73', './img/37.jpg', '热卖男装');
INSERT INTO `commodity` VALUES ('56', '11', '【优惠高达300元】HONOR/荣耀9X麒麟810芯片4800万超清双摄全面屏智能手机官方旗舰店 ', '1299.00', '1599.00', '108', './img/sj1.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('57', '11', '【享6期免息】小米105g手机骁龙8651亿像素8K相机对称式立体声智能拍照游戏小米官方旗舰店小米手机', '3799.00', '3999.00', '238', './img/sj2.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('58', '11', '【下单立减99元】vivo Y3官方旗舰店正品手机官网学生老年全网通超长待机大屏vivoy3 y93 u3x z5x y7s ', '999.00', '1089.00', '89', './img/sj3.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('59', '11', '【送智能手表】OPPO A8 oppoa8手机oppo新款上市全新机 oppo官网旗舰店官方oppo手机a8 a11r11r15r170pp0手机', '999.00', '1099.00', '568', './img/sj4.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('60', '11', '【以旧换新最高补贴3000元】HONOR/荣耀X10手机5G麒麟820全面屏官方旗舰店新品正品10X拍照手机', '2038.00', '2038.00', '208', './img/sj5.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('61', '11', '直降600元/官网HUAWEI 华为畅享10 plus 手机官方旗舰店正品畅想9   ', '1188.00', '1397.00', '138', './img/sj6.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('62', '11', '【限时特价】正品全网通4G手机移动联通电信老人大屏智能机500以下大字体学生价老年备用机带微信拍照手机  ', '169.00', '199.00', '389', './img/sj7.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('63', '11', '【直降270】OPPO A8 oppoa8手机opop新品a11x a5 a9x k7 a5 a32 a72 oppo手机官方旗舰店0ppo手机正品0pp0a8  ', '999.00', '1099.00', '79', './img/sj8.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('64', '11', '【至高省600 6期免息】vivo iQOO 3高通骁龙865处理器5g游戏爱酷手机官方旗舰店正品vivoiqoo3vivo新iqoo ', '3599.00', '3998.00', '438', './img/sj9.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('65', '11', '大哥大手机古董老式怀旧  ', '183.00', '188.00', '38', './img/sj10.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('66', '11', '【新品热卖】Redmi Note 9 Pro一亿像素手机120Hz高刷发布游戏老年人xiaomi小米官方旗舰店红米note9pro', '1599.00', '1799.00', '59', './img/10.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('67', '11', '【5G手机】OPPO Reno4 SE opporeno4se手机新款上市oppo手机官方旗舰店官网reno4 0ppo手机oppo reno5 pror19', '2499.00', '2599.00', '158', './img/11.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('68', '11', '当天发货赠299元耳机 vivo iQOO U1x手机 iqoou1x新品vivo官方旗舰店vivoiqoou1x u1x手机iqoo vivou1x ux1 ', '899.00', '1099.00', '308', './img/12.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('69', '11', '【10号0点享24期免息】Apple/苹果 iPhone 12 全网通5G新品智能手机苏宁易购官方旗舰正品', '6299.00', '6389.00', '738', './img/13.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('70', '11', '5G全网通ivvi X12骁龙865处理器一千百元内排行榜游戏学生价智能手机全面屏曲面半价送华为oppo小米vivo耳机 ', '789.00', '899.00', '89', './img/14.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('71', '11', '【立省20元】OPPO K7X oppok7x手机5g新款上市k7新品oppo手机官方旗舰店官网正品0ppo k5 k3k4k6k8 a72 a92s ', '1499.00', '1679.00', '79', './img/15.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('72', '11', '新品【送好礼】华为HONOR 荣耀20青春版手机官方旗舰店10官网系列正品降价9x直降play3屏幕指纹便宜千元机30   ', '1199.00', '1699.00', '226', './img/sj11.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('73', '11', '【5G新款上市分期免息】OPPO A92s oppoa92s手机官方正品opporeno k7 a72 a52 oppo5g官方旗舰店0ppoa92s k7x ', '1999.00', '2016.00', '278', './img/sj.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('74', '11', '【12.16到手价899】 OPPO A8时尚拍照手机 128GB大内存三摄轻薄手机指纹解锁4G全面屏OPPO官方旗舰店   ', '999.00', '1080.00', '81', './img/sj12.jpg', '热卖手机');
INSERT INTO `commodity` VALUES ('75', '11', '现货当天发【24期分期】Huawei/华为Nova 7 SE官方旗舰店正品5G手机mate30官网p40pro直降nove8荣耀9x畅享10  ', '2699.00', '2899.00', '73', './img/sj13.jpg', '热卖手机');

-- ----------------------------
-- Table structure for shopping
-- ----------------------------
DROP TABLE IF EXISTS `shopping`;
CREATE TABLE `shopping` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `commodity_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shopping
-- ----------------------------
INSERT INTO `shopping` VALUES ('93', '1', '79');
INSERT INTO `shopping` VALUES ('80', '3', '36');
INSERT INTO `shopping` VALUES ('79', '3', '39');
INSERT INTO `shopping` VALUES ('47', '2', '6');
INSERT INTO `shopping` VALUES ('44', '2', '11');
INSERT INTO `shopping` VALUES ('73', '5', '38');
INSERT INTO `shopping` VALUES ('78', '3', '38');
INSERT INTO `shopping` VALUES ('40', '2', '55');
INSERT INTO `shopping` VALUES ('42', '2', '11');
INSERT INTO `shopping` VALUES ('77', '3', '37');
INSERT INTO `shopping` VALUES ('76', '13', '39');
INSERT INTO `shopping` VALUES ('75', '13', '37');
INSERT INTO `shopping` VALUES ('72', '5', '24');
INSERT INTO `shopping` VALUES ('99', '1', '26');
INSERT INTO `shopping` VALUES ('74', '5', '58');
INSERT INTO `shopping` VALUES ('91', '14', '17');
INSERT INTO `shopping` VALUES ('65', '5', '21');
INSERT INTO `shopping` VALUES ('66', '5', '53');
INSERT INTO `shopping` VALUES ('67', '5', '36');
INSERT INTO `shopping` VALUES ('68', '5', '36');
INSERT INTO `shopping` VALUES ('69', '5', '37');
INSERT INTO `shopping` VALUES ('70', '5', '37');
INSERT INTO `shopping` VALUES ('71', '5', '75');
INSERT INTO `shopping` VALUES ('98', '1', '17');
INSERT INTO `shopping` VALUES ('97', '1', '16');
INSERT INTO `shopping` VALUES ('94', '1', '79');
INSERT INTO `shopping` VALUES ('90', '3', '17');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `number` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', '管理员', 'guanli');
INSERT INTO `user` VALUES ('2', '口袋妖怪', 'koudai');
INSERT INTO `user` VALUES ('3', '大米旗舰店', 'dami');
INSERT INTO `user` VALUES ('4', '仓鼠', 'cangshu');
INSERT INTO `user` VALUES ('5', '三只松鼠', 'sanzhi');
INSERT INTO `user` VALUES ('7', '我是谁', 'shui');
INSERT INTO `user` VALUES ('8', '谁', '谁');
INSERT INTO `user` VALUES ('9', '女装', 'nv');
INSERT INTO `user` VALUES ('10', '男装', 'nan');
INSERT INTO `user` VALUES ('11', '手机', 'shou');
INSERT INTO `user` VALUES ('12', '衣服', 'yi');
INSERT INTO `user` VALUES ('13', '小瓜', 'xiaogua');
INSERT INTO `user` VALUES ('14', '时间', 'shijian');
