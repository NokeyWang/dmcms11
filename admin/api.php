<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>资源站一键采集接口</title>
<script src="skin/js/common.js" type="text/javascript"></script>
<script src="skin/js/main.js" type="text/javascript"></script>
<script src="skin/js/drag.js" type="text/javascript"></script>
<link type="text/css" href="skin/images/alerts.css" rel="stylesheet" media="screen">

<link  href="skin/css/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
tr a {
	font-size: 12px;
	color: #666;
}
tr a:link {
	text-decoration: none;
}
tr a:visited {
	text-decoration: none;
	color: #666;
}
tr a:hover {
	text-decoration: underline;
	color: #FF0000;
}
tr a:active {
	text-decoration: none;
	color: #f60;
}
tr{}
td{ background-color: #fff; height:30px; line-height:30px;font-size: 12px; color: #333;border:1px solid #E7E8EA;text-align:center;}
.bi{width:70%;text-align:left;padding-left:10px;}
.b2{text-align:left;padding-left:10px; color: #333;}
.der{border:1px solid #E7E8EA;}
</style>
</head>
<body oncontextmenu="return false" onselectstart="return false">
<!--当前导航-->
<script type="text/JavaScript">if(parent.$('admincpnav')) parent.$('admincpnav').innerHTML='后台首页&nbsp;&raquo;&nbsp;采集&nbsp;&raquo;&nbsp;第三方资源库 ';</script>
<?php
require_once(dirname(__FILE__)."/config.php");
require_once(duomi_DATA."/mark/inc_photowatermark_config.php");
CheckPurview();
if(RWCache('collect_xml'))
echo "<script>openCollectWin(400,'auto','上次采集未完成，继续采集？','".RWCache('collect_xml')."')</script>";
?>
<font style="margin-left:15px" color="red">提示：以下资源由第三方提供，采集前请先绑定分类</font>
<style type="text/css">
tr a {
	font-size: 12px;
	color: #666;
}
tr a:link {
	text-decoration: none;
}
tr a:visited {
	text-decoration: none;
	color: #666;
}
tr a:hover {
	text-decoration: underline;
	color: #FF0000;
}
tr a:active {
	text-decoration: none;
	color: #f60;
}
tr{}
td{ background-color: #fff; height:30px; line-height:30px;font-size: 12px; color: #333;border:1px solid #E7E8EA;text-align:center;}
.bi{width:68%;text-align:left;padding-left:10px;}
.b2{text-align:left;padding-left:10px; color: #333;}
.der{border:1px solid #E7E8EA;}
</style>

<div style="height:10px; clear:both;">&nbsp;</div>
<table width="99%"  align="center" cellpadding="0" cellspacing="0" border="0" class="tb_style">
  <tr>
    <td >1</td>
    <td class="bi"><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apiyouku.php">【优酷资源】一键采集资源</a></td>
    <td><a href="admin_reslib.php?ac=day&rid=77x6.com&url=http://api.77x6.com/inc/apiyouku.php">采集当天</a></td>
    <td><a href="admin_reslib.php?ac=week&rid=77x6.com&url=http://api.77x6.com/inc/apiyouku.php">采集本周</a></td>
    <td><a href="admin_reslib.php?ac=all&rid=77x6.com&url=http://api.77x6.com/inc/apiyouku.php">采集所有</a></td>
    <td><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apiyouku.php">分类绑定</a></td>
  </tr>
  <tr>
    <td>2</td>
    <td class="bi"><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apiletv.php">【乐视资源】一键采集资源</a></td>
    <td><a href="admin_reslib.php?ac=day&rid=77x6.com&url=http://api.77x6.com/inc/apiletv.php">采集当天</a></td>
    <td><a href="admin_reslib.php?ac=week&rid=77x6.com&url=http://api.77x6.com/inc/apiletv.php">采集本周</a></td>
    <td><a href="admin_reslib.php?ac=all&rid=77x6.com&url=http://api.77x6.com/inc/apiletv.php">采集所有</a></td>
    <td><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apiletv.php">分类绑定</a></td>
  </tr>
  <tr>
    <td>3</td>
    <td class="bi"><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apimgtv.php">【芒果资源】一键采集资源</a></td>
    <td><a href="admin_reslib.php?ac=day&rid=77x6.com&url=http://api.77x6.com/inc/apimgtv.php">采集当天</a></td>
    <td><a href="admin_reslib.php?ac=week&rid=77x6.com&url=http://api.77x6.com/inc/apimgtv.php">采集本周</a></td>
    <td><a href="admin_reslib.php?ac=all&rid=77x6.com&url=http://api.77x6.com/inc/apimgtv.php">采集所有</a></td>
    <td><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apimgtv.php">分类绑定</a></td>
  </tr>
  <tr>
    <td>4</td>
    <td class="bi"><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apim1905.php">【电影网资源】一键采集资源</a></td>
    <td><a href="admin_reslib.php?ac=day&rid=77x6.com&url=http://api.77x6.com/inc/apim1905.php">采集当天</a></td>
    <td><a href="admin_reslib.php?ac=week&rid=77x6.com&url=http://api.77x6.com/inc/apim1905.php">采集本周</a></td>
    <td><a href="admin_reslib.php?ac=all&rid=77x6.com&url=http://api.77x6.com/inc/apim1905.php">采集所有</a></td>
    <td><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apim1905.php">分类绑定</a></td>
  </tr>
  <tr>
    <td>5</td>
    <td class="bi"><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apiqq.php">【腾讯资源】一键采集资源</a></td>
    <td><a href="admin_reslib.php?ac=day&rid=77x6.com&url=http://api.77x6.com/inc/apiqq.php">采集当天</a></td>
    <td><a href="admin_reslib.php?ac=week&rid=77x6.com&url=http://api.77x6.com/inc/apiqq.php">采集本周</a></td>
    <td><a href="admin_reslib.php?ac=all&rid=77x6.com&url=http://api.77x6.com/inc/apiqq.php">采集所有</a></td>
    <td><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apiqq.php">分类绑定</a></td>
  </tr>
  <tr>
    <td>6</td>
    <td class="bi"><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apitudou.php">【土豆资源】一键采集资源</a></td>
    <td><a href="admin_reslib.php?ac=day&rid=77x6.com&url=http://api.77x6.com/inc/apitudou.php">采集当天</a></td>
    <td><a href="admin_reslib.php?ac=week&rid=77x6.com&url=http://api.77x6.com/inc/apitudou.php">采集本周</a></td>
    <td><a href="admin_reslib.php?ac=all&rid=77x6.com&url=http://api.77x6.com/inc/apitudou.php">采集所有</a></td>
    <td><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apitudou.php">分类绑定</a></td>
  </tr>
  <tr>
    <td>7</td>
    <td class="bi"><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apipptv.php">【PPTV资源】一键采集资源</a></td>
    <td><a href="admin_reslib.php?ac=day&rid=77x6.com&url=http://api.77x6.com/inc/apipptv.php">采集当天</a></td>
    <td><a href="admin_reslib.php?ac=week&rid=77x6.com&url=http://api.77x6.com/inc/apipptv.php">采集本周</a></td>
    <td><a href="admin_reslib.php?ac=all&rid=77x6.com&url=http://api.77x6.com/inc/apipptv.php">采集所有</a></td>
    <td><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apipptv.php">分类绑定</a></td>
  </tr>
  <tr>
    <td>8</td>
    <td class="bi"><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apisouhu.php">【搜狐资源】一键采集资源</a></td>
    <td><a href="admin_reslib.php?ac=day&rid=77x6.com&url=http://api.77x6.com/inc/apisouhu.php">采集当天</a></td>
    <td><a href="admin_reslib.php?ac=week&rid=77x6.com&url=http://api.77x6.com/inc/apisouhu.php">采集本周</a></td>
    <td><a href="admin_reslib.php?ac=all&rid=77x6.com&url=http://api.77x6.com/inc/apisouhu.php">采集所有</a></td>
    <td><a href="admin_reslib.php?ac=list&rid=77x6.com&url=http://api.77x6.com/inc/apisouhu.php">分类绑定</a></td>
  </tr>

    <td>9</td>
    <td class="bi"><a href="admin_reslib.php?ac=list&amp;rid=myzyzy.com&amp;url=http://api.myzyzy.com/api/max.asp">【西瓜资源】一键采集资源</a></td>
    <td><a href="admin_reslib.php?ac=day&amp;rid=myzyzy.com&amp;url=http://api.myzyzy.com/api/max.asp">采集当天</a></td>
    <td><a href="admin_reslib.php?ac=week&amp;rid=myzyzy.com&amp;url=http://api.myzyzy.com/api/max.asp">采集本周</a></td>
    <td><a href="admin_reslib.php?ac=all&amp;rid=myzyzy.com&amp;url=http://api.myzyzy.com/api/max.asp">采集所有</a></td>
    <td><a href="admin_reslib.php?ac=list&amp;rid=myzyzy.com&amp;url=http://api.myzyzy.com/api/max.asp">分类绑定</a></td>
  </tr>
  <tr>
    <td>10</td>
    <td class="bi"><a href="admin_reslib.php?ac=list&amp;rid=nibazy.com&amp;url=http://www.nibazy.com/inc/api.php">【泥巴影音】一键采集资源</a></td>
    <td><a href="admin_reslib.php?ac=day&amp;rid=nibazy.com&amp;url=http://www.nibazy.com/inc/api.php">采集当天</a></td>
    <td><a href="admin_reslib.php?ac=week&amp;rid=nibazy.com&amp;url=http://www.nibazy.com/inc/api.php">采集本周</a></td>
    <td><a href="admin_reslib.php?ac=all&amp;rid=nibazy.com&amp;url=http://www.nibazy.com/inc/api.php">采集所有</a></td>
    <td><a href="admin_reslib.php?ac=list&amp;rid=nibazy.com&amp;url=http://www.nibazy.com/inc/api.php">分类绑定</a></td>
  </tr>
  <tr>
    <td>11</td>
    <td class="bi"><a href="admin_reslib.php?ac=list&amp;rid=jijizy.com&amp;url=http://api.jijizy.com/inc/api.asp">【吉吉影音】一键采集资源</a></td>
    <td><a href="admin_reslib.php?ac=day&amp;rid=jijizy.com&amp;url=http://api.jijizy.com/inc/api.asp">采集当天</a></td>
    <td><a href="admin_reslib.php?ac=week&amp;rid=jijizy.com&amp;url=http://api.jijizy.com/inc/api.asp">采集本周</a></td>
    <td><a href="admin_reslib.php?ac=all&amp;rid=jijizy.com&amp;url=http://api.jijizy.com/inc/api.asp">采集所有</a></td>
    <td><a href="admin_reslib.php?ac=list&amp;rid=jijizy.com&amp;url=http://api.jijizy.com/inc/api.asp">分类绑定</a></td>
  </tr>
</table>

<?php
exit();	
?>
</body>
</html>
