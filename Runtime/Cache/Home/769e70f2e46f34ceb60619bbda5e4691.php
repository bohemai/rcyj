<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="keyword" content="">
<meta name="author" content="">
<title>二次元界</title>
<link rel="stylesheet" href="/Public/Home/css/base1.css" />
<link rel="stylesheet" href="/Public/Home/css/master.css" />
<script type="text/javascript" src="/Public/static/jquery-2.0.3.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/master.js"></script>
<!--[if lt IE 9]>
<script src="/Public/Home/js/html5shiv.min.js"></script>
<![endif]-->

</head>
<body>
	<section>
	<!-- 头部 -->
	<div class="nav-wrapper">
    <header class="container">
        <ul class="nav">
            <li><a href="/Index.html">首页</a></li>
            <li><a href="/Product.html">作品</a></li>
            <li><a href="/Custom.html">订制</a></li>
            <li><a href="/Author.html">作者</a></li>
            <li><a href="/Activity.html">活动</a></li>
            <li><a href="/Index.html">更多</a></li>
        </ul>
        <?php if((is_login() == 0)): ?><div class="header-right login-top">
            <input name="" type="text" value="搜索"  class="gray" onclick="if (this.value == '搜索') {
                        this.value = '';
                        this.className = 'white'
                    }" onblur="if (this.value == '') {
                                this.value = '搜索';
                                this.className = 'gray'
                            }">
            <ul>
                <li><a href="/Login/login.html">登录</a></li>
                <li>|</li>
                <li><a href="/Login/register.html">注册</a></li>
            </ul>
        </div>
            <?php else: ?>
            <div class="header-right success">
                <input name="" type="text" value="搜索"  class="gray" onclick="if(this.value=='搜索'){this.value='';this.className='white'}" onblur="if(this.value=='') {this.value='搜索';this.className='gray'}">

                <ul class="img-btn">
                    <li class="color-li"><a href="/MyCenter/index/id/<?php echo is_login();?>.html"><img src="/Public/Home/images/top-img01.png"/></a>
                        <ul class="nextmenu" style="display:none;">
                            <li><a href="/MyCenter/index/id/<?php echo is_login();?>.html"><img src="/Public/Home/images/top-nav-img01.png"/>为我推荐</a></li>
                        </ul>
                    </li>
                    <li><a href="/MyCenter/attention.html"><img src="/Public/Home/images/top-img02.png"/></a>
                        <ul class="nextmenu" style="display:none;">
                            <li><a href="/MyCenter/attention.html"><img src="/Public/Home/images/top-nav-img02.png"/>我的关注</a></li>
                            <li><a href="/MyCenter/attention.html"><img src="/Public/Home/images/top-nav-img03.png"/>我的粉丝</a></li>
                            <li><a href="/MyCenter/attention.html"><img src="/Public/Home/images/top-nav-img04.png"/>我的评价</a></li>
                            <li><a href="/MyCenter/attention.html"><img src="/Public/Home/images/top-nav-img05.png"/>系统通知</a></li>
                            <li><a href="/MyCenter/attention.html"><img src="/Public/Home/images/top-nav-img06.png"/>活动公告</a></li>
                        </ul>
                    </li>
                    <li><a href="/MyCenter/collect.html"><img src="/Public/Home/images/top-img03.png"/></a></li>
                    <li><a href="/MyCenter/uploadWork.html"><img src="/Public/Home/images/top-img04.png"/></a></li>
                    <li class="user-img"><a href="author edit.html"><img src="/Public/Home/images/user-img.png"/></a>
                        <ul class="nextmenu" style="display:none;">
                            <li><a href="author edit.html"><img src="/Public/Home/images/top-nav-img07.png"/>我的订单</a></li>
                            <li><a href="/MyCenter/invite.html"><img src="/Public/Home/images/top-nav-img08.png"/>我的邀请</a></li>
                            <li><a href="/MyCenter/editdata.html"><img src="/Public/Home/images/top-nav-img09.png"/>修改资料</a></li>
                            <li><a href="/Login/loginout.html"><img src="/Public/Home/images/top-nav-img10.png"/>退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div><?php endif; ?>
    </header>
