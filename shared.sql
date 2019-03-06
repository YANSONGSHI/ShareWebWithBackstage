/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : shared

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-12-04 22:01:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for admin_login
-- ----------------------------
DROP TABLE IF EXISTS `admin_login`;
CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) DEFAULT NULL,
  `admin_pwd` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin_login
-- ----------------------------
INSERT INTO `admin_login` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- ----------------------------
-- Table structure for article
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `art_title` varchar(255) DEFAULT NULL,
  `art_class` varchar(255) NOT NULL,
  `content_text` mediumtext,
  `content_img` varchar(255) DEFAULT NULL,
  `add_time` date DEFAULT NULL,
  `top` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('2', '胡萝卜卜卜', '普吉岛出游日志，兼旅行轻指南', '旅游', '旅行是一种让身体在路上的方式，工作压力让我们无法喘息时，远处的未知常常能够非常有效地吸引我们的注意。当我们短暂逃离北上广，逃离难以呼吸的雾霾时，就会发现旅行是不可或缺的生活内容。尾巴旅行栏目为此而生，我们累计飞行来换取地图上美丽的风景，我们寻找真实的大自然来暂停亦步亦趋。<br />\r\n<br />\r\n第二站的尾巴旅行由 WellMet 和数字尾巴携手主办，我们来到了旅游商业化非常成熟的普吉岛。说到商业化这个话题，普吉岛虽然非常拥挤，环境质量也不如帕劳那样纯净，但是它能够提供给游客非常多样的服务内容。比如海上的项目就有包括深潜和自由游艇驾驶等等，许多商业化不成熟的国家地区就无法提供。而如果你想要的旅行是一次非常清静的自我净化，那么类似普吉岛这样的地方也许不太适合你。<br />\r\n<br />\r\n\r去到另一个国家首先自然是签证问题，泰国支持落地签证，但需要缴纳 1000 泰铢费用，而且需要随身携带 4000 元人民币，即 20000 元泰铢（100 人民币约等于 500 泰铢）。所以这里建议大家提前办理签证，省时省力。另外也提醒大家，泰国当地时间相对北京时间慢一个小时。<br />\r\n<br />\r\n普吉岛地处热带，属于潮湿的热带气候。11 月-4 月是普吉岛的旅游旺季，气温适宜，对于喜欢潜水的游客来说非常舒服。4 月一9 月是普吉岛的雨季，其中 5 月几乎天天降雨。普吉岛终年常夏无冬，前往游玩的话携带清凉的服饰即可。我们抵达普吉岛的时间是 12 月 31 日晚上，跨年的海滩让烟火照得透亮，不断升起的孔明灯载着所有人的新年愿望。<br />\r在海鲜市场买来的食材可以在附近饭店里加工（每公斤加工费 100 泰铢），我们品尝到了酸辣虾汤（也就是冬阴功）、辣椒膏炒鱿鱼、咖喱皇炒虾、泰国花螺等等有当地特色的菜式。这里也要跟尾巴们分享一下，海鲜市场的标价是虚高的，如果你也想一饱口福，可以试着砍掉一半的价格，成交率也非常高。<br />\r除了海鲜正餐之外，在最早的侨乡故居「普吉老街」能够吃到非常多特色的小吃，同时也是各国游客高频出现的一条步行街。', 'imgTemp/art21.jpg', '2016-12-01', '0');
