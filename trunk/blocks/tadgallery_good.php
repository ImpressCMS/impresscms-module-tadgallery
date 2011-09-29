<?php
//  ------------------------------------------------------------------------ //
// ¥»¼Ò²Õ¥Ñ tad »s§@
// »s§@¤é´Á¡G2008-03-23
// $Id: tadgallery_good.php,v 1.4 2008/05/14 01:23:14 tad Exp $
// ------------------------------------------------------------------------- //


//°Ï¶ô¥D¨ç¦¡ (¶]°¨¿O¹Ï¤ù)
function tadgallery_good_show($options){
	global $xoopsDB;
	if(!empty($options[1]))$by[]=" a.csn='{$options[1]}'";
	if($options[7]=='1')$by[]=" a.good='1'";

	$by_txt=(!empty($by))?implode(" and ",$by):"";
	$where_txt=(!empty($by_txt))?"and $by_txt":"";

	if($options[2]=='order by rand()'){
    $options[3]="";
	}

	$sql = "SELECT a.sn,a.title,a.description,a.filename,a.dir FROM ".$xoopsDB->prefix("tad_gallery")." AS a left join  ".$xoopsDB->prefix("tad_gallery_cate")." AS b on a.csn=b.csn WHERE b.passwd='' and b.enable_group='' {$where_txt} {$options[2]} {$options[3]} limit 0,{$options[0]}";
//die($sql);
	$result = $xoopsDB->query($sql);
	
	if(empty($options[4]))$options[4]="s";

		
	$pics="";
	while(list($sn,$title,$description,$filename,$dir)=$xoopsDB->fetchRow($result)){
	  $title=(empty($title))?$filename:$title;
    $description=(empty($description))?"":"<div style='padding:4px;background-color:#F0FFA0'>$description</div>";
		$pic_url=get_pic_url($dir,$sn,$filename,$options[4]);
		$pics.="
		<div class='blur'>
		  <div class='shadow'>
		    <div class='shadow_content'>
					<a href='".ICMS_URL."/modules/tadgallery/view.php?sn={$sn}'><img src='$pic_url' alt='{$title}' title='{$title}' /></a>
					<div style='padding:4px;margin-top:4px;'>$title</div>
					$description
		  	</div>
			</div>
		</div>";
	}
	$pics.="";

	$block="
	<style type='text/css'>
	/* Scroller Box */
	#scroller_container {
	 width: {$options[5]}px;
	 height: {$options[6]}px;
	 overflow: hidden;
	}
	/* Scoller Box */

	/* CSS Hack Safari */
	#dummy {;# }

	#scroller_container {
	 overflow: auto;
	}
  /* Scroller Box */
  .blur{
      background-color: #ccc; /*shadow color*/
      color: inherit;
      margin-left: 4px;
      margin-top: 4px;
      margin-right: 8px;
      width:{$options[5]}px;
  }

  .shadow,
  .shadow_content{
      position: relative;
      bottom: 2px;
      right: 2px;
  }

  .shadow{
      background-color: #666; /*shadow color*/
      color: inherit;
  }

  .shadow_content{
      background-color: #fff; /*background color of content*/
      color: #000; /*text color of content*/
      border: 1px solid #000; /*border color*/
      padding: 8px;
      text-align:center;
  }
	</style>

	<script type='text/javascript' src='".ICMS_URL."/modules/tadgallery/class/jscroller.js'></script>
	<div id='scroller_container'>
    <div class='{$options[8]} jscroller2_speed-{$options[9]} jscroller2_mousemove'>
     $pics
    </div>
   </div>";
	return $block;
}



