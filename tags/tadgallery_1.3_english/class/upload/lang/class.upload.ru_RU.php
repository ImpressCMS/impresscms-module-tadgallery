<?php
// +------------------------------------------------------------------------+
// | class.upload.ru_RU.php                                                 |
// +------------------------------------------------------------------------+
// | Copyright (c) Chup 2007. All rights reserved.                          |
// | Version       0.25                                                     |
// | Last modified 24/11/2007                                               |
// | Email         chupzzz@ya.ru                                            |
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
 * Class upload Russian translation
 *
 * @version   0.25
 * @codepage  UTF-8 
 * @author    Chup (chupzzz@ya.ru)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Free to change
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Файловая ошибка. Поп�обуйте еще �аз.';
    $translation['local_file_missing']          = 'Локал�ный файл не существует.';
    $translation['local_file_not_readable']     = 'Локал�ный файл зак�ыт для чтения.';
    $translation['uploaded_too_big_ini']        = 'Ошибка заг�узки файла (заг�уженный файл п�евышает лимит ди�ективы the upload_max_filesize из php.ini).';
    $translation['uploaded_too_big_html']       = 'Ошибка заг�узки файла (заг�уженный файл п�евышает лимит ди�ективы MAX_FILE_SIZE оп�еделенной в HTML-фо�ме).';
    $translation['uploaded_partial']            = 'Ошибка заг�узки файла (файл заг�ужен частично).';
    $translation['uploaded_missing']            = 'Ошибка заг�узки файла (файл не был заг�ужен).';
    $translation['uploaded_unknown']            = 'Ошибка заг�узки файла (неизвестный код ошибки).';
    $translation['try_again']                   = 'Ошибка заг�узки файла. Поп�обуйте еще �аз.';
    $translation['file_too_big']                = 'Файл очен� бол�шой.';
    $translation['no_mime']                     = 'Невозможно оп�еделит� MIME-тип файла.';
    $translation['incorrect_file']              = 'Неко��ектный тип файла.';
    $translation['image_too_wide']              = 'Изоб�ажение очен� ши�окое.';
    $translation['image_too_narrow']            = 'Изоб�ажение очен� узкое.';
    $translation['image_too_high']              = 'Изоб�ажение очен� высокое.';
    $translation['image_too_short']             = 'Изоб�ажение очен� ко�откое.';
    $translation['ratio_too_high']              = 'Соотношение сто�он очен� велико (изоб�ажение очен� ши�окое).';
    $translation['ratio_too_low']               = 'Соотношение сто�он очен� мало (изоб�ажение очен� высокое).';
    $translation['too_many_pixels']             = 'В изоб�ажении очен� много пикселей.';
    $translation['not_enough_pixels']           = 'В изоб�ажении недостаточно пикселей.';
    $translation['file_not_uploaded']           = 'Файл не заг�ужен. Невозможно п�одолжит� п�оцесс.';
    $translation['already_exists']              = '%s существует. Измените имя файла.';
    $translation['temp_file_missing']           = 'Неко��ектный в�еменый файл. Невозможно п�одолжит� п�оцесс.';
    $translation['source_missing']              = 'Неко��ектный заг�уженный файл. Невозможно п�одолжит� п�оцесс.';
    $translation['destination_dir']             = 'Ди�екто�ия назначения не может быт� создана. Невозможно п�одолжит� п�оцесс.';
    $translation['destination_dir_missing']     = 'Ди�екто�ия назначения не существует. Невозможно п�одолжит� п�оцесс.';
    $translation['destination_path_not_dir']    = 'Пут� назначения не является ди�екто�ией. Невозможно п�одолжит� п�оцесс.';
    $translation['destination_dir_write']       = 'Ди�екто�ия назначения зак�ыта для записи. Невозможно п�одолжит� п�оцесс.';
    $translation['destination_path_write']      = 'Пут� назначения зак�ыт для записи. Невозможно п�одолжит� п�оцесс.';
    $translation['temp_file']                   = 'Невозможно создат� в�еменный файл. Невозможно п�одолжит� п�оцесс.';
    $translation['source_not_readable']         = 'Исходный файл нечитабел�ный. Невозможно п�одолжит� п�оцесс.';
    $translation['no_create_support']           = 'Создание из %s не подде�живается.';
    $translation['create_error']                = 'Ошибка создания %s изоб�ажения из о�игинала.';
    $translation['source_invalid']              = 'Невозможно п�очитат� исходный файл.';
    $translation['gd_missing']                  = 'Библиотека GD не обна�ужена.';
    $translation['watermark_no_create_support'] = '%s не подде�живается, невозможно п�очест� водный знак.';
    $translation['watermark_create_error']      = '%s не подде�живается чтение, невозможно создат� водный знак.';
    $translation['watermark_invalid']           = 'Неизвестный фо�мат изоб�ажения, невозможно п�очест� водный знак.';
    $translation['file_create']                 = '%s не подде�живается.';
    $translation['no_conversion_type']          = 'Тип конве�сии не указан.';
    $translation['copy_failed']                 = 'Ошибка копи�ования файла на се�ве�. Команда copy() выполнена с ошибкой.';
    $translation['reading_failed']              = 'Ошибка чтения файла.';   
        
?>
