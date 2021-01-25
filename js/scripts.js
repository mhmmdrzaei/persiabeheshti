
$(function(){

	// if ($('.pressMid ul li:nth-child(6)').length) {
 //    console.log('true');
 //    $('.morePress').css('display','block');
	// }else {
	// $('.morePress').css('display','none');
	// }

	$('h2.infoClick').click(function() {
  		$('.info').addClass('openInfo');
  		$('.videos').removeClass('visible');
  		$('h2.videoClick').removeClass('on');
  		$(this).addClass('on');
  		console.log('kill me');

  

	});
	$('h2.videoClick').click(function(){
		$('.info').removeClass('openInfo');
		$('.videos').addClass('visible');
		$('h2.infoClick').removeClass('on');
  		$(this).addClass('on');

	});

	$(".videoEachFull").click(function() {
	    $(this).find('.videoEmbed').toggleClass("openVideo");
	    $(this).find('.videoEach').toggleClass("toggleMore");
	     // $(this).find('.artworkIteminfo').toggleClass("closed");
	    // $(this).find('.artworkIteminfo').css("display","block");

	});

	$(".closeInfo").click(function() {
	 // if($('#artworksOpenItem').hasClass('open')){
	 //    $('#artworksOpenItem').removeClass('open')
	 // }else{
	   // parent = el.closest('.displayText');
	 // }
	 // $(".artworkItemEach").find('.artworkIteminfo').removeClass("open");
	   if ($('.artworkIteminfo').hasClass('open')) {
	     // parent.find('.displayText').slideToggle();
	     $('.artworkIteminfo').removeClass('open');
	   } 
	   return false;
	     // $('.artworkIteminfo').toggleClass("closed");
	     // console.log('fuck');

	 });



});

