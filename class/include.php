<?php

include_once(dirname(__FILE__) . '/Database.php');
include_once(dirname(__FILE__) . '/User.php');
include_once(dirname(__FILE__) . '/Upload.php');
include_once(dirname(__FILE__) . '/Helper.php');
include_once(dirname(__FILE__) . '/Leaders.php');
include_once(dirname(__FILE__) . '/Comments.php');
include_once(dirname(__FILE__) . '/PhotoAlbum.php');
include_once(dirname(__FILE__) . '/AlbumPhoto.php');
include_once(dirname(__FILE__) . '/CourseType.php');
include_once(dirname(__FILE__) . '/Course.php');
include_once(dirname(__FILE__) . '/CoursePhoto.php');
include_once(dirname(__FILE__) . '/CourseSubjects.php');
include_once(dirname(__FILE__) . '/NewsType.php');
include_once(dirname(__FILE__) . '/News.php');
include_once(dirname(__FILE__) . '/NewsPhoto.php');
include_once(dirname(__FILE__) . '/Event.php');
include_once(dirname(__FILE__) . '/EventPhoto.php');
include_once(dirname(__FILE__) . '/Districts.php');
include_once(dirname(__FILE__) . '/CenterType.php');
include_once(dirname(__FILE__) . '/Center.php');
include_once(dirname(__FILE__) . '/CourseByCenters.php');
include_once(dirname(__FILE__) . '/Pages.php');
include_once(dirname(__FILE__) . '/PageCharacter.php');
include_once(dirname(__FILE__) . '/Colors.php');
include_once(dirname(__FILE__) . '/ApplyOnline.php');
include_once(dirname(__FILE__) . '/Contact.php');
include_once(dirname(__FILE__) . '/NewsLetter.php');
include_once(dirname(__FILE__) . '/PageNews.php');


function dd($data) {
    var_dump($data);
    exit();
}

function redirect($url) {
    $string = '<script type="text/javascript">';
    $string .= 'window.location = "' . $url . '"';
    $string .= '</script>';
    echo $string;
    exit();
}
