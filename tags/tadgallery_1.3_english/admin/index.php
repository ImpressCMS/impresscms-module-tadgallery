<?php
//  ------------------------------------------------------------------------ //
// ¥»¼Ò²Õ¥Ñ tad »s§@
// »s§@¤é´Á¡G2008-03-23
// $Id: index.php,v 1.3 2008/05/05 03:21:31 tad Exp $
// ------------------------------------------------------------------------- //

/*-----------¤Þ¤JÀÉ®×°Ï--------------*/
include "../../../include/cp_header.php";
include "../function.php";

/*-----------function°Ï--------------*/
//¦C¥X©Ò¦³tad_gallery¸ê®
function list_tad_gallery($show_function=1){
	global $xoopsDB,$xoopsModule,$xoopsModuleConfig;
	$MDIR=$xoopsModule->getVar('dirname');
	
	$order=(empty($_SESSION['gallery_order_mode']))?"post_date":$_SESSION['gallery_order_mode'];

	$where_uid=(empty($_GET['uid']))?"":"and uid='{$_GET['uid']}'";
	
	$sql = "SELECT sn,csn,title,filename,size,width,height,dir,uid,post_date,counter,good FROM ".$xoopsDB->prefix("tad_gallery")." WHERE csn='{$_GET['csn']}' {$where_uid} ORDER BY $order ";
	
	//PageBar(¸ê®¼, ¨C­¶Å¥Ü´Xµ§¸ê®, ³Ì¦hÅ¥Ü´X­Ó­¶¼¿ï¶µ);
	$result = $xoopsDB->query($sql) or exit( 'MySQL error in SQL <pre>'.$sql.'</pre> '. mysql_error() . 'FILE <strong>' . __FILE__ .  '</strong> LINE <strong>' . __LINE__ . '</strong>' );
	$total=$xoopsDB->getRowsNum($result);

	$navbar = new PageBar($total, $xoopsModuleConfig['thumbnail_number'], 10);
	$mybar = $navbar->makeBar();
	$bar= sprintf(_BP_TOOLBAR,$mybar['total'],$mybar['current'])."{$mybar['left']}{$mybar['center']}{$mybar['right']}";
	$sql.=$mybar['sql'];

	$result = $xoopsDB->query($sql) or exit( 'MySQL error in SQL <pre>'.$sql.'</pre> '. mysql_error() . 'FILE <strong>' . __FILE__ .  '</strong> LINE <strong>' . __LINE__ . '</strong>' );

	$cate_option=get_tad_gallery_cate_option(0,0,$_GET['csn']);


//		//$('#div_form_'+div_sn).html(\"<form action=\'index.php\' method=\'post\'><table class=\'form_tbl\'><tr><td class=\'col\'><input type=\'text\' name=\'title\' value=\'{$title}\' style=\'width:130px;\'></td></tr><tr><td class=\'col\'><textarea style=\'width: 130px; height: 60px;\' name=\'description\'>{$description}</textarea></td></tr><tr><td colspan=2><input type=\'hidden\' name=\'sn\' value=\'\"+div_sn+\"\'><input type=\'hidden\' name=\'op\' value=\'update_tad_gallery\'><input type=\'submit\' value=\'Àx¦s\'></td></tr></table></form>\");

	$data="
	<script type='text/javascript' src='".XOOPS_URL."/modules/{$MDIR}/class/jquery.js'></script>
	<script type='text/javascript'>
	function show_form(div_sn){
		$('#div_form_'+div_sn).load('form.php?csn={$_GET['csn']}&sn='+div_sn);
	}

	function delete_tad_gallery_func(sn){
		var sure = window.confirm('"._BP_DEL_CHK."');
		if (!sure)	return;
		location.href=\"{$_SERVER['PHP_SELF']}?op=delete_tad_gallery&csn={$_GET['csn']}&&sn=\" + sn;
	}
	</script>
	<table><tr><td valign='top'>
		<select size=30 name='csn' onChange='location.href=\"index.php?csn=\"+this.value'>
		$cate_option
		</select>
	</td><td valign='top'>
		<table>
		<tbody>";
		$i=3;
		while(list($sn,$csn,$title,$filename,$size,$width,$height,$dir,$uid,$post_date,$counter,$good)=$xoopsDB->fetchRow($result)){
		
		  $good_btn=($good=='1')?"<a href='{$_SERVER['PHP_SELF']}?op=good_del&sn={$sn}&csn={$_GET['csn']}'><img src='".XOOPS_URL."/modules/{$MDIR}/images/good_del.png' alt='good_del.png, 1.1kB' title='Good del' border='0' height='22' width='22' hspace=2></a>":"<a href='{$_SERVER['PHP_SELF']}?op=good&sn={$sn}&csn={$_GET['csn']}'><img src='".XOOPS_URL."/modules/{$MDIR}/images/good_add.png' alt='good_add.png, 4.0kB' title='Good add' border='0' height='22' width='22' hspace=2></a>";
		
			$fun=($show_function)?"
			<img src='".XOOPS_URL."/modules/{$MDIR}/images/edit.gif' alt='"._BP_EDIT."' onClick=\"show_form('{$sn}')\">
			<a href=\"javascript:delete_tad_gallery_func($sn);\"><img src='".XOOPS_URL."/modules/{$MDIR}/images/del.gif' alt='"._BP_DEL."'></a>$good_btn":"";

			$tr1=($i%2)?"<tr>":"";
			$tr2=($i%2)?"":"</tr>";

      $title_div=(!empty($title))?"<div class='pic_title'>{$title}</div>":"";
      $good_pic=($good=='1')?"<img src='".XOOPS_URL."/modules/{$MDIR}/images/good.png' alt='good.png, 3.9kB' title='Good' border='0' height='22' width='22' style='float:left'>":"";
      

//style='background-image:url(".get_pic_url($dir,$sn,$filename,"s").");background-position: center center;	background-repeat: no-repeat;	padding:0px;' align='center'
//			<a href='../view.php?sn=$sn'>

			$data.="$tr1
			<td>
			<div style='background-image:url(".XOOPS_URL."/modules/{$MDIR}/images/film.gif); width: 150px;	height: 120px;vertical-align:bottom;position:relative;'>{$good_pic}$title_div</div></a></td>
			
			<td style='width:150px;padding:2px 10px 2px 10px;vertical-align:top;line-height:150%;'>
			<div id='div_form_{$sn}'>
				<div class='pic_filename'>{$filename}</div>
				<div><font class='pic_wh'>{$width} x {$height}</font> (<font class='pic_size'>".sizef($size)."</font>)</div>
				"._MA_TADGAL_UID." : ".XoopsUser::getUnameFromId($uid,0)."<br />
				"._MA_TADGAL_COUNTER." : {$counter}<br />
				<div class='pic_date'>{$post_date}</div>
				$fun
			</div>
			</td>
			$tr2";
			$i++;
		}
		$data.="
		<tr>
		<td colspan=4 class='bar'>{$bar}</td></tr>
		</tbody>
		</table>
	</td></tr></table>";
	$data=div_3d(_MA_TADGAL_LIST_ALL,$data,"corners","display:inline;");
	return $data;
}



