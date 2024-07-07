// event pada saat link diklik
$('.page-scroll').on('click', function(e){

    // ambil isi href
    // jqueri carikan saya this(yang bersangkutan)lalu saya ingin mengambil isi dari atribut yaitu atirbutnya  href
    var tujuan = $(this).attr('href');
    // tangkap elemen yang bersangkutan untuk menangkap sessionnya juga
    var elemenTujuan = $(tujuan);

    // pindahkan scroll jquery carikan htnl yg bodi animasikan scroll top sampai keelemen tujuan
    $('html,body').animate({
        scrollTop:elemenTujuan.offset().top - 50
    },1000, 'easeOutBounce');
    
    e.preventDefault();

});

// paralax
// about
$(window).on('load', function() {
    $('.pKiri').addClass('pMuncul');
    $('.pKanan').addClass('pMuncul');
});


$(window).scroll(function() {
    var wScroll = $(this).scrollTop(); 


    // jumbotron
    $('.jumbotron img').css({
        'transform' : 'translate(0px, '+ wScroll/4 +'%)'
    });

    $('.jumbotron h1').css({
        'transform' : 'translate(0px, '+ wScroll/2 +'%)'
    });

    $('.jumbotron p').css({
        'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
    });


    // portfolio
    if ( wScroll > $('.portfolio').offset().top - 250 ) {
        $('.portfolio .thumbnail').each(function(i) {
            setTimeout(function() {
                $('.portfolio .thumbnail').eq(i).addClass('muncul');        
            }, 300 * (i+1));
        });
        
    }




});