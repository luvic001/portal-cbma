$(document).on('change', 'input:text', function(){
  if ($(this).val() !== '') {
    $(this).addClass('active');
  }
  else {
    $(this).removeClass('active');
  }
});