</div>
	
	<!-- 主体 -->
	
	<div class="container content">
		<div class="banner"> <img src="/Public/Home/images/banner01.jpg"/> <a class="left-btn" href="#"> </a> <a class="right-btn" href="#"> </a> </div>
		<div class="module">
			<div class="module-tle">
				<h3>活动推荐<span><a href="/Activity/perfect.html">我要举办“发布活动，众人参与”</a></span></h3>
				<a href="/Activity.html" class="more">更多活动</a> </div>
			<ul>
				<li><span class="station"></span></li>
				<li><span class="station"></span></li>
				<li><span class="station"></span></li>
				<li><span class="station"></span></li>
			</ul>
		</div>
		<div class="module">
			<div class="module-tle">
				<h3>作品推荐<span><a href="/MyCenter/uploadWork.html">我要上传“展现精品，创造价值”</a></span></h3>
				<a href="/Product.html" class="more">更多作品推荐</a> </div>
			<ul>
				<?php if(is_array($tjwork)): $i = 0; $__LIST__ = $tjwork;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li style="display:block;width:293px;height: 430px;"><a href="/Product/details/id/<?php echo ($data["id"]); ?>.html"><img src="http://www.2ciyuanjie.com/<?php echo ($data["main_image_url"]); ?>" alt="作品图片-<?php echo ($data["title"]); ?>" style="display：block;width: 293px;height: 222px;"/></a>
					<h3><?php echo (mb_substr($data["title"],0,10,'utf-8')); ?></h3>
					<h4>￥<?php echo ($data["money"]); ?></h4>
					<span class="label-a"><a href="#">动漫</a><a href="#">自创</a></span>
					<h5><span><?php echo ($data["open_count"]); ?></span>人气  /<span><?php echo ($data["praise_count"]); ?></span>点赞  /<span><?php echo ($data["favorite_count"]); ?></span>收藏 </h5>
					<h6><a href="/Author/details/id/<?php echo ($data["user_id"]); ?>.html"><?php echo (getUserName($data["user_id"])); ?>
						<?php if(($data.user_id|getUserName) == null): ?><img src="/Public/Home/images/user-img02.gif" alt="用户头像"/>
							<?php else: ?>
							<img src="http://www.2ciyuanjie.com/<?php echo (getUserImg($data["user_id"])); ?>" style="width: 41px;height: 41px;"/><?php endif; ?>
					</a></h6>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>

		</div>
		<div class="module">
			<div class="module-tle">
				<h3>作品推荐<span><a href="/Custom/custom.html">我要订制“订制时尚，品味生活”</a></span></h3>
				<a href="/Custom.html" class="more">更多订制需求推荐</a> </div>
			<ul>
				<?php if(is_array($tjwork)): $i = 0; $__LIST__ = $tjwork;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><li style="display:block;width:293px;height: 450px;"><a href="iworks-details.html"><img src="http://www.2ciyuanjie.com/<?php echo ($data["main_image_url"]); ?>" alt="作品图片-<?php echo ($data["title"]); ?>" style="display：block;width: 293px;height: 222px;"/></a>
					<h3><?php echo (mb_substr($data["title"],0,10,'utf-8')); ?></h3>
					<h4>￥<?php echo ($data["money"]); ?></h4>
					<span class="label-a"><a href="#">动漫</a><a href="#">自创</a></span>
					<h2>已接单<span>接单状态</span></h2>
					<h5><span><?php echo ($data["open_count"]); ?></span>人气</h5>
					<h6><a href="/Author/details/id/<?php echo ($data["user_id"]); ?>.html"><?php echo (getUserName($data["user_id"])); ?>
						<!--<img src="http://www.2ciyuanjie.com/<?php echo (getUserImg($data["user_id"])); ?>" style="width: 41px;height: 41px;"/>-->
						<?php if(($data.user_id|getUserName) == null): ?><img src="/Public/Home/images/user-img02.gif" alt="用户头像"/>
							<?php else: ?>
							<img src="http://www.2ciyuanjie.com/<?php echo (getUserImg($data["user_id"])); ?>" style="width: 41px;height: 41px;"/><?php endif; ?>

					</a></h6>
				</li><?php endforeach; endif; else: echo "" ;endif; ?>

			</ul>
		</div>
		<div class="module recommend">
			<div class="module-tle">
				<h3>推荐作者<span><a href="/Author/pAuthorReg.html">我要申请“让世界关注你”</a></span></h3>
				<a href="/Author.html" class="more">更多推荐作者</a> </div>
			<ul>
				<?php if(is_array($author)): $i = 0; $__LIST__ = $author;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 4 );++$i;?><li style="display: block;">
					 <a href="/Author/details/id/<?php echo ($data["id"]); ?>.html">
						 <?php if(empty($data["header_img"])): ?><img src="/Public/Home/images/user-img01.gif"/>
							 <?php else: ?>
							 <img src="http://www.2ciyuanjie.com/<?php echo ($data["header_img"]); ?>" style="width: 80px;height: 80px;"/><?php endif; ?>
						 <!--<img src="/Public/Home/images/user-img01.gif"/>-->

					 </a>
						<span>
						 <h5><a href="/Author/details/id/<?php echo ($data["id"]); ?>.html"><?php echo ($data["user_name"]); ?></a></h5>
						 <h6><?php echo ($data["address"]); ?> / <?php echo (mb_substr(strtr($data["tags_content"],';',' '),1,10,'UTF-8')); ?></h6>
						 <h6>粉丝：<?php echo ($data["fans_count"]); ?>／ 作品：<?php echo ($data["workcount"]); ?></h6>
						</span>
				</li>
					<?php if(($mod) == "3"): ?></ul><ul><?php endif; endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
		<div class="activity-banner"> <img src="/Public/Home/images/banner-img03.gif"/> </div>
	</div>



	<!-- /底部 -->
	<footer class="bottom">
    <div class="container">
        <div class="botm-left">
            <div class="botm-btn"><a href="#" class="botm-share sina"><img src="/Public/Home/images/bottom-share1.png"/></a>
                <a href="#" class="botm-share mail"><img src="/Public/Home/images/bottom-share2.png"/></a></div>
            <h5><a href="/Index/standard.html#jygf">交易规范</a> <a href="/Index/standard.html#jfgz">积分规则</a> <a href="/Index/mechanism.html#yqzjz">邀请者机制</a> <a href="/Index/mechanism.html#dyzjz">订制者机制</a> <a href="/Index/mechanism.html#zzjz">作者机制</a> <a href="/Index/about.html#wo">关于我们</a> <a href="/Index/about.html#yisi">关于隐私</a> <a href="/Index/about.html">问题反馈</a> <a href="/Index/about.html#bq">版权声明</a></h5>
            <h5>联系我们：</h5>
            <h5><span>站内求助或投诉举报：   Email:  service@2ciyuanjie.com</span>          <span>作者服务：   010-222222222</span>    <span>Email:  originator@2ciyuanjie.com</span></h5>
            <h5><span>订制者服务：   010-22222222</span>   <span>Email:  demander@2ciyuanjie.com</span>          <span>活动及商务合作：   010-22222222</span>   <span>Email:cooperation@2ciyuanjie.com</span></h5>
            <h5><span>媒体服务：   010-22222222</span>   <span>Email: media@2ciyuanjie.com</span></h5>
            <h5 class="gray-h5">版权所有：北京世纪元通网络科技有限公司  京ICP备14025166号-1</h5>
        </div>
        <div class="botm-right"><img src="/Public/Home/images/bottom-img.png"/></div>
    </div>
</footer>
	</section>
</body>
</html>