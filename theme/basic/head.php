<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    define('G5_IS_COMMUNITY_PAGE', true);
    include_once(G5_THEME_SHOP_PATH.'/shop.head.php');
    return;
}
include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>

<!-- 상단 시작 { -->
<div id="hd" class="fixed-top">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
        include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

    <div id="hd_wrapper" class="container-lg d-flex justify-content-between align-items-center mx-auto px-lg-0 pt-3">

        <div id="logo">
            <a href="<?php echo G5_URL ?>" class="d-block overflow-hidden">
                <!-- <img src="/eunimg/d_logo.png"> -->
                
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 367.19 320.81" style="enable-background:new 0 0 367.19 320.81;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#E30613;}
</style>
<g>
	<path class="st0" d="M313.78,114.31c7.68,0,11.35-3.35,11.35-11.4c0-7.04-3.68-10.39-11.35-10.39s-11.35,3.02-11.35,10.39
		C302.76,110.63,306.1,114.31,313.78,114.31z"/>
	<path class="st0" d="M304.78,150.18v20.45h11.01c5.67,0,8.34-3.7,8.34-10.74c0-7.04-2.67-9.71-8.34-9.71H304.78z"/>
	<path class="st0" d="M344.16,0L344.16,0H240.01c-9.35,0-15.69,4.36-23.37,11.06L43.4,158.56c-1,1.01-1,1.68-1,3.02
		c0,1.01,0.33,2.01,1,3.02L221.32,314.1c5.01,4.02,11.68,6.7,18.69,6.7h103.82c13.02,0,23.37-10.39,23.37-23.47V23.8
		C367.19,11.06,356.85,0,344.16,0z M293.75,27.49h11.02v16.09l16.02-16.09h15.36l-19.69,19.44l20.7,19.44h-15.69L305.1,50.28v16.09
		h-11.35V27.49z M313.78,83.13c14.35,0,22.36,7.05,22.36,19.79c0,13.41-8.01,20.78-22.36,20.78c-14.35,0-22.36-7.71-22.36-20.78
		C291.42,90.18,299.43,83.13,313.78,83.13z M335.15,159.9c0,13.41-6.68,20.12-19.37,20.12h-22.03v-39.56h22.03
		C329.14,140.46,335.15,146.82,335.15,159.9z M320.79,293.32L320.79,293.32L320.79,293.32l-16.36-16.09v16.09h-10.68v-38.89h11.02
		v16.09l16.02-16.09h14.69l-19.03,19.44l20.7,19.44H320.79z M325.47,236.66l-2.67-6.7h-17.69l-2.68,6.7h-11.67l16.68-39.56h13.36
		l16.68,39.56H325.47z"/>
	<polygon class="st0" points="308.44,221.24 319.46,221.24 313.78,207.5 	"/>
	<path class="st0" d="M36.05,173.31c-2-3.02-5.34-7.37-5.34-11.73c0-3.35,1-6.7,2.67-9.39L134.19,12.07c1-1.01,1-2.68,1-4.36
		c0-4.36-3.34-7.71-7.68-7.71H23.03C10.35,0,0,11.06,0,23.8v273.54c0,13.07,10.35,23.47,23.03,23.47c0,0,102.81,0,104.48,0
		c4.34,0,7.68-3.35,7.68-7.71c0-1.68-0.67-3.35-1.34-5.03L36.05,173.31z"/>
</g>
</svg>
            </a>
        </div>
    
        <nav id="gnb" >
            <div class="gnb_wrap">
                <ul id="gnb_1dul" class="mb-0 d-lg-flex align-items-center"> 
                    <li class="gnb_1dli gnb_mnal d-lg-none">
                        <button type="button" class="gnb_menu_btn" title="전체메뉴">
                            <span class=mbt></span>
                            <span class="sound_only">전체메뉴열기</span></button>
                    </li>
                    <?php
                    $menu_datas = get_menu_db(0, true);
                    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue;
                        $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                    ?>
                        <li class="gnb_1dli <?php echo $add_class; ?>  d-none d-lg-block" style="z-index:<?php echo $gnb_zindex--; ?>">
                            <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                            <?php
                            $k = 0;
                            foreach( (array) $row['sub'] as $row2 ){

                                if( empty($row2) ) continue; 

                                if($k == 0)
                                    echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                            ?>
                                <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                            <?php
                            $k++;
                            }   //end foreach $row2

                            if($k > 0)
                                echo '</ul></div>'.PHP_EOL;
                            ?>
                        </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
                <div id="gnb_all" class="flex-column justify-content-center position-fixed align-items-center">
                    <ul class="gnb_al_ul">
                        <?php
                        
                        $i = 0;
                        foreach( $menu_datas as $row ){
                        ?>
                        <li class="gnb_al_li">
                            <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
                            <?php
                            $k = 0;
                            foreach( (array) $row['sub'] as $row2 ){
                                if($k == 0)
                                    echo '<ul>'.PHP_EOL;
                            ?>
                                <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                            <?php
                            $k++;
                            }   //end foreach $row2

                            if($k > 0)
                                echo '</ul>'.PHP_EOL;
                            ?>
                        </li>
                        <?php
                        $i++;
                        }   //end foreach $row

                        if ($i == 0) {  ?>
                            <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                        <?php } ?>
                    </ul>
                    <button type="button" class="gnb_close_btn">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </button>
                </div>
                <div id="gnb_all_bg"></div>
            </div>
        </nav>
        
    </div>
    
   
    <script>
    
    $(function(){
        //전체메뉴
        $(".gnb_menu_btn").click(function(){
            $("#gnb_all, #gnb_all_bg").css('display','flex');
        });
        $(".gnb_close_btn, #gnb_all_bg").click(function(){
            $("#gnb_all, #gnb_all_bg").css('display','none')
        });
        //
        $('.gnb_1da').click(function(e){
            //a href
            e.preventDefault(); // a태그의 기본기능 막아라
            $('body, html').animate({
                scrollTop : $($(this).attr('href')).offset().top
            },400)

        })

    });

    </script>
</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper" >
    <div id="eun_containtbox" >
   
    <div id="eun_container" >
        <?php if (!defined("_INDEX_")) { ?><h2 id="container_title"><span title="<?php echo get_text($g5['title']); ?>"><?php echo get_head_title($g5['title']); ?></span></h2><?php }