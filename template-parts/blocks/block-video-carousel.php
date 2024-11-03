<?php
$slides = [];

while (have_rows('carousel')) {
  the_row();

  if ($url = get_sub_field('youtube_url')) {
    $url_parts = explode('?v=', $url)[1];

    $popup_url = $url;
    $embeded_url = 'https://www.youtube.com/embed/' . $url_parts;

    $slides['main'][]  = [
      'popup' => $popup_url,
      'thumbnail' => $embeded_url,

    ];
    $slides['thumbnail'][]  = $embeded_url;
  }
}

?>



<section class="block-video-carusel">
  <div class="container">

    <?php
    if ($heading = get_sub_field('heading')) {
      echo '<div class="row">';
      echo '<div class="col-md-12">';
      echo "<h2>{$heading}</h2>";
      echo '</div>';
      echo '</div>';
    }
    ?>

    <?php if ($slides) :  ?>
      <div class="row">
        <div class="col-md-8 mx-auto">
          <div class="slider">
            <div class="main-stage">

              <?php foreach ($slides['main'] as $slide) : ?>
                <div><a href="<?php echo $slide['popup']; ?>" class="video-container no-play popup-youtube">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="560" height="315"
                        src="<?php echo $slide['thumbnail']; ?>" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>
                  </a></div>
              <?php endforeach; ?>
            </div>

            <div class="thumbnail">
              <?php foreach ($slides['thumbnail'] as $slide) : ?>
                <div>
                  <div class="video-container no-play">
                    <div class="embed-responsive embed-responsive-16by9">
                      <iframe class="embed-responsive-item" width="560" height="315"
                        src="<?php echo $slide; ?>" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>

          </div>
        </div>
      </div>
    <?php endif; ?>

  </div>
</section>