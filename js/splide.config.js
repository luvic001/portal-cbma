$('.splide-3').each(function(){

  var splide3 = new Splide( '.splide-3', {
    perPage: 3,
    rewind : true,
    pagination: false,
    gap: '1rem',
    breakpoints: {
      992: {
        perPage: 2
      },
      768: {
        perPage: 1
      }
    }
  } );

  splide3.mount();

});

$('.splide-2').each(function(){

  var splide2 = new Splide( '.splide-2', {
    perPage: 2,
    rewind : true,
    pagination: false,
    gap: '1rem',
    breakpoints: {
      992: {
        perPage: 1
      }
    }
  } );

  splide2.mount();

});

$('.splide-1').each(function(){

  var splide1 = new Splide( '.splide-1', {
    perPage: 1,
    rewind : true,
    pagination: false,
  } );

  splide1.mount();

});