//§ó·stad_gallery¬Y¤@µ§¸ê®
function update_tad_gallery($sn=""){
	global $xoopsDB;
	$sql = "UPDATE ".$xoopsDB->prefix("tad_gallery")." SET  `title` = '{$_POST['title']}', `description` = '{$_POST['description']}' WHERE sn='$sn'";
	$xoopsDB->queryF($sql) or exit( 'MySQL error in SQL <pre>'.$sql.'</pre> '. mysql_error() . 'FILE <strong>' . __FILE__ .  '</strong> LINE <strong>' . __LINE__ . '</strong>' );
	return $sn;
}



/*-----------°õ¦°Ê§@§PÂ_°Ï----------*/
$op = (!isset($_REQUEST['op']))? "main":$_REQUEST['op'];

switch($op){
	case "good":
	update_tad_gallery_good($_GET['sn'],'1');
	header("location: {$_SERVER['PHP_SELF']}?csn={$_GET['csn']}");
	break;

	case "good_del":
	update_tad_gallery_good($_GET['sn'],'0');
	header("location: {$_SERVER['PHP_SELF']}?csn={$_GET['csn']}");
	break;
	
	//¿é¤Jªí®
	case "tad_gallery_form";
	$main=tad_gallery_form($_GET['sn']);
	break;

	//§R°£¸ê®
	case "delete_tad_gallery";
	delete_tad_gallery($_GET['sn']);
	mk_rss_xml();
	header("location: {$_SERVER['PHP_SELF']}?csn={$_GET['csn']}");
	break;

	//§ó·s¸ê®
	case "update_tad_gallery";
	update_tad_gallery($_POST['sn']);
	header("location: {$_SERVER['PHP_SELF']}?csn={$_POST['csn']}");
	break;


	//²£¥ÍMedia RSS
	case "mk_rss_xml";
	mk_rss_xml();
	header("location: {$_SERVER['PHP_SELF']}");
	break;
	

	//¹w³]°Ê§@
	default:
	$main=list_tad_gallery(1);
	mk_dir(_TADGAL_UP_FILE_DIR);
	mk_dir(_TADGAL_UP_FILE_DIR."small/");
	mk_dir(_TADGAL_UP_FILE_DIR."medium/");
	mk_dir(_TADGAL_UP_IMPORT_DIR);
	mk_dir(_TADGAL_UP_MP3_DIR);
	break;

}

/*-----------¨q¥Xµ²ªG°Ï--------------*/
xoops_cp_header();
echo "<link rel='stylesheet' type='text/css' media='screen' href='../module.css' />";
echo menu_interface();
echo $main;
xoops_cp_footer();

?>