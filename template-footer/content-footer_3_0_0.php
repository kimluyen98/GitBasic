<?php
	$path = get_template_directory_uri();
    $path = $path.'/Module/Footer/footer_3_0_0';
    if($check == 0){
		$css_inline .= "
            <style>
                
                .footer_3_0_0 {
                    background: #156953 url($path/images/ft-bg.jpg) center 0 no-repeat;
                    line-height: 20px;
                    font-family: Arial, sans-serif;
                    padding: 0;
                    display: table;
                    width: 100%;
                    padding: 50px 0 82px;
                    color: #fff;
                    font-size: 14px
                }
        
                @media (max-width: 1024px) {
                    .footer_3_0_0 {
                        background-image: url($path/images/ft-bg-2.jpg);
                        background-position: right bottom;
                        padding-bottom: 50px;
                        font-size: 12px
                    }
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 {
                        padding-bottom: 20px
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 {
                        padding: 40px 0 65px;
                        background-image: url($path/images/ft-bg-3.jpg)
                    }
                }
        
                @media (max-width: 375px) {
                    .footer_3_0_0 {
                        font-size: 11px
                    }
                }
        
                .footer_3_0_0 .ft_pc {
                    display: block
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_pc {
                        display: none
                    }
                }
        
                .footer_3_0_0 .ft_mb {
                    display: none
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_mb {
                        display: block
                    }
                }
        
                .footer_3_0_0 .ft_ipad {
                    display: none
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ipad {
                        display: block
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ipad {
                        display: none
                    }
                }
        
                .footer_3_0_0 a {
                    color: #fff;
                    text-decoration: none
                }
        
                .footer_3_0_0 .ft_logo {
                    padding-left: 20px
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_logo {
                        padding-left: 0
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_logo {
                        display: block;
                        text-align: center
                    }
                }
        
                .footer_3_0_0 .ft_ct {
                    max-width: 1150px;
                    margin: 0 auto
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ct {
                        max-width: 700px
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ct {
                        margin: 0 20px
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_row {
                    display: table;
                    width: 100%
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ct .ft_row {
                        display: block
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_col {
                    float: left;
                    width: 33%
                }
        
                @media (max-width: 1024px) {
                    .footer_3_0_0 .ft_ct .ft_col {
                        width: 50%
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ct .ft_col {
                        width: 100%
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_tt {
                    text-transform: uppercase;
                    color: #fff;
                    padding: 10px 0 15px;
                    white-space: nowrap;
                    font-size: 15px
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ct .ft_tt {
                        font-size: 12px
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ct .ft_tt {
                        padding: 5px 0 10px;
                        line-height: 25px
                    }
                }
        
                @media (max-width: 375px) {
                    .footer_3_0_0 .ft_ct .ft_tt {
                        font-size: 12px
                    }
                }
        
                @media (max-width: 375px) {
                    .footer_3_0_0 .ft_ct .ft_tt {
                        font-size: 11px
                    }
                }
        
                @media (max-width: 320px) {
                    .footer_3_0_0 .ft_ct .ft_tt {
                        line-height: 20px;
                        font-size: 10px
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_tt-1 {
                    padding: 0 0 24px
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ct .ft_tt-1 {
                        padding: 15px 0 10px
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_tt2 {
                    text-transform: uppercase;
                    color: #d2a138;
                    font-size: 13px;
                    padding-bottom: 19px;
                    padding-left: 2px;
                    font-weight: 600
                }
        
                @media (max-width: 1024px) {
                    .footer_3_0_0 .ft_ct .ft_box1 {
                        padding-left: 40px
                    }
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ct .ft_box1 {
                        padding-left: 0
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_slogan {
                    padding: 29px 0 10px 20px;
                    font-size: 11px;
                    font-weight: 600;
                    color: #bbc1bf;
                    text-transform: uppercase;
                    white-space: nowrap
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_slogan {
                        padding-left: 0
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_slogan {
                        padding: 15px 10px 0px;
                        text-align: center
                    }
                }
        
                @media (max-width: 320px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_slogan {
                        font-size: 10px;
                        padding: 15px 0 0
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_mxh {
                    margin: 0 0 18px;
                    display: table
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_mxh {
                        margin: 15px 0
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_mxh {
                        margin: 0 auto 20px;
                        text-align: left
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_mxh a {
                    display: block;
                    width: 53px;
                    height: 52px;
                    float: left;
                    margin-left: 10px
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_mxh a {
                        margin-left: 0
                    }
                }
        
                @media (max-width:414px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_mxh a {
                        margin-left: 0px;
                        margin-right: 10px
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_mxh a.social {
                    background: url($path/images/icon_mxh.png)
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_mxh a.social-facebook {
                    background-position: 0 0
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_mxh a.social-youtube {
                    background-position: 0 -65px
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_mxh a.social-zalo {
                    background-position: 0 -199px
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_mxh a.social-message {
                    background-position: 0 -131px
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_call {
                    font-size: 13px
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_call table {
                    font-size: 13px;
                    color: #fff
                }
        
                @media (max-width: 1024px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_call table {
                        margin-bottom: 120px
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_call table {
                        margin-bottom: 0
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_call td {
                    padding: 8px 10px 0 15px;
                    vertical-align: top
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_call td {
                        padding: 0 0 5px
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_call td:nth-child(1) {
                        padding-right: 10px
                    }
                }
        
                @media (max-width: 360px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_call td:nth-child(1) {
                        font-size: 12px
                    }
                }
        
                @media (max-width: 320px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_call td:nth-child(1) {
                        padding-right: 0
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box1 .ft_cp {
                    font-size: 12px;
                    margin-top: 60px;
                    text-align: left;
                    padding-left: 20px;
                    color: #e8e8e8d9
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_cp {
                        margin-top: 2px;
                        font-size: 10px
                    }
        
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_cp br {
                        display: none
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_cp {
                        margin: 20px 0;
                        padding-left: 0
                    }
        
                    .footer_3_0_0 .ft_ct .ft_box1 .ft_cp br {
                        display: none
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box2 table,
                .footer_3_0_0 .ft_ct .ft_box3 table {
                    width: 100%;
                    font-size: 14px
                }
        
                .footer_3_0_0 .ft_ct .ft_box2 table td,
                .footer_3_0_0 .ft_ct .ft_box3 table td {
                    vertical-align: top;
                    line-height: 20px
                }
        
                @media (max-width: 320px) {
        
                    .footer_3_0_0 .ft_ct .ft_box2 table td,
                    .footer_3_0_0 .ft_ct .ft_box3 table td {
                        font-size: 11px
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box2 table td.binhDuong,
                .footer_3_0_0 .ft_ct .ft_box3 table td.binhDuong {
                    line-height: 28px
                }
        
                @media (max-width: 375px) {
        
                    .footer_3_0_0 .ft_ct .ft_box2 table td.binhDuong,
                    .footer_3_0_0 .ft_ct .ft_box3 table td.binhDuong {
                        font-size: 12px;
                        line-height: 24px
                    }
                }
        
                @media (max-width: 360px) {
        
                    .footer_3_0_0 .ft_ct .ft_box2 table td.binhDuong,
                    .footer_3_0_0 .ft_ct .ft_box3 table td.binhDuong {
                        font-size: 11px
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box2 table td a,
                .footer_3_0_0 .ft_ct .ft_box3 table td a {
                    display: block;
                    padding: 0 0 15px;
                    line-height: 20px
                }
        
                @media (max-width: 414px) {
        
                    .footer_3_0_0 .ft_ct .ft_box2 table td a,
                    .footer_3_0_0 .ft_ct .ft_box3 table td a {
                        padding: 0 0 5px 10px
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box2 table td:nth-child(1),
                .footer_3_0_0 .ft_ct .ft_box3 table td:nth-child(1) {
                    text-transform: uppercase;
                    color: #fff;
                    width: 90px;
                    padding-left: 15px;
                    font-size: 13px;
                    background: url($path/images/ft-map.png) 0 4px no-repeat
                }
        
                @media (max-width: 1024px) {
        
                    .footer_3_0_0 .ft_ct .ft_box2 table td:nth-child(1),
                    .footer_3_0_0 .ft_ct .ft_box3 table td:nth-child(1) {
                        width: 110px
                    }
                }
        
                @media (max-width: 375px) {
        
                    .footer_3_0_0 .ft_ct .ft_box2 table td:nth-child(1),
                    .footer_3_0_0 .ft_ct .ft_box3 table td:nth-child(1) {
                        width: 90px
                    }
                }
        
                @media (max-width: 320px) {
        
                    .footer_3_0_0 .ft_ct .ft_box2 table td:nth-child(1),
                    .footer_3_0_0 .ft_ct .ft_box3 table td:nth-child(1) {
                        width: 60px;
                        font-size: 9px
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box2 table td:nth-child(2) a,
                .footer_3_0_0 .ft_ct .ft_box3 table td:nth-child(2) a {
                    display: block
                }
        
                .footer_3_0_0 .ft_ct .ft_box2 table td span,
                .footer_3_0_0 .ft_ct .ft_box3 table td span {
                    color: #d2a138
                }
        
                .footer_3_0_0 .ft_ct .ft_box2 {
                    padding-left: 15px;
                    margin-right: -30px
                }
        
                @media (max-width: 1024px) {
                    .footer_3_0_0 .ft_ct .ft_box2 {
                        margin-right: 0
                    }
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ct .ft_box2 {
                        padding-left: 0;
                        margin-right: 0
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ct .ft_box2 {
                        padding-top: 10px
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box3 {
                    float: right;
                    padding-top: 50px
                }
        
                @media (max-width: 1024px) {
                    .footer_3_0_0 .ft_ct .ft_box3 {
                        width: 97%;
                        padding-top: 20px
                    }
                }
        
                @media (max-width: 812px) {
                    .footer_3_0_0 .ft_ct .ft_box3 {
                        padding-top: 10px;
                        width: 100%
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_3_0_0 .ft_ct .ft_box3 {
                        padding-top: 10px;
                        width: 100%
                    }
                }
        
                @media (max-width: 360px) {
                    .footer_3_0_0 .ft_ct .ft_box3 {
                        padding-top: 0px
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box3 p {
                    margin: 5px 0 15px;
                    font-size: 13px
                }
        
                .footer_3_0_0 .ft_ct .ft_box3 p b {
                    text-transform: uppercase;
                    display: inline-block;
                    width: 72px;
                    color: #fff;
                    font-weight: normal
                }
        
                @media (max-width: 320px) {
                    .footer_3_0_0 .ft_ct .ft_box3 p b {
                        font-size: 11px
                    }
                }
        
                .footer_3_0_0 .ft_ct .ft_box3 .ft_fanpage {
                    margin-top: 20px
                }
        
                .regft {
                    display: -webkit-flex;
                    -ms-flex: 1;
                    width: 100%;
                    height: 60px;
                    position: fixed;
                    background: rgba(0, 0, 0, 0.5);
                    left: 0;
                    bottom: 0;
                    z-index: 2;
                    display: none
                }
        
                @media (max-width: 414px) {
                    .regft {
                        display: flex
                    }
                }
        
                .regft a {
                    flex: 1;
                    margin: 10px 0 10px 10px;
                    height: 40px;
                    line-height: 40px;
                    color: #fff;
                    text-align: left;
                    border-radius: 4px;
                    font-size: 15px;
                    font-weight: normal;
                    text-transform: uppercase;
                    padding-left: 20px
                }
        
                .regft a:nth-child(1) {
                    background: #107359;
                    box-shadow: 0px 3px 0px 0px #10384a
                }
        
                .regft a:nth-child(2) {
                    background: #e23d3a;
                    margin-right: 10px;
                    box-shadow: 0px 2px 0px 0px #8f2725
                }
        
                @media (max-width: 360px) {
                    .regft a:nth-child(2) {
                        margin-right: 20px
                    }
                }
        
                .kq {
                    background: #1A8065;
                    position: fixed;
                    left: 0;
                    bottom: 0;
                    width: 100%;
                    color: #fff;
                    z-index: 999;
                    padding: 2px 0 0;
                    font-size: 13px
                }
        
                @media (max-width: 812px) {
                    .kq {
                        display: block;
                        position: relative;
                        left: auto;
                        bottom: auto;
                        z-index: 2
                    }
                }
        
                .kq p {
                    margin: 0
                }
        
            </style>
		";	
			
	}
?>

<div class="kq">
    <div class="container">
        <p>(*) Kết quả tùy thuộc cơ địa của mỗi người</p>
    </div>
</div>

<footer class="footer_3_0_0">
    <div class="ft_ct">
        <div class="ft_row">
            <div class="ft_col ft_col1">
                <div class="ft_box1"> <a class="ft_logo" href="#"><img src="<?php echo $path; ?>/images/logo-ft.svg"
                        alt="Logo Dong A"></a>
                    <div class="ft_slogan">Số CCHN: 00378/BP-CCHN / QĐ 238/BYT - GPHĐ - Bộ Y Tế</div>
                    <div class="ft_mxh"> <a class="social social-facebook" title="Facebook" href="https://www.facebook.com/ThamMyDongA/"
                        rel="nofollow" target="_blank"></a> <a class="social social-youtube" title="Youtube" href="https://www.youtube.com/user/thammyviendonga"
                        rel="nofollow" target="_blank"></a> <a class="social social-zalo" title="Zalo" href="https://zalo.me/878201671944129168"
                        target="_blank" rel="nofollow"></a> </div>
                    <div class="ft_call">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Tư vấn bác sĩ (24/7)</td>
                                    <td><a href="tel:19006499">1900.6499</a></td>
                                </tr>
                                <tr>
                                    <td>Di động</td>
                                    <td><a href="tel:0962778866">0962.77.88.66</a></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><a href="mailto:tuvan@benhvienthammydonga.vn">tuvan@benhvienthammydonga.vn</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="ft_col ft_col2">
                <div class="ft_box2">
                    <div class="ft_tt">Bệnh viện THẨM MỸ ĐÔNG Á</div>
                    <table>
                        <tbody>
                            <tr>
                                <td>tp. HCM</td>
                                <td> <a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+Th%E1%BA%A9m+M%E1%BB%B9+%C4%90%C3%B4ng+%C3%81/@10.756913,106.6746869,17z/data=!3m1!4b1!4m5!3m4!1s0x31752fadb9c0c4d7:0x58f1d79860f8a94e!8m2!3d10.7569077!4d106.6768756" rel="nofollow" target="_blank" title="Thẩm mỹ viện đông á hồ chí minh"><span>*</span> Số 218
                                        Nguyễn Trãi, Phường 3, Q.5</a>  </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    <div class="ft_tt ft_tt-1">HỆ THỐNG  CHI NHÁNH THẨM MỸ VIỆN ĐÔNG Á</div>
                    <div class="ft_tt2">Miền Nam</div>
                    <table>
                        <tbody>
                            <tr>
                                <td>tp. HCM</td>
                                <td> <a href="https://www.google.com/maps/place/Th%E1%BA%A9m+m%E1%BB%B9+vi%E1%BB%87n+%C4%90%C3%B4ng+%C3%81+Tp.+H%E1%BB%93+Ch%C3%AD+Minh/@10.774084,106.678228,15z/data=!4m2!3m1!1s0x0:0xcb98d62b47852265?sa=X&amp;ved=0ahUKEwiI0_LSmrHPAhWMuI8KHd4wBmQQ_BIIlAEwCg"
                                    rel="nofollow" target="_blank" title="Thẩm mỹ viện đông á hồ chí minh"><span>*</span> Số 69A Đường 3 tháng
                                        2, Q. 10</a> </td>
                            </tr>
                            <tr>
                                <td>CẦN THƠ</td>
                                <td> <a href="https://www.google.com/maps/place/Th%E1%BA%A9m+M%E1%BB%B9+Vi%E1%BB%87n+%C4%90%C3%B4ng+%C3%81+t%E1%BA%A1i+C%E1%BA%A7n+Th%C6%A1/@10.0344324,105.7772952,17z/data=!3m1!4b1!4m5!3m4!1s0x31a0881fa154ceb1:0x69d1a661d9c1a59a!8m2!3d10.0344324!4d105.7794839"
                                    rel="nofollow" target="_blank"><span>*</span> Số 28 Lý Tự Trọng, Q. Ninh Kiều</a> </td>
                            </tr>
                            <tr>
                                <td>BÌNH DƯƠNG</td>
                                <td class="binhDuong"> <a href="https://www.google.com/maps/place/Th%E1%BA%A9m+M%E1%BB%B9+Vi%E1%BB%87n+%C4%90%C3%B4ng+%C3%81+B%C3%ACnh+D%C6%B0%C6%A1ng/@10.976198,106.670271,15z/data=!4m5!3m4!1s0x0:0x23bb636348252634!8m2!3d10.976198!4d106.670271" target="_blank" rel="nofollow"><span>*</span> Số 12 lô NP1 TTTM Becamex <br>Đại lộ Bình Dương - TP. Thủ Dầu
                                        Một </a> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="ft_col ft_col3">
                <div class="ft_box3">
                    <div class="ft_tt2">Miền BắC</div>
                    <table>
                        <tbody>
                            <tr>
                                <td>Hà Nội</td>
                                <td> <a href="https://www.google.com/maps/place/Th%E1%BA%A9m+m%E1%BB%B9+vi%E1%BB%87n+%C4%90%C3%B4ng+%C3%81+H%C3%A0+N%E1%BB%99i/@21.0316652,105.8200869,16z/data=!4m2!3m1!1s0x0:0x52e35f35f12a3742?hl=vi"
                                    rel="nofollow" target="_blank"><span>*</span> Số 212 Kim Mã, Q. Ba Đình</a> </td>
                            </tr>
                            <tr>
                                <td>Hải Phòng</td>
                                <td> <a href="https://www.google.com/maps/place/Th%E1%BA%A9m+M%E1%BB%B9+Vi%E1%BB%87n+%C4%90%C3%B4ng+%C3%81+H%E1%BA%A3i+Ph%C3%B2ng/@20.8513067,106.673664,17z/data=!4m8!1m2!2m1!1zdGjhuqltIG3hu7kgdmnhu4duIMSRw7RuZyDDoSBo4bqjaSBwaMOybmc!3m4!1s0x0:0x9e8f1b1211d7b17c!8m2!3d20.8499068!4d106.6738531"
                                    rel="nofollow" target="_blank"><span>*</span> Số 378 Tô Hiệu, Q. Lê Chân</a> </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="ft_tt2">Miền tRUNG</div>
                    <table>
                        <tbody>
                            <tr>
                                <td>đÀ NẴNG</td>
                                <td> <a href="https://www.google.com/maps/place/Th%E1%BA%A9m+m%E1%BB%B9+vi%E1%BB%87n+%C4%90%C3%B4ng+%C3%81+Tp.+%C4%90%C3%A0+N%E1%BA%B5ng/@16.0673928,108.2103845,15.5z/data=!4m8!1m2!2m1!1zdGjhuqltIG3hu7kgdmnhu4duIMSRw7RuZyDDoSDEkcOgIG7hurVuZw!3m4!1s0x3142184aee93eb0b:0x4f3eaaf6d964cc87!8m2!3d16.0666918!4d108.2120517"
                                    rel="nofollow" target="_blank"><span>*</span> Số 293 Hùng Vương, Q. Thanh Khê</a> </td>
                            </tr>
                            <tr>
                                <td>nghệ an</td>
                                <td> <a href="https://www.google.com/maps/place/Th%E1%BA%A9m+M%E1%BB%B9+Vi%E1%BB%87n+%C4%90%C3%B4ng+%C3%81+t%E1%BA%A1i+Vinh/@18.6783225,105.6857086,15z/data=!4m5!3m4!1s0x0:0xa2dbf32eeba5848b!8m2!3d18.6783225!4d105.6857086"
                                    rel="nofollow" target="_blank"><span>*</span> Số 148 Nguyễn Văn Cừ, TP. Vinh</a> </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="regft">
    <a href="javascript:void(0)" class="btndahl"><i class="icon-phone"></i> 1900.6499</a>
    <a href="#" class="btnda1tv"><i class="icon-edit"></i> ĐẶT HẸN </a>
</div>





