<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>三峡大学国际交流与教育学院</title>
<link type="text/css" rel="stylesheet" href="<?php echo (CSS_URL); ?>index.css" />
<script src="<?php echo (JS_URL); ?>index.js"></script>
<script src="<?php echo (JS_URL); ?>jqury-1.8.0.js"></script>   
</head>
<body onload="onload()">
<center>
<div class="bodyground">
<div class="top">
<a href="#"><div class="set">Set&nbsp;As&nbsp;Homepage</div></a>
<a href="#"><div class="add">Add&nbsp;To&nbsp;Favorite</div></a>
<a href="#"><div class="sign">Sign&nbsp;In</div></a>
<a href="#"><div class="site">Site&nbsp;Map</div></a>
</div><!--顶部-->
<div class="logobox">
<div class="logo"></div>
<div class="logo_font">China&nbsp;Three&nbsp;Gorges&nbsp;University</div>
<div class="form" onclick="show()">
<form id="form" method="" action="">
<input id="input" class="input" type="text" placeholder="Search" name="" value="" style="color:#003366;"/>
<a href="#"><input class="search_icon" type="submit" name="" value="" /></a>
</form>
</div>
<div id="search_box" class="search_box"></div><!--搜索热词-->
<div class="word"></div>
<div class="word"></div>
</div>
<div class="main"><!--主体-->
<div class="nev" onmousemove="unshow()">
<a href="#"><div class="menu" id="1" onmousemove="move()" onmouseout="out()">About&nbsp;Us</div></a>
<a href="#"><div class="menu" id="2" onmousemove="move()" onmouseout="out()">Study&nbsp;Here</div></a>
<a href="#"><div class="menu" id="3" onmousemove="move()" onmouseout="out()">Scholarships</div></a>
<a href="#"><div class="menu" id="4" onmousemove="move()" onmouseout="out()">Teaching&nbsp;&&nbsp;Researchs</div></a>
<a href="#"><div class="menu" id="5" onmousemove="move()" onmouseout="out()">Campus&nbsp;life</div></a>
<a href="#"><div class="menu" id="6" onmousemove="move()" onmouseout="out()">Students&nbsp;&&nbsp;Staff</div></a>
<a href="#"><div class="menu" id="7" onmousemove="move()" onmouseout="out()">Downloads</div></a>
</div>
<div class="img"><!--滚动图像位置-->
<div id="button_left" class="button_left" onclick="button_click()"></div>
<div class="button_center">
<div id="button1" class="button" onmousemove="button()" onmouseout="continue_img_roll()"  style="background:#FF9900;"></div>
<div id="button2" class="button" onmousemove="button()" onmouseout="continue_img_roll()" ></div>
<div id="button3" class="button" onmousemove="button()" onmouseout="continue_img_roll()" ></div>
<div id="button4" class="button" onmousemove="button()" onmouseout="continue_img_roll()" ></div>
<div id="button5" class="button" onmousemove="button()" onmouseout="continue_img_roll()" ></div>
<div id="button6" class="button" onmousemove="button()" onmouseout="continue_img_roll()" ></div>
</div>
<div id="button_right" class="button_right"  onclick="button_click()"></div>
<a href="#"><img id="img1" src="/fore/Public/Image/index/img1.gif" /></a>
<a href="#"><img id="img2" src="/fore/Public/Image/index/img2.gif" /></a>

