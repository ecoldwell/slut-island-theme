<?php get_header();  ?>
  <?php if (get_theme_mod('understrap_intro_image')) { ?>
    <div class="intro-slide homepage-intro-slide">
      <div class="intro-slide-image" style="background-image:url('<?php echo get_theme_mod('understrap_intro_image') ?>')"></div>
      <h1>ROBBINS LOCATIONS</h1>
    </div>
  <?php } ?>

  <?php get_template_part( 'main-nav', 'none' ); ?>


  <section class="cat-section homepage-activity-listing">
    <h3>Browse Our Listings</h3>
    <ul class="cat-whole grid">

      <?php
        $_activities = get_terms( array(
            'taxonomy' => 'activity',
            'hide_empty' => true,
        ) );

      ?>
      <?php foreach ($_activities as $activity) : ?>

      <li class= "grid-item single-cat">
	      <a href="<?php echo get_category_link($activity->term_id); ?>">
		      <div class="grid-item-image-wrap">
		      	<img src="<?php echo z_taxonomy_image_url($activity->term_id); ?>" />
		      </div>
          <div class="grid-item-title">
  	       <?php echo $activity->name; ?>
          </div>
	      </a>
      </li>
      <?php endforeach; ?>
    </ul>

  </section>

<?php get_footer() ?>
