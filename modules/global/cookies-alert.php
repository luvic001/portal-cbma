<?php

if (!defined('PATH')) exit;

?>

<script>
function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    return decodeURI(dc.substring(begin + prefix.length, end));
} 
jQuery(function($){
    $('#close-popup').on('click', function(){
        document.cookie = "save_popup=1";
        $('.alert-popup').fadeOut()
    })

    $('#accept-cookies').on('click', function(){
        document.cookie = "save_cookie=1";
        $('.cookies-alert').fadeOut(400, function(){
            $(this).remove();
        })
        $('.floating-bot').animate({
          'bottom': '22px'
        }, 100)
    });

    $.fixBot = () => {
      $('.floating-bot').animate({
        'bottom': $('.cookies-alert').height() + 'px'
      }, 100);
    }

    if (getCookie("save_cookie") == null){
      $('.cookies-alert').fadeIn()
      $(window).on('resize', function(){
        $.fixBot();
      })
      $.fixBot();
    }
    

})
</script>

<style>

.cookies-alert {
  position: fixed;
  bottom: 0;
  z-index: 100000000;
  width: 100%;
  display: none;
}

.cookies-alert .alert-content {
  background-color: #fff;
  padding: 1rem;
  width: 100%;
  box-shadow: 0 0 2px #002e27;
}

.cookies-alert .alert-content p {
  color: #444;
  font-size: 14px;
  line-height: 20px;
  padding-right: 0;
  margin-bottom: 15px;
}
@media (min-width: 768px){
  .cookies-alert .alert-content p {
    margin-bottom: 0;
    padding-right: 5rem;
    padding-left: 3rem;
  }
}

.cookies-alert .alert-content p a {
  color: #002e27;
  text-decoration: underline;
}


.cookies-alert #accept-cookies {
  color: #002e27;
  font-family: "Source Sans Pro", sans-serif !important; 
  font-weight: 900 !important;
  background-color: #d0ad63;
  text-transform: uppercase;
  transition: ease .3s all;
  display: inline-block;
  padding: 10px 40px;
  min-width: 245px;
  text-align: center;
}

.cookies-alert #accept-cookies:hover {
  text-decoration: none;
  background-color: #d0ad63;
  color: #002e27;
  font-weight: 900;
}

@media (min-width: 768px) {
  .cookies-alert #accept-cookies {
    margin-right: 80px;
    margin-left: auto;
  }
}



</style>
<section class="cookies-alert">
  
  <div class="alert-content d-md-flex align-items-md-center">
    <p>O CBMA utiliza cookies para personalizar e melhorar sua experiência em nosso site. Para saber mais, acesse nossa <a href="/politica-de-privacidade/" target="_blank" rel="nofollow, noopener" title="Política de Privacidade">Política de Privacidade</a>.</p>
    <a href="javascript:void(0);" id="accept-cookies">Aceitar cookies</a>
  </div>    

</section>