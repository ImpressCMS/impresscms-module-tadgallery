<?php
include_once "../../../../mainfile.php";
include_once "../../function.php";

if($_POST['op']=="GO"){
  start_update2();
}

$ver="0.9 -> 1.0";
$title=_MA_GAL_AUTOUPDATE2;
$ok=update_chk2();


function update_chk2(){
	global $xoopsDB;
	if(is_dir(_TADGAL_UP_FILE_DIR."small") and is_dir(_TADGAL_UP_FILE_DIR."medium")){
	  return true;
	}
	return false;
}


function start_update2(){
	global $xoopsDB;
	mk_dir(_TADGAL_UP_FILE_DIR."small");
	mk_dir(_TADGAL_UP_FILE_DIR."medium");
	
	//ΎεΊεε§δΈε³ͺη₯θ³ε€Ύ
  if ($dh = opendir(_TADGAL_UP_FILE_DIR)) {
    //$file=₯θ³ε€Ύ
    while (($file = readdir($dh)) !== false) {
      if(substr($file,0,1)!="2")continue;
      if(is_dir(_TADGAL_UP_FILE_DIR.$file)){
			  mk_dir(_TADGAL_UP_FILE_DIR."small/{$file}/");
			  mk_dir(_TADGAL_UP_FILE_DIR."medium/{$file}/");
        //ιε₯θ³ε€ΎοΌΎεΊθ£‘ι ­ηηΈη
        if ($dh2 = opendir(_TADGAL_UP_FILE_DIR.$file)) {
          while (($file2 = readdir($dh2)) !== false) {
      			if(substr($file2,0,1)==".")continue;
						if(eregi('_s_', $file2)){
							rename(_TADGAL_UP_FILE_DIR.$file."/".$file2,_TADGAL_UP_FILE_DIR."small/{$file}/{$file2}");
						}
						if(eregi('_m_', $file2)){
							rename(_TADGAL_UP_FILE_DIR.$file."/".$file2,_TADGAL_UP_FILE_DIR."medium/{$file}/{$file2}");
						}
          }
        }
			}
    }
    closedir($dh);
  }
	header("location:{$_SERVER["HTTP_REFERER"]}");
	exit;
}
?>
