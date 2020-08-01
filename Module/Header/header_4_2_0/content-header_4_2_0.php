<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Header/header_4_2_0'; 
    if($check == 0){
        $css_inline .= '
            <style>
                .header_4_2_0 {
                    font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
                }
        
                a {
                    text-decoration: none
                }
        
                .header_4_2_0 {
                    position: fixed;
                    z-index: 9;
                    width: 100%;
                    top: 0;
                    background: #0D4686
                }
        
                .header_4_2_0 h4 {
                    color: #fff;
                    font-size: 15px;
                    padding: 5px 0;
                    text-transform: uppercase;
                    border-bottom: 1px dotted #a2cbff;
                    position: relative;
                    margin-bottom: 10px;
                    margin-top: 0
                }
        
                .header_4_2_0 h4::before {
                    content: "";
                    display: block;
                    position: absolute;
                    left: 0;
                    bottom: -2px;
                    width: 70px;
                    height: 3px;
                    background: #fff
                }
        
                .header_4_2_0__box {
                    display: flex;
                    justify-content: space-between;
                    align-items: center
                }
        
                .header_4_2_0__box-bg {
                    background: rgba(0, 0, 0, 0.8);
                    width: 100%;
                    height: 100%;
                    content: "";
                    display: none;
                    position: fixed;
                    top: 0;
                    left: 0;
                    z-index: 2;
                    animation: opac 0.4s
                }
        
                .header_4_2_0__box-bg.active {
                    display: block
                }
        
                .header_4_2_0__box__section {
                    display: flex;
                    align-items: center
                }
        
                .header_4_2_0__box__item {
                    padding: 35px 10px;
                    display: block;
                    font-size: 14px;
                    text-transform: uppercase;
                    cursor: pointer;
                    text-align: center;
                    color: #fff;
                    position: relative
                }
        
                .header_4_2_0__box__item-logosb {
                    display: none
                }
        
                .header_4_2_0__box__item-logosb img {
                    max-width: 90%;
                    margin: 20px 0 0
                }
        
                .header_4_2_0__box__item+.header_4_2_0__box__item {
                    margin-left: 5px
                }
        
                .header_4_2_0__boxMain.active {
                    display: block;
                    animation: animateleft 0.4s
                }
        
                .header_4_2_0__boxMain .menu {
                    display: flex;
                    list-style: none;
                    padding: 0;
                    margin: 0
                }
        
                .header_4_2_0__boxMain .menuSub:hover .arr::before {
                    display: block
                }
        
                .header_4_2_0__boxMain .menuSub:hover .menuSubBox {
                    display: block;
                    animation: opac 0.4s
                }
        
                .header_4_2_0__boxMain .menuSub:hover>a {
                    color: #e3a261
                }
        
                .header_4_2_0__boxMain .menuSubBox {
                    display: none;
                    position: absolute;
                    width: 80%;
                    right: 16px;
                    top: 90px;
                    background: #1862BD;
                    color: #fff;
                    border-radius: 8px
                }
        
                .header_4_2_0__boxMain .menuSubBox .row {
                    padding: 15px 25px
                }
        
                .header_4_2_0__boxMain .menuSubBox .row>.col-xl-3>p {
                    margin: 0
                }
        
                .header_4_2_0__boxMain .menuSubBox.padding {
                    padding-top: 40px
                }
        
                .header_4_2_0__boxMain .menuSubBox.padding h4 {
                    margin-top: -43px
                }
        
                .header_4_2_0__boxMain .menuSubBox ul {
                    list-style: none;
                    padding: 0
                }
        
                .header_4_2_0__boxMain .menuSubBox ul.mnsub {
                    padding: 42px 0 0
                }
        
                .header_4_2_0__boxMain .menuSubBox ul li {
                    border-bottom: 1px dotted rgba(255, 255, 255, 0.2);
                    padding: 5px 0;
                    font-size: 13px
                }
        
                .header_4_2_0__boxMain .menuSubBox ul li:last-child {
                    border: none
                }
        
                .header_4_2_0__boxMain .menuSubBox a {
                    color: #fff;
                    transition: 0.1s
                }
        
                .header_4_2_0__boxMain .menuSubBox a:hover {
                    color: rgba(255, 255, 255, 0.7)
                }
        
                .header_4_2_0__boxMain .menuSubBox .address {
                    display: flex;
                    justify-content: space-evenly;
                    align-items: center;
                    background: #07397D;
                    padding: 10px
                }
        
                .header_4_2_0__boxMain .menuSubBox .address span {
                    font-size: 14px
                }
        
                .header_4_2_0__boxMain .menuSubBox .address i {
                    color: #F26649
                }
        
                .header_4_2_0__boxMain .menuSubTitle {
                    text-transform: uppercase;
                    font-size: 16px;
                    font-weight: 600;
                    position: relative;
                    padding-bottom: 15px;
                    margin-bottom: 10px
                }
        
                .header_4_2_0__boxMain .menuSubTitle:after,
                .header_4_2_0__boxMain .menuSubTitle::before {
                    content: "";
                    display: block;
                    position: absolute
                }
        
                .header_4_2_0__boxMain .menuSubTitle:before {
                    width: 80px;
                    height: 3px;
                    background: #fff;
                    left: 0;
                    bottom: -1px
                }
        
                .header_4_2_0__boxMain .menuSubTitle:after {
                    width: 100px;
                    width: 100%;
                    height: 1px;
                    background: rgba(255, 255, 255, 0.2);
                    left: 0;
                    bottom: 0
                }
        
                .header_4_2_0__boxMain .search-2 {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-color: #f26649;
                    padding: 6px;
                    border-radius: 50%;
                    color: #fff;
                    width: 35px;
                    height: 35px;
                    margin: 40px auto 0
                }
        
                .header_4_2_0__boxMain .search-2 i {
                    display: flex;
                    justify-content: center;
                    align-items: center
                }
        
                .header_4_2_0__boxLogo {
                    height: 55px
                }
        
                .header_4_2_0__boxNav,
                .header_4_2_0__boxCall {
                    position: absolute;
                    top: 13px;
                    display: none
                }
        
                .header_4_2_0__boxNav {
                    font-size: 30px;
                    width: 40px;
                    height: 40px;
                    left: 5px;
                    color: #F26649;
                    padding-right: 35px;
                    border-right: 1px solid #eee
                }
        
                .header_4_2_0__box .search-1 {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    background-color: #f26649;
                    padding: 6px;
                    border-radius: 50%;
                    color: #fff;
                    width: 35px;
                    height: 35px;
                    margin: 40px auto 0;
                    display: none
                }
        
                .header_4_2_0__box .search-1 i {
                    display: flex;
                    justify-content: center;
                    align-items: center
                }
        
                .header_4_2_0__boxCall {
                    font-size: 20px;
                    width: 40px;
                    height: 40px;
                    right: -15px;
                    line-height: 16px;
                    border-radius: 100px;
                    background: #F26649;
                    color: #fff
                }
        
                .header_4_2_0__boxRegist,
                .header_4_2_0__boxPhone {
                    border-radius: 34px;
                    color: #fff;
                    padding: 5px 20px 5px 5px;
                    font-size: 14px;
                    font-weight: 600;
                    text-transform: uppercase
                }
        
                .header_4_2_0__boxRegist {
                    background: #F26649;
                    font-weight: 500;
                    font-size: 13px;
                    padding: 5px 13px
                }
        
                .header_4_2_0__boxPhone {
                    background: none;
                    color: #93BDF3;
                    padding-left: 24px;
                    padding-right: 15px;
                    position: relative
                }
        
                .header_4_2_0__boxPhone::before {
                    content: "";
                    background: url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABIAAAASCAYAAABWzo5XAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyFpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNS1jMDE0IDc5LjE1MTQ4MSwgMjAxMy8wMy8xMy0xMjowOToxNSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIChXaW5kb3dzKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4NzIwMUI3QTUxM0ExMUVBQThENDkwM0ZCOTlCNjFEQyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo4NzIwMUI3QjUxM0ExMUVBQThENDkwM0ZCOTlCNjFEQyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjg3MjAxQjc4NTEzQTExRUFBOEQ0OTAzRkI5OUI2MURDIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjg3MjAxQjc5NTEzQTExRUFBOEQ0OTAzRkI5OUI2MURDIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+x8atRQAAAZNJREFUeNqM1E8oBFEcwPGZRU7sReHgRO608n/8PYgcuSkHJ+XAgVzccHN1cCBOGzmIOPkbtXZrD0qhRAgXQhLK+L7tN3mmmdn91Sfvmbe/93vz3hvTtm1DxVLC8AsTM3jEAh68BoWM9KFmqsE07hFFflCiVVzD8khWizyMoxcvqP9Xtloay1qn3aX9vwn72mTFuJN+LvZQLcmOUoNIMuZKYsjAZmmrSm7xim58ylJjOJTEqdksn3czKn8/0INzrMnyDEmmYsNJdOqRRM0+Iu0vrCCCCUyhXZ4NoQ2F5mLcrqJxrCV5QhmefSo9Q7kUYYtoqC9ixGlcagNzpCK/GMQVwtKfRcLZtQ46m9rgJCrTnC9Tqvk7R1S1JTvlRAXmMziongdSbe231u/HnOvHRXJd6oJO9hsaXc8HcKB2Rd7JCYbl/FhBdy0mlenRgBu5PgWuQ2sFXVp1XVrw7trJsMdYlSwr6PbvotS1k16x7bz0oM+I+v50ym1PejzfkVP9ozrZGXyPloVabitKcIFJfdCvAAMAB0lfv6G3FUkAAAAASUVORK5CYII=") center 0 no-repeat;
                    display: block;
                    width: 20px;
                    height: 20px;
                    position: absolute;
                    left: 0px
                }
        
                .header_4_2_0 .modal .modal-title {
                    font-size: 20px;
                    text-align: center;
                    color: #F26649
                }
        
                .header_4_2_0 .modal .search {
                    width: 90%;
                    margin: 20px auto;
                    position: relative
                }
        
                .header_4_2_0 .modal .search input {
                    width: 100%;
                    padding: 5px 40px 5px 10px;
                    border-radius: 4px;
                    border: 1px solid #248de8;
                    background: #f2f8fd
                }
        
                .header_4_2_0 .modal .search button {
                    position: absolute;
                    top: 0;
                    right: 0;
                    height: 100%;
                    background: #248de8;
                    border: none;
                    width: 38px;
                    border-radius: 0 4px 4px 0;
                    color: #fff;
                    cursor: pointer
                }
        
                .header_4_2_0.menufix {
                    animation: animatetop 0.4s;
                    background: #0D4686;
                    box-shadow: 0 0 6px rgba(0, 0, 0, 0.1)
                }
        
                .header_4_2_0.menufix .header_4_2_0__box__item {
                    padding: 34px 10px
                }
        
                .header_4_2_0.menufix .header_4_2_0__boxLogo img {
                    transition: 0.3s
                }
        
                .header_4_2_0.menufix .header_4_2_0__boxMain .menuSubBox {
                    top: 85px
                }
        
                .header_4_2_0.menufix .header_4_2_0__boxMain .search-2 {
                    margin: 30px auto 0
                }
        
                @media (max-width: 1024px) {
                    body {
                        padding-top: 65px
                    }
        
                    .header_4_2_0 {
                        background-color: #0D4686;
                        height: 65px
                    }
        
                    .header_4_2_0 h4 {
                        margin-bottom: 3px;
                        margin-top: 3px;
                        font-size: 14px;
                        color: #f69679
                    }
        
                    .header_4_2_0 h4::before {
                        display: none
                    }
        
                    .header_4_2_0__box {
                        display: block
                    }
        
                    .header_4_2_0__box__section {
                        display: block;
                        width: 100%
                    }
        
                    .header_4_2_0__box__item {
                        padding: 9px 15px;
                        display: flex;
                        font-weight: 600;
                        border-top: 1px dotted #d4d4d4;
                        text-align: left;
                        color: #333
                    }
        
                    .header_4_2_0__box__item br {
                        display: none
                    }
        
                    .header_4_2_0__box__item-menuHome {
                        display: none
                    }
        
                    .header_4_2_0__box__item-logosb {
                        display: block;
                        padding-left: 10px;
                        text-align: center
                    }
        
                    .header_4_2_0__boxMain {
                        display: none;
                        width: 270px;
                        background: #fff;
                        position: fixed;
                        height: 100%;
                        left: 0;
                        top: 0;
                        z-index: 3;
                        overflow: auto;
                        padding-bottom: 20px
                    }
        
                    .header_4_2_0__boxMain .menu {
                        display: block;
                        padding-top: 30px
                    }
        
                    .header_4_2_0__boxMain .menuSub {
                        position: relative
                    }
        
                    .header_4_2_0__boxMain .menuSub .menu-icon {
                        display: block;
                        font-size: 11px;
                        color: #f26649;
                        width: 100%;
                        position: absolute;
                        right: 10px;
                        text-align: right
                    }
        
                    .header_4_2_0__boxMain .menuSub .arr::before {
                        display: none
                    }
        
                    .header_4_2_0__boxMain .menuSub:hover .arr::before {
                        display: none
                    }
        
                    .header_4_2_0__boxMain .menuSub:hover .menuSubBox {
                        display: none
                    }
        
                    .header_4_2_0__boxMain .menuSub:hover>a {
                        color: #062d63
                    }
        
                    .header_4_2_0__boxMain .menuSubBox {
                        position: inherit;
                        top: 0;
                        right: 0;
                        border-radius: 0;
                        width: 100%;
                        padding: 10px 15px
                    }
        
                    .header_4_2_0__boxMain .menuSubBox .row {
                        padding: 0
                    }
        
                    .header_4_2_0__boxMain .menuSubBox ul.mnsub {
                        padding: 0
                    }
        
                    .header_4_2_0__boxMain .menuSubBox .address {
                        display: none
                    }
        
                    .header_4_2_0__boxMain .menuSubBox.padding {
                        padding-top: 0
                    }
        
                    .header_4_2_0__boxMain .menuSubBox.padding h4 {
                        margin-top: 0
                    }
        
                    .header_4_2_0__boxMain .menuSubTitle {
                        margin-top: 10px
                    }
        
                    .header_4_2_0__boxMain .search-2 {
                        display: none
                    }
        
                    .header_4_2_0__boxLogo {
                        text-align: center;
                        width: 100px;
                        margin: 0 auto;
                        position: relative;
                        display: block
                    }
        
                    .header_4_2_0__boxLogo img {
                        position: absolute;
                        top: 10px;
                        left: 0;
                        height: 45px
                    }
        
                    .header_4_2_0__boxNav,
                    .header_4_2_0__boxCall {
                        display: flex
                    }
        
                    .header_4_2_0__box .search-1 {
                        display: flex;
                        position: absolute;
                        right: 45px;
                        top: -23px
                    }
        
                    .header_4_2_0__boxRegist,
                    .header_4_2_0__boxPhone {
                        margin: 0 5px;
                        display: block;
                        text-align: center;
                        border-radius: 6px;
                        padding: 8px
                    }
        
                    .header_4_2_0__boxPhone {
                        margin: 15px 10px;
                        background: #0D4686;
                        color: #fff
                    }
        
                    .header_4_2_0__boxPhone::before {
                        left: 70px
                    }
        
                    .header_4_2_0__boxRegist {
                        margin: 0 10px
                    }
        
                    .header_4_2_0.menufix {
                        animation: none
                    }
        
                    .header_4_2_0.menufix .header_4_2_0__boxPhone {
                        margin-top: 15px
                    }
        
                    .header_4_2_0.menufix .header_4_2_0__box__item {
                        padding: 9px 15px
                    }
        
                    .header_4_2_0.menufix .header_4_2_0__boxLogo {
                        margin-top: 0
                    }
        
                    .header_4_2_0.menufix .header_4_2_0__boxLogo img {
                        height: 45px
                    }
        
                    .header_4_2_0.menufix .header_4_2_0__boxMain .menuSubBox {
                        top: 0
                    }
                }
        
                @media (max-width: 812px) {
                    .header_4_2_0__boxMain .menuSubBox ul li:last-child {
                        border-bottom: 1px dotted rgba(255, 255, 255, 0.2)
                    }
        
                    .header_4_2_0__boxNav {
                        left: 20px
                    }
        
                    .header_4_2_0__boxCall {
                        right: 0
                    }
        
                    .header_4_2_0__box .search-1 {
                        right: 60px;
                        top: -25px;
                        width: 40px;
                        height: 40px
                    }
                }
        
                @media (max-width: 414px) {
                    .header_4_2_0__boxLogo {
                        width: 125px
                    }
        
                    .header_4_2_0__boxNav {
                        padding-right: 20px
                    }
        
                    .header_4_2_0__box .search-1 {
                        width: 35px;
                        height: 35px;
                        right: 10px
                    }
        
                    .header_4_2_0__boxCall {
                        right: 10px
                    }
                }
            </style>
        ';

        add_action('wp_footer', 'header_4_2_0');
        function header_4_2_0(){ 
            echo '
                <script>
                function layoutHandler(){window.innerWidth<1025&&$(".mn1,.mn2,.mn3,.mn4,.mn5,.mn6,.mn7,.mn8,.mn9,.arr").click((function(){$(this).parent().find(".menuSubBox").toggle()})),window.innerWidth<1025&&$(".LP .header_4_2_0__boxMain a").click((function(){$(".LP .header_4_2_0__boxMain").removeClass("active"),$(".header_4_2_0__box-bg").removeClass("active")}))}layoutHandler(),$(".menuSub .header_4_2_0__box__item .menu-icon").click((function(){$(this).parent().find(".menuSubBox").toggle(),1==$(this).hasClass("icon-angle-down")?($(this).addClass("icon-angle-up"),$(this).removeClass("icon-angle-down")):($(this).removeClass("icon-angle-up"),$(this).addClass("icon-angle-down"))})),$(".header_4_2_0__boxNav").click((function(){$(".header_4_2_0__boxMain").addClass("active"),$(".header_4_2_0__box-bg").addClass("active")})),$(".header_4_2_0__box-bg").click((function(){$(".header_4_2_0__boxMain").removeClass("active"),$(".header_4_2_0__box-bg").removeClass("active")})),jQuery(document).scroll((function(){scoll_top=jQuery(document).scrollTop(),height_header=$(".header_4_2_0").height()+100,scoll_top>=height_header?jQuery(".header_4_2_0").addClass("menufix"):jQuery(".header_4_2_0").removeClass("menufix")}));
                </script>
            ';           
        };
    }