INSERT INTO `article` VALUES ('3', '白云苍狗', '「开箱」明黄 AKG Y30 骚黄色', '影音', '春天来到 万物复苏，怎么都按捺不住内心的骚动，出街当然也要亮骚起来。一直以来出门都是佩戴深色系耳机，看到这个骚黄色心中突然萌发向往，何不买一个趁着青春的季节，骚起来。<br />\r\n<br />\r\nAKG算是大厂里面颜色最足的耳机了，印象中他们家的Y50也是颜色很多。但是Y50那个皮罩的设计显然不适合万物复苏的春季。<br />\r\n<br />\r包装盒的配色也十分简洁明快<br />\r透过包装能够看到耳机实物，几乎没有色差<br />\r包装盒细节不错，条码在盒底<br />\r打开包装盒，是入门级耳机常用的简装<br />\r骚黄色的Y30就这样静静躺着 <br />\r有种青春被限制住的感觉<br />\r黑色塑料盒子里面还有一个袋子、里面装的耳机收纳袋和说明书等附件<br />\r这个袋子质感很好，很厚实<br />\r终于可以释放活力了<br />\r炯炯有神的黑黄配色<br />\r头粱是金属材质， 保证了耐用度<br />\rY30外形可以说与之前的K420如出一辙', 'imgTemp/art20.jpg', '2016-12-01', '1');
INSERT INTO `article` VALUES ('4', '人间烟火', 'Safari之外的另一种选择，Wancher钢笔试用', '文具', '最近打算添一支在办公室随便写写画画的钢笔。既然定位是”随便写写画画”，价格自然不可太贵，这样借给同事用两下不会心疼，万一一时脑抽把笔丢在会议室，损失也不会太大。按说这个定位买支Lamy的Safari挺合适的，不过办公室里用Safari的小清新已经越来越多，再买Safari就显得有些雷同了。 <br />\r\n正在犹豫不决之际，机缘巧合，得到一支友人赠送的Wancher钢笔，说实话以前没关注过这个牌子，上网查了查，这个品牌的中文名应该叫“万佳”或“万德派”，前身是THT股份有限公司。<br />\r\n<br />\r\nWancher这个硕大精致的盒子让人印象深刻，拿来送礼真是再合适不过了。&quot;From the land of the rising sun&quot;， 猜猜是哪国的？<br />\r\n<br />\r开盒见笔，Wancher采用非常简洁的现代风格设计，和Safari有异曲同工之妙。区别在于万佳这款笔是金属笔身，相当于Lamy产品线中比Safari高一点的Alstar。<br />\r\n\r长度、直径都和Safari近似。<br />\r磨砂材质的笔身，笔杆和笔帽双色设计，看了看Wancher网站上的介绍，除了我这种淡青色笔身外，还有几种颜色可供选择，总体上都是马卡龙色调。从色彩的丰富程度来说，还是远不如Lamy。<br />\r天冠上绘有一个巨大的菊轮，这是人家的商标，本猫不予评论。<br />\r这是一支铱金笔，也就是俗称的钢尖，仔细看的话，会发现笔尖上刻着“Bock“的字样。<br />\r<br />\r\n说到Bock，就得解释一下“笔尖代工”这个概念了。相对于笔杆来说，笔尖的制作是更有难度，不是每家钢笔公司都有制作笔尖的能力的。所以，一些欧洲和日本的钢笔公司，自己并不制作笔尖，而是将笔尖委托给专业的代工厂。嗯，听着有点像电脑整机和CPU芯片的关系。<br />\r\n<br />\r\n由于市场不算很大，又存在技术上的门槛，所以目前做笔尖代工的公司并不多，前面提到的Bock，正是德国目前的两大笔尖代工厂之一（另一家叫SCHMIDT）。<br />\r\n<br />\r\n事实上，并不是只有钢笔小厂才使用代工的笔尖，出于成本和专业分工的考虑，钢笔大厂将笔尖生产外包出去的案例也有很多，比如著名的百利金，很多笔尖也是Bock生产的。<br />\r\n<br />\r\n下面这两张图是来自网络，是爱好者拍摄的Bock的笔尖厂房和生产过程中的百利金笔尖。<br />\r\n<br />\r看着这个笔尖，总觉得似曾相识，后来终于想起来了，几年前买过一支台湾三文堂的540钢笔，这两支笔的笔尖样式神似。<br />\r<br />\r\n到网上查了一下，果然三文堂540的笔尖也是请Bock代工的。只是三文堂的品牌荣誉感更强，笔尖上印的是自己公司的LOGO，而万佳则在笔尖上直接印了Bock的Logo，并特别标注了“Germany“字样。（下图为三文堂540的笔尖特写）<br />\r<br />\r\n灌上墨水试一试，发现这支笔尖不仅样子上像三文堂540，书写手感也极为近似，笔尖落在纸上爽滑、圆润，总的来说偏硬，弹性不大。下水比较充沛，即使是快速写划，也不会有飞白断墨的现象。缺点是不那么容易出锋，也不像3776笔尖那样有舒适的阻尼感。贴一段字迹，为了显示更清晰，字迹做了反白处理。<br />\rLamy的笔尖是自产的，Safari上的黑色笔尖现代感十足，和万佳的笔尖对照一下，Safari的笔尖更酷一些，万佳的造型算是不得不失吧。<br />\r万佳钢笔使用欧标的上墨器，并且在包装里送了一个一次性墨囊。不得不说标配的这个推拉式上墨器实在太短了，遇上鲶鱼那种比较高的墨水瓶，常有鞭长莫及之感。长期使用的话，还是得考虑换个长些的上墨器。<br />\r相对来说，Safari原配的上墨器更为实用。<br />\r<br />\r\n最后习惯性地做个总结：如今靠颜值吃饭的家伙很多，这支万佳钢笔也算是其中一号吧。往好处说，这款万佳钢笔的极简风格笔身做工细腻，和Safari异曲同工，又有金属材质加持，在笔杆上略胜Safari一筹。不过在笔尖方面，无论造型还是手感，还是Safari更好一点。在100多块钱的这种价位，受各种条件制约，顾此必定失彼，颜值高的东西存在一些短板（比如不太顺手的上墨器），也算是可以接受。如果你想买一款用来随便写写画画的、不那么贵的钢笔，又不想入Safari的坑，也许万佳真的是个不错的选择。', 'imgTemp/art19.jpg', '2016-12-01', '1');
INSERT INTO `article` VALUES ('6', '一颗胡萝卜', '深夜俱乐部丨你怎么看新发布的 Nokia 6？', '手机', 'CES 2017 上，取得诺基亚品牌授权的 HMD 发布了一款名为 Nokia 6 的新机。Android 7.0 系统、骁龙 430 处理器、1699 元的定价，再加上中国市场首发独占，诺基亚以这样的姿态重返智能手机市场。（ 注：关于 Nokia 6 的详情，可移步这里进行了解。）<br />\r\n<br />\r\n今天的「 深夜俱乐部 」，就来聊聊 HMD 推出的首款诺基亚品牌授权安卓机 Nokia 6 吧。 <br />\r\n<br />\rNokia 回归是一件非常另人期待的事情，不过从这一部全新的 Nokia 6 来看，配置在同价位的国产机型中实在没有什么竞争力。但话说回来，在完整的指纹功能以及足够大的内存加持下，这部手机还是基本能够满足使用需求，最后可能还是要看情怀能否延续了。<br />\r\n<br />\rNokia 6 是诺基亚通过品牌授权方式重返智能手机市场的第一枪（ HMD 此前还发布了一款功能机 Nokia 150 ），但 1699 元的定价配以骁龙 430 处理器的做法，的确没有体现出足够的诚意。不过，这只是其推出的第一款 Android 机，甚至多少都有点试探市场反应的意味，“ HMD + 富士康 ”组合后续还会推出更多机型。所以，还是给新生的诺基亚以更多的时间，去打磨更好的产品，以及完善同等重要的供应链和销售渠道吧。', 'imgTemp/art22.jpg', '2016-12-01', '0');
INSERT INTO `article` VALUES ('7', '袁露雅呀', '2016胶片月月谈', '旅游', '微信群里一波又一波的红包大战正愈演愈烈，我才意识到 2017 已经来了。我很后知后觉，也懒得点开红包，怎么说呢，我就是不太会和他们互动的人，不是能力问题，纯粹是个人态度。时光匆匆，是当你失去了你才觉得，而在当下，你总会觉得还早，还早呢。自从开始接触胶片，我喜欢上了这种定格时间的方式，每当回看时，每张照片背后的故事就会清晰的浮现。在 2017 年的第一天，我特意挑选了一些照片，作为过去一年里我生活片段的回顾。<br />\r一月，温州的一月还不是很冷，一日与女友从学校（现在已经是我老婆）回宿舍途中，看到这路旁的小枫树颜色十分漂亮，于是撺掇她站在里边，便留下这张照片。<br />\r二月，我在保定女票家过年，第一次见家长，内心十分紧张。北方的习俗，初一一大早便起来去亲戚家到处拜年，我老家四川的，从来没经历过这么早起的大年初一，累是累点，可是这就是年味。初一下午，女票慵懒的坐在沙发上。<br />\r三月，在学校里，毕业前夕最为苦逼的改论文阶段。某日花了20块买了一筐草莓，娇艳欲滴，十分可人，就算透过过这黑白影调你也能感觉到吧。第二张是宿舍楼铁篱上的藤蔓。最后一张是校园里早春盛开的桃花。<br />\r四月，上海。找工作，找工作，这件事情愁坏了我们。从年初找到这个时候，终于勉强找到一个，现在工作难找，只好走一步看一步。拍这张时，似有点点愁绪在眉间。<br />\r五月，温州挺舒服的时候。第一张，校园里有很多流浪狗，这是其中一条，饭后一支烟，这会正惬意的晒着太阳。第二张，树上的麻雀，也在晒太阳，顺便思考一下鸟生。<br />\r六月，毕业季。和女票去了厦门，拍了挺多照，可以看我尾巴上发的第一张帖子。后来也去了雁荡山，详见第二个帖子，在此不赘述了。<br />\r七月，上海。终于要工作了，入职前最后的闲暇时光，一转眼就过去了。我知道，后面等待我的是几十年的工作生活，想想都心慌。这一月我和我女票也领了结婚证，正式成为我老婆。<br />\r八月，毕竟没见过世面，扛着我的 67 就来了，确实是好高啊。<br />\r十月，国庆时和老婆一起去了中华艺术宫，逛了逛展，还是很不错的。<br />\r十一月，这是在森里公园，好不容易有一趟出门的时间，拍了很多照片，都是胡乱按的到此一游，真的是没有读书时候的闲心，没那时候有热情了。<br />\r十二月，就是前两周，刚去的新天地，详见我的第三个帖子。<br />\r\n<br />\r\n说来真是有趣，越是眼前发生的事我越是想不起来，反而是过去好几个月的时光还历历在目，我想我也不是忘了，大概是我脑子在慢慢梳理入库，再等几个月兴许就轮到现在了。2016 年拍了很多卷，也拍了很多废片，从美学角度是失败的，不过记忆里的时光总是美好的，毕竟眼睛才是最好的相机。2016 年我们毕业了，结婚了，工作了，做了很多事情，很多事情都是第一次。2016 年是忙碌的一年，有意义的一年。最后我也有 2017 年的展望，今年一定要买一个家用的好的扫描仪扫胶卷，还要买一台宾得 K-1，作为宾得脑残粉，没有 K-1 都不敢说话。当然还有，胶卷用一卷少一卷，从今年开始要放慢节奏了，学着用脑子拍，尽可能避免到此一游的照片了。今年也要用好我的 Pentax 67，虽然很沉，买来也只拍过两三卷，但是每一张都能给我震撼。——当然还有，好好工作，好好赚钱。', 'imgTemp/art16.jpg', '2016-12-02', '1');
INSERT INTO `article` VALUES ('9', '123456', '深夜俱乐部 | 你最不能忍受的产品缺点是什么？', '数码', '喜欢一款产品的理由可以有无数个，同理，讨厌一款产品的理由也有千千万。每次写完一篇产品的文章，评论里总会有一些不太喜欢它的评论，譬如价格太高、设计太丑、性价比太低等等等等。今晚的深夜俱乐部，我们就来聊一聊你最不能忍受的产品缺点是什么？希望大家踊跃发言。<br />\r\n<br />\r我个人最不能忍受的产品缺点那必须是做工设计差，我个人是比较看重一款产品的外在的，毕竟是第一眼印象，做工太差或者说外形太丑的产品我基本都不会有太强的好感，何况以后还要经常使用它，颜值不高也会稍稍影响心情吧。<br />\r\n<br />\r我最不能忍受的产品缺点，主要还是价格与质量不符。有时候购买高价的产品，其实很大因素是因为其品牌、品质的原因，愿意花多点钱，这其中当然也有受其推广的内容影响，但也有事与愿违的时候。对于我来说，买鞋子就很遭罪，感觉一双鞋子不管是多少钱的，总是在一年的时候就穿坏了，有时候更短。', 'imgTemp/art14.jpg', '2016-12-02', '0');
INSERT INTO `article` VALUES ('13', '施松雁是', 'Sony Xperia Z2 Tablet体验', '平板', '我一度以为Sony是不出平板电脑的，之前的印象中没感觉Sony有发布过平板，亦或许是我没有留意过。反正小绍兴的Sony代理店都很小，产品也少，基本上编辑部有的Sony玩具，都可以直接拿过去嘚瑟：嘿，你们竟然没有这款产品，太差劲了。这次体验的平板便是前段时间最新发布的Xperia Z2 Tablet，这儿的代理店里也依旧是见不到。<br />\r\n<br />\r\n不记得从什么时候开始，Sony Xperia移动产品，如手机，开始了一条方方正正设计的不归路，这样的设计也成为了Xperia的标志性设计，一眼便能认出。那么，Z2 Tablet身上的Xperia DNA也相当明显，一眼就能看出这是Sony出品。<br />\r<br />\r\nZ2 Tablet上手之后的第一感觉便是：好薄！除了四周镶嵌有金属条（这也是Xperia一贯的作风，也是标志性的修饰手法），就是一身黑，好一块黑板。当然，如果你非要说它是砧板，倒也可以，总之你觉得怎么称呼它比较形象就怎么来。<br />\r10.1英寸的屏幕，只有6.4mm的厚度，这在平板界应该是少有的。没有具体深究过是不是最薄的平板，但是肯定是目前市场上最薄的防水平板。纤薄，用这个词来形容很恰当。<br />\r\n<br />\r\n正面当然少不了“SONY”这个logo，大小刚好。屏幕上方正中便是一颗前置摄像头。Sony手机正面或者手头上的这款Z2 Tablet的正面，看上去都黑的比较深沉，若不是在强光下找角度看，基本上就可以认为正面一整块都是屏幕。女生可以拿来照镜子是极好的，男生拿来给女友照镜子也是可以加分的。<br />\r\n<br />\r屏幕两侧下端有扬声器，而屏幕采用了1920x1200的高清IPS显示屏，当然这样一块优秀的屏幕少不了Sony自家的色彩显示技术—LiveColor LED，再搭配迅锐图像处理引擎移动版和特丽魅彩移动显示技术，显示效果依旧抢眼。（这一个又一个的技术，搞得我很混乱，哪个是哪个根本分不清，不管了，照模照样扯就行了。）<br />\r\n<br />\r背面没有采用Z2那样的整块玻璃，不然感觉太高冷了，会拉远同消费者的距离，而且成本也高。所以使用了塑料，磨砂处理，类肤质的感觉，手感还是蛮好的，摸上去滑滑的。但是有一个非常明显的不足，很多使用了类似材质的产品都会有这样的问题出现，就是容易收集指纹，而且还不容易擦去。啊哦，选择性洁癖外加强迫症，看到正面和背面都是指纹，真心感觉很难受。<br />\r\n<br />\r\n背面的设计也很简洁，又是一颗不大的“SONY”logo，外加底部小小的“XPERIA”字样，看来是Z2的大号师兄啊。左上角“NFC”标志，还有一颗810w像素的后置摄像头，搭载了Exmor RS移动图像传感器，拍摄效果嘛，那就见仁见智了。<br />\r\n<br />\rZ2 Tablet左侧是开机键和音量调节键。总感觉近期几款产品的开机键做的都偏小，难道是因为机身薄了之后的妥协么？这样的手感并不是很舒服。音量调节键也是细细的一条，摸上去手感也欠佳，不过按下去的感觉还是不错的，不生硬，反馈力也够了。而且音量+还有一颗小凸点，用来区分音量—，这个设计看上去不起眼，还是很人性化的，一定程度上弥补了细长按键手感不舒适的问题。<br />\r\n<br />\r右侧很干净，只有一条金属装饰条，终归还是需要有纯粹的一侧。<br />\r\n<br />\r\n顶部接口很丰富，除了Micro USB接口和Micro SD卡插口之外，还有SIM卡插槽。我以为这应该不是用来打电话的，是插上网卡的，不然抢夺了“手机盾”的称谓就不好了。但是，联想到之前体验的蓝牙耳机SBH 52，这蓝牙耳机本身就可以作为极其小型的通话器，放在耳边也可以骗到别人，误以为这是一只小手机。瞬间感觉用这板子来打电话也不是不可以啊，而且也确实有通话和通讯录应用，这一大一小的搭配，很有意思，或许真的可以逆天。虽然SBH 52早就已经寄回去，没法真实体验一回，略感遗憾。当然，可以用其他耳机（蓝牙耳机）代替SBH 52来体验一下。', 'imgTemp/art11.jpg', '2016-12-02', '0');
INSERT INTO `article` VALUES ('14', '施松雁是', 'VSCO 修图｜Lost in San Francisco', '摄影', '对于国人而言，旧金山这个名字或许并不陌生，属于华人较多的一个美国城市。地形崎岖的它，造就了相当多的景色奇观和这座城市所独有的特色。Nob Hill 算是在湾区里面地势相对较高的地方，因此在 Fairmont 大楼里面能够看见整个旧金山的城市景色，无论是清晨还是夜晚，错落有致的建筑都显得这座城市格外繁华。<br />\r\n<br />\r\n起初我是少看了旧金山连绵不断的坡路，但真正面对着这些坡路的时候，才明白这和登山并没有什么区别，用 iPhone 随便一测 13° 坡，虽然数值上看起来很小，但实际上从「山脚」爬到「山顶」还是相当吃力的，甚至在坡度大的地方，汽车都需要横向停放，以免溜车。这也是为什么旧金山会有「九曲花街」这种九连弯的坡路。<br />\r\n<br />\r旧金山清晨的雾低得简直有些夸张，但着实是难得一见的美如画景色，也难怪成为了全球十大雾都之一。<br />\r\n<br />\r\n\r站在 Nob Hill 可以看到 Transamerica Pyramid 泛美金字塔，泛美金字塔附近有一座类似上海武康路的建筑，很可惜并没有去成。虽然看起来距离我所在的位置蛮近，但实际上坡下坡走起来估计至少要半小时以上。<br />\r\n<br />\r路过 iPhone 6s、iPhone 7 的发布会场地 Bill Graham 市政礼堂，由于整座建筑过于宏伟，即使用上 24mm 的广角端都没有办法近距离拍全整体，而且附近没有找到相对高地，略为可惜。<br />\r\n<br />\r在市政礼堂的左边便是旧金山的市政厅，可以免费进入参观，但由于安保原因，背单肩包和双肩包需要从不同的门进入，但安检不算太严，和国内机场简直无法比。<br />\r\n<br />\r在联合广场附近，基本可以看到旧金山独有的城市特色，例如叮叮车和各式各样问你服不服的坡路，反正我觉得在坡脚的「in n out」里面吃个汉堡，再走到坡顶基本就可以将卡路里消化完毕，简直是「减肥胜地」。<br />\r\n<br />\r据说这些叮叮车本身并没有动力，而是依靠位于底部的线缆来拉动，本来打算体验一下「随叫随停」的叮叮车，但无奈坐一趟需要 7 美元，这种消费对于国人而言实在太高了，想想我们平时打车也是 20-30 元人民币。<br />\r\n<br />\r联合广场本身也是一个类似小型公园的地方，四面被各大品牌商场包围，犹如闹市之中的一片净土，坐在联合广场的椅子上吹着飒爽的风，感受一些当地人的生活方式，也是别有一番乐趣。<br />\r\n<br />\r以下几张便是用 iPhone 7 Plus 的长焦镜头拍摄的照片，对于旧金山这种蓝天白云的晴朗气候，即使是手机直出基本上也不需要太多调整，恰好的光比，对于手机而言亮部和暗部的细节都能驾驭得游刃有余，虽然 iPhone 7 Plus 的长焦镜头噪点控制着实一般。', 'imgTemp/art10.jpg', '2016-12-02', '0');
INSERT INTO `article` VALUES ('15', '123456', '图赏丨AKG Y50 头戴式耳机', '影音', '相信略有了解一些音频产品的尾巴都会知道这三个牌子，它们分别是森海塞尔、拜亚动力和 AKG，这三个品牌都是最为出色的音频厂商之一，旗下也有不少十分优秀的耳机产品，对于声音的造诣方面，三个品牌也都有着自己的独到见解，这或许也是音频爱好者们喜欢它们最大的一个原因。<br />\r\n<br />\r\n还记得早些年，我对于这三个品牌的印象都是属于比较严肃、专业的音频厂商，旗下的产品也很少会推出配色较为丰富的版本，基本都是以深色调为主，不过随着关注音频圈子的人越来越多，年轻群体的耳机需求是一个很大的消费市场，也正是如此，近些年我们可以看到不少专业的音频厂商都推出了自家针对年轻群体的耳机作品，个人认为其中 AKG 应该是做的比较出色的，毕竟在国内的宣传力度和手段上起码可以让我觉得眼前一亮。<br />\r从 2014 年底开始，AKG 就开始了转型，他们对旗下的产品开始进行细分化，譬如 K 系列为 AKG 的顶级发烧产品、N 系列为 AKG 的中高端发烧产品，而 Y 系列则为针对年轻群体的耳机产品，并且为了让 Y 系列可以更让年轻人接受，AKG 还邀请了 SNH48 作为 Y 系列的代言人，这一举动还是吸引了不少年轻群体的关注，况且 AKG 本身就有着二次元的基因，《轻音少女》里就有出现 AKG K701 的身影， 这也使得在耳机展上，AKG 的展台站着几位 Coser 完全合情合理，要是放在其他牌子上就违和感爆表了。<br />\r今天尾巴图赏的主角也是来自 AKG 的 Y 系列，型号为 Y50，可以说是目前 AKG Y 系列的主打型号，一共有四种配色，分别红色、黄色、黑色和青蓝色，多彩的配色设计满足了年轻群体的个性需求，带着出街想必可以吸引不少路人的目光吧。<br />\r\n<br />\r造型设计上，Y50 主打一个简约式的设计风格，耳罩两侧大大 AKG 字样十分抢眼，头梁上也印有 AKG 的 Logo。别看着这颜色鲜艳就以为是塑料，Y50 的耳罩外壳和头梁均是金属材质，质感十足，而且耳罩外壳还有一圈环形切边，看着挺精致的。<br />\r既然是一款主打年轻化的出街耳机，那么可折叠式的设计是跑不了了，Y50 采用了 3D 转轴的设计，用户可以十分轻松地将其折叠起来，并且配合附送的耳机袋可以很方便地收纳在背包里。<br />\rAKG Y50 采用了单边入线的方式，接口位于右侧，不仅方便于日常的理线，对于 DJ 或者特殊工作的用户也可以应付。Y50 所配的线材配备了一键式线控和麦克风，单击可以实现播放/暂停，双击即可实现切歌，平时出门接着手机听歌会十分方便，不过颇为遗憾的是无法实现音量的调节。<br />\r都说“细节决定成败”，而 AKG Y50 则在一些细微之处都做了处理，譬如头梁处贴心的刻度和耳机上随处可见的 Y 型图案等等。<br />\r由于 Y50 是压耳式设计，所以佩戴时间久了难免会有不太舒服的情况，不过平时带出街基本问题不大，而且其隔音效果也还不错。至于其声音风格，由于这是篇图赏所以我也就简单提一下，AKG Y50 的声音是很明显的流行风格，注重整体音乐的氛围感，声音浑厚且有味道，低频量稍多，力度和弹性尚可，人声线条稍厚，听男声较佳，整体的声音表现很适合年轻人喜欢的动感、活力的音乐风格。<br />\r至于售价方面，AKG 目前的官方售价为 698 元，综合其外观做工和声音表现，无不是一款适合年轻人群选择的出街耳机。下面则为尾巴们带来更多关于 AKG Y50 的美图，敬请欣赏。', 'imgTemp/art08.jpg', '2016-12-02', '1');
INSERT INTO `article` VALUES ('16', '123456', '2016 年 Mac 系列里我认为最值得推荐软件', '其他', '首先，我是一个多年使用 Mac 的用户。虽然不是前端人员，但我对软件产品有着独特的需求。下面我就来讲一讲今年的 Mac 发展趋势吧！ 从软件层面来看，今年的 Mac 系列软件有了质的飞跃。为什么这么讲，首先是因为今年 Apple 对于Mac 系统更加开放，而伴随着同时，很多开发者相当的积极去开发软件，所以今年的 Mac 系列软件也变得多姿多样。下面我来推荐几款自认为 Mac 系列非常好用的软件，也来为明年的软件发展来个小小的预测吧！<br />写作类 app 今年在 Mac 上呈现出井喷式爆发的增长。首先归根结底的原因是markdown的加入。md让更多的人体会到了简便，快捷，行之有效的写作工具。不再死气沉沉的面对一张空白的word了。下面我就推荐几款写作类的app吧！<br />很多大V，作家专业写作工具，码农专业级别的最爱了。<br />\r优点：专业，快捷，自动保存 md 格式，兼容性不错。可导出各种格式，图床等兼容良好。可以方便在 icloud 进行跨平台操作，手机，平板，电脑写作更加方便。让你随时随地去写作<br />\r缺点：不适合刚入手 markdown 的用户。不适合小内存的电脑，因为备份在本地占用内存大。在 icloud 因为你懂的的网络原因。', 'imgTemp/art07.jpg', '2016-12-03', '0');
INSERT INTO `article` VALUES ('17', '123456', '光与影之歌－手机摄影集', '摄影', 'Minimalism x 何香凝美术馆<br />\r\n初到何香凝美术馆，整个建筑外观十分朴素低调，而内部也同样的十分朴素，也可以说是极简主义风格的设计，大量的留白设计，也挺有时代感的。<br />\r\n<br />\r\n或许朴素的美术馆设计风格，是为了体现何香凝先生的特点，画作典雅、细腻、平实；同时她也是女权主义的先驱。<br />\r\n<br />\r\n不过相比画作，美术馆的内部设计也是吸引人的部分，白与灰的搭配给人以平淡的感觉。同时搭配多样的窗户，天窗，充分运用自然光，让内部的空间更加和谐。<br />\r\n<br />\r\n在线条之间穿梭，在光影之间走动，在结构之间相遇，我想这个是除了欣赏画作之外充满戏剧性的体验。<br />\r\n<br />\r\n拍摄器材：iPhone6S <br />\r\n后期：VSCO、Snapseed、SKRWT<br />\r\n<br />\r\r像飞船一样的当代艺术馆<br />\r刚落成的深圳当代艺术馆，集当代艺术博物馆（MOCA）和规划展览馆（PE）一体，作为文化交流会合点和建筑展览的场地。<br />\r\n<br />\r\n充满曲面的主体，像一只整装待发的飞船，十分具有未来感，在阳光的映射下，银光闪闪。<br />\r\n<br />\r\n充满曲线的建筑穹顶，像个变形的巨大的云，把两个馆连接在一起，而且自然光作为内部的主光源，让内部更加和谐。<br />\r\n<br />\r\n光与影，形影不离。<br />\r\n<br />\r\n光线穿过各具形状的结构，让影具有了形状；结构之间交错着，同样也映出戏剧性的影。<br />\r\n<br />\r\n就像之前玩过一款iOS端的游戏：Shadowmatic，通过旋转、扭动形状各异甚至怪异的物体，或者几个物件搭配一起，在墙上投影，得到有趣的影子。<br />\r\n<br />\r\n从水壶到乌龟，海马到小兔，就如皮影戏，从三维到二维。<br />\r', 'imgTemp/art06.jpg', '2016-12-03', '0');
INSERT INTO `article` VALUES ('18', '123456', '用一场日本之旅结束2016', '旅游', '2016年<br />\r\n又一个转折<br />\r\n从北京到香港<br />\r\n新的环境，新的朋友，新的想法<br />\r\n会开始做一些以前只是想想的事<br />\r\n于是，旅程就这样开始了<br />\r\n<br />\r\n接下来是各种照片，大部分VSCO后期<br />\r\n并不喜欢拍旅游照，所以大家就将就看吧<br />\r\n<br />\r\n第一天，大阪<br />\r<br />\r\n因为航班临时变化，到大阪已经快三点了，好在航空公司安排了大巴把乘客送到大阪难波JR站。然而，取了行李之后，被要求重填行李单，航空公司以为我们走了，就把大巴开走了。然而，联系航空公司后，他们又单独给我们四个准备了一辆大巴，要是报团，估计早就被导游骂残了<br />\r日本真的很多游戏机厅啊，各种中老年玩家不亦乐乎<br />\r上午，大阪通天阁<br />\r\n提一句，大阪有周游券，包含大部分景点和地铁，推荐<br />\r吃完饭就往天守阁赶，一路上到处都是乌鸦<br />\r\n同学说，这些日本的乌鸦都有一颗雄鹰的心<br />\r到的时候3点多，感觉太阳都快下山了<br />\r\n话说想起以前在北京的时候还没拍过角楼<br />\r\n\r本来是两个牌子上都站满了鸟，拍的时候就只剩这几只了<br />\r总的来说，虽然是日本第二大城市，但大阪的节奏还是挺慢的<br />\r\n街道很干净，没有垃圾桶，没有垃圾桶，没有垃圾桶<br />\r\n<br />\r\n然后，这天还体会到了日本人的教育<br />\r\n一个小孩上厕所，因为个子不够高，小便池感应不到他<br />\r\n上完厕所，会伸手触发感应器<br />\r\n<br />\r\n第二天，京都<br />\r\n没计划买东西，于是大阪只计划待一天<br />\r在京都基本都是靠巴士，推荐一日巴士券<br />\r\n感觉日本无论是巴士司机，的士司机还是便利店店员<br />\r\n基本都穿的很正式，给人一种敬业的感觉<br />\r\n\r出来后走去平安神宫，半路路过八坂神社<br />\r\n<br />\r\n到平安神宫的时候，发现早都关门了<br />\r\n五点就天黑了，一时半会儿还适应不过来<br />\r\n<br />\r\n然而，这一天还没结束<br />\r\nAirbnb租的房在二条城附近，房主又有两辆自行车<br />\r\n于是晚上十点多决定去二条城看看<br />\r然而，一上路就被警察叔叔拦下来了，不让载人的<br />\r\n<br />\r\n到了二条城，在护城河里竟然发现一只白鹤<br />\r\n开始还以为是雕塑，突然就飞起来了，好惊<br />\r骑车过去就走回来，一路上也是边走边拍<br />\r', 'imgTemp/art05.jpg', '2016-12-03', '1');
INSERT INTO `article` VALUES ('19', '123456', '深夜俱乐部丨你见过最「标题党」的标题是什么', '其他', '2016 年即将过去了，在这一年里，我们接受了太多的信息，它们中有的是新闻，有的是文章，也有的只是短短的微博。其中有这样一群「信息」们比较异类，借助着骇人听闻的标题，他们成功地吸引了不少人的注意，但实际上其有用的内容却少之又少，不知道尾巴们遇到过最「标题党」的标题是什么呢？<br />\r\n<br />\r\n<strong>@罗莱尔特</strong>：「震惊！如今的 90 后都没活超过 30 岁！」看到这样的标题，我真的快笑死了，就算是满打满算，1990 年出生的人也要在 2020 年才到 30 岁，虽然初衷可能是希望年轻人注意健康或者诸如此类的，但这种博眼球的方式我建议还是收敛点好。<br />\r<strong>@小淼-海</strong>：其实我经常可以在父母或者亲戚发的朋友圈里看到「标题党」，譬如“有儿子的赶紧看，不看就没了”、“北京、上海、广州的人都转了，不得不看！”等等等等，看上去标题很吓人，其实点进去都是一些完全没有意义的东西，不过父母那一辈还特别信，真希望微信团队可以管一管这些营销号，有时候造谣特别讨厌。<br />\r', 'imgTemp/art04.jpg', '2016-12-03', '0');
INSERT INTO `article` VALUES ('20', '123456', '年度征文 | 2016，蓄力远航中的光影瞬间', '摄影', '2016 年对我来说是颇有意义的一年，早就决定了的考研注定了这将是忙碌而充实的一年，也注定了这将是单调却磨练意志的一年。&nbsp; &nbsp;&nbsp; &nbsp; <br />\r\n<br />\r\n不过就算再忙，自己的爱好还是要继续的，因此这一年忙里偷闲，摄影事业还算没有荒废。<br />\r\n第一次爬楼，望京 SOHO。获奖无数的建筑，三个塔楼，很有科技感。<br />\r爬楼党机位的选择很重要，这个机位也是在周边转了好几圈之后多次尝试找到的机位。<br />\r偶尔的休息时间，没有时间外拍，就会练习一下明度建筑摄影。明度建筑是一种很能够体现建筑美感的摄影表现方式，将线条的美感发挥到极致。<br />\r偶尔在宿舍学累了也会拍点身边的小东西。<br />\r', 'imgTemp/art03.jpg', '2016-12-03', '0');
INSERT INTO `article` VALUES ('21', '123456', '人工智能是否噱头？小米盒子 3s 体验', '影音', '伴随着全民数字化的发展进程，OTT 盒子市场迎来了多元和快速的发展契机。在过去的几年里，OTT 盒子的竞争非常激烈，其中小米在当中起到主力军地位，2016 年小米盒子甚至畅销至美国、加拿大，有着想与 Apple TV 一分高下的魄力。为了让自家的产品更有竞争力，2016 年 11 月 16 日，小米电视团队通过线上方式发布了首款人工智能机顶盒 —— 小米盒子 3s。<br />\r\n<br />\r为了更便于线下卖场的展示，小米盒子 3s 沿用了小米 2016 年全新的白色极简包装，在包装外面即可看到产品的外观设计，包装盒子的高硬度依然可以承受高强度的挤压。<br />\r\n<br />\r在配件方面，分别有 MiTouch 红外触控遥控器 × 1 个、7号电池 x 2 节、HDMI高清数据线 x 1 根、说明书及三包卡 x 1 份、电源适配器 x 1 个，在配件细节方面，一向需要精打细算的小米竟然选择了采购成本较高的南孚电池，确实值得点赞。<br />\r在接口方面，小米盒子 3s 与前几代机型并没有差别，依然是 HDMI 2.0a x 1 个、USB 2.0 x 1 个、3.5mm 复合音视频输出 x 1 个、电源接口，接口虽然不多，但理论上可以满足大部分使用者的需求了。<br />\r\n<br />\r\n\r现在电视盒子的外观设计同样是吸引消费者的敲门砖，小米盒子 3s 没有沿用了小米盒子 3 增强版的外观设计，而是选用了与小米盒子 2 相似的外观设计，当然我的主观感受就是这样的设计更讨好我的个人审美，从边缘开始进行收窄的机身设计，也更能营造轻薄的视觉效果。<br />\r\n<br />\r\n小米盒子 3s 的外壳表面为磨砂质感，在的机身底部均设计了硅胶垫，可以让机身放置在桌面的时候更稳固一些。<br />\r', 'imgTemp/art02.jpg', '2016-12-03', '1');
INSERT INTO `article` VALUES ('22', '123456', '年度征文丨用手机记录的 2016', '摄影', '由踏入 2017 年的那一分钟开始，朋友圈里就让 2016 总结不断地刷屏了。当时我也觉得应该也要做一个关于摄影的总结，但是想到自己好像2016年并没有怎么拍照，并且假期要陪着儿子玩，也就作罢了。对于我自己的 2016 的总结，就一个字：“懒”。<br />\r\n<br />\r\n假期完了，上班中间休息的时候无所事事，打开电脑翻了翻自己的图片文件夹，才惊讶地发现自己2016年一整年拍的照片，基本上是胶片拍的，数码拍的照片只占了极小的一部分。按着月份、日期一个一个文件夹翻看这一年来所拍的照片，2016年影像记忆也随之浮现起来。<br />\r\n<br />\r\n胶片摄影在我看来情怀占了一部份，喜欢胶片那种不确定性，那种神秘感以及那种所谓独特的质感。每次外出，我都带一卷胶卷，6*7 中画幅 10 张或者 135 胶卷 36 张。由于限制了拍摄的数量，所以每一次按下快门都相当的有耐心。设想一下在某个慵懒的午后，抚摸过冰冷的金属外壳，慢条斯理的调整光圈快门，精心对焦（估焦）与构图，并且耐心假以时日冲洗，如此这般方能得到一张满意的照片，其中的成就感与摄影玩味确是今天一扫一梭子的数码摄影所完全无法体验到的。即使你那么用心地拍完了一卷胶片，但这一卷胶片里面，仍然充满着惊喜或者失望，到底拍得好不好？有没有失误？只有等胶片冲扫出来以后才能知道结果。当看到一张让自己惊喜的照片后，会你清楚地记得当时的情景，怎么才拍摄到这一张照片。当看到失误的照片时，就会一拍大腿感叹：“哎呀，当时应该换那样做就好了！”<br />\r\n<br />\r\n另一部分则是把玩属性。相信很多男生都对机械物体有痴迷的程度，我也是很喜欢机械相机那种构造与质感。现在我手上就留着三台胶片相机，玛米亚RB67,福伦达vitomatic和柯达Retina iic。三台机器我都很喜欢，好多时候都会拿着把玩一番，特别福伦达相机那个质感，听着上弦的发条声，齿轮碰撞的声音，不得不说是一种享受。平时把相机摆在书桌上，办公桌上，就已经是一件相当有逼格的装饰品。<br />\r\n<br />\r\n胶片摄影也有很多遗憾，与操作失误，装卷失败等等导致交白卷这些遗憾相比，我自己感觉的遗憾可能会显得有点不同。相机之于我，等于我的女朋友们。曾经有朋友问我拍胶片最大的遗憾是什么？我开玩笑地说：“最大的遗憾莫过于胶片还没冲洗出来，自己的女友已经离我而去了。”而文中的照片所提及的器材有些已经转让或者送给了摄友，在翻看某一照片的时候，发现拍摄所用的相机已经不在自己手中的时候，不禁有点唏嘘的感觉。<br />\r\n<br />\r\n最后，挑了一些照片出来分享给大家，看看我这一年以来拍过的胶片。<br />\r\n<br />\r', 'imgTemp/art01.jpg', '2016-12-03', '0');
INSERT INTO `article` VALUES ('23', '土豆啊土豆', '备用机选择。小米5 or SE？', '手机', '\r\n双十一剁手一台iphone7,128g \r\n因为有两张手机卡，手上还有一台高配黑色小米5 和 一台深空灰16g SE\r\n\r\n想出掉一个留一个，不知道该如何选择啊\r\n求各位尾巴指教', '', '2016-12-04', '0');
INSERT INTO `article` VALUES ('29', '土豆啊土豆', '深夜俱乐部 | 分享你最喜欢的一款零食', '美食', '零食，顾名思义就是指一日三餐以外的食品。我们身边充斥着各种琳琅满目的美味零食，相信每个人都有不少自己钟情的小零食，今晚不如我们一起来推荐一款自己喜欢的零食，毕竟新年假期即将来临了，大家也可以把今晚的深夜俱乐部当做是年货采购前的一次话题讨论呢。<br />\r相信这次我推荐的这款零食很多人都已经品尝过了，它就是 —— 麦提莎巧克力球（Maltesers），这款零食的外层由香滑的可可脂包裹，内陷由内含麦芽、麦精等制作而成，口味独特，简直是停不下来。相比国内大部分采用代可可脂制造的巧克力球，麦提莎巧克力球会更健康更安全一些，不过像这种高热量的零食还是需要控制分量为妙呢。<br />\r大学毕业之后就没怎么吃零食了，要说喜欢的零食估计就更不好答了，我去翻看了下京东上的购物历史清单，周黑鸭最近这几个月买过好几次了吧。<br />\r\n<br />\r', 'imgTemp/ac02.jpg', '2016-12-04', '1');
INSERT INTO `article` VALUES ('30', '土豆啊土豆', '  冰原四百里：Olkhon一日环岛', '旅游', '今年圣诞节和朋友们一起去西伯利亚转了一圈，零下二十度的白色世界对于在南方出生长大的人来说很震撼。大家从不同的机场出发，直接在伊尔库茨克碰头。最先是去丽镇住了两晚。旅途中在奥利洪岛逗留了两晚一日，做了南线的一日环岛。这个小岛贯穿南北不过100来公里，可是因为没有铺装的道路和复杂恶劣的天气路况，基本上转一圈一天正好了。冬季其实是奥岛的旅游淡季，整个岛上并没有多少人，基本上都是咱们中国游客。喜欢轻便，对器材也没啥追求，所以相机就是带了A7加那个2870的塑胶套狗。另外带了一支10-18 f4，残副的镜头在全幅上不需裁剪还有12-16可以用，加上非常安静的自动对焦和没比痰盂大多少的体积，非常适合做vlog的一支镜头。大法好', 'imgTemp/art22.jpg', '2016-12-04', '1');

