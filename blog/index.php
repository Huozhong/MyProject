<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>ǰ�˲���</title>
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
		<div class="member">��������
			<ul class="member_ul">
				<li><a href="###">����</a></li>
				<li><a href="###">����</a></li>
				<li><a href="###">����</a></li>
				<li><a href="###">�˳�</a></li>
			</ul>
		</div>
		<div class="reg">ע��</div>
		<div class="login">��¼</div>
		<div class="info"></div>
	</div>
</div>

<div id="reg">
	<h2><img src="images/close.png" alt="" class="close" />��Աע��</h2>
	<form name="reg">
	<dl>
		<dd>�� �� ���� <input type="text" name="user" class="text" />
			<span class="info info_user">�������û�����2~20λ������ĸ�����ֺ��»�����ɣ�</span>
			<span class="error error_user">���벻�Ϸ������������룡</span>
			<span class="succ succ_user">����</span>
			<span class="loading">���ڼ���û���...</span>
		</dd>
		<dd>�ܡ����룺 <input type="password" name="pass" class="text" />
			<span class="info info_pass">
				<p>��ȫ����<strong class="s s1">��</strong><strong class="s s2">��</strong><strong class="s s3">��</strong> <strong class="s s4" style="font-weight:normal;"></strong></p>
				<p><strong class="q1" style="font-weight:normal;">��</strong> 6-20 ���ַ�</p>
				<p><strong class="q2" style="font-weight:normal;">��</strong> ֻ�ܰ�����Сд��ĸ�����ֺͷǿո��ַ�</p>
				<p><strong class="q3" style="font-weight:normal;">��</strong> ��Сд��ĸ�����֡��ǿ��ַ���2������</p>
			</span>
			<span class="error error_pass">���벻�Ϸ������������룡</span>
			<span class="succ succ_pass">����</span>
		</dd>
		<dd>����ȷ�ϣ� <input type="password" name="notpass" class="text" />
			<span class="info info_notpass">����һ���������룡</span>
			<span class="error error_notpass">���벻һ�£����������룡</span>
			<span class="succ succ_notpass">����</span>
		</dd>
		<dd><span style="vertical-align:-2px">�ᡡ���ʣ�</span> <select name="ques">
									<option value="0">- - - - ��ѡ�� - - - -</option>
									<option value="1">- - ����ϲ���ԵĲ�</option>
									<option value="2">- - ���Ĺ���������</option>
									<option value="3">- - ���ĳ�����</option>
									<option value="4">- - ����ϲ��������</option>
								  </select>
			<span class="error error_ques">��δѡ�����ʣ���ѡ��</span>				  
		</dd>
		<dd>�ء����� <input type="text" name="ans" class="text" />
			<span class="info info_ans">������ش�2~32λ��</span>
			<span class="error error_ans">�ش𲻺Ϸ������������룡</span>
			<span class="succ succ_ans">����</span>
		</dd>
		<dd>�����ʼ��� <input type="text" name="email" class="text" autocomplete="off" />
			<span class="info info_email">����������ʼ���</span>
			<span class="error error_email">�ʼ����Ϸ������������룡</span>
			<span class="succ succ_email">����</span>
			<ul class="all_email">
				<li><span></span>@qq.com</li>				
				<li><span></span>@163.com</li>
				<li><span></span>@sohu.com</li>
				<li><span></span>@sina.com.cn</li>
				<li><span></span>@gmail.com</li>
			</ul>
		</dd>
		<dd class="birthday"><span style="vertical-align:-2px">�������գ�</span> <select name="year">
									<option value="0">- �� -</option>
								  </select> -
								  <select name="month">
									<option value="0">- �� -</option>
								  </select> -
								  <select name="day">
									<option value="0">- �� -</option>
								  </select>
			<span class="error error_birthday">��δȫ��ѡ����ѡ��</span>	  
		</dd>
		<dd style="height:105px;"><span style="vertical-align:85px">������ע��</span> <textarea name="ps"></textarea></dd>			
		<dd style="display:block;" class="ps">����������<strong class="num">200</strong>��</dd>	
		<dd style="display:none;" class="ps">�ѳ���<strong class="num"></strong>�֣�<span class="clear">��β</span></dd>		
		<dd style="padding:0 0 0 80px;"><input type="button" name="sub" class="submit" /></dd>
	</dl>
	</form>
</div>

<div id="login">
	<h2><img src="images/close.png" alt="" class="close" />��վ��¼</h2>
	<form name="login">
	<div class="info"></div>
	<div class="user">�� �ţ�<input type="text" name="user" class="text" /></div>
	<div class="pass">�� �룺<input type="password" name="pass" class="text" /></div>
	<div class="button"><input type="button" name="sub" class="submit" value="" /></div>
	<div class="other">ע�����û� | �������룿</div>
	</form>
</div>

<div id="blog">
	<h2><img src="images/close.png" alt="" class="close" />��������</h2>
	<div class="info"></div>
	<form name="blog">
	<dl>
		<dd>�ꡡ���⣺ <input type="text" name="title" class="title" /> (*����Ϊ��)</dd>
		<dd><span style="vertical-align:85px">�ڡ����ݣ�</span> <textarea name="content" class="content"></textarea> <span style="vertical-align:45px">(*����Ϊ��)</span></dd>				
		<dd style="padding:10px 0 0 86px;"><input type="button" name="sub" class="submit" /></dd>
	</dl>
	</form>
