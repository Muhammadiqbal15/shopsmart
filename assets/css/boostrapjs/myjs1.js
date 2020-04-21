//event pada saat link di klik
$('.page-scroll').on('click', function(e){

//ambil isi href
var tujuan= $(this).attr('href');
//tangkap elemen ybs
var elementujuan = $(tujuan);

//pindahkan scroll
$('html,body').animate({
	scrollTop: elementujuan.offset().top - 60
},1000,'easeInOutExpo');

e.preventDefault();


});


//parallax
//about
$(window).on('load', function(){
	$('.pKiri').addClass('pMuncul');
	$('.pKanan').addClass('pMuncul');
});


$(window).scroll(function(){
	var wScroll = $(this).scrollTop();

	//jumbotron
	$('.jumbotron img').css({
		'transform' : 'translate(0px, '+ wScroll/4 +'%)'
	});

	$('.jumbotron h1').css({
		'transform' : 'translate(0px, '+ wScroll/2 +'%)'
	});

	$('.jumbotron p').css({
		'transform' : 'translate(0px, '+ wScroll/1   +'%)'
	});

	//portofolio
	if ( wScroll > $('.portofolio').offset().top - 250 ){

		$('.portofolio .thumbnail').each(function(i) {

			setTimeout(function() {
                $('.portofolio .thumbnail').eq(i).addClass('muncul');
			}, 700 * (i+1));
		});

		
	}

});