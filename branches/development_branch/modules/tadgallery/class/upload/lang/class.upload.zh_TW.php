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
    $translation['file_error']                  = 'ÀÉ®×¿ù»~¡A½Ð­«¸Õ¡I';
    $translation['local_file_missing']          = 'ÀÉ®×¤£¦s¦b¡C';
    $translation['local_file_not_readable']     = 'ÀÉ®×µLªkÅª¨ú¡C';
    $translation['uploaded_too_big_ini']        = 'ÀÉ®×¤W¶Ç¿ù»~ ¡]¤W¶ÇªºÀÉ®×¶W¹Lphp.ini¤¤ upload_max_filesize ªº¤W­­¡^';
    $translation['uploaded_too_big_html']       = 'ÀÉ®×¤W¶Ç¿ù»~ ¡]¤W¶ÇªºÀÉ®×¶W¹Lªí³¤¤ MAX_FILE_SIZE ªº¤W­­¡^';
    $translation['uploaded_partial']            = 'ÀÉ®×¤W¶Ç¿ù»~ ¡]ÀÉ®×¤W¶Ç¤£§¹¾¡^';
    $translation['uploaded_missing']            = 'ÀÉ®×¤W¶Ç¿ù»~ ¡]¨S¦³¥ô¦óÀÉ®×³Q¤W¶Ç¡^';
    $translation['uploaded_unknown']            = 'ÀÉ®×¤W¶Ç¿ù»~ ¡]­ì¦]¤£©ú¡¡^';
    $translation['try_again']                   = 'ÀÉ®×¤W¶Ç¿ù»~¡A½Ð­«¸Õ¡I';
    $translation['file_too_big']                = 'ÀÉ®×¤Ó¤j¡C';
    $translation['no_mime']                     = 'µLªk°»´úÀÉ®×ªº MIME Ãþ«¬';
    $translation['incorrect_file']              = '¤£¥¿½TªºÀÉ®×Ãþ«¬¡C';
    $translation['image_too_wide']              = '¹Ï¤ù¤Ó¼e¡C';
    $translation['image_too_narrow']            = '¹Ï¤ù¤Ó¯¶¡C';
    $translation['image_too_high']              = '¹Ï¤ù¤Ó°ª¡C';
    $translation['image_too_short']             = '¹Ï¤ù¤Ó§C¡C';
    $translation['ratio_too_high']              = '¹Ï¤ù¤ñ¨Ò¤Ó°ª ¡]¹Ï¤ù¤Ó¼e¡^¡C';
    $translation['ratio_too_low']               = '¹Ï¤ù¤ñ¨Ò¤Ó§C ¡]¹Ï¤ù¤Ó°ª¡^¡C';
    $translation['too_many_pixels']             = '¹Ï¤ù¤Ó¦h¹³¯À¡C';
    $translation['not_enough_pixels']           = '¹Ï¤ù¹³¯À¤£¨¬¡C';
    $translation['file_not_uploaded']           = 'ÀÉ®×¨S¦³¤W¶Ç¡AµLªkÄ~Äò¶i¦¡C';
    $translation['already_exists']              = '%s ¤w¦s¦b¡A½ÐÅÜ§óÀÉ¦W¡C';
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
    $translation['source_invalid']              = 'µLªkÅª¨ú¹Ï¤ù¨Ó·½¡AÀË¬d¬O§_¬°¹Ï¤ù¡H';
    $translation['gd_missing']                  = 'GD ¦ü¥GµLªk¹B§@¡C';
    $translation['watermark_no_create_support'] = '¤£¤ä´© %s ®¦¡ªº«Ø¥ß¡AµLªkÅª¨ú¯B¤ô¦L¡C';
    $translation['watermark_create_error']      = '¤£¤ä´© %s ®¦¡ªºÅª¨ú¡AµLªk«Ø¥ß¯B¤ô¦L¡C';
    $translation['watermark_invalid']           = '¥¼ª¾ªº¹ÏÀÉ®¦¡¡AµLªkÅª¨ú¯B¤ô¦L¡C';
    $translation['file_create']                 = '¨S¦³¤ä´©«Ø¥ß %s ¡C';
    $translation['no_conversion_type']          = '¨S¦³©w¸qÂàÀÉÃþ«¬¡C';
    $translation['copy_failed']                 = '½»s¥D¾÷¤WªºÀÉ®×¥¢±Ñ¡Icopy() µLªk¹B§@¡C';
    $translation['reading_failed']              = 'ÀÉ®×Åª¨ú¿ù»~¡C';   
        
?>