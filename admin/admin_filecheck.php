<?php
/**
 * 
 *
 * @version        2015年7月12日Z by 海东青
 * @package        DuomiCms.Administrator
 * @copyright      Copyright (c) 2015, SamFea, Inc.
 * @link           http://www.duomicms.net
 */
require_once(dirname(__FILE__)."/config.php");
AjaxHead();
CheckPurview();
if(empty($action))
{
	$action = '';
}

if(empty($message)) $message = '尚未进行检测……';

$safefile = "data/common.inc.php
admin/admin_collect.php
admin/admin_link.php
admin/admin_topic.php
admin/admin_type.php
admin/config.php
duomiphp/common.php
duomiphp/link.func.php
duomiphp/common.func.php
duomiphp/sql.class.php
duomiphp/editor/fckeditor_php4.php
duomiphp/editor/fckeditor_php5.php
duomiphp/editor/index.php
duomiphp/core.class.php
install/common.inc.php
install/index.php";

$adminDir = m_ereg_replace("(.*)[/\\\]","",dirname(__FILE__));
$safefile = trim(str_replace('admin/',$adminDir.'/',$safefile));
$safefiles = split("[\r\n]{1,}",$safefile);

function TestOneFile($f)
{
	global $message;
	$str = '';	

	if(NotCheckFile($f)) return -1;
	$fp = fopen($f,'r');
	while(!feof($fp)) { $str .= fgets($fp,1024); }
	fclose($fp);
	if(m_eregi("(eval|cmd|_GET|_POST)[ \r\n\t]{0,}([\[\(])",$str))
	{
		$trfile = m_ereg_replace('^'.duomi_ROOT,'',$f);
		$message .= "<div style='clear:both;border-bottom:1px dotted #B8E6A2;line-height:24px'>
		<div style='width:350px;float:left'>可疑文件：{$trfile}</div>
		<div style='float:left'>[请手工连接FTP查看删除]
		</div></div>\r\n";
		return 1;
	}
	return 0;
}

function NotCheckFile($f)
{
	global $safefiles, $safefile;
	if($safefile != '')
	{
	   foreach($safefiles as $v)
	   {
	      //if(empty($v)) continue;
	      if( m_eregi($v,$f) ) return true;
	   }
	}
	return false;
}

function TestSafe($tdir)
{
	 $dh = dir($tdir);
	 while($fname=$dh->read())
	 {
	 	  $fnamef = $tdir.'/'.$fname;
	 	  if(is_dir($fnamef) && $fname != '.' && $fname != '..')
	 	  {
	 	  	TestSafe($fnamef);
	 	  }
	 	  if(m_eregi("\.(php|inc)",$fnamef))
	 	  {
	 	  	TestOneFile($fnamef);
	 	  }
	 }
}

if($action=="test")
{
	 $message = '';
	 AjaxHead();
	 TestSafe(duomi_ROOT);
	 if($message=='') $message = "<font color='green' style='font-size:14px'>没发现可疑文件！</font>";
	 echo $message;
	 exit();
}
else
{
	include(duomi_ADMIN.'/html/admin_filecheck.htm');
	exit();
}
?>