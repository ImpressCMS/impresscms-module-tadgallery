<?php
include "../../../include/cp_header.php";

if($_POST['op']=="update_tad_gallery"){
 	$sql = "UPDATE ".$xoopsDB->prefix("tad_gallery")." SET `title`='{$_POST['title']}',`description`='{$_POST['description']}' WHERE sn='{$_POST['sn']}'";
	$xoopsDB->queryF($sql) or redirect_header($_SERVER['PHP_SELF'],10, 'MySQL error in SQL <pre>'.$sql.'</pre> '. mysql_error());
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title></title>
<?php

$sql = "SELECT title,description FROM ".$xoopsDB->prefix("tad_gallery")." WHERE sn='{$_GET['sn']}'";
$result = $xoopsDB->query($sql) or exit( 'MySQL error in SQL <pre>'.$sql.'</pre> '. mysql_error() . 'FILE <strong>' . __FILE__ .  '</strong> LINE <strong>' . __LINE__ . '</strong>' );
list($title,$description)=$xoopsDB->fetchRow($result);

$title=to_utf8($title);
$description=to_utf8($description);

echo "
<form action='index.php' method='post'>
<table border='1' class='form_tbl'>
<tr>
<td class='col'><input type='text' name='title' value='{$title}' style='width:100%;'></td></tr>
<tr>
<td class='col'><textarea style='width: 100%; height: 60px;' name='description'>{$description}</textarea></td></tr>
<tr><td class='bar' colspan='2'>
<input type='hidden' name='sn' value='{$_GET['sn']}'>
<input type='hidden' name='csn' value='{$_GET['csn']}'>
<input type='hidden' name='op' value='update_tad_gallery'>
<input type='submit' value='Submit (Translate)'></td></tr>
</table>
</form>";


//Ëº∏Âá∫ÁÇ∫UTF8
function to_utf8($buffer=""){
	if(is_utf8($buffer)){
		return $buffer;
	}else{
  	$buffer=(!function_exists("mb_convert_encoding"))?iconv("Big5","UTF-8",$buffer):mb_convert_encoding($buffer,"UTF-8","Big5");
  	return $buffer;
	}
}


//Âà§ñ∑Â≠ó‰∏≤òØÂê¶ÁÇ∫utf8
function  is_utf8($str)  {
    $i=0;
    $len  =  strlen($str);

    for($i=0;$i<$len;$i++)  {
        $sbit  =  ord(substr($str,$i,1));
        if($sbit  <  128)  {
            //ú¨Â≠óÁØÁÇ∫Ëã±ñáÂ≠óÁ¨¶Ôº‰∏ ËàáÁêÜúÉ
        }elseif($sbit  >  191  &&  $sbit  <  224)  {
            //Á¨¨‰∏Â≠óÁØÁÇ∫ËêΩñº192~223ÁöÑutf8ÁöÑ‰∏≠ñáÂ≠ó(Ë°®Á§∫Ë©≤‰∏≠ñáÁÇ∫Áî±2ÂãÂ≠óÁØâÁµÑàêutf8‰∏≠ñáÂ≠ó)Ôºâæ‰∏ã‰∏Âã‰∏≠ñáÂ≠ó
            $i++;
        }elseif($sbit  >  223  &&  $sbit  <  240)  {
            //Á¨¨‰∏Â≠óÁØÁÇ∫ËêΩñº223~239ÁöÑutf8ÁöÑ‰∏≠ñáÂ≠ó(Ë°®Á§∫Ë©≤‰∏≠ñáÁÇ∫Áî±3ÂãÂ≠óÁØâÁµÑàêÁöÑutf8‰∏≠ñáÂ≠ó)Ôºâæ‰∏ã‰∏Âã‰∏≠ñáÂ≠ó
            $i+=2;
        }elseif($sbit  >  239  &&  $sbit  <  248)  {
            //Á¨¨‰∏Â≠óÁØÁÇ∫ËêΩñº240~247ÁöÑutf8ÁöÑ‰∏≠ñáÂ≠ó(Ë°®Á§∫Ë©≤‰∏≠ñáÁÇ∫Áî±4ÂãÂ≠óÁØâÁµÑàêÁöÑutf8‰∏≠ñáÂ≠ó)Ôºâæ‰∏ã‰∏Âã‰∏≠ñáÂ≠ó
            $i+=3;
        }else{
            //Á¨¨‰∏Â≠óÁØÁÇ∫ÈùûÁöÑutf8ÁöÑ‰∏≠ñáÂ≠ó
            return  0;
        }
    }
    //™¢ü•ÂÆï¥ÂãÂ≠ó‰∏≤ÈÉΩ≤íÂïèÈ´îÔº‰ª£Ë°®ÈôÂãÂ≠ó‰∏≤òØutf8‰∏≠ñáÂ≠ó
    return  1;
}

?>
</body>
</html>