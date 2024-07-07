$(window).scroll(function(){
    var wScrool = $(this).scrollTop();

    // j query carikan saya elemen h1 lalu ubah cssnya menjadi transform valuenya lalu translaete(untuk mengubah posisinya secara horizontal atau vertikal terhadap sumbu x atau y )
    $('h1').css({
        'transform' : 'translate(0px, '+ wScrool/2 +'%)'
    });
    
    $('.kotak').css({
        'transform' : 'translate(0px, '+ wScrool/10 +'%)'
    });


});