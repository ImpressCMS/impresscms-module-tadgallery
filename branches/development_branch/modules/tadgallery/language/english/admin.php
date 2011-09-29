<?php
//  ------------------------------------------------------------------------ //
// ����組由 tad 製作
// 製作����2008-03-23
// $Id: admin.php,v 1.3 2008/05/05 03:22:37 tad Exp $
// ------------------------------------------------------------------------- //

define("_BACK_MODULES_PAGE","Module Home");
//分頁物件用的語系
define("_BP_BACK_PAGE","Previous");
define("_BP_NEXT_PAGE","Next Page");
define("_BP_FIRST_PAGE","first page");
define("_BP_LAST_PAGE","Last page");
define("_BP_GO_BACK_PAGE","Before the %s Page");
define("_BP_GO_NEXT_PAGE","After the %s Page");
define("_BP_TOOLBAR","A total of %s pages, currently on page %s");
define("_BP_DEL_CHK","Are you sure you want to delete this information");
define("_BP_FUNCTION","Function");
define("_BP_EDIT","Editor");
define("_BP_DEL","Delete");
define("_BP_ADD","Additional information");

define("_MA_INPUT_CATE_FORM","Photo Album Management");
define("_MA_SAVE","Save");
define("_MI_TADGAL_ADMENU1", "Photo Management");
define("_MI_TADGAL_ADMENU2", "Album Management");
define("_MI_TADGAL_ADMENU7", "Upload");
define("_MI_TADGAL_ADMENU3", "Favorites Management");
define("_MI_TADGAL_ADMENU4", "Module Update");
define("_MI_TADGAL_ADMENU5", "RSS");
define("_MI_TADGAL_ADMENU6", "Batch Edit");

//cate.php
define("_MA_TADGAL_SN","Serial number");
define("_MA_TADGAL_CSN","Photo Categories");
define("_MA_TADGAL_CTITLE","Album Title");
define("_MA_TADGAL_DESCRIPTION","Album Description");
define("_MA_TADGAL_FILENAME","File name");
define("_MA_TADGAL_SIZE","Size");
define("_MA_TADGAL_TYPE","Type");
define("_MA_TADGAL_UID","Publisher");
define("_MA_TADGAL_POST_DATE","Published time");
define("_MA_TADGAL_COUNTER","Rating");
define("_MA_TADGAL_PASSWD","Album password");
define("_MA_TADGAL_PASSWD_DESC","Optional");
define("_MA_TADGAL_CATE_ADVANCE_SETUP","Advanced Settings");
define("_MA_TADGAL_CATE_HIDE_ADVANCE_SETUP","Hide Advanced Settings");
define("_MA_TADGAL_CATE_SHL_SETUP","Show the anti-theft even set");
define("_MA_TADGAL_CATE_HIDE_SHL_SETUP","Hidden anti-theft even set");
define("_MA_TADGAL_CATE_POWER_SETUP","Set Permissions");
define("_MA_TADGAL_CATE_SHOW_MODE","Display Mode");
define("_MA_TADGAL_CATE_SHOW_MODE_1","General Thumbnail Mode (default)");
define("_MA_TADGAL_CATE_SHOW_MODE_2","3DGallery Mode");
define("_MA_TADGAL_CATE_SHOW_MODE_3","Slide show mode");
define("_MA_TADGAL_COVER","Album Image");
define("_MD_TADGAL_COVER","select Album Image");


define("_MA_TADGAL_TITLE","Album Title");
define("_MA_TADGAL_CREATOR","Creator");
define("_MA_TADGAL_LOCATION","Video files");
define("_MA_TADGAL_IMAGE","Thumbnail location");
define("_MA_TADGAL_INFO","Download location");
//define("_MA_TADGAL_POST_DATE","Release Date");
define("_MA_TADGAL_LSN","Serial Number");
//define("_MA_TADGAL_SN","Serial Number");
//define("_MA_TADGAL_CSN","Album");
define("_MA_TADGAL_OF_LSN","Owned projects");
//define("_MA_TADGAL_UID","Publisher");
//define("_MA_TADGAL_COUNTER","Rating");
define("_MA_TADGAL_OF_CSN","Parent Album");
define("_MA_TADGAL_ENABLE_GROUP","View Permissions");
define("_MA_TADGAL_ENABLE_UPLOAD_GROUP","Upload Permissions");
define("_MA_TADGAL_SORT","Album ID");	
define("_MA_TADGAL_ALL_OK","All Groups");
define("_MA_TADGAL_LIST_CATE","Album List");
//define("_MA_TADGAL_CANT_OPEN","can not create %s");
//define("_MA_TADGAL_CANT_WRITE","Can not write %s");
define("_MA_TADGAL_SHOW_DATE ","(%s release)");
define("_MA_TADGAL_CATE_SELECT", "Index");
define("_MA_TADGAL_XML_OK ","%s playlist finished! ");
define("_MA_TADGAL_NO_DIRNAME", "no directory name");
define("_MA_TADGAL_MKDIR_ERROR", "can not create %s directory, please manually create and open anonymous write access to (777)");
define("_MA_TADGAL_LIST_ALL", "list all photos");

define("_MA_MKDIR_NO_DIRNAME", "do not specify a folder name");
define("_MA_MKDIR_ERROR", "%s folder failed!");

define("_MA_TADGAL_SHOW_MODE", "thumbnail Frame");
define("_MA_TADGAL_SHOW_MODE_1", "No Frame");
define("_MA_TADGAL_SHOW_MODE_2", "Right-angle Shadow Frame");
define("_MA_TADGAL_SHOW_MODE_3", "Rounded Frame");
define("_MA_TADGAL_SHOW_MODE_4", "Shadow Frame");
define("_MA_TADGAL_SHOW_MODE_5", "The Brink of");
define("_MA_TADGAL_SHOW_MODE_6", "Slide Frame");

//update
define("_MA_TADGAL_AUTOUPDATE", "Module Upgrades");
define("_MA_TADGAL_AUTOUPDATE_VER", "version");
define("_MA_TADGAL_AUTOUPDATE_DESC", "role");
define("_MA_TADGAL_AUTOUPDATE_STATUS", "update status");
define("_MA_TADGAL_AUTOUPDATE_GO", "update");
define("_MA_GAL_AUTOUPDATE1", "types of information in the table to add a column display mode");
define("_MA_GAL_AUTOUPDATE2", "the thumbnail to a new path");
define("_MA_GAL_AUTOUPDATE3", "adding album (classification) the default mode set a field show_mode");
define("_MA_GAL_AUTOUPDATE4", "adding album (classification) cover map fields cover");
define("_MA_GAL_AUTOUPDATE5", "adding even potent anti-theft, download the configuration field no_hotlink");
define("_MA_GAL_AUTOUPDATE6", "classification to open the records of field uid");

//batch_tool
	
define("_MA_TADGAL_THE_ACT_IS", "With selected photo(s):");
define("_MA_TADGAL_ADD_GOOD", "Add to Favorites");
define("_MA_TADGAL_DEL_GOOD", "Remove FROM Favorites");
define("_MA_TADGAL_MOVE_TO", "Move to Album");
define("_MA_TADGAL_GO", "Save");
define("_MA_TADGAL_TAG", "Add Tags");
define("_MA_TADGAL_TAG_TXT", "(Comma seperated)");



define("_MA_TADGAL_CANT_OPEN", "can not create %s");
define("_MA_TADGAL_CANT_WRITE", "Can not write %s");
	
?>