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


//輸出為UTF8
function to_utf8($buffer=""){
	if(is_utf8($buffer)){
		return $buffer;
	}else{
  	$buffer=(!function_exists("mb_convert_encoding"))?iconv("Big5","UTF-8",$buffer):mb_convert_encoding($buffer,"UTF-8","Big5");
  	return $buffer;
	}
}


//判��字串��否為utf8
function  is_utf8($str)  {
    $i=0;
    $len  =  strlen($str);

    for($i=0;$i<$len;$i++)  {
        $sbit  =  ord(substr($str,$i,1));
        if($sbit  <  128)  {
            //��字�為英��字符�� 與理��
        }elseif($sbit  >  191  &&  $sbit  <  224)  {
            //第�字�為落��192~223的utf8的中��字(表示該中��為由2�字築組��utf8中��字)）�下��中��字
            $i++;
        }elseif($sbit  >  223  &&  $sbit  <  240)  {
            //第�字�為落��223~239的utf8的中��字(表示該中��為由3�字築組��的utf8中��字)）�下��中��字
            $i+=2;
        }elseif($sbit  >  239  &&  $sbit  <  248)  {
            //第�字�為落��240~247的utf8的中��字(表示該中��為由4�字築組��的utf8中��字)）�下��中��字
            $i+=3;
        }else{
            //第�字�為非的utf8的中��字
            return  0;
        }
    }
    //����宕��字串都��問體�代表��字串��utf8中��字
    return  1;
}

?>
</body>
</html>