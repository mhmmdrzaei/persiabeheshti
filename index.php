<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<!-- <div class="vimeo-wrapper">
   <iframe src="https://player.vimeo.com/video/349263039?autoplay=1s&muted=1&loop=1&title=0&sidedock=0&controls=0&byline=0&portrait=0#t=5s" 
           frameborder="0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><script src="https://player.vimeo.com/api/player.js"></script>
</div> -->
<!-- title=0   for title hide
sidedock=0  for social icon hide
controls=0 -->
<!-- <div><iframe src="https://player.vimeo.com/video/349263039?autoplay=1s&muted=1&loop=1&title=0&byline=0&portrait=0#t=5s" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script> -->

https://player.vimeo.com/video/76979871?background=1&autoplay=1&loop=1&byline=0&title=0
<div class="main">
  <div class="container">

    <div class="content">
    		<?php get_template_part( 'loop', 'index' );	?>
    </div> <!--/.content -->


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>
</main>