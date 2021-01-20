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
  		$('.videoClick').removeClass('on');
  		$(this).addClass('on');
  		console.log('duh')

  

	});
	$('h2.videoClick').click(function(){
		$('.pressMid').removeClass('openMid');
		$('.pressMid').addClass('closeMiddle');
		$(this).toggleClass('on');

	});


});