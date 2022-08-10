<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head_main.php');
?>

<h2 class="sound_only">최신글</h2>


    <?php
   
    echo latest('mainimages', 'free', 4, 23);			// 최소설치시 자동생성되는 자유게시판

    ?>
    <div class="inner">
        <?php
    
            echo latest('mainimages', 'free', 4, 23);			// 최소설치시 자동생성되는 자유게시판

         ?>
    </div>
    <?php
   
   echo latest('mainimages', 'free', 4, 23);			// 최소설치시 자동생성되는 자유게시판

   ?>






<?php
include_once(G5_PATH.'/tail.php');