
<?php
/*
 Template Name: commision
 */


get_header();  ?>

<body class="commision index">

  <!-- Here starts about small -->
  <div class="aboutSmall">
    <div class="indexHeader indexHeaderTop">
      <h2>
        <!-- this is the ACF field called 'greeting' -->
        <?php the_field( 'field_5c5d37f957d3f' ); ?>
      </h2>
    </div>
    <div class="aboutSmallTxtArea">
      <?php the_field( 'field_5c5d387457d40' ); ?>
      <div class="tosButtonWrapper">
        <div class="tosButton" id="tosButton">
          <p>Read Terms of Service</p>
        </div>
      </div>
    </div>
    <div class="selfie">
        <img src="<?php the_field('selfie') ?>" alt="here is an image">

      </div>

  </div>


  <!-- here starts commision examples -->
  <div class="indexHeader">
    <h2 class="indexHeaderWSidetxt">Types and Prices</h2>
  </div>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="typesWrapper">
    <div class="examplesBigWrapper">

      <div class="exampleWrapper">
        <div class="example">
          <img class="exampleImg" src="<?php the_field('portrait_example'); ?>" alt="portrait example">
        </div>
        <h3>Portrait</h3>
        <span><?php the_field('portrait_description'); ?></span>
        <h2><?php echo get_post_meta($post->ID, 'portrait', true); ?></h2>
      </div>

      <div class="exampleWrapper">
        <div class="example">
          <img class="exampleImg" src="<?php the_field('bust_example'); ?>" alt="portrait example">
        </div>
        <h3>Bust</h3>
        <span><?php the_field('bust_description'); ?></span>
        <h2><?php echo get_post_meta($post->ID, 'bust', true); ?></h2>
      </div>

      <div class="exampleWrapper">
        <div class="example">
          <img class="exampleImg" src="<?php the_field('fullbody_example'); ?>" alt="portrait example">
        </div>
        <h3>Full Body</h3>
        <span><?php the_field('fullbody_description'); ?></span>
        <h2><?php echo get_post_meta($post->ID, 'fullbody', true); ?></h2>
      </div>

      <div class="exampleWrapper">
        <div class="example">
          <img class="exampleImg" src="<?php the_field('other_example'); ?>" alt="portrait example">
        </div>
        <h3>Other</h3>
        <span><?php the_field('other_description'); ?></span>
        <h2><?php echo get_post_meta($post->ID, 'other', true); ?></h2>
      </div>
    </div>
  </div>

<?php endwhile; ?>

<!-- Here starts tos -->
<div class="mainOverlay" id="mainOverlay"></div>

<div class="tosMainWrapper" id="tosMainWrapper">
  <div class="indexHeader indexHeader-lb">
    <h2 class="indexHeaderWSidetxt">Terms of Service</h2>
  </div>

    <div class="tosWrapper">
      <div class="tosItem">
        <h3>Commision Process</h3>
        <span>
        <p>The commission process is very flexible and can be changed to fit your commision specifically.
              Typically it is broken into four parts:</p>
        <p>Confirmation/Sketch: I will send you various rough sketches for you to decide from.
          Once you are content with the sketch, I will consider your commission confirmed and I
          will send the paypal invoice. Once the invoice has been paid, work on the commission will start.</p>
        <p>Lineart: Working on lines, starting with an initial fully lined picture based on the
          sketch which we will work on together until you are content.</p>
        <p>Colors: Flats, making sure everything is the right color. In this phase stuff like tattoos and makeup
          will be added.</p>
        <p>Shading/details: Lighting and mood of the commision as well as special effects and stuff like that.</p>

        </span>
      </div>

      <div class="tosItem">
        <h3>Rights</h3>
        <span>
        <p>I as the artist will retain copyright of the particular commission unless otherwise
        discussed.
        <p>I have no claim on any characters featured in the artwork unless they were originally
        created by me, their copyright wasn't previously sold by me or I was the copyrightholder before
        the start of the commision.</p>
        <p>The same terms are in effect for all other items, animals or things featured in the artwork.</p>

        <p>(That being said, I am not that strict about what the artwork is used for, this is just to avoid
          people using my artwork commercially. If you'd like to purchase the copyright of your commision, write me
          a mail and we will discuss it.)</p>
        </span>
      </div>

      <div class="tosItem">
        <h3>Edits/Changes</h3>
        <span>
          <p>If you request a major change after the confirmation (such as pose or clothing etc) - I ask that you inform me as quickly as possible, since i usually work through a phase in one sitting of max. 3 hours
            (I always have my email and social media accounts open during so i -will- see your message pop up)</p>
          <p>I may feel the need to (if the changes are extensive enough) request an additional fee to be paid before i start the change.</p>
        </span>
      </div>

      <div class="tosItem">
        <h3>Cancellation of the commision</h3>
        <span>
          <p>If you wish to cancel your commision you are free to do so at any time during the process.
            I as the artist will be adequately compensated for any work I may have done at the time of
            cancellation and will refund you for any remaining amount.</p>
        </span>
      </div>

      <div class="tosItem">
        <h3>Payment</h3>
        <span><p>I accept payment via paypal ONLY.</p>
            <p>I will send you an invoice with the agreed amount when I have confirmed your commision.
            I will not begin actual work on the commision before i have received payment.</p>
            <p>I do allow you to add a tip to the invoice, but this is never requested or expected
              of any customer.</p></span>
      </div>

      <div class="tosItem">
        <h3>Refunds</h3>
        <span>
          <p>I allow refunds under the following conditions:</p>

          <p>- If i have not contacted you regarding the commision within 4 months of confirmation or our last correspondence.
          (This does not apply to commisions of 3 characters or more)</p>
          <p>- If the communication between the parties cannot stay at a polite level, and I feel the need to terminate the commision.</p>
          <p>- If I realize an erorr or issue on my part makes me unable to finish the commision.</p>
          <p>All of these will trigger a refund of the amount remaining after I have been compensated for finished work.
          If i have sent you any progress made on the commision or otherwise in-progress pictures my terms will still
          be in effect as if they had been the finished commision.</p>
        </span>
      </div>

      <div class="tosItem lastChild">
        <h3>Due date</h3>
        <span>
        <p>Depending on the circumstances any commision may take me from 4 hours to 4 months to finish.</p>
        <p>If your commision is time sensitive please state so in the section
        “Notes” and I will inform you wether or not it is possible for me to finish within set time.</p>

        </span>
      </div>


    </div>


</div>

<!-- HERE starts commisionForm -->
<div class="indexHeader">
<h2 class="indexHeaderWSidetxt">Commision form</h2>
</div>

<div id="commisionFormWrapper" class="commisionFormWrapper">
  <div class="openForm" id="openFormArrow">
    <p>Open</p>
      <i class="fas fa-angle-down"></i>
  </div>
  <?php
$id=2;
$post = get_post($id);
$content = apply_filters('the_content', $post->post_content);
echo $content;
?>

<div class="tosButtonWrapper btnFormWrapper">
  <div class="tosButton btnForm" id="tosButtonForm">
    <p>Read Terms of Service</p>
  </div>
</div>

<div class="openForm closeForm" id="closeFormArrow">
  <p>Close</p>
    <i class="fas fa-angle-up"></i>
</div>
 </div>



<?php  get_footer();  ?>


</body>
