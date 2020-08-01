<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Other/tool_info_3_0_0';

	if($check == 0){
		echo '
			<style>
                a {
                    text-decoration: none
                }
                
                .tool_info_3_0_0 {
                    background: rgba(220, 230, 237, 0.8);
                    position: fixed;
                    top: 130px;
                    right: 0;
                    z-index: 1;
                    text-align: center;
                    padding: 10px 5px
                }
                
                @media (max-width: 1440px) {
                    .tool_info_3_0_0 {
                        top: 120px;
                        padding: 5px
                    }
                }
                
                @media (max-width: 1024px) {
                    .tool_info_3_0_0 {
                        top: 160px;
                        display: none
                    }
                }
                
                .tool_info_3_0_0__title {
                    padding-bottom: 5px;
                    margin-bottom: 7px;
                    border-bottom: 2px solid #ccc;
                    color: #343434;
                    font-weight: 600;
                    font-size: 12px
                }
                
                @media (max-width: 1440px) {
                    .tool_info_3_0_0__title {
                        font-size: 12px
                    }
                }
                
                .tool_info_3_0_0__box .dv {
                    display: block;
                    cursor: pointer
                }
                
                @media (max-width: 1440px) {
                    .tool_info_3_0_0__box .dv {
                        font-size: 12px
                    }
                }
                
                .tool_info_3_0_0__box img {
                    border-radius: 50%;
                    width: 35%;
                    display: block;
                    margin: 0 auto
                }
                
                @media (max-width: 1440px) {
                    .tool_info_3_0_0__box img {
                        width: 29%
                    }
                }
                
                .tool_info_3_0_0__box p {
                    font-size: 11px;
                    margin-bottom: 5px
                }
                
                @media (max-width: 1440px) {
                    .tool_info_3_0_0__box p {
                        font-size: 10px
                    }
                }
                
                .tool_info_3_0_0__box .dv {
                    position: relative
                }
                
                .tool_info_3_0_0__box .dv:hover .detail {
                    display: block
                }
                
                .tool_info_3_0_0__box .dv .detail {
                    box-shadow: 3px 4px 4px #ccc
                }
                
                .tool_info_3_0_0__box .dv .detail p {
                    font-size: 14px;
                    color: #000;
                    margin: 0
                }
                
                .tool_info_3_0_0__box .dv .detail b {
                    text-transform: uppercase
                }
                
                .tool_info_3_0_0__box .dv .detail::after {
                    content: "";
                    display: block;
                    width: 0;
                    height: 0;
                    border-top: 10px solid transparent;
                    border-bottom: 10px solid transparent;
                    border-left: 10px solid #fff;
                    position: absolute
                }
                
                .tool_info_3_0_0__box .dv .address-detail {
                    position: absolute;
                    left: -320px;
                    top: -10px;
                    background: #fff;
                    padding: 10px;
                    border-radius: 5px;
                    display: none
                }
                
                .tool_info_3_0_0__box .dv .address-detail::after {
                    content: "";
                    right: -10px;
                    top: 20px
                }
                
                .tool_info_3_0_0__box .dv .hotline-detail {
                    position: absolute;
                    left: -126px;
                    top: 0px;
                    background: #fff;
                    padding: 10px;
                    border-radius: 5px;
                    display: none
                }
                
                .tool_info_3_0_0__box .dv .hotline-detail::after {
                    content: "";
                    right: -10px;
                    top: 12px
                }
                
                .tool_info_3_0_0__box .dv .viber-detail {
                    position: absolute;
                    left: -118px;
                    top: 0px;
                    background: #fff;
                    padding: 10px;
                    border-radius: 5px;
                    display: none
                }
                
                .tool_info_3_0_0__box .dv .viber-detail::after {
                    content: "";
                    right: -10px;
                    top: 22px
                }
                
                .tool_info_3_0_0__box .dv .zalo-detail {
                    position: absolute;
                    left: -118px;
                    top: 0px;
                    background: #fff;
                    padding: 10px;
                    border-radius: 5px;
                    display: none
                }
                
                .tool_info_3_0_0__box .dv .zalo-detail::after {
                    content: "";
                    right: -10px;
                    top: 22px
                }
                
                .tool_info_3_0_0__box .dv .tuvan-detail {
                    position: absolute;
                    left: auto;
                    right: 75px;
                    top: -120px;
                    background: #fff;
                    padding: 20px;
                    border-radius: 5px;
                    display: none;
                    box-shadow: 3px 3px 3px #ccc
                }
                
                .tool_info_3_0_0__box .dv .tuvan-detail::after {
                    content: "";
                    right: -10px;
                    top: 130px
                }
                
                .tool_info_3_0_0__box .dv .tuvan-detail input {
                    background: #EAEAEA;
                    border: none;
                    margin-bottom: 5px;
                    padding: 10px 100px 10px 10px;
                    border-radius: 5px
                }
                
                .tool_info_3_0_0__box .dv .tuvan-detail a {
                    background: #F2664B;
                    color: #fff;
                    padding: 10px 0;
                    width: 100%;
                    display: block;
                    border-radius: 5px;
                    text-transform: uppercase
                }
			</style>
		';
	}
	
?>

<div class="tool_info_3_0_0">
    <div class="tool_info_3_0_0__title">
        Thông tin <br> liên hệ
    </div>
    
    <div class="tool_info_3_0_0__box">
        <div class="dv address">
            <img src="<?php echo $path; ?>/images/tool-1.png" alt="">
            <p>Địa chỉ</p>
            <div class="detail address-detail">
                <p><b>Hà nội:</b> 190 Trường Chinh, Đống Đa</p>
                <p><b>Sài gòn:</b> 84A Bà Huyện Thanh Quan, P.9, Q.3</p>
            </div>
        </div>
        <div class="dv hotline">
            <img src="<?php echo $path; ?>/images/tool-2.png" alt="">
            <p>Hotline</p>
            <div class="detail hotline-detail">
                <p>+842473006466</p>
            </div>
        </div>
        <div class="dv viber">
            <img src="<?php echo $path; ?>/images/tool-3.png" alt="">
            <p>Viber</p>
            <div class="detail viber-detail">
                <p>+84969999777</p>
                <p>+84948449988</p>
            </div>
        </div>
        <div class="dv zalo">
            <img src="<?php echo $path; ?>/images/tool-5.png" alt="">
            <p>Zalo</p>
            <div class="detail zalo-detail">
                <p>+84968999777</p>
                <p>+84969999777</p>
            </div>
        </div>
        <div class="dv facebook">
            <img src="<?php echo $path; ?>/images/tool-4.png" alt="">
            <p>Facebook</p>
        </div>
        <div class="dv tuvan">
            <img src="<?php echo $path; ?>/images/tool-6.png" alt="">
            <p>Tư vấn chi phí</p>
            <div class="detail tuvan-detail">
                <input type="text" placeholder="Họ và tên:">
                <input type="text" placeholder="Số điện thoại:">
                <input type="text" placeholder="Email:">
                <input type="text" placeholder="Nhu cầu dịch vụ:">
                <a href="" > Đăng ký tư vấn </a>
            </div>
        </div>
    </div>
</div>