?> 

<header class="header_4_2_0">
    <div class="container">
        <div class="header_4_2_0__box">
            <div class="header_4_2_0__box__section">
                <div class="header_4_2_0__boxLogo">
                    <a href="#page1">
                        <img src="<?php echo $field['image']; ?>" alt="">
                    </a>
                </div>
                <div class="iconMid header_4_2_0__boxNav"><i class="icon-menu"></i></div>
                <a href="#" class="iconMid header_4_2_0__boxCall btnnkhotline"><i class="icon-location-2"></i></a>
            </div>
            <div class="header_4_2_0__box__section header_4_2_0__boxMain">
                <a href="#page1" class="header_4_2_0__box__item-logosb"><img src="<?php echo $path; ?>/images/logosb.png" alt=""></a>

                <ul class="menu">

                    <?php
                        foreach( $field as $key2 => $value): 
                            $j=1;
                            foreach( $value as $key3 => $list):
                                $main_tt = explode("\n",  $list["title"]);
                                if( $list['acf_fc_layout'] == 'menu_don' ):
                                    echo '
                                        <li class="menuSub">
                                            <a href="'.$main_tt[1].'" class="header_4_2_0__box__item arr">'.$main_tt[0].'</a> 
                                        </li>
                                    ';
                                elseif( $list['acf_fc_layout'] == 'menu_sub' ):
                                    echo '
                                        <li class="menuSub"><a href="'.$main_tt[1].'">'.$main_tt[0].'<i class="menu-icon icon-angle-down"></i></a>
                                            <div class="dropdown-menu dropdown-menu-7">
                                                <article class="dd dd-7">
                                                    <div class="ddnav ddnav-7">
                                                        '.$list["col1"].'
                                                    </div>
                                                </article>
                                            </div>
                                        </li>
                                    ';
                                elseif ( $list['acf_fc_layout'] == 'menu_sub_full' ):
                                    $main_tt = explode("\n",  $list["title"]);
                                    $x = substr("$main_tt[3]", 0,-1);

                                    if($x == 'yes'):
                                        $padding = 'padding';
                                    elseif($x == 'no'):
                                        $padding = '';
                                    endif;

                                    echo '
                                        <li class="menuSub">
                                            <a href="'.$main_tt[1].'" class="header_4_2_0__box__item arr">'.$main_tt[0].'<i class="menu-icon icon-angle-down"></i></a> 
                                                <div class="menuSubBox '.$padding.'">
                                                    <div class="row">
                                    ';
                                    
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
                                        
                                    elseif($so_cot == 'auto'):
                                        echo'
                                            '.$list["col1"].'                                                
                                        ';

                                    endif;
                                    echo'
                                            </div>
                                            <div class="address">
                                                <span> <i class="icon-location"></i> '.$main_tt[4].' </span>
                                                <span> <i class="icon-location"></i> '.$main_tt[5].' </span>
                                            </div>
                                        </div>
                                    </li>
                                    ';
                                endif;
                                $j++;
                            endforeach;
                        endforeach;
                    ?>
                    
                </ul>

                <a href="tel:<?php echo $field['image']; ?>" class="header_4_2_0__boxPhone btnnkhotline btncallnow"><?php echo $field['hotline']; ?></a>
                <a href="#pageReg" class ="header_4_2_0__boxRegist btn">Tư vấn miễn phí</a>
            </div>
            <div class="header_4_2_0__box-bg"></div>
        </div>
    </div>
</header>