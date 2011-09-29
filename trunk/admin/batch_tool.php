<?php
//  ------------------------------------------------------------------------ //
// ¥»¼Ò²Õ¥Ñ tad »s§@
// »s§@¤é´Á¡G2008-03-23
// $Id: batch_tool.php,v 1.1 2008/05/05 03:21:15 tad Exp $
// ------------------------------------------------------------------------- //

/*-----------¤Þ¤JÀÉ®×°Ï--------------*/
include "../../../include/cp_header.php";
include "../function.php";

/*-----------function°Ï--------------*/
//¦C¥X©Ò¦³tad_gallery¸ê®
function list_tad_gallery($show_function=1){
	global $xoopsDB,$xoopsModule,$xoopsModuleConfig;
	$MDIR=$xoopsModule->getVar('dirname');
	
	$order=(empty($_SESSION['gallery_order_mode']))?"filename":$_SESSION['gallery_order_mode'];
	
	$sql = "SELECT sn,csn,title,filename,size,width,height,dir,uid,post_date,counter,good FROM ".$xoopsDB->prefix("tad_gallery")." WHERE csn='{$_GET['csn']}' ORDER BY $order";
	
	//PageBar(¸ê®¼, ¨C­¶Å¥Ü´Xµ§¸ê®, ³Ì¦hÅ¥Ü´X­Ó­¶¼¿ï¶µ);
	$result = $xoopsDB->query($sql) or exit( 'MySQL error in SQL <pre>'.$sql.'</pre> '. mysql_error() . 'FILE <strong>' . __FILE__ .  '</strong> LINE <strong>' . __LINE__ . '</strong>' );
	$total=$xoopsDB->getRowsNum($result);
	
  $thumbnail_number=$xoopsModuleConfig['thumbnail_number']*2;
	$navbar = new PageBar($total, $thumbnail_number, 10);
	$mybar = $navbar->makeBar();
	$bar= sprintf(_BP_TOOLBAR,$mybar['total'],$mybar['current'])."{$mybar['left']}{$mybar['center']}{$mybar['right']}";
	$sql.=$mybar['sql'];

	$result = $xoopsDB->query($sql) or exit( 'MySQL error in SQL <pre>'.$sql.'</pre> '. mysql_error() . 'FILE <strong>' . __FILE__ .  '</strong> LINE <strong>' . __LINE__ . '</strong>' );

	$cate_option=get_tad_gallery_cate_option(0,0,$_GET['csn']);


	$data="
	
	<table border='2'><tr><td valign='top'>
		<select size=30 name='csn' onChange='location.href=\"batch_tool.php?csn=\"+this.value'>
		$cate_option
		</select>
	</td><td valign='top'>
	<form action='batch_tool.php' method='post'>
		<table border='2'>
		<tbody>";
		$i=4;
		while(list($sn,$csn,$title,$filename,$size,$width,$height,$dir,$uid,$post_date,$counter,$good)=$xoopsDB->fetchRow($result)){

			$tr1=($i%4)?"":"<tr>";
			$tr2=($i%4==3)?"</tr>":"";

      $good_pic=($good=='1')?"<img src='".ICMS_URL."/modules/{$MDIR}/images/good.png' alt='good.png, 3.9kB' title='Good' border='0' height='22' width='22' style='float:left'>":"";

			$data.="$tr1
			<td style='background-image:url(".get_pic_url($dir,$sn,$filename,"s").");background-position: center center;	background-repeat: no-repeat;	padding:0px;' align='center'>
			<div style='background-image:url(".ICMS_URL."/modules/{$MDIR}/images/film.gif); width: 150px;	height: 120px;vertical-align:bottom;position:relative;'  onClick='document.getElementById(\"p{$sn}\").checked = true'><div style='float:left'><input type='checkbox' id='p{$sn}' name='pic[]' value='{$sn}'></div>$good_pic<div class='pic_title'>$filename</div></div></td>
			
		
			$tr2";
			$i++;
		}
		
		$option=get_tad_gallery_cate_option(0,0,$_GET['csn']);
		
		$tag_select=tag_select();
		
		$data.="
		<tr>
		<td colspan=4 class='bar'>
    <input type='hidden' name='csn' value='{$_GET['csn']}'>
		"._MA_TADGAL_THE_ACT_IS."<br>
		<input type='radio' name='op' value='del'>"._BP_DEL."<br>
		<input type='radio' name='op' value='add_good'>"._MA_TADGAL_ADD_GOOD."<br>
		<input type='radio' name='op' value='del_good'>"._MA_TADGAL_DEL_GOOD."<br>
		<input type='radio' name='op' value='move'>"._MA_TADGAL_MOVE_TO."<select name='new_csn'>$option</select><br>
	  <input type='radio' name='op' value='add_tag'>"._MA_TADGAL_TAG."<input type='text' name='new_tag' size='20'>"._MA_TADGAL_TAG_TXT."</td></tr>
		<tr>
		<td class='col' colspan=4>$tag_select</td></tr>
	  <tr><td class='bar' colspan='4' align='right'>
	  </td></tr>
		
		<tr>
		<td colspan=4 class='bar'>{$bar}</td></tr>
		</tbody>
		</table>
		<input type='submit' value='"._MA_TADGAL_GO."'></form>
	</td></tr></table>";
	$data=div_3d(_MA_TADGAL_LIST_ALL,$data,"corners","display:inline;");
	return $data;
}