-- ----------------------------
-- Table structure for infomation
-- ----------------------------
DROP TABLE IF EXISTS `infomation`;
CREATE TABLE `infomation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `info_title` varchar(255) DEFAULT NULL,
  `info_introduce` varchar(255) DEFAULT NULL,
  `info_img` varchar(255) DEFAULT NULL,
  `content` mediumtext,
  `admin_name` varchar(255) DEFAULT NULL,
  `info_class` varchar(255) DEFAULT NULL,
  `add_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of infomation
-- ----------------------------
INSERT INTO `infomation` VALUES ('1', '联想 ZUK Edge 登场：既有「全面屏」，又有「隐藏指纹」', '12 月 20 日，联想在武汉工厂正式发布新一代旗舰机 ZUK Edge。', 'images/zMsg01.jpg', '12 月 20 日，联想在武汉工厂正式发布新一代旗舰机 ZUK Edge。<br />\r<br />\r联想 ZUK Edge 的最大亮点莫过于其 86.4% 的高屏占比设计，官方称其把“ 5.5 英寸屏幕装入 5 英寸机身 ”。作为对比，小米 MIX 的「 全面屏 」为 91.3% 屏占比。<br /><br />ZUK Edge 还采用双面 2.5D 弧面玻璃搭档 Roll Cage 金属中框（ 这一技术此前用在 ThinkPad 笔记本上 ）的设计，同时提供前置指纹识别。联想还把这种前置指纹设计方案称作隐形 U-Touch，即将指纹识别芯片隐匿于完整的玻璃面板之后的“ 隐藏式指纹识别技术 ”。<br />\r\n<br />\r与 ZUK Z2 Pro 相同，ZUK Edge 也内置了“ 十轴运动传感器 ”，包括三轴加速度计、三轴陀螺仪、三轴电子罗盘以及气压高度计等。<br />\r<br />\r除了常规版，联想还推出了一款李敏镐定制版 ZUK Edge，名为 ZUK Edge L。据悉，这款手机拥有“ L ” LOGO 以及定制耳机、皮套。<br />\r\n<br />\r陶瓷白和钛晶黑双色可选，联想 ZUK Edge 起售价为 2299 元（ 4GB + 64GB 版本为 2299 元，6GB + 64GB 版本为 2499 元 ），陶瓷白单款式，ZUK Edge L 定价 2499 元，对应为 4GB + 64GB 版本。即日起在联想、京东和天猫渠道开启预订，ZUK Edge 将于 2017 年 1 月 1日正式开卖。<br />联想同期还公布了国行版 Phab2 Pro 的上市信息，其定价为 3999 元，提供魔金、傲灰两种配色，将于 12 月 26 日在联想和京东渠道正式首发。', 'admin', '手机', '1480840910');
INSERT INTO `infomation` VALUES ('2', '年终盘点｜2016 年最火的这些智能硬件，你都玩过么？', '经过 2015 年的躁动，智能硬件行业在 2016 年逐渐归于平静。不管是虚拟现实（ VR ）、 无人机，还是智能家居、可穿戴设备，智能硬件行业正在演变为一场大牌玩家间的游戏。', 'images/zMsg02.jpg', '经过 2015 年的躁动，智能硬件行业在 2016 年逐渐归于平静。不管是虚拟现实（ VR ）、无人机，还是智能家居、可穿戴设备，智能硬件行业正在演变为一场大牌玩家间的游戏。<br />\r\n<br />\r\nMegic Leap 被指造假，Pebble 被 Fitbit 收购，Lily 无人机跳票无期，GoPro 股票一跌再跌......新硬件领域的这些创业公司，没能等到“ 全民普及潮 ”，却已“ 出师未捷身先死 ”。<br />\r\n<br />\r\n这一年，消费者对智能硬件的关注度明显下降。不管是烂大街的黑科技概念，还是诸如 Apple Watch、PS VR 抑或 Nest 这样的行业“ 头牌 ”产品，不仅没能撑起新兴行业的未来，最后反而还成了传统行业的笑谈。<br />\r\n<br />\r\n当然，虽然用户对智能硬件的热情在消退，传统硬件产品的智能化改造却也是大势所趋。革命不是一蹴而就的，但我们在 2016 年依然看到了亚马逊 Echo、大疆无人机等所表现出的超越姿态。当潮水退去，我们依然看到了一些游泳健将，即便更多的裸泳者也现出原形。<br />\r\n<br />\r\n以销售量和关注度为依据，我们来看下 2016 年最火的智能硬件产品吧，重点涵盖 VR、无人机、智能家居等品类。由于此前已经对可穿戴设备进行了年终盘点，所以本文并不涉及这一领域，想要了解的用户，可移步这里进行查阅。<br />\r\n<br />\r三大 VR 设备实现聚首：PS VR 卖得最好、HTC Vive 体验最好<br />\r\n<br />\r\nOculus Rift、HTC Vive、PS VR——这三大 VR 设备在今年实现聚首，VR 设备市场也迎来自其诞生以来的首波爆发潮。<br />\r\n<br />\rCanalys 最新报告预测，在 VR 设备“ 三巨头 ”中，今年 10 月首发的 PS VR 的当年出货量可以达到 80 万台，4 月开卖的 HTC Vive 可以达到 50 万台，最早上市的 Oculus Rift 最多可能有 40 万台。<br />\r\n<br />\r\n坐拥 5000 万 PS4 用户，同时硬件设备定价最低，PS VR 不出意外将成为今年卖得最好的大型 VR 设备。然而，与之前外界给出的高预期（ 尤其是销量 ）相比，PS VR 的实际表现可能就像在体验文章中所总结的那样：一面理想，一面现实。<br />\r\n<br />\r一方面，PS VR 虽然拥有可选的 120Hz 刷新频率（ Oculus Rift 和 HTC Vive 最高只有 90Hz ）以及 18ms 以下的延迟率（ Oculus Rift 为 20ms 以下，HTC Vive 为 22ms 以下），但其 1920 x 1080 的双眼分辨率和约 100 度的视野范围，相比 HTC Vive 和 Oculus Rift 还是略逊一筹；另一方面，虽说 PS VR 坐拥条件较好的 PlayStation 游戏生态，但其截至目前并没有出现多少玩了之后还想玩的游戏作品。<br />\r\n<br />\r\n相比 PS VR，设备定价和玩耍成本高不少的 HTC Vive 在体验性上做了不少功课。<br />\r\n<br />\r在三大 VR 设备中，HTC Vive 拥有最好的“ 沉浸式体验 ”以及六自由度（ 6-DoF ）的控制手柄。通过空间定位（ room-scale ）VR 系统，玩家可以在一定的范围内进行“ 自由走动 ”；借由 TPCAST 新推的 HTC Vive 无线 VR 升级套件，你还可以摆脱线缆畅玩游戏大作。<br />▲ HTC Vive 提供一对空间定位器（ Oculus Rift 和 PS VR 均无此类装置 ）<br />\r\n<br />HTC Vive 的 VR 内容主要由 Valve 提供，后者不仅是老牌的游戏大厂，而且运营着全球最大 PC 游戏交易平台——Steam。 在 PS VR 之外，Valve 提供的 SteamVR 撑起了 VR 游戏界的另一片天空，一如其在正版 PC 游戏界的地位。<br />\r<br />\r在 Facebook 的帮助下，最早进军 VR 领域的创业公司 Oculus 终于在今年推出了消费者版本的 Oculus Rift。沉浸体验不如 HTC Vive，游戏生态不如 PS VR，夹在中间的 Oculus Rift 并没有取得多么耀眼的表现，而一拖再拖的 Oculus Touch 控制手柄直到最近才开卖。对于中国消费者而言，Oculus Rift 也是最陌生的一款大型 VR 设备，因为其直到现在也没有正式登陆国内市场。<br />\r\n<br />\r2015 年开始，VR 领域就开始热闹起来，而不管是创业公司还是科技巨头，将其视作“ 下一代计算平台 ”者亦不在少数。某种程度而言，VR 所带来的“ 沉浸式体验 ”理念已经超出设备本身，达到显示屏之于人类科技改变的高度。只是 VR 设备仍处发展早期，不管是密闭式的“ 小黑屋 ”设计，还是影响体验的诸多羁绊，都需要更多时间去进行探索和解决。<br />\r\n<br />\r手机 VR 生态化，三星走在了所有厂商的前列<br />\r\n<br />\r\n相比大型 VR 设备不到百万的单品销量，移动 VR 设备（ 尤其是手机 VR 盒子 ）的年度出货量可能已经达到千万量级。<br />\r\n<br />\r\n从淘宝上九块八包邮的小纸盒，到 199 元的暴风魔镜 4，再到 99 美元的三星 Gear VR，越来越多的手机用户开始尝鲜这些“ 新奇配件 ”。作为手机 VR 盒子界的鼻祖，Google 推出的纸盒材质简易 VR 装置 Cardboard 在全世界已经卖出了超过 500 万部。来自华强北的塑料版 VR 盒子更是畅销大江南北，成为不少国内玩家的第一部 VR 设备。\r\r\n<br />\r', 'admin', '其他', '1480840910');
INSERT INTO `infomation` VALUES ('3', 'Super Mario Run 上架 App Store：终于可以在手机上玩马里奥了！', '一如事前预告，任天堂终于在北京时间 12 月 16 日凌晨把 Super Mario Run 带到了 iOS 平台， 这也是马里奥系列游戏首次登陆非任天堂及移动设备平台。', 'images/zMsg03.jpg', '一如事前预告，任天堂终于在北京时间 12 月 16 日凌晨把 Super Mario Run 带到了 iOS 平台，这也是马里奥系列游戏首次登陆非任天堂及移动设备平台。<br />\r\n<br />\r支持 iPhone 和 iPad 设备（ 目前暂不支持 Android 设备 ），Super Mario Run 采用 Free + IAP 的销售模式，即玩家可以免费下载并体验前三个关卡，其后需要支付 9.99 美元 / 1200 日元 / 78 港币（ 分别为美 / 日 / 港区 App Store 定价 ）才可解锁余下关卡。<br />\r\n<br />\r\nSuper Mario Run 的游戏场景接近早期的经典马里奥游戏，马里奥会向右跑、同时向上跳来进行横版闯关。超级马里奥也对移动设备进行了优化，例如为了让用户可以单手进行简化操作，游戏结合了流行的跑酷玩法，马里奥会自动前进，而你只需点按屏幕，让其进行跳跃即可。当然，你可以控制马里奥进行轻跳或者长跳（ 对应为点按和长按屏幕 ）。<br />\r\n<br />值得注意的是，玩家在 Super Mario Run 游戏中进入任意关卡时均需进行联网验证。除了红色大叔马里奥本人，玩家还可以解锁绿大叔路易 Luigi 或者小恐龙 Yoshi。<br />\r\n<br />\r除了经典的横版闯关模式“ 世界巡回 ”，Super Mario Run 还有“ 建造王国 ”和“ 奇诺比奥拉力赛 ”两种游玩模式。其中，“ 奇诺比奥拉力赛 ”模式下玩家可与对手一较高下，“建造王国”模式下玩家可用金币换取道具，建造属于自己的王国。<br />\r\n<br />\r\n据悉，Super Mario Run 会在全球 151 个国家和地区的 App Store 上架销售，而大中华区中目前只有香港和台湾 App Store 对其进行了上架，中国区 App Store 可能还需要再等段时间。不过，国内用户可以选择用其他地区的 Apple ID 去进行下载体验，不同地区的下载版本中均包括繁体中文语言。<br />\r\n<br />\r\n如果你还没有其他地区的 Apple ID 账户，可以去其他地区的 App Store 进行注册。在苹果现有机制下，中国用户可以注册其他任何一个地区的 Apple ID 账户，而在你拥有外服账号后，就可直接在中区 App Store 或者设置界面中进行账户切换，然后便可登入对应地区的 App Store。<br />\r\n <br />\r\r', 'admin', '游戏', '1480840910');
INSERT INTO `infomation` VALUES ('4', '年终盘点 | App Store 编辑说，这是今年最好玩的 56 个 App', '又到一年盘点时，苹果公布中国区 App Store 2016 年度最佳榜单，涵盖 iPhone、iPad 以及 Mac 设备。', 'images/zMsg04.jpg', '又到一年盘点时，苹果公布中国区 App Store 2016 年度最佳榜单，涵盖 iPhone、iPad 以及 Mac 设备。<br />\r\n<br />\r\n鉴于中国区 App Store 屡禁不绝的刷榜现象，苹果官方给出的这份年度榜单就颇具参考价值。在被各种网游充斥的中国区 App Store 常规排行榜中，要想找到真正好玩的一款游戏或应用并不是一件易事。<br />\r\n<br />\r\n当然，苹果给出的年度榜单或编辑推荐也只是一家之言，今年真正好玩的游戏和应用或许就在你的主屏界面上。<br />\r\n<br />\r\n下面，我们就来看下苹果编辑选出的中国区 App Store 这 56 款年度最佳应用和游戏。<br />\r\n<br />\r年度最佳 iPhone 应用——Prisma<br />\r\n<br />\r\niPhone 平台的 2016 年度最佳 App 由风靡全球的免费照片滤镜应用《 Prisma 》摘得，这款 App 可以把你拍摄的普通照片或视频轻松转变为「 名画作品 」，并在今年夏天成功引爆了各大社交平台。在《 Prisma 》登场后，各种各样的趣味滤镜应用开始大规模流行起来，最新代表就是新海诚《 你的名字。 》同款滤镜。<br />\r\n<br />\r▲ 《 Prisma 》应用截图<br />\rApp Store 编辑备注如下：无论你喜欢充满梦幻感的印象派风格，还是极具视觉冲击力的波普艺术，《 Prisma 》的丰富滤镜让你秒变大师；借助人工智能与神经网络技术，就可亲手将自己拍摄的照片和视频变成手绘作品。<br />\r\n<br />\r年度最佳 iPhone 游戏——部落冲突：皇室战争<br />\r年度最佳 iPhone 游戏由《 部落冲突：皇室战争 》斩获（ 注：人气颇高的《 精灵宝可梦：GO 》暂未登陆中区 App Store ），这也是苹果 App Store 今年重点推介的一款游戏。Supercell 出品的《 皇室战争 》，以自家经典游戏《 部落冲突 》的角色和世界观为原型，加入即时策略、MOBA 以及卡牌等多种元素，简单易上手的同时也蕴含着多种丰富的策略。<br />\r\n<br />\rApp Store 编辑表示，这款游戏创新地结合了塔防、MOBA 和卡牌等多类型游戏要素，充满策略性的玩法和良好的战斗节奏让人一旦上手就停不下来。<br />\r\n<br />\r年度优秀 iPhone 应用——Medly<br />\riPhone 平台的年度优秀 App 为《 Medly 》，这是一款相对小众的音乐制作工具。提供 112 种乐器（ 包括 12 种免费乐器 ）和 8 种乐器轨道，这款音乐制作器工具不仅支持歌曲分解和段落整理，还可以通过更改每个音轨的音量、音效和滤声器来进行个性定制。<br />\r\n<br />\r▲ 《 Medly 》应用截图<br />\r《 Medly 》的 App Store 编辑备注如下：不管是经验丰富的作曲家，还是初试身手的音乐爱好者，这款功能强大的音乐制作器都能助你将灵感谱成悠扬旋律；种类多样的乐器和音效为你提供广阔的创作空间，应用 3D Touch 操作，使创作流程更加流畅顺心。<br />\r<br />\r▲ 《 银河历险记 3 》游戏截图<br />\rApp Store 编辑表示，这是一款充满想象力的解谜游戏，精美画面与灵动音乐交相辉映，为你带来一场兼具美感与挑战的星际探索之旅。<br />\r\n<br />\rApp Store 编辑选出的年度优秀 iPad App 为绘画填色工具《 Tayasui Color 》，开发者称其是一本“ 可透视本心，令人轻松愉快的成人色彩书 ”。这款填色工具提供 12 款不同风格的精美插画以及 4 种不同风格的绘画工具（ 包括水彩画笔 ）供用户选择，而在绘画过程中你还能听到模拟的工具音效。<br />\r\n<br />\r“ 丰富的笔触及色彩选择助你展现百变风格，惊艳的渲染渐变效果让画作富有质感；高度仿真的音效带来真实的舒缓体验，让你在专注填色的过程中充分放松身心 ”，App Store 编辑在备注中写道。<br />\r<br />\r《 Severed 》在 App Store 编辑眼中是一场带有暴力美学性质的华丽冒险，而“ 当线索逐渐浮现，你会被激烈战斗背后的悲剧故事所打动，感受这个光怪陆离的奇幻世界所独有的美感 ”。<br />\r<br />\rToca Blocks 是一款为 6 到 8 岁儿童设计的教育益智类游戏，孩子可以在这个游戏中创造自己的世界，打造创意关卡和组合方块，发现意想不到的物品，还可进行分享，中区 iPhone App Store 暂无有价值的用户热评。<br />\r\n<br />\rApp Store 用户热评：“有种置身于太空的感觉，视觉上感觉很美，与此同时还能创造自己的空间，对一些星体也有了新的认识，很奇妙也很实用。”', 'admin', '应用', '1480840910');
INSERT INTO `infomation` VALUES ('5', '尾巴快评 | 魅族发布会收官：「 小厂焦虑症 」是否终结？', '伴随全年最后一款新机魅蓝 note 5 的登场，轰轰烈烈的魅族 2016 年「 系列演唱会 」宣告落幕。', 'images/zMsg05.jpg', '伴随全年最后一款新机魅蓝 note 5 的登场，轰轰烈烈的魅族 2016 年「 系列演唱会 」宣告落幕。<br />\r\n<br />\r\n今年，魅族科技旗下魅族 / 魅蓝双品牌总共推出了 14 款新机，具体包括（ 按发布时间先后 ）：<br />\r\n<br />\r▲ 魅蓝 note 5，联发科 P10 处理器，首发价 899 元起 <br />\r▲ 魅族 PRO 6 Plus，三星 Exynos 8890 处理器，首发价 2999 元起<br />\r▲ 魅蓝 X，联发科 P20 处理器，首发价 1699 元起<br />\r▲ 魅族 PRO 6s，联发科 X25 处理器，首发价 2699 元<br />\r▲ 魅蓝 5，联发科 MT6750 处理器，首发价 699 元起<br />\r▲ 魅蓝 Max，联发科 P10 处理器，首发价 1699 元<br />\r<br />\r从今年第一款新机魅蓝 note 3 到最后一款新机魅蓝 note 5，魅族科技完成了一次轮回。然而，魅族的「 小厂焦虑症 」是否也终结了？<br />\r\n<br />\r\n从公司业绩来看，魅族总裁白永祥在 11 月最后一周举行的新品发布会上高调宣布，魅族科技在今年将实现盈利。<br />\r\n<br />\r\n自 2014 年 9 月推出魅族 MX4 以来，这家来自珠海的老牌手机厂商就开始了疯狂的「 月月演唱会 」推新模式。而凭借着定价更低、密集登场的魅族和魅蓝系列新机，2015 年也成为魅族手机业务的狂飙期，总销量更是突破 2000 万部，同比增长 350%。<br />\r\n<br />\r\n但进入 2016 年后，魅族手机业务并没有延续其销量猛增（ 注：相较于 2015 年同期 ）的势头，即便其从 4 月起就开始了升级版的「 周周演唱会 」推新模式。白永祥坦诚：“ 我们今年的销量确实没跟发的机器（ 数量 ）成正比，如果成正比的话，那就超英赶美了，但增量还是有的。”<br />\r\n<br />\r\n其实早在去年，魅族就给出了 2016 年 2500 万部手机的销量目标。目前来看，实现这一目标并不算一件难事，但魅族在去年定下的这个「 小目标 」估计很难让外界满意。作为对比，OPPO 和 vivo 在今年实现了巨大的出货量增长。<br />\r\n<br />\r\n另一方面，从 2014 年的 440% 到 2015 年的 350%，再到今年预期目标中的 25% 销量增长（ 注：实际增幅可能会更高 ），魅族在推出更多机型的同时，却也在销量增幅上「 一落千丈 」。<br />\r\n<br />\r\n魅族副总裁李楠也对外界透露，“ 实际上魅族线下渠道是按照三千万规模布局的，但因为整个供货等等一系列问题，今年总量的确不会这么多。”<br />\r\n<br />\r\n一年推出这么多机型，却没有取得销量的大幅增长，除了让人颇多无语的供货问题（ 例如魅蓝 note 3 在上市数月后依然要限时抢购 ），魅族需要解决的大问题还包括：<br />\r\n<br />\r\n1. 联发科已经成为横亘在魅族用户（ 包括潜在用户 ）心头的一道坎，魅族必须要尽快解决其与高通间的专利纠纷争端，并在未来推出更多的非联发科处理器机型；<br />\r\n<br />\r\n2. 魅蓝低端机与其他中高端机型的区分度并不大，低端魅蓝机充当销量主力的局面必须要尽快得到实质性的改变，因为国产机新的主战场在中高端市场；<br />\r\n<br />\r\n3.与时间赛跑，立志成为大众手机厂商的魅族，必须要尽快缩小其与华为、OPPO、vivo 以及小米间的市场份额和销量差距，从而避免被主流市场再次边缘化。<br />\r\n<br />\r\n经过 2014 年底和 2015 全年的销量狂飙，魅族手机业务在 2016 年迎来调整期。如果按李楠所言，魅族线下渠道年销量能达到 3000 万量级，那么其线上线下总销量或将突破 4000 万部，而这已然能缩小其与华为、OPPO、vivo 以及小米间的市场份额差距，甚至可能跻身国内手机市场五大厂商之列。<br />\r\n<br />\r\n但在此之前，魅族依然要经受「 小厂焦虑症 」的煎熬，尤其是在使出机海战术、却不得果的当下。', 'admin', '手机', '1480840910');
INSERT INTO `infomation` VALUES ('6', 'TGA 评出的这些年度最佳游戏，是你的菜吗？', '一年一度的 TGA（ The Game Awards ）于近日举行，各大奖项名花有主。', 'images/zMsg06.jpg', '一年一度的 TGA（ The Game Awards ）于近日举行，各大奖项名花有主。<br/><br/>资料显示，TGA 由 Geoff Keighley 创办，对在游戏领域的美术、工艺和游戏体验等方面获得卓越成就的作品和个人进行表彰，奖项范围涵盖主机、手机、PC 游戏以及电子竞技，顾问委员会则囊括了来自于游戏内容、硬件等相关领域的诸多大佬。而就传播影响力和行业地位而言，TGA 可视作游戏领域的「 奥斯卡 」。<br/><br />\r\n下面，我们就来看下 TGA 评出的这些 2016 年度最佳游戏吧。<br />\r年度最佳游戏（ Game of The Year ）——守望先锋<br />\r\n<br />\r其他提名：<br />\r\n<br />\r\n毁灭战士（ DOOM ）<br />\r\n深入（ Inside ）<br />\r\n泰坦陨落 2（ Titanfall 2 ）<br />\r\n神秘海域 4：贼途末路（ Uncharted 4: A Thief\'s End ）<br />\r\n<br />最佳游戏开发商（ Best Studio/Game Direction ）——暴雪（ 守望先锋 ）<br />\r其他提名：<br />\r\n<br />\r\nDICE（ 战地 1 ）<br />\r\nid Software（ 毁灭战士 ）<br />\r\n顽皮狗（ 神秘海域 4 ）<br />\r\nRespawn（ 泰坦陨落 2 ）<br />\r\n<br />\r最佳叙事（ Best Narrative ）——神秘海域 4：贼途末路（ Uncharted 4: A Thief\'s End ）<br />\r\n<br />\r其他提名：<br />\r\n<br />\r\n看火人（ Firewatch ）<br />\r\n深入（ Inside ）<br />\r\n黑手党 3（ Mafia III ）<br />\r\n奥森弗里（ Oxenfree ）<br />\r\n<br />\r\r', 'admin', '其他', '1480840910');
INSERT INTO `infomation` VALUES ('10', '微信小程序来了，这里有份简单的上手指南', '2017 年 1 月 9 日凌晨，一如张小龙事前预告，微信小程序正式上线了。巧合的是，十年前的 2007 年 1 月 9 日，乔布斯发布了第一代 iPhone。', 'images/zMsg10.jpg', '2017 年 1 月 9 日凌晨，一如张小龙事前预告，微信小程序正式上线了。<br />\r\n<br />\r\n巧合的是，十年前的 2007 年 1 月 9 日，乔布斯发布了第一代 iPhone。于是便有了张小龙下面的这条朋友圈：<br />\r\n<br />\r关于微信小程序的一些背景介绍，可移步这里进行查阅。<br />\r很多尾巴都在问，微信小程序的入口在哪呢？微信小程序怎么没有像 App Store 那样的应用商店呢？<br />\r\n<br />\r\n其实张小龙在去年 12 月 28 日的微信公开课上，就已经提前剧透：小程序在微信里是没有入口的，“ 我们更希望小程序的启动来自于扫二维码 ”。另外，由于小程序没有下载过程，所以不存在所谓的小程序应用商店。<br />\r\n<br />\r\n那么，在没有二维码可以扫之前，我们该如何找到小程序呢？目前来看，有两种途径可以进入到小程序界面。但需要说明的是，你 Android 手机或者 iPhone 上的微信必须是最新的 6.5.3 版本。<br />\r\n<br />\r1.在微信搜索框中搜索任一一款小程序的名称，然后点击进去，即可进入到这一小程序的界面。<br />\r\n例如，我在搜索框中输入“ 小程序示例 ”，然后就可以找到名为“ 小程序示例 ”的小程序，之后点击进去。如果你在搜索的一级子目录中没有找到名为“ 小程序示例 ”的小程序，那就点击到二级子目录中。<br />\r\n<br />\r进入到这个小程序后，你就可以进行体验了。而在你退出这个小程序后，就可以在微信“ 发现 ”栏中的最下方位置看到小程序“ 入口 ”了。<br />\r<br />\r2.在微信群聊或者单聊中，直接点击进入他人分享的小程序，即可进入到这一小程序的界面。<br />\r\n任一小程序均支持微信好友分享功能，所以你可以在群聊或者单聊窗口中找到他人分享的小程序，然后点击进去。小程序并不支持朋友圈分享。<br />\r\n<br />需要说明的是，你可以把一个常用的小程序设定为“ 显示在聊天顶部 ”（ 即置顶 ），然后就可以在聊天框最上方看到这个置顶的小程序了，方便随时点击进去。<br />\r\n<br />\r另外，对于 Android 手机而言，任一小程序都可以添加到手机主屏界面，而这是 iPhone 版微信目前所无法做到的。<br />\r\n<br />\r虽然小程序保留了 App 版本的基本功能，但诸如报站提醒或者发表评论这样的功能，“ 车来了精准的实时公交 ”和“ 今日头条 lite ”还是给“ 阉割 ”掉了。当然，后续的小程序版本更新可能会加入更多新功能。<br />\r需要说明的是，在小程序中进行支付时，目前默认只能选择微信支付，至于不少人在用的支付宝支付方式，短期内估计很难接入到微信小程序。<br />\r另外，在你首次进入“ 车来了精准的实时公交 ”小程序时，微信会发出定位的权限请求，你选择同意那么以后再进入时就会自动进行权限提取，微信账号登录也是同理。对于微信账号登陆，前提是这个小程序支持微信登陆，要不然你还是需要在这个小程序中输入这一平台的账号和密码进行服务登陆。<br />\r最后需要指出的是，Android 版微信在打开一个小程序后，系统会多开一个后台，而这也是 iPhone 版微信所不具有的。即便你关闭了微信，其余打开的小程序依然会保留在系统后台，某种程度上可视作是一个独立运行的程序。', 'admin', '应用', '1480605216');

