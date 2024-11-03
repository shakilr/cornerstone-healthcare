<?php
$style = '';

if ($background_id = get_sub_field('background_image')) {
  $style = ' style="background: url(' . wp_get_attachment_image_url($background_id, 'full') . ') 100% no-repeat center;"';
}
?>
<section class="block-hero" <?php echo $style; ?>>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
          if ( $heading = get_sub_field('heading') ) {
            echo "<h1>{$heading}</h1>";
          }

          if ($subheading = get_sub_field('subheading')) {
            echo "<h2>{$subheading}</h2>";
          }
        ?>
      </div>
    </div>
  </div>
</section>