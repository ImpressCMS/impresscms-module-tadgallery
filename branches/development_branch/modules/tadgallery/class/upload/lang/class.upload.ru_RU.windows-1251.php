<?php
// +------------------------------------------------------------------------+
// | class.upload.ru_RU.windows-1251.php                                    |
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
 * @codepage  windows-1251 (default cyrillic) 
 * @author    Chup (chupzzz@ya.ru)
 * @license   http://opensource.org/licenses/gpl-license.php GNU Public License
 * @copyright Free to change
 * @package   cmf
 * @subpackage external
 */

    $translation = array();
    $translation['file_error']                  = 'Файловая ошибка. Попробуйте еще раз.';
    $translation['local_file_missing']          = 'Локальный файл не существует.';
    $translation['local_file_not_readable']     = 'Локальный файл закрыт для чтения.';
    $translation['uploaded_too_big_ini']        = 'Ошибка зарузки файла (заруенный файл превышает лимит директивы the upload_max_filesize из php.ini).';
    $translation['uploaded_too_big_html']       = 'Ошибка зарузки файла (заруенный файл превышает лимит директивы MAX_FILE_SIZE определенной в HTML-форме).';
    $translation['uploaded_partial']            = 'Ошибка зарузки файла (файл заруен частично).';
    $translation['uploaded_missing']            = 'Ошибка зарузки файла (файл не был заруен).';
    $translation['uploaded_unknown']            = 'Ошибка зарузки файла (неизвестный код ошибки).';
    $translation['try_again']                   = 'Ошибка зарузки файла. Попробуйте еще раз.';
    $translation['file_too_big']                = 'Файл очень большой.';
    $translation['no_mime']                     = 'Невозмоно определить MIME-тип файла.';
    $translation['incorrect_file']              = 'Некорректный тип файла.';
    $translation['image_too_wide']              = 'Изобраение очень широкое.';
    $translation['image_too_narrow']            = 'Изобраение очень узкое.';
    $translation['image_too_high']              = 'Изобраение очень высокое.';
    $translation['image_too_short']             = 'Изобраение очень короткое.';
    $translation['ratio_too_high']              = 'Соотношение сторон очень велико (изобраение очень широкое).';
    $translation['ratio_too_low']               = 'Соотношение сторон очень мало (изобраение очень высокое).';
    $translation['too_many_pixels']             = 'В изобраении очень мноо пикселей.';
    $translation['not_enough_pixels']           = 'В изобраении недостаточно пикселей.';
    $translation['file_not_uploaded']           = 'Файл не заруен. Невозмоно продолить процесс.';
    $translation['already_exists']              = '%s существует. Измените имя файла.';
    $translation['temp_file_missing']           = 'Некорректный временый файл. Невозмоно продолить процесс.';
    $translation['source_missing']              = 'Некорректный заруенный файл. Невозмоно продолить процесс.';
    $translation['destination_dir']             = 'Директория назначения не моет быть создана. Невозмоно продолить процесс.';
    $translation['destination_dir_missing']     = 'Директория назначения не существует. Невозмоно продолить процесс.';
    $translation['destination_path_not_dir']    = 'Путь назначения не является директорией. Невозмоно продолить процесс.';
    $translation['destination_dir_write']       = 'Директория назначения закрыта для записи. Невозмоно продолить процесс.';
    $translation['destination_path_write']      = 'Путь назначения закрыт для записи. Невозмоно продолить процесс.';
    $translation['temp_file']                   = 'Невозмоно создать временный файл. Невозмоно продолить процесс.';
    $translation['source_not_readable']         = 'Исходный файл нечитабельный. Невозмоно продолить процесс.';
    $translation['no_create_support']           = 'Создание из %s не поддеривается.';
    $translation['create_error']                = 'Ошибка создания %s изобраения из ориинала.';
    $translation['source_invalid']              = 'Невозмоно прочитать исходный файл.';
    $translation['gd_missing']                  = 'Библиотека GD не обнаруена.';
    $translation['watermark_no_create_support'] = '%s не поддеривается, невозмоно прочесть водный знак.';
    $translation['watermark_create_error']      = '%s не поддеривается чтение, невозмоно создать водный знак.';
    $translation['watermark_invalid']           = 'Неизвестный формат изобраения, невозмоно прочесть водный знак.';
    $translation['file_create']                 = '%s не поддеривается.';
    $translation['no_conversion_type']          = 'Тип конверсии не указан.';
    $translation['copy_failed']                 = 'Ошибка копирования файла на сервер. Команда copy() выполнена с ошибкой.';
    $translation['reading_failed']              = 'Ошибка чтения файла.';   
        
?>
