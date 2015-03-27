<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>前端博客</title>
<script type="text/javascript" src="js/tool.js"></script>
<script type="text/javascript" src="js/base.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
<script type="text/javascript" src="js/json2.js"></script>
<script type="text/javascript" src="js/base_drag.js"></script>
<script type="text/javascript" src="js/base_form.js"></script>
<script type="text/javascript" src="js/index.js"></script>
<link rel="stylesheet" type="text/css" href="css/index.css" />
</head>
<body>

<div id="header_bg">
	<div id="header">
		<div class="logo"><img src="images/logo.gif" alt="" /></div>
		<div class="member">个人中心
			<ul class="member_ul">
				<li><a href="###">发文</a></li>
				<li><a href="###">换肤</a></li>
				<li><a href="###">帮助</a></li>
				<li><a href="###">退出</a></li>
			</ul>
		</div>
		<div class="reg">注册</div>
		<div class="login">登录</div>
		<div class="info"></div>
	</div>
</div>

<div id="reg">
	<h2><img src="images/close.png" alt="" class="close" />会员注册</h2>
	<form name="reg">
	<dl>
		<dd>用 户 名： <input type="text" name="user" class="text" />
			<span class="info info_user">请输入用户名，2~20位，由字母、数字和下划线组成！</span>
			<span class="error error_user">输入不合法，请重新输入！</span>
			<span class="succ succ_user">可用</span>
			<span class="loading">正在检测用户名...</span>
		</dd>
		<dd>密　　码： <input type="password" name="pass" class="text" />
			<span class="info info_pass">
				<p>安全级别：<strong class="s s1">■</strong><strong class="s s2">■</strong><strong class="s s3">■</strong> <strong class="s s4" style="font-weight:normal;"></strong></p>
				<p><strong class="q1" style="font-weight:normal;">○</strong> 6-20 个字符</p>
				<p><strong class="q2" style="font-weight:normal;">○</strong> 只能包含大小写字母、数字和非空格字符</p>
				<p><strong class="q3" style="font-weight:normal;">○</strong> 大、小写字母、数字、非空字符，2种以上</p>
			</span>
			<span class="error error_pass">输入不合法，请重新输入！</span>
			<span class="succ succ_pass">可用</span>
		</dd>
		<dd>密码确认： <input type="password" name="notpass" class="text" />
			<span class="info info_notpass">请再一次输入密码！</span>
			<span class="error error_notpass">密码不一致，请重新输入！</span>
			<span class="succ succ_notpass">可用</span>
		</dd>
		<dd><span style="vertical-align:-2px">提　　问：</span> <select name="ques">
									<option value="0">- - - - 请选择 - - - -</option>
									<option value="1">- - 您最喜欢吃的菜</option>
									<option value="2">- - 您的狗狗的名字</option>
									<option value="3">- - 您的出生地</option>
									<option value="4">- - 您最喜欢的明星</option>
								  </select>
			<span class="error error_ques">尚未选择提问，请选择！</span>				  
		</dd>
		<dd>回　　答： <input type="text" name="ans" class="text" />
			<span class="info info_ans">请输入回答，2~32位！</span>
			<span class="error error_ans">回答不合法，请重新输入！</span>
			<span class="succ succ_ans">可用</span>
		</dd>
		<dd>电子邮件： <input type="text" name="email" class="text" autocomplete="off" />
			<span class="info info_email">请输入电子邮件！</span>
			<span class="error error_email">邮件不合法，请重新输入！</span>
			<span class="succ succ_email">可用</span>
			<ul class="all_email">
				<li><span></span>@qq.com</li>				
				<li><span></span>@163.com</li>
				<li><span></span>@sohu.com</li>
				<li><span></span>@sina.com.cn</li>
				<li><span></span>@gmail.com</li>
			</ul>
		</dd>
		<dd class="birthday"><span style="vertical-align:-2px">生　　日：</span> <select name="year">
									<option value="0">- 年 -</option>
								  </select> -
								  <select name="month">
									<option value="0">- 月 -</option>
								  </select> -
								  <select name="day">
									<option value="0">- 日 -</option>
								  </select>
			<span class="error error_birthday">尚未全部选择，请选择！</span>	  
		</dd>
		<dd style="height:105px;"><span style="vertical-align:85px">备　　注：</span> <textarea name="ps"></textarea></dd>			
		<dd style="display:block;" class="ps">还可以输入<strong class="num">200</strong>字</dd>	
		<dd style="display:none;" class="ps">已超过<strong class="num"></strong>字，<span class="clear">清尾</span></dd>		
		<dd style="padding:0 0 0 80px;"><input type="button" name="sub" class="submit" /></dd>
	</dl>
	</form>
</div>

<div id="login">
	<h2><img src="images/close.png" alt="" class="close" />网站登录</h2>
	<form name="login">
	<div class="info"></div>
	<div class="user">帐 号：<input type="text" name="user" class="text" /></div>
	<div class="pass">密 码：<input type="password" name="pass" class="text" /></div>
	<div class="button"><input type="button" name="sub" class="submit" value="" /></div>
	<div class="other">注册新用户 | 忘记密码？</div>
	</form>
</div>

<div id="blog">
	<h2><img src="images/close.png" alt="" class="close" />发表博文</h2>
	<div class="info"></div>
	<form name="blog">
	<dl>
		<dd>标　　题： <input type="text" name="title" class="title" /> (*不可为空)</dd>
		<dd><span style="vertical-align:85px">内　　容：</span> <textarea name="content" class="content"></textarea> <span style="vertical-align:45px">(*不可为空)</span></dd>				
		<dd style="padding:10px 0 0 86px;"><input type="button" name="sub" class="submit" /></dd>
	</dl>
	</form>