<a href="#"><img id="img3" src="/fore/Public/Image/index/img3.gif" /></a>
<a href="#"><img id="img4" src="/fore/Public/Image/index/img4.gif" /></a>
<a href="#"><img id="img5"src="/fore/Public/Image/index/img5.gif" /></a>
<a href="#"><img id="img6" src="/fore/Public/Image/index/img6.gif" /></a>
</div>
<a href=<?php echo U('Home/Post/ShowAll');?>><div class="event_nev"><!--事件导航栏-->
<div style="float:left; font-size:18px;"><strong>News&Event</strong></div>
<div style="float:right;">more..</div>
</div></a>
<div class="event_title"><!--事件标题-->
<div class="title"><a href="#" class="link1">TestTitle</a></div><div class="date">2015-12-12</div>
<div class="title"><a href="#" class="link1">TestTitle</a></div><div class="date">2015-12-10</div>
<div class="title"><a href="#" class="link1">TestTitle</a></div><div class="date">2015-12-10</div>
<div class="title"><a href="#" class="link1">TestTitle</a></div><div class="date">2015-12-9</div>
<div class="title"><a href="#" class="link1">TestTitle</a></div><div class="date">2015-12-8</div>
<div class="title"><a href="#" class="link1">TestTitle</a></div><div class="date">2015-12-7</div>
<div class="title"><a href="#" class="link1">TestTitle</a></div><div class="date">2015-12-6</div>
<div class="title"><a href="#" class="link1">TestTitle</a></div><div class="date">2015-12-5</div>
</div>
<div class="spe"></div>
<div class="why">Why&nbsp;CTGU</div>
<div class="img2">
<a href="#"><img src="/fore/Public/Image/index/img7.gif" /></a>
</div>
<div class="trigon"></div>
<div class="ctgu">
<a href="#" class="link1"><p style="margin-left:10px;">- Located in Yichang, the world hydro power center</p></a>
<a href="#" class="link1"><p style="margin-left:10px;">- 220 hectares garden campus, more than 1,000 international students from over 20 countries</p></a>
<a href="#" class="link1"><p style="margin-left:10px;">- Scholarship coves from undergraduate education to postgraduate education</p></a>
<a href="#" class="link1"><p style="margin-left:10px;">- United Nations Academic Impact Member</p></a>
</div>
<div class="img3">
<a href="#"><img src="/fore/Public/Image/index/img8.gif" /></a>
</div>
<div class="study">Study&nbsp;Here</div>
<div class="trigon"></div>
<div class="here">
<p style="margin-left:10px;"><a href="#" class="link1">Advanced&nbsp;Program</a></p>
<p style="margin-left:10px;"><a href="#" class="link1">Undergraduate</a></p>
<p style="margin-left:10px;"><a href="#" class="link1">Taught&nbsp;Master's</a></p>
<p style="margin-left:10px;"><a href="#" class="link1">Postgraduate&nbsp;Research</a></p>
</div>
<div class="spe"></div>
</div>
<div class="footer">
<div class="contact">
<p><h1><font color="#70AD47">Contact&nbsp;us</font></h1></p>
<p>+867176394999/2033</p>
<p><a href="#" class="link2">admission@ctgu.edu.cn</a></p>
<p><a href="#" class="link2">dir@ctgu.edu.cn</a></p>
</div>
<div class="find">
<p><h1><font color="#70AD47">Find&nbsp;us</font></h1></p>
<p>Avenue&nbsp;8</p>
<p>Yichang, Hubei</p>
<p>443002, China</p>
</div>
<div class="connect">
<p><h1><font color="#70AD47">Connect&nbsp;with&nbsp;us</font></h1></p>
<p><a href="https://www.facebook.com/"><img src="/fore/Public/Image/index/facebook.png" /></a>
<a href="https://twitter.com/"><img src="/fore/Public/Image/index/twitter.png" style="margin-left:5px;"/></a>
<a href="http://www.youtube.com/"><img src="/fore/Public/Image/index/youtube.png" style="margin-left:5px;"/></a>
<a href="https://plus.google.com/"><img src="/fore/Public/Image/index/googleplus.png" style="margin-left:5px;"/></a>
<a href="https://www.pinterest.com/"><img src="/fore/Public/Image/index/pinterest-red.png" style="margin-left:5px;"/></a>
</p>
<p>Social&nbsp;media&nbsp;directory</p>
</div>
<div class="spe2"></div>
<br/>
<p>Copyright©2013&nbsp;&nbsp;China&nbsp;Three&nbsp;Gorges&nbsp;University</p>
<p>鄂ICP备05003329号</p>
</div><!--页脚-->
</center>
</body>
</html>