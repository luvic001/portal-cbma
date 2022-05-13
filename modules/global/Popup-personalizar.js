$(document).on('click', '[close-popup-personalizar]', function(event){
  event.preventDefault();
  $('body').removeClass('popup-personalizar');
});

$('body').addClass('popup-personalizar');