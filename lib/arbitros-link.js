jQuery(function ($) {
  $(document).on("click", "[arbitros-link]", function (event) {
    event.preventDefault();

    let arbitro_data = $(this).attr("arbitros-link");

    $.ajax({
      type: "POST",
      url: `${adm_ajax}`,
      data: {
        action: "arbitros_data",
        arbitro_data: arbitro_data,
      },
      beforeSend: () => {
        $.writeInPopup("", siteLoader);
        $.openPopup();
      },
      complete: (e) => {
        let title = e.status == 200 ? e.responseJSON.title : "Ops!!";
        $.writeInPopup(title, e.responseJSON.content);
      },
    });
  });

  $(document).on("keyup", "[search-arbitros]", function () {
    let arbitro_name = $(this).val();
    $.search_arbitro(arbitro_name);
  });

  $(document).on("submit", "[form-arbitro]", function (event) {
    event.preventDefault();

    let arbitro_name = $(this).find("input:text").val();
    $.search_arbitro(arbitro_name);
  });

  jQuery.expr[":"].icontains = function (a, i, m) {
    return jQuery(a).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
  };

  $.search_arbitro = (arbitro_name) => {
    $("[arbitros-link]").parent().css({ display: "none" });
    $(`[arbitros-link]:icontains(${arbitro_name})`)
      .parent()
      .css({ display: "block" });
  };
});
