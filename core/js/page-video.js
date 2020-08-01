//on click rend iframe

//Phần sử dụng khi làm full video
// $( ".fixvideo .img" ).click(function() {
		// var id_video = $(this).data('id');
		// $('#fixvideo').html('<div class="aspect-ratio-box"><div class="aspect-ratio-box_inside"><div id="player"></div></div></div>');
		// $('#mb_comment_video').html('<div class="fb-comments mb" data-href="https://hanhtrinhlotxac.vn?'+id_video+'" data-numposts="5" data-width="100%">');
		// FB.XFBML.parse();
		// change_yt(id_video);
// });
$( ".videoplay" ).click(function() {
	var title = $(this).data('title');
	// var des = $(this).find('.video_des').data('description');
	var id_video = $(this).data('id');
	$('html,body').animate({scrollTop:0},1000);
	$('.videomain').addClass('slidePageClip');
	$('.videomain').html(`
		<div class="container">
			<div class="fixvideo" id="fixvideo">
				<div class="row">
					<div class="col-xl-12">
						<div class="slidePageClipBox mainclip">
							<div class="aspect-ratio-box"><div class="aspect-ratio-box_inside"><div id="player"></div></div></div>
						</div>
					</div>
					<div class="col-xl-12">
						<div class="slidePageClipInfo">
							<div class="slidePageClipInfo__tt">
									`+title+`
							</div>
							<hr>
							<div class="slidePageClipCM">
								<div class="fb-comments" data-href="https://hanhtrinhlotxac.vn/?`+id_video+`" data-width="100%" ></div> 	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>`)
	change_yt(id_video);  
	var height = $('.contentfix .col-lg-8').innerHeight();
	$('.contentfix .hmb').css('height',height);
	// console.log(height);
	FB.XFBML.parse();

});
//on scroll show video bottom



//API EMBEB YOUTUBE
var tag = document.createElement('script');

      tag.src = "https://www.youtube.com/iframe_api";
      var firstScriptTag = document.getElementsByTagName('script')[0];
      firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
	  
	  //Funtion thay video
	  function change_yt(id){
		   var player;
			player = new YT.Player('player', {
			  height: '100%',
			  width: '100%',
			  videoId: id,
			  playerVars: {rel: 0},
			  events: {
				'onReady': onPlayerReady,
				'onStateChange': onPlayerStateChange
			  }
			});
	  }

      //Autoplay khi load video
      function onPlayerReady(event) {
        event.target.playVideo();
		
      }

      //Event check video khi có thay đổi
      var done = false;
      function onPlayerStateChange(event) {
      	var target = $(window);
		$(document).scroll( function(){
		  scroll_top = $(target).scrollTop();

		  var win1 = $(".videopage").offset().top - 100;
		  console.log(win1);
		  console.log(scroll_top);
		  console.log('----------');
		  if( scroll_top >= win1  && event.data == '1' && !done ){
		    $("#fixvideo .mainclip").addClass("videofix");
		    // console.log(scroll_top);
		  }else if(scroll_top < win1  && !done){
		    $("#fixvideo .mainclip").removeClass("videofix");
		    console.log(scroll_top);
		  }
		});

      }

      function stopVideo() {
        player.stopVideo();
		
      }
//END API EMBEB YOUTUBE

//load more video

$('.loadmore-btn').click(function(){
	var i =1 ;
	var sectionclass = $(this).data('class');
	console.log(sectionclass);
	$("."+sectionclass+' .videoplay.hide').each(function(){
		// console.log(i);
		if(i<=9){
			$(this).removeClass('hide');
			i++;
		}
	});
	
	if(i<10){
		$('.loadmore-btn').hide();
	}
});