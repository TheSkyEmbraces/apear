<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/tail.php');
    return;
}
?>

<!-- 하단 시작 { -->
<footer>
    <div class="container">
        <div class="row">
            <center>
                <img src="<?php echo G5_IMG_URL?>/app_logo.png" class="img-responsive space20" width="400" alt="" />
                <p>APPEAR은 사용자의 니즈에 최적화된 상품으로 포트폴리오를 구성, 추천하는 시스템으로<br>
                    사용자의 투자금을 최대한 보호하면서 최대한의 보상을 추구하는것을 목표로 합니다.</p>

                <div class="row">
                    <div class="f-social">
                        <a class="fa fa-twitter" href="#"></a>
                        <a class="fa fa-medium" href="#"></a>
                    </div>
                </div>

                <div class="space30"></div>
                <div class="row">
                    <p>&copy; Suite 305, Griffith Corporate Centre P.O.Box 1510, Beachmont Kingstown St. Vincent and
                        Grenadines Expansion Network System Ltd.</p>
                </div>
            </center>
        </div>
    </div>
</footer>

</div>

<!-- } 하단 끝 -->

<script>
    $(function () {
        // 폰트 리사이즈 쿠키있으면 실행
        font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie(
            "ck_font_resize_add_class"));
    });
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");
?>