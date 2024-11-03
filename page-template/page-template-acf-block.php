<?php
  /**
   * Template Name: ACF Flexible Content
   */
  get_header();
  the_post();
  
  while( have_rows('blocks') ) {
    the_row();
    
    get_template_part('template-parts/blocks/block', str_replace('_', '-', get_row_layout() ) );
    // echo get_row_layout() . '<br/>';
  }
  get_footer();
?>