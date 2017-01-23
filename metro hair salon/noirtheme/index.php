<?php get_header(); ?>

 <div class="site-container">
   <div class="section no-pad-bot z-depth-1" id="hero-banne" style="background: url(front-page.jpg) no-repeat center; height: 500px; background-size: cover;">
  <br><br><br><br>
  <br><br><br><br>
  <div class="row center">  
	  <div class="col s12">
	  <h3 class="header center white-text light" style="letter-spacing: 5px;">HAIR STYLING</h5>
	  <h6 class="header white-text center" style="letter-spacing: 2px; font-size: 12px;">BEST SERVICE FROM EXPERT STYLISTS</h6></div>	  
	  </div>
  <div class="row center">
        <a href="contact.php" id="hero-button" class="btn-large waves-effect waves-light white-text" style="background-color: #2d3034">Make an Appointment</a>
      </div>
  </div>


  </div>


  <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>


  <?php get_sidebar(); ?>
  <?php get_footer(); ?>