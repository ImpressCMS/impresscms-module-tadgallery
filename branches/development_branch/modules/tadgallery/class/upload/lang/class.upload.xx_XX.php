<?php
// +------------------------------------------------------------------------+
// | class.upload.xx_XX.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) xxxxxx 200x. All rights reserved.                        |
// | Version       0.25                                                     |
// | Last modified xx/xx/200x                                               |
// | Email         xxx@xxx.xxx                                              |
// | Web           http://www.xxxx.xxx                                      |
// +------------------------------------------------------------------------+
// | This program is free software; you can redistribute it and/or modify   |
// | it under the terms of the GNU General Public License version 2 AS      |
// | published by the Free Software Foundation.                             |
// |                                                                        |
// | This program is distributed in the hope that it will be useful,        |
// | but WITHOUT ANY WARRANTY; without even the implied warranty of         |
// | MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          |
// | GNU General Public License for more details.                           |
// |                                                                        |
// | You should have received a copy of the GNU General Public License      |
// | along with this program; if not, write to the                          |
// |   Free Software Foundation, Inc., 59 Temple Place, Suite 330,          |
// |   Boston, MA 02111-1307 USA                                            |
// |                                                                        |
// | Please give credit on sites that use class.upload and submit changes   |
// | of the script so other people can use them AS well.                    |
// | This script is free to use, don't abuse.                               |
// +------------------------------------------------------------------------+

/**
 * Class upload xxxxxx translation
 *
 * @version   0.25
 * @author    xxxxxxxx (xxx@xxx.xxx)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright xxxxxxxx
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = '檔案錯誤，請重試！';
    $translation['local_file_missing']          = '檔案不存在。';
    $translation['local_file_not_readable']     = '檔案無法讀取。';
    $translation['uploaded_too_big_ini']        = '檔案上傳錯誤 (the uploaded file exceeds the upload_max_filesize directive in php.ini).';
    $translation['uploaded_too_big_html']       = '檔案上傳錯誤 (the uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the html form).';
    $translation['uploaded_partial']            = '檔案上傳錯誤 （檔案上傳不完鴃^';
    $translation['uploaded_missing']            = '檔案上傳錯誤 （沒有任何檔案被上傳）';
    $translation['uploaded_unknown']            = '檔案上傳錯誤 （原因不明﹛^';
    $translation['try_again']                   = '檔案上傳錯誤，請重試！';
    $translation['file_too_big']                = 'File too big.';
    $translation['no_mime']                     = 'MIME type can\'t be detected.';
    $translation['incorrect_file']              = 'Incorrect type of file.';
    $translation['image_too_wide']              = 'Image too wide.';
    $translation['image_too_narrow']            = 'Image too narrow.';
    $translation['image_too_high']              = 'Image too high.';
    $translation['image_too_short']             = 'Image too short.';
    $translation['ratio_too_high']              = 'Image ratio too high (image too wide).';
    $translation['ratio_too_low']               = 'Image ratio too low (image too high).';
    $translation['too_many_pixels']             = 'Image has too many pixels.';
    $translation['not_enough_pixels']           = 'Image has not enough pixels.';
    $translation['file_not_uploaded']           = 'File not uploaded. Can\'t carry on a process.';
    $translation['already_exists']              = '%s already exists. Please change the file name.';
    $translation['temp_file_missing']           = 'No correct temp source file. Can\'t carry on a process.';
    $translation['source_missing']              = 'No correct uploaded source file. Can\'t carry on a process.';
    $translation['destination_dir']             = 'Destination directory can\'t be created. Can\'t carry on a process.';
    $translation['destination_dir_missing']     = 'Destination directory doesn\'t exist. Can\'t carry on a process.';
    $translation['destination_path_not_dir']    = 'Destination path is not a directory. Can\'t carry on a process.';
    $translation['destination_dir_write']       = 'Destination directory can\'t be made writeable. Can\'t carry on a process.';
    $translation['destination_path_write']      = 'Destination path is not a writeable. Can\'t carry on a process.';
    $translation['temp_file']                   = 'Can\'t create the temporary file. Can\'t carry on a process.';
    $translation['source_not_readable']         = 'Source file is not readable. Can\'t carry on a process.';
    $translation['no_create_support']           = 'No create FROM %s support.';
    $translation['create_error']                = 'Error in creating %s image FROM source.';
    $translation['source_invalid']              = 'Can\'t read image source. Not an image?.';
    $translation['gd_missing']                  = 'GD doesn\'t seem to be present.';
    $translation['watermark_no_create_support'] = 'No create FROM %s support, can\'t read watermark.';
    $translation['watermark_create_error']      = 'No %s read support, can\'t create watermark.';
    $translation['watermark_invalid']           = 'Unknown image format, can\'t read watermark.';
    $translation['file_create']                 = 'No %s create support.';
    $translation['no_conversion_type']          = 'No conversion type defined.';
    $translation['copy_failed']                 = 'Error copying file on the server. copy() failed.';
    $translation['reading_failed']              = 'Error reading the file.';   
        
?>