
<footer>
    <div class="footerContentWrapper">

        <div class="footerMenu">
          <h2>Get in touch:</h2>
          <?php wp_nav_menu( array('theme_location' => 'footer_menu') ); ?>

          <div class="emailMeContainer">
          <h3><i class="fas fa-envelope"></i> contact@1221s.com</h3>
          </div>
        </div>
    </div>

<img class="footer-foto" src="<?php echo get_template_directory_uri()?>/img/footer-foto.jpg"
        alt="this was supposed to be the second portfolio img">
</footer>
</html>
