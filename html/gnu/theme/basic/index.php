<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

if(G5_COMMUNITY_USE === false) {
    include_once(G5_THEME_SHOP_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<h2 class="sound_only">최신글</h2>
<?php //echo latest('mainimages','free',3,100);?>
<div class="inner">
    <?php //echo latest('basic','free',4,100);?>
</div>
<div>

<?php 
include_once(G5_THEME_PATH.'/main/banner.php');
?>

</div>

<script src="/gnu/theme/basic/css/main/subeun.js"></script>
<script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=948babd950dd45757d008d53924e7630"></script>
<section class="section py-5 " id="keyword">
    <div class="container-lg position-relative">
        <h3 class="text-center display-1 mt-lg-5">Keyword</h3>
        <p class="text-center sub">흥미로운 이야기를 클릭해보세요!</p>
   
        <ul class="row mt-3 mt-lg-5 justify-content-center  list">
            <li class=" key_1">
                <a href="#none" class="d-flex flex-column justify-content-center align-items-center">
                    <!-- <img src="/gnu/img/key_1.jpg" class="b_y img-fluid" alt="K"> -->
                    <span>K</span>
                </a>
                <dl>
                    <dt><strong>KIROS</strong><span class='pinksub'>'결정적인 순간'</span></dt>                        
                    <dd>결정적인 순간<span class='bksub'>을 남기기 가장 좋고 편리한 방법</span></dd>
                    
                </dl>
            </li>
            <li  class="  key_2"> 
                <a href="#none" class="d-flex flex-column justify-content-center align-items-center">
                    <!-- <img src="/gnu/img/key_2.png" class="b_g img-fluid" alt="O"> -->
                    <span >O</span>
                </a>
                <dl >
                    <dt><strong>OWN</strong><span class='pinksub'>‘나만의’</span></dt>                        
                    <dd>장당 170원<span class='bksub'>으로 나만의 사진을 출력할 수 있습니다.</span></dd>
                    
                </dl>
            </li>
            <li  class=" key_3">
                <a href="#none" class="d-flex flex-column justify-content-center align-items-center">
                    <!-- <img src="/gnu/img/key_3.png" class="b_y img-fluid" alt="D"> -->
                    <span>D</span>
                </a>
                <dl >
                    <dt><strong>DESIGN</strong><span class='pinksub'>'디자인하다'</span></dt>                        
                    <dd>손쉬운 사용<span class='bksub'>을 위해 작은 사이즈와 레트로한 감성이 더해졌습니다. </span></dd>
                </dl>
            </li>
            <li  class=" key_4 ">
                <a href="#none" class="d-flex flex-column justify-content-center align-items-center">
                    <!-- <img src="/gnu/img/key_4.jpg" class="b_g img-fluid" alt="A"> -->
                    <span>A</span>
                </a>
                <dl >
                    <dt><strong>APP</strong><span class='pinksub'> ‘전용어플’</span></dt>                        
                    <dd>전용 어플을 사용<span class='bksub'>한 쉽고 다양한 편집모드로 다꾸를 손쉽게!</span></dd>
                    
                </dl>
            </li>
            <li  class=" key_5">
                <a href="#none" class="d-flex flex-column justify-content-center align-items-center">
                    <!-- <img src="/gnu/img/key_5.PNG" class="b_y img-fluid" alt="K"> -->
                    <span>K</span>
                </a>
                <dl >
                    <dt><strong>KEY </strong><span class='pinksub'  >'핵심기술'</span></dt>                        
                    <dd>코닥만의 4PASS 기술<span class='bksub'>로 소중한 추억을 오랜시간보관해드립니다.</span></dd>
                </dl>
            </li>
        </ul>
    </div>
</section>
<section class="section py-5" id="photo">
  <div class="container-lg">
    <div>
        <h3 class="text-lg-center display-2">Photo Studio</h3>
        <p class="text-lg-center sub">코닥과 함께한 사람들의 이야기를 들어보세요</p>
        <ul class="row mx-0 align-items-center">
            <li class="col-6 col-lg-4 sc"><a href="#none"><img src="/gnu/img/ps_1.png" alt="사진1" class="img-fluid"></a></li>
            <li class="col-6 col-lg-4 sc"><a href="#none"><img src="/gnu/img/ps_2.png" alt="사진2" class="img-fluid"></a></li>
            <li class="col-6 col-lg-4 sc"><a href="#none"><img src="/gnu/img/ps_3.png" alt="사진3" class="img-fluid"></a></li>
            <li class="col-6 col-lg-4 sc"><a href="#none"><img src="/gnu/img/ps_4.png" alt="사진4" class="img-fluid"></a></li>
            <li class="col-6 col-lg-4 sc"><a href="#none"><img src="/gnu/img/ps_5.png" alt="사진5" class="img-fluid"></a></li>
            <li class="col-6 col-lg-4 sc"><a href="#none"><img src="/gnu/img/ps_6.png" alt="사진6" class="img-fluid"></a></li>
        </ul>
    </div>
  </div>
</section>
<section class="section py-5" id="product">
    <div class="container">
        <h3 class="text-lg-right display-2 bk_t">Product Package</h3>
            <p class="text-lg-right sub">최고의 패키지로 코닥 카메라를 만나보세요!</p>
        <div class="card position-relative border-0">
            <div class="pak position-absolute a_1"><a href="https://www.kodakphotoprinter.co.kr/goods/goods_view.php?goodsNo=1000000006"><img src="/gnu/img/pro_1.png" alt="상품1" class="img-fluid"></a></div>
            <div class="pak position-absolute a_2"><a href="https://www.kodakphotoprinter.co.kr/goods/goods_view.php?goodsNo=1000000063"><img src="/gnu/img/pro_2.png" alt="상품2" class="img-fluid"></a></div>
            <div class="pak position-absolute a_3"><a href="https://www.kodakphotoprinter.co.kr/goods/goods_view.php?goodsNo=1000000067"><img src="/gnu/img/pro_3.png" alt="상품3" class="img-fluid"></a></div>
            <div class="pak position-absolute a_4"><a href="https://www.kodakphotoprinter.co.kr/goods/goods_view.php?goodsNo=1000000060"><img src="/gnu/img/pro_4.png" alt="상품4" class="img-fluid"></a></div>
            <div class="pak position-absolute a_5"><a href="https://www.kodakphotoprinter.co.kr/goods/goods_view.php?goodsNo=1000000068"><img src="/gnu/img/pro_5.png" alt="상품5" class="img-fluid"></a></div>
        </div>
    </div>
</section>
<section class="section bg-dark py-5" id="as">
    <div class="container-lg">
        <h3 class="text-lg-center display-2 bk_t">A/S Center</h3>
        <p class="text-lg-center sub">이곳으로 제품을 보내주시면 수리를 도와드립니다.</p>
        <div id="map" style="width:100%;height:400px;"></div>
        <script>
            var mapContainer = document.getElementById('map'), // 지도를 표시할 div 
                mapOption = { 
                    center: new kakao.maps.LatLng(37.24201615747448, 126.98450896959767), // 지도의 중심좌표
                    level: 3 // 지도의 확대 레벨
                };

            var map = new kakao.maps.Map(mapContainer, mapOption);

            // 마커가 표시될 위치입니다 
            var markerPosition  = new kakao.maps.LatLng(37.24201615747448, 126.98450896959767); 

            // 마커를 생성합니다
            var marker = new kakao.maps.Marker({
                position: markerPosition
            });

            // 마커가 지도 위에 표시되도록 설정합니다
            marker.setMap(map);

            var iwContent = '<div style="padding:5px;">프리닉스 <br> <a href="https://map.kakao.com/link/to/프리닉스, 37.24201615747448, 126.98450896959767" style="color:blue" target="_blank">길찾기</a></div>', // 인포윈도우에 표출될 내용으로 HTML 문자열이나 document element가 가능합니다
                iwPosition = new kakao.maps.LatLng(37.24201615747448, 126.98450896959767); //인포윈도우 표시 위치입니다

            // 인포윈도우를 생성합니다
            var infowindow = new kakao.maps.InfoWindow({
                position : iwPosition, 
                content : iwContent 
            });
            
            // 마커 위에 인포윈도우를 표시합니다. 두번째 파라미터인 marker를 넣어주지 않으면 지도 위에 표시됩니다
            infowindow.open(map, marker); 
        </script>
        <div class="text-center" style="margin-top: 44px;">
        <span>
            <i class="fa-solid fa-map-pin"></i>
        </span>
            <strong>
            (주)프리닉스<br>
            주소 : 경기도 수원시 권선구 산업로156번길<br>
            197-50 프리닉스<br>
            연락처 : 070-5213-7814<br>       
            </strong>
            <p class="de">
            *상황에 따라 유상과 무상으로 나뉠 수 있습니다.<br>
            *배송으로만 수리가 가능하며 직접 방문은 어렵습니다.<br>
            *자세한 문의는 연락 바랍니다.
            </p>
        </div>
</section>

<?php 
include_once(G5_THEME_PATH.'/main/event.php');
?>

<?php
include_once(G5_THEME_PATH.'/tail.php');