-- ----------------------------
-- Table structure for strategy
-- ----------------------------
DROP TABLE IF EXISTS `strategy`;
CREATE TABLE `strategy` (
  `id` int(11) NOT NULL,
  `pro_tittle` varchar(255) DEFAULT NULL,
  `pro_introduce` varchar(255) DEFAULT NULL,
  `pro_bg` varchar(255) DEFAULT NULL,
  `add_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of strategy
-- ----------------------------
INSERT INTO `strategy` VALUES ('1', 'BlueLounge CAMPUS', 'BlueLounge CAMPUS 背包造型独特、简约，十分适合日常出街使用。', 'images/s5.jpg', '1480840910');
INSERT INTO `strategy` VALUES ('2', '索尼MDR-1A限量版', 'MDR-1A 限量版没有多余的颜色，也没有繁复的纹理，黑的深邃。', 'images/s2.jpg', '1480840910');
INSERT INTO `strategy` VALUES ('3', '魅蓝X', '这是一台迄今为止最旗舰的魅蓝系列手机。', 'images/s3.jpg', '1480840910');
INSERT INTO `strategy` VALUES ('4', '小蚁微单相机M1', '作为国内第一款微单相机，低价是小蚁微单相机最大的亮点。', 'images/s4.jpg', '1480840910');

-- ----------------------------
-- Table structure for user_infomation
-- ----------------------------
DROP TABLE IF EXISTS `user_infomation`;
CREATE TABLE `user_infomation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `per_introduce` varchar(255) DEFAULT NULL,
  `sex` varchar(255) DEFAULT NULL,
  `add_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_infomation
-- ----------------------------
INSERT INTO `user_infomation` VALUES ('12', '胡萝卜卜卜', '营养又明目', '女', '1480841031');
INSERT INTO `user_infomation` VALUES ('13', '白云苍狗', '白云和黑土', '女', '1480840302');
INSERT INTO `user_infomation` VALUES ('4', '陈能芝啊', '我是一个兵，来自老百姓', '女', '1480840910');
INSERT INTO `user_infomation` VALUES ('8', '袁露雅呀', '我要和能芝去杭州工作', '女', '1480840222');
INSERT INTO `user_infomation` VALUES ('9', '陈佳敏啊', '在温州工作', '女', '1480841111');
INSERT INTO `user_infomation` VALUES ('10', '施松雁呀', '最喜欢吃的是土豆', '女', '1480840980');
INSERT INTO `user_infomation` VALUES ('11', '土豆啊土豆', '蒸的炸的煮的炒的都非常好吃', '女', '1480840933');
INSERT INTO `user_infomation` VALUES ('15', '123456', '一寸金，寸金难买寸光阴', '女', '1480840910');
INSERT INTO `user_infomation` VALUES ('17', '施松雁是', '这是一个简介', '男', '1480765559');
INSERT INTO `user_infomation` VALUES ('19', '一颗胡萝卜', '对对对对对多', '女', '1480766880');
INSERT INTO `user_infomation` VALUES ('20', '小星星', '一闪一闪亮晶晶', null, '1480851945');

-- ----------------------------
-- Table structure for user_login
-- ----------------------------
DROP TABLE IF EXISTS `user_login`;
CREATE TABLE `user_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `add_time` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_login
-- ----------------------------
INSERT INTO `user_login` VALUES ('1', '胡萝卜卜卜', '4124bc0a9335c27f086f24ba207a4912', '1480766880');
INSERT INTO `user_login` VALUES ('2', '陈佳敏', '698d51a19d8a121ce581499d7b701668', '1480766880');
INSERT INTO `user_login` VALUES ('3', '袁露雅', '4124bc0a9335c27f086f24ba207a4912', '1480766880');
INSERT INTO `user_login` VALUES ('4', 'ssy', '4124bc0a9335c27f086f24ba207a4912', '1480766880');
INSERT INTO `user_login` VALUES ('5', '香蕉苹果', '9336ebf25087d91c818ee6e9ec29f8c1', '1480766880');
INSERT INTO `user_login` VALUES ('6', '杨嵩南', 'e0323a9039add2978bf5b49550572c7c', '1480766880');
INSERT INTO `user_login` VALUES ('7', '郑在忙', '1aabac6d068eef6a7bad3fdf50a05cc8', '1480766880');
INSERT INTO `user_login` VALUES ('8', '123456', 'f7177163c833dff4b38fc8d2872f1ec6', '1480766880');
INSERT INTO `user_login` VALUES ('9', 'Yeki', '4124bc0a9335c27f086f24ba207a4912', '1480766880');
INSERT INTO `user_login` VALUES ('10', '印尼文在', 'e10adc3949ba59abbe56e057f20f883e', '1480766880');
INSERT INTO `user_login` VALUES ('11', '人间烟火', '202cb962ac59075b964b07152d234b70', '1480766880');
INSERT INTO `user_login` VALUES ('12', '白云苍狗', '6512bd43d9caa6e02c990b0a82652dca', '1480766880');
INSERT INTO `user_login` VALUES ('13', '一颗胡萝卜', '099b3b060154898840f0ebdfb46ec78f', '1480766880');
INSERT INTO `user_login` VALUES ('15', '陈能芝陈能芝', '96e79218965eb72c92a549dd5a330112', '1480766880');
INSERT INTO `user_login` VALUES ('18', '收拾收拾付过', '698d51a19d8a121ce581499d7b701668', '1480766880');
INSERT INTO `user_login` VALUES ('19', '收拾收拾', 'c4ca4238a0b923820dcc509a6f75849b', '1480766880');
INSERT INTO `user_login` VALUES ('20', '施松雁是', '698d51a19d8a121ce581499d7b701668', '1480766880');
INSERT INTO `user_login` VALUES ('21', '土豆啊土豆', '3d3b346cb2889198cc60c8c11a088864', '1480766880');
INSERT INTO `user_login` VALUES ('23', '小子凌峰', '202cb962ac59075b964b07152d234b70', '1480766880');
INSERT INTO `user_login` VALUES ('24', '一颗胡萝卜', '202cb962ac59075b964b07152d234b70', '1480766880');
INSERT INTO `user_login` VALUES ('25', 'Grimm', 'e10adc3949ba59abbe56e057f20f883e', '1480776765');
INSERT INTO `user_login` VALUES ('26', '小星星', '698d51a19d8a121ce581499d7b701668', '1480850474');
