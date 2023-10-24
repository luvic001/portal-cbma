$ = jQuery;

window.addEventListener("scroll", function () {
  var y = window.pageYOffset;
  if (y > 10) {
    $("body").addClass("body-scrolled");
  } else {
    $("body").removeClass("body-scrolled");
  }
});

$(document).on("click", "[toggle-menu]", function (event) {
  event.preventDefault();
  $("body").toggleClass("menu-open");
});

$(document).on("click", "li.menu-item a", function (event) {
  $("body").toggleClass("menu-open");
});
