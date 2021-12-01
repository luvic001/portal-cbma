$(document).on('click', '[menu-toggle]', function(event){
  event.preventDefault();

  $('body').toggleClass('menu-open');

});