//°Ï¶ô½s¿è¨ç¦¡
function tadgallery_good_edit($options){
	$cate_select=get_tad_gallery_block_cate_option(0,0,$options[1]);

	$sortby_0=($options[2]=="order by post_date")?"selected":"";
	$sortby_1=($options[2]=="order by counter")?"selected":"";
	$sortby_2=($options[2]=="order by rand()")?"selected":"";

	$sort_normal=($options[3]=="")?"selected":"";
	$sort_desc=($options[3]=="desc")?"selected":"";

	$thumb_s=($options[4]=="s")?"checked":"";
	$thumb_m=($options[4]=="m")?"checked":"";

	$only_good_0=($options[7]!="1")?"selected":"";
	$only_good_1=($options[7]=="1")?"selected":"";
	
	$jscroller2_up=($options[8]=="jscroller2_up")?"checked":"";
	$jscroller2_down=($options[8]=="jscroller2_down")?"checked":"";

	$form="
	"._MB_TADGAL_BLOCK_SHOWNUM."
	<INPUT type='text' name='options[0]' value='{$options[0]}' size=2><br>
	"._MB_TADGAL_BLOCK_SHOWCATE."
	<select name='options[1]'>
		$cate_select
	</select><br>
	"._MB_TADGAL_BLOCK_SORTBY."
	<select name='options[2]'>
	<option value='order by post_date' $sortby_0>"._MB_TADGAL_BLOCK_SORTBY_MODE1."</option>
	<option value='order by counter' $sortby_1>"._MB_TADGAL_BLOCK_SORTBY_MODE2."</option>
	<option value='order by rand()' $sortby_2>"._MB_TADGAL_BLOCK_SORTBY_MODE3."</option>
	</select><select name='options[3]'>
	<option value='' $sort_normal>"._MB_TADGAL_BLOCK_SORT_NORMAL."</option>
	<option value='desc' $sort_desc>"._MB_TADGAL_BLOCK_SORT_DESC."</option>
	</select><br>
	"._MB_TADGAL_BLOCK_THUMB."
	<INPUT type='radio' $thumb_s name='options[4]' value='s'>"._MB_TADGAL_BLOCK_THUMB_S."
	<INPUT type='radio' $thumb_m name='options[4]' value='m'>"._MB_TADGAL_BLOCK_THUMB_M."<br>
	"._MB_TADGAL_BLOCK_WIDTH."
	<INPUT type='text' name='options[5]' value='{$options[5]}' size=3> x
	"._MB_TADGAL_BLOCK_HEIGHT."
	<INPUT type='text' name='options[6]' value='{$options[6]}' size=3> px<br>
	"._MB_TADGAL_BLOCK_SHOW_TYPE."<select name='options[7]'>
	<option value='0' $only_good_0>"._MB_TADGAL_BLOCK_SHOW_ALL."</option>
	<option value='1' $only_good_1>"._MB_TADGAL_BLOCK_ONLY_GOOD."</option>
	</select><br>
  "._MB_TADGAL_GOOD_MOVE_DIRECTION."
	<INPUT type='radio' $jscroller2_up name='options[8]' value='jscroller2_up'>"._MB_TADGAL_GOOD_MOVE_DIRECTION_OPT1."
	<INPUT type='radio' $jscroller2_down name='options[8]' value='jscroller2_down'>"._MB_TADGAL_GOOD_MOVE_DIRECTION_OPT2."<br>
	"._MB_TADGAL_GOOD_MOVE_SPEED."
	<INPUT type='text' name='options[9]' value='{$options[9]}' size=4> (0-1000)<br>

	";
	return $form;
}


if(!function_exists("get_pic_url")){
	//¨ú±o¹Ï¤ùºô§}
	function get_pic_url($dir="",$sn="",$filename="",$kind="",$path_kind=""){
    $TADGAL_UP_FILE_DIR=ICMS_ROOT_PATH."/uploads/tadgallery/";
		$TADGAL_UP_FILE_URL=ICMS_URL."/uploads/tadgallery/";
	  $show_path=($path_kind=="dir")?$TADGAL_UP_FILE_DIR:$TADGAL_UP_FILE_URL;

		if($kind=="m"){
	    if(is_file($TADGAL_UP_FILE_DIR."medium/{$dir}/{$sn}_m_{$filename}")){
	      return "{$show_path}medium/{$dir}/{$sn}_m_{$filename}";
			}
		}elseif($kind=="s"){
			if(is_file($TADGAL_UP_FILE_DIR."small/{$dir}/{$sn}_s_{$filename}")){
		    return "{$show_path}small/{$dir}/{$sn}_s_{$filename}";
			}elseif(is_file($TADGAL_UP_FILE_DIR."medium/{$dir}/{$sn}_m_{$filename}")){
	      return "{$show_path}medium/{$dir}/{$sn}_m_{$filename}";
			}
		}
		return "{$show_path}{$dir}/{$sn}_{$filename}";
	}
}

if(!function_exists("get_tad_gallery_block_cate_option")){
	//¨ú±o¤ÀÃþ¤U©Ô¿ï³
	function get_tad_gallery_block_cate_option($of_csn=0,$level=0,$v=""){
		global $xoopsDB,$xoopsUser;

		$modhandler = &xoops_gethandler('module');
	  $xoopsModule = &$modhandler->getByDirname("tadgallery");

		if ($xoopsUser) {
	    $module_id = $xoopsModule->getVar('mid');
	    $isAdmin=$xoopsUser->isAdmin($module_id);
	  }else{
	    $isAdmin=false;
		}

		$sql = "SELECT count(*),csn FROM ".$xoopsDB->prefix("tad_gallery")." group by csn";
		$result = $xoopsDB->query($sql);
		while(list($count,$csn)=$xoopsDB->fetchRow($result)){
		  $cate_count[$csn]=$count;
		}

		//$left=$level*10;
		$level+=1;

		$syb=str_repeat("-", $level)." ";

		$option=($of_csn)?"":"<option value='0'>"._MB_TADGAL_BLOCK_ALL."</option>";
		$sql = "SELECT csn,title FROM ".$xoopsDB->prefix("tad_gallery_cate")." WHERE of_csn='{$of_csn}' ORDER BY sort";
		$result = $xoopsDB->query($sql);

		while(list($csn,$title)=$xoopsDB->fetchRow($result)){
			$selected=($v==$csn)?"selected":"";
			$count=(empty($cate_count[$csn]))?0:$cate_count[$csn];
			$option.="<option value='{$csn}' $selected>{$syb}{$title}({$count})</option>";
			$option.=get_tad_gallery_block_cate_option($csn,$level,$v);
		}
		return $option;
	}
}
?>