$(document).on('change', 'input, textarea', function(){
  if ($(this).val() !== '') {
    $(this).addClass('active');
  }
  else {
    $(this).removeClass('active');
  }
});

$(document).on('focus', 'input, textarea', function(){
  $(this).parent().addClass('active');
});

$(document).on('blur', 'input, textarea', function(){
  if ($(this).val() !== '') {
    $(this).parent().addClass('active');
  }
  else {
    $(this).parent().removeClass('active');
  }
});