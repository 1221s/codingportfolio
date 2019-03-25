<?php
/*
Template Name: About
*/

get_header();  ?>

<body class="index about">

  <!-- Here starts about small -->
  <div class="aboutSmall">
    <div class="indexHeader indexHeaderTop">
      <h2>
        <!-- this is the ACF field called 'greeting' -->
        <?php the_field( 'field_5c5d37f957d3f' ); ?>
      </h2>
    </div>
    <!-- this is the ACF field called 'about_small' -->
    <div class="aboutSmallTxtArea" id="aboutSmallTxtArea">
      <?php the_field( 'about_small' ); ?>
      <div class="buttonContainer" id="cvButton">
        <div id="linkedInBtn" class="cvButton">
          <i class="fab fa-linkedin"></i>
          <a href="https://www.linkedin.com/in/NannaValbjørn">See my LinkedIn</a>
        </div>
      </div>
    </div>

    <!-- Click the image twice to find a secret -->
    <div class="aboutSmallTxtArea2 aboutSmallTxtArea" id="aboutSmallTxtArea2">
      <?php the_field('about_small_2'); ?>
    </div>


    <div class="selfie" id="selfie">
        <img src="<?php the_field('selfie') ?>" alt="here is an image">
      </div>
      <div class="againNote" id="againAlert">
        <p>Click the image two times</p>
      </div>
  </div>

    <!-- Here starts the keywords thing -->

    <div class="indexHeader">
    <h2 class="indexHeaderWSidetxt">Aspects of me</h2>
    <p></p>
    </div>
    <div class="aspectsWrapper">
        <div class="body">
          <div class='face'>
            <div class='eye'></div>
            <div class='eye'></div>
            </div>
          <img src="<?php echo get_template_directory_uri()?>/img/bodyWords.png" alt="this was supposed to be me">
        </div>
    </div>

    <!-- Here starts profficiencies part -->
      <div class="indexHeader proficienciesHeader">
      <h2 class="indexHeaderWSidetxt">Profficiencies</h2>
      <p></p>
      </div>

    <div class="profficiencies">
        <div class="profficient profficiencyWrapper">
          <h4>I am profficient in:</h4>
          <div class="stringWrapper">
            <ul>
              <li id="adobeNote"><span>Adobe CC</span><i class="fab fa-adobe"></i><p id="adobeNoteP">Most of them, anyway. Giveaway piece: https://goo.gl/fo</p> </li>
              <li> <span>HTML5</span><i class="fab fa-html5"></i> </li>
              <li><span>CSS3</span><i class="fab fa-css3-alt"></i> </li>
              <li> <span>GitHub</span><i class="fab fa-github"></i> </li>
              <li> <span>Atom</span><i class="fas fa-atom"></i> </li>
            </ul>
          </div>
        </div>

        <div class="adept profficiencyWrapper">
          <h4>I am adept at:</h4>
          <div class="stringWrapper">
            <ul>
              <li> <span>ZBrush</span><i class="fas fa-running"></i> </li>
              <li> <span>Jscript</span><i class="fab fa-js-square"></i> </li>
              <li> <span>Php</span><i class="fab fa-php"></i> </li>
              <li> <span>Wordpress</span><i class="fab fa-wordpress"></i> </li>
            </ul>
          </div>
        </div>
    </div>

<?php  get_footer();  ?>


</body>