</div>

<div id="skin">
	<h2><img src="images/close.png" alt="" class="close" />����Ƥ��</h2>
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
		<li>��ҳ</li>
		<li>�����б�</li>
		<li>�������</li>
		<li>��������</li>
		<li>������</li>
	</ul>
	<div class="nav_bg">
		<ul class="white">
			<li>��ҳ</li>
			<li>�����б�</li>
			<li>�������</li>
			<li>��������</li>
			<li>������</li>
		</ul>
	</div>	
</div>


<div id="main">
	<div id="sidebar">
		<h2>��������1</h2>
		<ul>
			<li><a href="###">���Լ�95 ��Ů����16 ��������У¼ȡ</a></li>
			<li><a href="###">00 ��ĳɳ����գ�ѹ���޴������ɱ��</a></li>
			<li><a href="###">һ����ѧMIT ��33 �ſ�? ���ѧϰ����</a></li>
			<li><a href="###">���븰�����������½�5% 7 ����������</a></li>
			<li><a href="###">����������Ƹ�������������Ů����</a></li>
		</ul>
		<h2>��������2</h2>
		<ul>
			<li><a href="###">���Լ�95 ��Ů����16 ��������У¼ȡ</a></li>
			<li><a href="###">00 ��ĳɳ����գ�ѹ���޴������ɱ��</a></li>
			<li><a href="###">һ����ѧMIT ��33 �ſ�? ���ѧϰ����</a></li>
			<li><a href="###">���븰�����������½�5% 7 ����������</a></li>
			<li><a href="###">����������Ƹ�������������Ů����</a></li>
		</ul>
		<h2>��������3</h2>
		<ul>
			<li><a href="###">���Լ�95 ��Ů����16 ��������У¼ȡ</a></li>
			<li><a href="###">00 ��ĳɳ����գ�ѹ���޴������ɱ��</a></li>
			<li><a href="###">һ����ѧMIT ��33 �ſ�? ���ѧϰ����</a></li>
			<li><a href="###">���븰�����������½�5% 7 ����������</a></li>
			<li><a href="###">����������Ƹ�������������Ů����</a></li>
		</ul>
	</div>
	<div id="index">
		
	</div>
	<div id="banner">
		<img src="images/banner1.jpg" alt="�ֲ�����һ��" />
		<img src="images/banner2.jpg" alt="�ֲ����ڶ���" />
		<img src="images/banner3.jpg" alt="�ֲ���������" />
		<ul>
			<li>��</li>
			<li>��</li>
			<li>��</li>
		</ul>
		<span></span>
		<strong></strong>
	</div>
	<div id="photo">
		<dl>
			<dt><img xsrc="images/p1.jpg" bigsrc="images/p1big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>

		<dl>
			<dt><img xsrc="images/p2.jpg" bigsrc="images/p2big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p3.jpg" bigsrc="images/p3big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p4.jpg" bigsrc="images/p4big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p5.jpg" bigsrc="images/p5big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p6.jpg" bigsrc="images/p6big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>

		<dl>
			<dt><img xsrc="images/p7.jpg" bigsrc="images/p7big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p8.jpg" bigsrc="images/p8big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p9.jpg" bigsrc="images/p9big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p10.jpg" bigsrc="images/p10big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p11.jpg" bigsrc="images/p11big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>
		
		<dl>
			<dt><img xsrc="images/p12.jpg" bigsrc="images/p12big.jpg" src="images/wait_load.jpg" class="wait_load" alt="" /></dt>
			<dd>�ӳټ���ͼƬ</dd>
		</dl>

		
	</div>
	
	<div id="footer">
		<p>ư��Web���ֲ� http://www.ycku.com</p>
		<p>CopyRight All Reset. xxx �ձ����ţ�123456</p>
	</div>
</div>

<div id="share">
	<h2>������</h2>
	<ul>
		<li><a href="###" class="a">һ������</a></li>
		<li><a href="###" class="b">����΢��</a></li>
		<li><a href="###" class="c">������</a></li>
		<li><a href="###" class="d">�ٶ����</a></li>
		<li><a href="###" class="e">��Ѷ����</a></li>
		<li><a href="###" class="f">������</a></li>
		<li><a href="###" class="g">�ٶ�����ҳ</a></li>
		<li><a href="###" class="h">��Ѷ΢��</a></li>
		<li><a href="###" class="i">QQ �ռ�</a></li>
		<li><a href="###" class="j">�ٶ��Ѳ�</a></li>
		<li><a href="###" class="k">��Ѷ΢��</a></li>
		<li><a href="###" class="l">������</a></li>
		<li><a href="###" class="m">�ٶ�����</a></li>
		<li><a href="###" class="n">�Ѻ�΢��</a></li>
		<li><a href="###" class="o">QQ ����</a></li>
		<li><a href="###" class="p">����...</a></li>
	</ul>
	<div class="share_footer"><a href="###">�ٶȷ���</a><span></span></div>
</div>

<div id="photo_big">
	<h2><img src="images/close.png" alt="" class="close" />ͼƬԤ����</h2>
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
	<p>������</p>
</div>

<div id="success">
	<p>�ɹ�</p>
</div>

<div id="screen"></div>

<div id="test" style="clear:both;"></div>

</body>
</html>