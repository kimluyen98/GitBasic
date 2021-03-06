<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Header/header_1_0_2'; 
    if($check == 0){
        $css_inline .= '
            <style>
                .header_1_0_2 {
                font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
                }
        
                a {
                text-decoration: none;
                }
        
                .header_1_0_2_box_2__menu__menuSub .arr::before {
                font-family: "fontello";
                font-style: normal;
                font-weight: 400;
                speak: none;
                display: inline-block;
                text-decoration: inherit;
                width: 1em;
                margin-right: .2em;
                text-align: center;
                font-variant: normal;
                text-transform: none;
                line-height: 1em;
                margin-left: .2em;
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
                }
        
                .header_1_0_2 {
                position: fixed;
                z-index: 9;
                width: 100%;
                top: 0;
                background: url(../images/header/head-bg.png) center bottom no-repeat;
                }
                .header_1_0_2_box_1 {
                background-color: #fff;
                }
                .header_1_0_2_box_1 .container {
                display: flex;
                align-items: center;
                justify-content: space-between;
                }
                .header_1_0_2_box_1_left, .header_1_0_2_box_1_right {
                display: flex;
                align-items: center;
                }
                .header_1_0_2_box_1__logo {
                height: 90px;
                padding-top: 5px;
                margin-right: 50px;
                position: relative;
                }
                .header_1_0_2_box_1__title {
                color: #00ABE5;
                }
                .header_1_0_2_box_1__title h2 {
                text-transform: uppercase;
                font-size: 15px;
                font-weight: 600;
                margin: 5px 0 0;
                }
                .header_1_0_2_box_1__title p {
                text-transform: uppercase;
                font-size: 15px;
                font-weight: 600;
                }
                .header_1_0_2_box_1__address ul {
                list-style: none;
                }
                .header_1_0_2_box_1__address ul li {
                color: #000;
                font-size: 14px;
                }
                .header_1_0_2_box_1__address ul li i {
                color: #00ABE5;
                font-size: 14px;
                margin-right: 5px;
                }
                .header_1_0_2_box_1__regkham {
                display: none;
                }
                .header_1_0_2_box_1__regtv {
                font-size: 15px;
                display: block;
                background: #00ABE5;
                color: #fff;
                margin-bottom: 5px;
                text-align: center;
                padding: 2px 25px;
                }
                .header_1_0_2_box_1__ser {
                border: 1px solid #EF4527;
                padding-left: 10px;
                position: relative;
                outline: none;
                }
                .header_1_0_2_box_1__ser::placeholder {
                font-style: italic;
                font-size: 14px;
                }
                .header_1_0_2_box_1__button {
                position: absolute;
                right: 14px;
                background: none;
                border: none;
                outline: none;
                color: #EF4527;
                cursor: pointer;
                }
                .header_1_0_2_box_1__call {
                margin-left: 25px;
                text-align: center;
                }
                .header_1_0_2_box_1__call h2 {
                text-transform: uppercase;
                color: #EF4527;
                font-size: 14px;
                font-weight: 600;
                margin: 10px 0 0;
                }
                .header_1_0_2_box_1__call p {
                color: #fff;
                font-size: 18px;
                }
                .header_1_0_2_box_1__call a {
                color: #000;
                }
                .header_1_0_2_box_1__search {
                margin-left: 30px;
                margin-top: 5px;
                }
                .header_1_0_2_box_1__search__icon {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #EF4324;
                padding: 6px;
                border-radius: 50%;
                color: #fff;
                width: 35px;
                height: 35px;
                margin-left: 30px;
                }
                .header_1_0_2_box_1__search__icon i {
                display: flex;
                justify-content: center;
                align-items: center;
                }
                .header_1_0_2_box_1 .iconMid {
                display: none;
                }
                .header_1_0_2_box_2 {
                background-color: #E1EAF5;
                padding: 10px 0;
                }
                .header_1_0_2_box_2 .container {
                display: flex;
                align-items: center;
                }
                .header_1_0_2_box_2__logosb {
                display: none;
                }
                .header_1_0_2_box_2__logosb img {
                max-width: 90%;
                margin: 20px 0 0;
                }
                .header_1_0_2_box_2__menu {
                display: flex;
                list-style: none;
                padding: 0;
                margin: 0;
                }
                .header_1_0_2_box_2__menu__menuSub .menu-icon {
                display: none;
                position: absolute;
                right: 0;
                top: 0;
                padding: 10px;
                width: 100%;
                height: 100%;
                text-align: right;
                }
                .header_1_0_2_box_2__menu__menuSub .arr::before {
                content: "\e88f";
                display: none;
                position: absolute;
                bottom: 5px;
                left: 40px;
                text-align: center;
                color: #f16749;
                }
                .header_1_0_2_box_2__menu__menuSub:hover .header_1_0_2_box_2__menu__menuSubBox {
                display: block;
                animation: opac 0.4s;
                }
                .header_1_0_2_box_2__menu__menuSub:hover > a {
                color: #e3a261;
                }
                .header_1_0_2_box_2__menu__menuSubBox {
                display: none;
                position: absolute;
                width: 100%;
                right: 0px;
                top: 30px;
                background: #0d4b8a;
                padding: 15px 25px;
                color: #fff;
                border-radius: 8px;
                }
                .header_1_0_2_box_2__menu__menuSubBox.padding {
                padding-top: 55px;
                }
                .header_1_0_2_box_2__menu__menuSubBox .row > .col-xl-3 > p {
                margin: 0;
                }
                .header_1_0_2_box_2__menu__menuSubBox ul {
                list-style: none;
                padding: 0;
                }
                .header_1_0_2_box_2__menu__menuSubBox ul.mnsub {
                padding: 42px 0 0;
                }
                .header_1_0_2_box_2__menu__menuSubBox ul li {
                border-bottom: 1px dotted rgba(255, 255, 255, 0.2);
                padding: 5px 0;
                font-size: 13px;
                }
                .header_1_0_2_box_2__menu__menuSubBox a {
                color: #fff;
                transition: 0.1s;
                }
                .header_1_0_2_box_2__menu__menuSubBox a:hover {
                color: rgba(255, 255, 255, 0.7);
                }
                .header_1_0_2_box_2__menu__menuSubTitle {
                text-transform: uppercase;
                font-size: 16px;
                font-weight: 600;
                position: relative;
                padding-bottom: 15px;
                margin-bottom: 10px;
                }
                .header_1_0_2_box_2__menu__menuSubTitle:after, .header_1_0_2_box_2__menu__menuSubTitle::before {
                content: "";
                display: block;
                position: absolute;
                }
                .header_1_0_2_box_2__menu__menuSubTitle:before {
                width: 80px;
                height: 3px;
                background: #fff;
                left: 0;
                bottom: -1px;
                }
                .header_1_0_2_box_2__menu__menuSubTitle:after {
                width: 100px;
                width: 100%;
                height: 1px;
                background: rgba(255, 255, 255, 0.2);
                left: 0;
                bottom: 0;
                }
                .header_1_0_2_box_2__menu__title {
                padding: 15px;
                font-weight: 600;
                font-size: 15px;
                position: relative;
                }
                .header_1_0_2_box_2__menu h3 {
                color: #fff;
                font-size: 15px;
                padding: 5px 0;
                text-transform: uppercase;
                border-bottom: 1px dotted #355b7d;
                position: relative;
                margin-bottom: 10px;
                margin-top: -44px;
                }
                .header_1_0_2_box_2__menu h3::before {
                content: "";
                display: block;
                position: absolute;
                left: 0;
                bottom: -2px;
                width: 70px;
                height: 3px;
                background: #fff;
                }
                .header_1_0_2_box_2__regist {
                border-radius: 34px;
                color: #fff;
                padding: 5px 20px 5px 20px;
                background: #EF4527;
                margin-left: 90px;
                font-size: 14px;
                font-weight: 600;
                }
                .header_1_0_2_box_2.active {
                display: block;
                animation: animateleft 0.4s;
                }
                .header_1_0_2_box_3 {
                background: rgba(0, 0, 0, 0.8);
                width: 100%;
                height: 100%;
                content: "";
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                z-index: 2;
                animation: opac 0.4s;
                }
                .header_1_0_2_box_3.active {
                display: block;
                }
                .header_1_0_2.menufix {
                animation: animatetop 0.4s;
                background: #fff;
                box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
                }
                @media (max-width: 1024px) {
                .header_1_0_2.menufix {
                    animation: none;
                }
                }
                .header_1_0_2.menufix .header_1_0_2_box_1 {
                display: none;
                }
                .header_1_0_2.menufix .header_1_0_2_box_2 {
                background-color: #1D1E4F;
                }
                .header_1_0_2.menufix .header_1_0_2_box_2__menu__title {
                color: #fff;
                }
        
                @media (max-width: 1024px) {
                .header_1_0_2 {
                    background-color: #fff;
                    height: 65px;
                }
                .header_1_0_2_box_1 .container {
                    justify-content: center;
                    position: relative;
                }
                .header_1_0_2_box_1__title {
                    display: none;
                }
                .header_1_0_2_box_1_left {
                    width: 100%;
                }
                .header_1_0_2_box_1_right {
                    display: none;
                }
                .header_1_0_2_box_1__regkham {
                    position: absolute;
                    background: #EF4324;
                    color: #fff;
                    text-transform: uppercase;
                    padding: 8px 30px;
                    border-radius: 10px;
                    right: 150px;
                    display: block;
                }
                .header_1_0_2_box_1__logo {
                    text-align: center;
                    width: 100px;
                    margin: 0 0 0 30px;
                    position: relative;
                    display: block;
                }
                .header_1_0_2_box_1__logo img {
                    position: absolute;
                    top: 10px;
                    left: -40px;
                    height: 70px;
                }
                .header_1_0_2_box_1__logo::after {
                    display: none;
                }
                .header_1_0_2_box_1__search__icon {
                    display: none;
                }
                .header_1_0_2_box_1 .iconMid {
                    display: block;
                }
                .header_1_0_2_box_1 .siteHeaderNav {
                    position: absolute;
                    right: 70px;
                    color: #565656;
                    font-size: 35px;
                }
                .header_1_0_2_box_1 .siteHeaderNav span {
                    font-size: 12px;
                    display: block;
                    margin-top: -5px;
                }
                .header_1_0_2_box_1 .siteHeaderCall {
                    position: absolute;
                    right: 0;
                    color: #565656;
                    font-size: 28px;
                    text-align: center;
                    line-height: 40px;
                    border-radius: 5px;
                    margin-top: 10px;
                }
                .header_1_0_2_box_1 .siteHeaderCall span {
                    font-size: 12px;
                    display: block;
                    margin-top: -10px;
                }
                .header_1_0_2_box_2 {
                    display: none;
                    width: 270px;
                    background: #fff;
                    position: fixed;
                    height: 100%;
                    left: 0;
                    top: 0;
                    z-index: 3;
                    overflow: auto;
                    padding-bottom: 20px;
                }
                .header_1_0_2_box_2 .container {
                    display: block;
                    width: 270px;
                }
                .header_1_0_2_box_2__logosb {
                    text-align: left;
                }
                .header_1_0_2_box_2__menu {
                    display: block;
                    margin: 30px 0;
                }
                .header_1_0_2_box_2__menu__menuSub {
                    position: relative;
                    padding: 7px 0;
                    border-bottom: 1px dashed #ccc;
                }
                .header_1_0_2_box_2__menu__menuSub:nth-child(1) {
                    display: none;
                }
                .header_1_0_2_box_2__menu__menuSub:last-child {
                    border: none;
                }
                .header_1_0_2_box_2__menu__menuSub .menu-icon {
                    display: block;
                    font-size: 11px;
                    color: #f26649;
                }
                .header_1_0_2_box_2__menu__menuSub .arr::before {
                    display: none;
                }
                .header_1_0_2_box_2__menu__menuSub:hover .arr::before {
                    display: none;
                }
                .header_1_0_2_box_2__menu__menuSub:hover .header_1_0_2_box_2__menu__menuSubBox {
                    display: none;
                }
                .header_1_0_2_box_2__menu__menuSub:hover > a {
                    color: #062d63;
                }
                .header_1_0_2_box_2__menu__menuSubBox {
                    position: inherit;
                    top: 0;
                    right: 0;
                    border-radius: 0;
                    width: 100%;
                    padding: 10px 15px;
                    background: #fff;
                    color: #000;
                }
                .header_1_0_2_box_2__menu__menuSubBox.padding {
                    padding-top: 0;
                }
                .header_1_0_2_box_2__menu__menuSubBox ul.ul {
                    padding: 0;
                }
                .header_1_0_2_box_2__menu__menuSubBox a {
                    color: #000;
                }
                .header_1_0_2_box_2__menu__menuSubTitle {
                    margin-top: 10px;
                }
                .header_1_0_2_box_2__menu h3 {
                    margin-bottom: 3px;
                    margin-top: 3px;
                    font-size: 14px;
                    color: #f69679;
                }
                .header_1_0_2_box_2__menu h3::before {
                    display: none;
                }
                .header_1_0_2_box_2__menu__title {
                    text-transform: uppercase;
                    font-size: 14px;
                }
                .header_1_0_2_box_2__regist {
                    margin-left: 40px;
                    padding: 10px 20px;
                }
                .header_1_0_2_box_2__logosb {
                    display: block;
                }
                .header_1_0_2.menufix {
                    background: #1D1E4F;
                }
                .header_1_0_2.menufix .header_1_0_2_box_1 {
                    display: block;
                }
                .header_1_0_2.menufix .header_1_0_2_box_2 {
                    background-color: #fff;
                }
                .header_1_0_2.menufix .header_1_0_2_box_2__menu__title {
                    color: #000;
                }
                }
                @media (max-width: 812px) {
                .header_1_0_2_box_1 .siteHeaderCall {
                    right: 10px;
                }
                }
                @media (max-width: 414px) {
                .header_1_0_2_box_1__logo img {
                    top: 20px;
                    left: -30px;
                    height: 50px;
                }
                .header_1_0_2_box_1__title {
                    color: #62D4FF;
                    position: absolute;
                    top: 90px;
                    display: flex;
                    left: 0;
                    width: 100%;
                    justify-content: center;
                    align-items: center;
                    background-color: #131439;
                    padding: 5px 0;
                }
                .header_1_0_2_box_1__title h2 {
                    font-size: 13px;
                    margin-top: 0;
                    padding-right: 10px;
                    margin-right: 10px;
                    border-right: 1px solid #62D4FF;
                }
                .header_1_0_2_box_1__title p {
                    margin-bottom: 0;
                }
                .header_1_0_2_box_1 .siteHeaderNav {
                    right: 45px;
                    font-size: 25px;
                }
                .header_1_0_2_box_1 .siteHeaderNav span {
                    font-size: 10px;
                }
                .header_1_0_2_box_1 .siteHeaderCall {
                    right: 10px;
                    margin-top: 4px;
                    font-size: 22px;
                }
                .header_1_0_2_box_1 .siteHeaderCall span {
                    margin-top: -17px;
                    font-size: 10px;
                }
                .header_1_0_2_box_1__regkham {
                    padding: 5px 10px;
                    right: 90px;
                    font-size: 13px;
                }
                }
                @media (max-width: 375px) {
                .header_1_0_2_box_1__title h2 {
                    font-size: 11px;
                }
                .header_1_0_2_box_1__title p {
                    font-size: 11px;
                }
                .header_1_0_2_box_1 .siteHeaderNav {
                    right: 40px;
                }
                .header_1_0_2_box_1__regkham {
                    right: 80px;
                    font-size: 12px;
                }
                }
                @media (max-width: 360px) {
                .header_1_0_2_box_1__regkham {
                    font-size: 11px;
                }
                }
                @media (max-width: 320px) {
                .header_1_0_2_box_1__title h2 {
                    font-size: 10px;
                }
                .header_1_0_2_box_1__title p {
                    font-size: 10px;
                }
                .header_1_0_2_box_1__logo {
                    margin-left: 20px;
                }
                .header_1_0_2_box_1__regkham {
                    font-size: 9px;
                    right: 70px;
                }
                .header_1_0_2_box_1 .siteHeaderNav span {
                    font-size: 9px;
                }
                }
            </style>
        ';

        add_action('wp_footer', 'header_1_0_2');
        function header_1_0_2(){ 
            echo '
                <script>
                function layoutHandler(){window.innerWidth<1025&&$(".mn1,.mn2,.mn3,.mn4,.mn5,.mn6,.mn7,.mn8,.mn9").click((function(){$(this).parent().find(".header_1_0_1_box_2__menu__menuSubBox,.header_1_0_2_box_2__menu__menuSubBox").toggle()})),window.innerWidth<1025&&$(".LP .siteHeaderMain a").click((function(){$(".LP .siteHeaderMain").removeClass("active"),$(".siteHeader-bg").removeClass("active")}))}layoutHandler(),$(".header_1_0_1_box_2__menu__menuSub .menu-icon,.header_1_0_2_box_2__menu__menuSub .menu-icon").click((function(){$(this).parent().find(".header_1_0_1_box_2__menu__menuSubBox,.header_1_0_2_box_2__menu__menuSubBox").toggle(),1==$(this).hasClass("icon-plus")?($(this).addClass("icon-minus"),$(this).removeClass("icon-plus")):($(this).removeClass("icon-minus"),$(this).addClass("icon-plus"))})),$(".siteHeaderNav").click((function(){$(".header_1_0_1_box_2,.header_1_0_2_box_2").addClass("active"),$(".header_1_0_1_box_3,.header_1_0_2_box_3").addClass("active")})),$(".header_1_0_1_box_3,.header_1_0_2_box_3").click((function(){$(".header_1_0_1_box_2,.header_1_0_2_box_2").removeClass("active"),$(".header_1_0_1_box_3,.header_1_0_2_box_3").removeClass("active")}));
                </script>
            ';           
        };
    }