</div>

<div id="skin">
	<h2><img src="images/close.png" alt="" class="close" />更换皮肤</h2>
	<div class="skin_bg">

	</div>
</div>

<div id="nav">
	<ul class="about">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
	<ul class="black">
		<li>首页</li>
		<li>博文列表</li>
		<li>精彩相册</li>
		<li>动感音乐</li>
		<li>关于我</li>
	</ul>
	<div class="nav_bg">
		<ul class="white">
			<li>首页</li>
			<li>博文列表</li>
			<li>精彩相册</li>
			<li>动感音乐</li>
			<li>关于我</li>
		</ul>
	</div>	
</div>


<div id="main">
	<div id="sidebar">
		<h2>教育博文1</h2>
		<ul>
			<li><a href="###">靠自己95 后女生被16 所国外名校录取</a></li>
			<li><a href="###">00 后的成长烦恼：压力巨大成隐形杀手</a></li>
			<li><a href="###">一年自学MIT 的33 门课? 疯狂学习方法</a></li>
			<li><a href="###">申请赴美读研人数下降5% 7 年来首遇冷</a></li>
			<li><a href="###">西政“萌招聘”秀出辣椒与美女被赞</a></li>
		</ul>
		<h2>教育博文2</h2>
		<ul>
			<li><a href="###">靠自己95 后女生被16 所国外名校录取</a></li>
			<li><a href="###">00 后的成长烦恼：压力巨大成隐形杀手</a></li>
			<li><a href="###">一年自学MIT 的33 门课? 疯狂学习方法</a></li>
			<li><a href="###">申请赴美读研人数下降5% 7 年来首遇冷</a></li>
			<li><a href="###">西政“萌招聘”秀出辣椒与美女被赞</a></li>
		</ul>
		<h2>教育博文3</h2>
		<ul>
			<li><a href="###">靠自己95 后女生被16 所国外名校录取</a></li>
			<li><a href="###">00 后的成长烦恼：压力巨大成隐形杀手</a></li>
			<li><a href="###">一年自学MIT 的33 门课? 疯狂学习方法</a></li>
			<li><a href="###">申请赴美读研人数下降5% 7 年来首遇冷</a></li>
			<li><a href="###">西政“萌招聘”秀出辣椒与美女被赞</a></li>
		</ul>
	</div>
	<div id="index">
		
	</div>
	<div id="banner">
		<img src="images/banner1.jpg" alt="轮播器第一张" />
		<img src="images/banner2.jpg" alt="轮播器第二张" />
		<img src="images/banner3.jpg" alt="轮播器第三张" />
		<ul>
			<li>●</li>
			<li>●</li>
			<li>●</li>
		</ul>
		<span></span>
		<strong></strong>
	</div>
	<div id="photo">
		<dl>
			<dt><img xsrc="images/p1.jpg" bigsrc="images/p1big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>

		<dl>
			<dt><img xsrc="images/p2.jpg" bigsrc="images/p2big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p3.jpg" bigsrc="images/p3big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p4.jpg" bigsrc="images/p4big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p5.jpg" bigsrc="images/p5big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p6.jpg" bigsrc="images/p6big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>

		<dl>
			<dt><img xsrc="images/p7.jpg" bigsrc="images/p7big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p8.jpg" bigsrc="images/p8big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p9.jpg" bigsrc="images/p9big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p10.jpg" bigsrc="images/p10big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p11.jpg" bigsrc="images/p11big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p12.jpg" bigsrc="images/p12big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>延迟加载图片</dd>
		</dl>

		
	</div>
	
	<div id="footer">
		<p>瓢城Web俱乐部 http://www.ycku.com</p>
		<p>CopyRight All Reset. xxx 苏备案号：123456</p>
	</div>
</div>

<div id="share">
	<h2>分享到</h2>
	<ul>
		<li><a href="###" class="a">一键分享</a></li>
		<li><a href="###" class="b">新浪微博</a></li>
		<li><a href="###" class="c">人人网</a></li>
		<li><a href="###" class="d">百度相册</a></li>
		<li><a href="###" class="e">腾讯朋友</a></li>
		<li><a href="###" class="f">豆瓣网</a></li>
		<li><a href="###" class="g">百度新首页</a></li>
		<li><a href="###" class="h">和讯微博</a></li>
		<li><a href="###" class="i">QQ 空间</a></li>
		<li><a href="###" class="j">百度搜藏</a></li>
		<li><a href="###" class="k">腾讯微博</a></li>
		<li><a href="###" class="l">开心网</a></li>
		<li><a href="###" class="m">百度贴吧</a></li>
		<li><a href="###" class="n">搜狐微博</a></li>
		<li><a href="###" class="o">QQ 好友</a></li>
		<li><a href="###" class="p">更多...</a></li>
	</ul>
	<div class="share_footer"><a href="###">百度分享</a><span></span></div>
</div>

<div id="photo_big">
	<h2><img src="images/close.png" alt="" class="close" />图片预加载</h2>
	<div class="big">
		<img src="images/loading.gif" alt="" />
		<strong class="sl">&lt;</strong>
		<strong class="sr">&gt;</strong>
		<span class="left"></span>
		<span class="right"></span>
		<em class="index"></em>
	</div>
</div>

<div id="loading">
	<p>加载中</p>
</div>

<div id="success">
	<p>成功</p>
</div>

<div id="screen"></div>

<div id="test" style="clear:both;"></div>

</body>
</html>
