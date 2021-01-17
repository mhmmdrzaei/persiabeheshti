<?php get_header();  ?>
<?php the_field('emoji_title'); ?>
<main>
  <?php $background = get_field('background_video_id'); ?>
   <div class="vimeo-wrapper">
      <iframe src="https://player.vimeo.com/video/<?php echo $background; ?>?autoplay=1s&muted=1&loop=1&title=0&sidedock=0&controls=0&byline=0&portrait=0" 
              frameborder="0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><script src="https://player.vimeo.com/api/player.js"></script>
   </div>
  <section class="pageInner">
    <section class="menuside">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
      <section class="info">
        <h2>Info</h2>
        <?php the_content(); ?>
      </section>
      <section class="videos">
      <h2>Videos</h2>
      <?php if( have_rows('videos') ):
          while( have_rows('videos') ) : the_row();
              $title = get_sub_field('video_title');
              $id = get_sub_field('video_id');
      
            ?>
            <button class="videoEach">
              <?php echo $title; ?>
            </button>
            <section class="videoEmbed">
              <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/<?php echo $id; ?>?&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>
            </section>
             

      


      <?php endwhile; ?>
      </section> 
     <?php endif; ?>


      
    </section>
    <section class="videoPlay">
      
    </section>
  </section>

</main>

      

        
<!--     <?php
        $rows = get_field('videos' );
        if( $rows ) {
            $index = array_rand( $rows );
            $rand_row = $rows[ $index ];
            $rand_row_title = $rand_row['is_part_of_background_random'];
            $rand_row_yes = 'Yes';
            $rand_row_id = $rand_row['video_title'];
          echo $rand_row_id;
          echo $rowsOption;
        };
        ?> -->





      <?php endwhile; // end the loop?>



<?php get_footer(); ?>