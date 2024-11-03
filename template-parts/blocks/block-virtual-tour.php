<?php
$embeded_url = '';
$popup_url = '';


if ($url = get_sub_field('youtube_url')) {
  $url_parts = explode('?v=', $url)[1];

  $popup_url = $url;
  $embeded_url = 'https://www.youtube.com/embed/' . $url_parts;
}
?>

<section class="block-virtual-tour">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-8 mx-auto">
        <?php
        if ($heading = get_sub_field('heading')) {
          echo "<h2>{$heading}</h2>";
        }
        ?>

        <?php if (get_sub_field('youtube_url')) : ?>
          <a href="<?php echo $popup_url; ?>" class="video-container no-play popup-youtube">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe class="embed-responsive-item" width="560" height="315"
                src="<?php echo $embeded_url; ?>" title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

            </div>
          </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>