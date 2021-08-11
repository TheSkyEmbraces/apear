<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/head.php');
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


<div class="outer-wrapper" id="page-top">
    <div class="header-wrap">

        <!-- HEADER -->
        <header id="header-main">
            <div class="container">
                <div class="navbar yamm navbar-default">
                    <div class="navbar-header">
                        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1"
                            class="navbar-toggle">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a href="index.php" class="navbar-brand"><img src="<?php echo G5_IMG_URL?>/app_logo.png"
                                alt="" /></a>
                    </div>

                    <!-- SEARCH -->
                    <div id="navbar-collapse-1" class="navbar-collapse collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                STAKING </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-submenu">
                                        <a href="shortcodes.html">APP STAKING</a> </li>
                                    <li class="dropdown-submenu">
                                        <a href="headerstyle1.html">USD STAKING</a> </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                                    MYPAGE </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-submenu">
                                        <a href="blog-2column.html">Blog 2 Column</a> </li>
                                    <li class="dropdown-submenu">
                                        <a href="blog-3column.html">Blog 3 Column</a> </li>
                                    <li class="dropdown-submenu">
                                        <a href="blog-left-sidbar.html">Blog with Left Sidebar</a> </li>
                                    <li class="dropdown-submenu">
                                        <a href="blog-right-sidebar.html">Blog with Right Sidebar</a> </li>

                                    <li class="dropdown-submenu">
                                        <a href="blog-single.html">Blog Single</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </div>