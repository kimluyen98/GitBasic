<?php
	$path = get_template_directory_uri();
    $path = $path.'/Module/Footer/footer_1_0_0';
    if($check == 0){
		$css_inline .= "
            <style>
                
                .footer_1_0_0__regft {
                    font-family: -apple-system, system-ui, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif
                }
        
                .footer_1_0_0 {
                    padding: 0 0 40px 0;
                    background: #222222;
                    display: table;
                    width: 100%;
                    font-size: 13px;
                    font-family: arial
                }
        
                .footer_1_0_0__social {
                    background: #0292cd;
                    color: #fff;
                    font-size: 18px;
                    padding: 25px 0;
                    text-transform: uppercase;
                    margin-bottom: 40px
                }
        
                .footer_1_0_0__contact {
                    position: absolute;
                    right: 0;
                    display: table
                }
        
                .footer_1_0_0__contact a {
                    display: inline-block;
                    width: 27px;
                    height: 20px;
                    margin: 0 10px;
                    background-position: center 0;
                    background-repeat: no-repeat
                }
        
                .footer_1_0_0__contact .facebook {
                    background-image: url($path/images/icon-mxh-fb.png)
                }
        
                .footer_1_0_0__contact .youtube {
                    background-image: url($path/images/icon-mxh-youtube.png)
                }
        
                .footer_1_0_0__contact .chat {
                    background-image: url($path/images/icon-mxh-chat.png)
                }
        
                .footer_1_0_0__contact .zalo {
                    background-image: url($path/images/icon-mxh-zalo.png)
                }
        
                .footer_1_0_0 .container {
                    position: relative
                }
        
                .footer_1_0_0__giayphep {
                    padding: 0;
                    color: #dddddd			
                }
                .footer_1_0_0__giayphep a{
                    color:#ddd;
                }
        
                .footer_1_0_0__giayphep p {
                    margin-top: 20px
                }
        
                .footer_1_0_0__box {
                    margin: 20px 0 0 -40px
                }
        
                .footer_1_0_0__info p {
                    background-position: 0 2px;
                    padding-left: 40px;
                    margin-bottom: 30px;
                    background-repeat: no-repeat
                }
        
                .footer_1_0_0__info p:nth-child(1) {
                    background-image: url($path/images/icon-map.png)
                }
        
                .footer_1_0_0__info p:nth-child(2) {
                    background-image: url($path/images/icon-mail.png)
                }
        
                .footer_1_0_0__info p:nth-child(3) {
                    background-image: url($path/images/icon-call.png)
                }
        
                .footer_1_0_0__info p:nth-child(4) {
                    background-image: url($path/images/icon-date.png)
                }
        
                .footer_1_0_0__info a {
                    display: block;
                    padding: 3px 0;
                    color: #ddd
                }
        
                .footer_1_0_0__map {
                    margin-left: -50px
                }
        
                .footer_1_0_0__regft {
                    display: none
                }
        
                @media (max-width: 1024px) {
                    .footer_1_0_0__logo img {
                        width: 180px
                    }
        
                    .footer_1_0_0__giayphep {
                        font-size: 12px;
                        padding: 10px 50px 0 20px
                    }
        
                    .footer_1_0_0__box {
                        margin: 10px 0 20px -20px;
                        font-size: 12px
                    }
        
                    .footer_1_0_0__info p {
                        margin-bottom: 20px
                    }
        
                    .footer_1_0_0__map img {
                        width: 100%
                    }
                }
        
                @media (max-width: 812px) {
                    .footer_1_0_0__map {
                        margin-left: 0
                    }
        
                    .footer_1_0_0__contact {
                        top: -20px
                    }
        
                    .footer_1_0_0 .col-md-6 {
                        width: 50%
                    }
                }
        
                @media (max-width: 414px) {
                    .footer_1_0_0__social {
                        padding: 15px 0 10px;
                        font-size: 15px;
                        text-align: center
                    }
        
                    .footer_1_0_0__map {
                        margin-left: 0
                    }
        
                    .footer_1_0_0__contact {
                        top: auto;
                        margin: 10px auto 0;
                        position: relative
                    }
        
                    .footer_1_0_0__box {
                        margin: 10px 0 20px 20px
                    }
        
                    .footer_1_0_0 .col-md-6 {
                        width: 100%
                    }
        
                    .footer_1_0_0__regft {
                        display: flex;
                        display: -webkit-flex;
                        width: 100%;
                        height: 60px;
                        position: fixed;
                        background: rgba(0, 0, 0, 0.5);
                        left: 0;
                        bottom: 0;
                        z-index: 2
                    }
        
                    .footer_1_0_0__regft a {
                        -webkit-flex: 1;
                        -ms-flex: 1;
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
        
                    .footer_1_0_0__regft a:hover,
                    .footer_1_0_0__regft a:focus {
                        text-decoration: none
                    }
        
                    .footer_1_0_0__regft a:nth-child(1) {
                        background: #00abe5;
                        box-shadow: 0px 3px 0px 0px #01639f
                    }
        
                    .footer_1_0_0__regft a:nth-child(2) {
                        background: #e23d3a;
                        margin-right: 10px;
                        box-shadow: 0px 2px 0px 0px #8f2725
                    }
                }
        
                @media (max-width: 375px) {
                    .footer_1_0_0__regft a:nth-child(2) {
                        font-size: 13px;
                        text-align: center;
                        padding-left: 0
                    }
                }
        
                @media (max-width: 320px) {
                    .footer_1_0_0__social {
                        font-size: 14px
                    }
                }
        
            </style>
		";	
			
	}
?>

<footer class="footer_1_0_0" itemscope="" itemtype="http://schema.org/WPFooter">

	<div class="footer_1_0_0__social">
		<div class="container">
			<div class="row">
				<div class="col-md-7">Khoa nam học | Bệnh viện đa khoa quốc tế Hồng Hà</div>
				<div class="col-md-5">
					<div class="footer_1_0_0__contact">
						<a href="https://www.facebook.com/benhvienhongha.com.vn/" target="_blank" rel="nofollow" class="facebook"></a>
						<a href="https://www.youtube.com/channel/UCm5XvglnqTJZ9wq1IGurpOA" target="_blank" rel="nofollow" class="youtube"></a>
						<a href="https://m.me/benhvienhongha.com.vn" target="_blank" rel="nofollow" class="chat"></a>
						<a href="https://zalo.me/1519646550927880045" target="_blank" rel="nofollow" class="zalo"></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6">
				<div class="footer_1_0_0__logo">
					<a href="#">
						<img src="<?php echo $path; ?>/images/logo-hongha.png" alt="">
					</a>
				</div>
				<div class="footer_1_0_0__giayphep">
					<p>Khoa nam học bệnh viện Hồng Hà <br>địa chỉ nam khoa uy tín số 1 tại Hà Nội</p>
					Giấy phép hoạt động số 181/BYT-GPHĐ
					<br>Chứng chỉ hành nghề số 003474/HNO-CCHN
					<p>Website : <a href="https://bacsinamhoc.vn">https://bacsinamhoc.vn</a></p>
				</div>
			</div>

			<div class="col-lg-4 col-md-6">
				<div class="footer_1_0_0__box">
					<div class="footer_1_0_0__info">
						<p>
							<a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+%C4%90a+Khoa+Qu%E1%BB%91c+T%E1%BA%BF+H%E1%BB%93ng+H%C3%A0/@21.02659,105.8369623,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x931a195055921e1e!8m2!3d21.02659!4d105.839151?hl=en-GB" rel="nofollow" target="_blank">16 Nguyễn Như Đổ, Văn Miếu,
								<br> Đống Đa, Hà Nội</a>
						</p>
						<p>
							<a href="mailto:contact@benhvienhongha.com.vn" target="_blank" rel="nofollow">contact@benhvienhongha.com.vn</a>
						</p>
						<p>
							<a href="tel:1900633988" target="_blank" rel="nofollow">1900.633.988</a>
						</p>
						<p>
							<a href="#" rel="nofollow">Giờ làm việc: Thứ Hai - Chủ Nhật
								<br> 07h - 20h</a>
						</p>
					</div>

				</div>

			</div>

			<div class="col-lg-4">
				<div class="footer_1_0_0__map">
					<a href="https://www.google.com/maps/place/B%E1%BB%87nh+Vi%E1%BB%87n+%C4%90a+Khoa+Qu%E1%BB%91c+T%E1%BA%BF+H%E1%BB%93ng+H%C3%A0/@21.02659,105.8369623,17z/data=!3m1!4b1!4m5!3m4!1s0x0:0x931a195055921e1e!8m2!3d21.02659!4d105.839151?hl=en-GB"
						target="_blank" rel="nofollow">
						<img src="<?php echo $path; ?>/images/h-map.jpg" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="footer_1_0_0__regft">
		<a href="tel:19006466" onclick="ga('send', 'event', 'Phone', 'Click', 'Hotline');">
			<i class="icon-phone"></i> 1900.6466</a>
		<a href="#form">
			<i class="icon-edit"></i> ĐĂNG KÝ DỊCH VỤ </a>
	</div>

</footer>

<!-- <div class="regft">
	<a href="javascript:void(0);" class="btncallme btndahl">
		<i class="icon-phone"></i> Gọi ngay</a>
</div> -->

<?php get_template_part('Module/Other/toolbar_1_0_0/toolbar_1_0_0'); ?>



