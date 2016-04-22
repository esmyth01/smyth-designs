</div><!--end main-content-->
</div><!--end wrapper-->

<footer>
  <div class="footer-content">

  <div class="footer-inner">

    <h4>SITEMAP</h4>


<?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); ?>
  </div>

  <div class="footer-inner">

    <h4>RESOURCES</h4>
    <ul>
      <li><a href="http://www.github.com">Github</a></li>
      <li><a href="http://www.stackoverflow.com">Stack Overflow</a></li>
      <li><a href="http://www.w3schools.com">W3 Schools</a></li>
      <li><a href="http://www.smashingmagazine.com">Smashing Magazine</a></li>

    </ul>

  </div>

  <div class="footer-inner">
<h4>FRIENDS</h4>


    <ul>
      <li><a href="http://www.premiumdw.com">PremiumDW</a></li>
      <li><a href="https://thomaswilburn.net">Thomas Wilburn</a></li>



    </ul>


  </div>

</div>

</footer>

<?php wp_footer()?>


<script>


window.onload = function() {


  jQuery(".jquery-title").click(function() {
    jQuery(".menu-main-container").slideToggle();
    return false;
  });


  jQuery(window).resize(function(){

    if (jQuery(window).width() > 668) {
      jQuery(".menu-main-container").css('display', 'block');
    }

    if (jQuery(window).width() < 668) {
      jQuery(".menu-main-container").css('display', 'none');
    }
  });

};


</script>


</body>

</html>
