<?php
session_start();
require_once("../duomiphp/common.php");
require_once(duomi_INC.'/core.class.php');
if($cfg_user==0)
{
	ShowMsg('系统已关闭会员功能!','-1');
	exit();
}

$action = isset($action) ? trim($action) : '';
$pg = isset($pg) ? intval($pg) : 1;
$uid=$_SESSION['duomi_user_id'];
if(empty($_SESSION['duomi_user_id']))
{
	showMsg("请先登录","login.php");
	exit();
}
if($dm=='fav')
{
	$dsql->executeNoneQuery("delete from duomi_favorite where id=".$id);
	showMsg("成功取消该影片收藏","-1");
	exit();
}
if($dm=='myshow')
{
   $page = $_GET["page"]; 
	$pcount = 10;
	$row=$dsql->getOne("select count(id) as dd from duomi_favorite where uid=".$uid);
	$rcount=$row['dd'];
	if($rcount==0)
	{
		echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" ><tr><td align=\"center\"><font size=\"2\" color=\"red\">没有收藏的影片</font></td></tr></table>";
		exit();
	}	
	$page_count = ceil($rcount/$pcount); 
	if(empty($_GET['page'])||$_GET['page']<0){ 
	$page=1; 
	}else { 
	$page=$_GET['page']; 
	}  
	$select_limit = $pcount; 
	$select_from = ($page - 1) * $pcount.','; 
	$pre_page = ($page == 1)? 1 : $page - 1; 
	$next_page= ($page == $page_count)? $page_count : $page + 1 ; 	
	$dsql->setQuery("select * from duomi_favorite where uid=".$uid." limit ".($page-1)*$pcount.",$pcount");
	$dsql->Execute('favlist');

?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<title>我的收藏</title>
<link href="css/style.css" rel="stylesheet">
<style>
table{border: 1px solid #E3E3E3;border-bottom:0;margin-top:0px}
table tr{height:35px;line-height:35px;}
table tr td{font-size:14px;border-bottom:1px solid #E3E3E3;}
table tr td a{color:#555;}
.foot{padding-top:20px;font-size:14px;text-align:center;margin-top:20px;border-top: 1px solid #ddd;color:#555}
.foot a{color:#000}
</style>
</head>
<body>
        <form id="favform" name="favform" action="?dm=1" method="post">
     <table width="100%" cellspacing="0" cellspaddng="0">
	<tr align="center" style="background:#f5f5f5">
	<td width="15%">影片名称</td>
	<td width="15%">收藏时间</td>
	<td width="6%">浏览</td>
	<td width="7%">连载</td>
	<td width="10%">备注</td>
    <td width="10%">操作</td>
	</tr>

          <?php 
while($row=$dsql->getArray('favlist'))
{
	$rs=$dsql->getOne("select v_hit,v_state,v_pic,v_name,v_enname,v_note,v_addtime,tid from duomi_data where v_id=".$row['vid']);
	if(!$rs) {echo "<tr><td align=\"left\"><input type=\"checkbox\"></td><td colspan=\"5\">影片不存在或已经删除</td></tr>";continue;}
	$hit=$rs['v_hit'];
	$pic=$rs['v_pic'];
	$name=$rs['v_name'];
	$state=$rs['v_state'];
	$note=$rs['v_note'];
	$state=$rs['v_state'];
?>

	<tr align="center">
	<td width="15%"><?php echo $name?></td>
	<td width="15%"><?php echo date('Y-m-d',$row['kptime'])?></td>
	<td width="6%"><?php echo $hit?></td>
	<td width="7%"><?php echo $state?></td>
	<td width="10%"><?php echo $note?></td>
    <td width="10%"><a href="<?php echo getContentLink($rs['tid'],$row['vid'],"",date('Y-n',$rs['v_addtime']),$rs['v_enname'])?>" target="_blank">播放</a> | <a onClick="return(confirm('确定取消收藏该影片？'))" href="?dm=fav&id=<?php echo $row['id']?>">取消</a></td>
	</tr>
	

          <?php }?>
          </table>
        </form>
      <div class="foot">
        <?php
		echo <<<EOT
      第 $page 页 / 共 $page_count 页
                <a href="?dm=myshow&page=1" class="btn">首页</a> 
				<a href="?dm=myshow&page={$pre_page}">上一页</a> 
                <a href="?dm=myshow&page={$next_page}">下一页</a>
				<a href="?dm=myshow&page={$page_count}">尾页</a>
EOT;
		  ?>
      </div>
</body>
</html>
<?php
}
else
{
$tempfile = duomi_ROOT."/member/html/myshow.html";
	$content=loadFile($tempfile);
	$t=$content;
	$t=$mainClassObj->parseTopAndFoot($t);
	$t=$mainClassObj->parseHistory($t);
	$t=$mainClassObj->parseSelf($t);
	$t=$mainClassObj->parseGlobal($t);
	$t=$mainClassObj->parduomireaList($t);
	$t=$mainClassObj->parseMenuList($t,"");
	$t=$mainClassObj->parseVideoList($t,-444);
	$t=$mainClassObj->parseNewsList($t,-444);
	$t=$mainClassObj->parseTopicList($t);
	$t=replaceCurrentTypeId($t,-444);
	$t=$mainClassObj->parseIf($t);
	$t=str_replace("{duomicms:member}",front_member(),$t);
	echo $t;
	exit();
}