//§å¦¸·h²¾
function batch_move($new_csn=""){
	global $xoopsDB;
	$pics=implode(",",$_POST['pic']);
	$sql = "UPDATE ".$xoopsDB->prefix("tad_gallery")." SET `csn` = '{$new_csn}' WHERE sn in($pics)";
	$xoopsDB->queryF($sql) or exit( 'MySQL error in SQL <pre>'.$sql.'</pre> '. mysql_error() . 'FILE <strong>' . __FILE__ .  '</strong> LINE <strong>' . __LINE__ . '</strong>' );
	return $sn;
}

//§å¦¸·s¼WºëµØ
function batch_add_good(){
	global $xoopsDB;
	$pics=implode(",",$_POST['pic']);
	$sql = "UPDATE ".$xoopsDB->prefix("tad_gallery")." SET  `good` = '1' WHERE sn in($pics)";
	$xoopsDB->queryF($sql) or exit( 'MySQL error in SQL <pre>'.$sql.'</pre> '. mysql_error() . 'FILE <strong>' . __FILE__ .  '</strong> LINE <strong>' . __LINE__ . '</strong>' );
	return $sn;
}


//§å¦¸²¾°£ºëµØ
function batch_add_tag(){
	global $xoopsDB;
	$pics=implode(",",$_POST['pic']);

	$all=implode(",",$_POST['tag']);

	if(!empty($_POST['new_tag'])){
   $new_tags=explode(",",$_POST['new_tag']);
	}

	foreach($new_tags AS $tag){
	  if(!empty($tag)){
		  $tag=trim($tag);
	    $all.=",{$tag}";
    }
	}

	$sql = "UPDATE ".$xoopsDB->prefix("tad_gallery")." SET  `tag` = '{$all}' WHERE sn in($pics)";
	$xoopsDB->queryF($sql) or exit( 'MySQL error in SQL <pre>'.$sql.'</pre> '. mysql_error() . 'FILE <strong>' . __FILE__ .  '</strong> LINE <strong>' . __LINE__ . '</strong>' );
	return $sn;
}

//§å¦¸¥[¤J¼ÐÅÒ
function batch_del_good(){
	global $xoopsDB;
	$pics=implode(",",$_POST['pic']);
	$sql = "UPDATE ".$xoopsDB->prefix("tad_gallery")." SET  `good` = '0' WHERE sn in($pics)";
	$xoopsDB->queryF($sql) or exit( 'MySQL error in SQL <pre>'.$sql.'</pre> '. mysql_error() . 'FILE <strong>' . __FILE__ .  '</strong> LINE <strong>' . __LINE__ . '</strong>' );
	return $sn;
}



//§å¦¸§R°£
function batch_del(){
	global $xoopsDB;
	foreach($_POST['pic'] AS $sn){
    delete_tad_gallery($sn);
	}
}


/*-----------°õ¦°Ê§@§PÂ_°Ï----------*/
$op = (!isset($_REQUEST['op']))? "main":$_REQUEST['op'];

switch($op){
	case "del":
	batch_del();
	mk_rss_xml();
	header("location: {$_SERVER['PHP_SELF']}?csn={$_POST['csn']}");
	break;

	case "move":
	batch_move($_POST['new_csn']);
	header("location: {$_SERVER['PHP_SELF']}?csn={$_POST['csn']}");
	break;
	
	case "add_good";
	batch_add_good();
	header("location: {$_SERVER['PHP_SELF']}?csn={$_POST['csn']}");
	break;


	case "del_good";
	batch_del_good();
	header("location: {$_SERVER['PHP_SELF']}?csn={$_POST['csn']}");
	break;

	case "add_tag";
	batch_add_tag();
	header("location: {$_SERVER['PHP_SELF']}?csn={$_POST['csn']}");
	break;

	//¹w³]°Ê§@
	default:
	$main=list_tad_gallery(1);
	mk_dir(_TADGAL_UP_FILE_DIR);
	mk_dir(_TADGAL_UP_FILE_DIR."small/");
	mk_dir(_TADGAL_UP_FILE_DIR."medium/");
	mk_dir(_TADGAL_UP_IMPORT_DIR);
	break;

}

/*-----------¨q¥Xµ²ªG°Ï--------------*/
xoops_cp_header();
echo "<link rel='stylesheet' type='text/css' media='screen' href='../module.css' />";
echo menu_interface();
echo $main;
xoops_cp_footer();

?>