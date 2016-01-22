<footer>

</footer>

<?php wp_footer()?>


<script>


window.onload = function() {


  jQuery(".jquery-title").click(function() {
    jQuery(".menu-main-container").slideToggle();
    return false;
  });


  jQuery(window).resize(function(){

    if (jQuery(window).width() > 667) {
      jQuery(".menu-main-container").css('display', 'block');
    }

    if (jQuery(window).width() < 667) {
      jQuery(".menu-main-container").css('display', 'none');
    }
  });

};


</script>


</body>

</html>
