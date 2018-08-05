<?php
/**
 * Изучаем PHP 7. Руководство по созданию интерактивных веб-сайтов. Дэвид Скляр
 */
////////////////////////////////////////////////////////////////////////////////////////////////////
echo '<pre><hr><b> стр. 112 задание 2. </b><br><details><summary>Спойлер</summary>';
////////////////////////
$img_dir = 'images/';
// var_dump($GLOBALS['img_dir']);
function imgTag($img_name)
{
    $img_tag = "<img src='".$GLOBALS['img_dir'].$img_name."' />";

    return $img_tag;
}
// echo imgTag('demo.jpg');
////////////////////////
echo '</details></pre>';
////////////////////////