?> 


<header class="header_1_0_2">

    <div class="header_1_0_2_box">

        <div class="header_1_0_2_box_1">
            <div class="container">
                <div class="header_1_0_2_box_1_left">
                    <div class="header_1_0_2_box_1__logo">
                        <a href="index.html">
                            <img src="<?php echo $path; ?>/images/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="header_1_0_2_box_1_right">
                    <div class="header_1_0_2_box_1__address">
                        <ul>
                            <li><i class="icon-calendar"></i>Thứ 2 - Chủ nhật  |  7h-17h</li>
                            <li><i class="icon-location"></i>16 Nguyễn Như Đổ, Văn Miếu, Hà Nội</li>
                        </ul>
                    </div>
                    <div class="header_1_0_2_box_1__call">
                        <h2>Tổng đài tư vấn</h2>
                        <p><a href="tell:1900633988">1900.633.988</a></p>
                    </div>
                    <div class="header_1_0_2_box_1__search">
                        <p><a href="" class="header_1_0_2_box_1__regtv">Đăng ký tư vấn</a></p>
                        <p>
                            <input type="text" placeholder="Tìm kiếm thông tin..." class="header_1_0_2_box_1__ser"> 
                            <button class="header_1_0_2_box_1__button"><i class="icon-search"></i></button>
                        </p>
                    </div>
                </div>

                <a href="#" class="header_1_0_2_box_1__regkham"> Đăng ký khám</a>
                <div class="iconMid siteHeaderNav">
                    <i class="icon-menu"></i>
                    <span>MENU</span>
                </div>
                <a href="#" class="iconMid siteHeaderCall btnnkhotline modal-btn" data-modal="search">
                    <i class="icon-search"></i>
                    <span>TÌM</span>
                </a>
            </div>
        </div>

        <div class="header_1_0_2_box_2">
            <div class="container">
                <a href="index.html" class="header_1_0_2_box_2__logosb"><img src="<?php echo $path; ?>/images/logo.png" alt=""></a>

                <ul class="header_1_0_2_box_2__menu">
                    <li class="header_1_0_2_box_2__menu__menuSub">
                        <a href="index.html" class="header_1_0_2_box_2__menu__title arr"><i class="icon-home-1"></i></a>
                    </li>

                    <?php
                        foreach( $field as $key2 => $value):  
                            foreach( $value as $key3 => $list):
                                $main_tt = explode("\n",  $list["title"]);
                                if( $list['acf_fc_layout'] == 'menu_don' ):
                                    echo '
                                        <li class="header_1_0_2_box_2__menu__menuSub">
                                            <a href="'.$main_tt[1].'" class="header_1_0_2_box_2__menu__title arr">
                                                '.$main_tt[0].'
                                            </a>
                                        </li>
                                    ';
                                elseif ( $list['acf_fc_layout'] == 'menu_da_cap' ):
                                    $main_tt = explode("\n",  $list["title"]);
                                    if($main_tt[3] == 'yes'):
                                        $padding = 'padding';
                                    elseif($main_tt[3] == 'no'):
                                        $padding = '';
                                    endif;
                                    echo '
                                        <li class="header_1_0_2_box_2__menu__menuSub">
                                            <a href="'.$main_tt[1].'" class="header_1_0_2_box_2__menu__title arr">'.$main_tt[0].'</a> 
                                                <i class="menu-icon icon-plus"></i>
                                                <div class="header_1_0_2_box_2__menu__menuSubBox '.$padding.'">
                                                    <div class="row">
                                    ';
                                    // echo '111111';
                                    
                                    $so_cot = $main_tt[2];
                                    if ($so_cot == ''):
                                        $so_cot = '1';
                                    endif;
                                    
                                    $main_ct = explode("&nbsp;",  $list["col1"]);
                                    if($so_cot == 1):
                                        $i = 12;
                                        for($j = 0; $j < 1; $j++){
                                            echo'
                                                <div class="col-xl-'.$i.'">
                                                    '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }
                                    elseif($so_cot == 2):
                                        $i = 6;
                                        for($j = 0; $j < 2; $j++){
                                            echo'
                                                <div class="col-xl-'.$i.'">
                                                    '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }

                                    elseif($so_cot == 3):
                                        $i = 4;
                                        for($j = 0; $j < 3; $j++){
                                            echo'
                                                <div class="col-xl-'.$i.'">
                                                    '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }
                                    elseif($so_cot == 4):

                                        $i = 3;
                                        for($j = 0; $j < 4; $j++){
                                            echo'
                                                <div class="col-xl-'.$i.'">
                                                    '.$main_ct[$j].'
                                                </div>
                                            ';
                                        }
                                       

                                    endif;
                                    echo'
                                                </div>
                                            </div>
                                        </li>
                                    ';

                                endif;
                            endforeach;
                        endforeach;
                    ?>

                </ul>
            </div>
        </div>

        <div class="header_1_0_2_box_3"></div>

        <div class="modal popupSearch_1_0_0" id="search" style="display:none;">
            <div class="modal-bg"></div>
            <div class="modal-box animate-zoom">
                <div class="modal-header">
                    <div class="modal-close">×</div>
                    <div class="popupSearch_1_0_0__title">Tìm Kiếm Nhanh</div>
                </div>
                <div class="modal-body">
                    <div class="popupSearch_1_0_0__search">
                        <input id="s" name="s" type="text" placeholder="Nhập từ khóa tìm kiếm">
                        <button type="submit"><i class="icon-search"></i></button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</header>