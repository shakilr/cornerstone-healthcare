<section class="block-feature">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        if ($heading = get_sub_field('heading')) {
          echo "<h2>{$heading}</h2>";
        }
        if ($description = get_sub_field('description')) {
          echo "<p>{$description}</p>";
        }
        ?>
      </div>
    </div>
    <?php if (have_rows('features')) : ?>
      <div class="row">
        <div class="col-md-12">
          <ul class="list">

            <?php while (have_rows('features')) : the_row();  ?>
              <li>
                <div class="block-feature-icon--box">
                  <?php
                  if ($icon_id = get_sub_field('icon')) {
                    echo wp_get_attachment_image($icon_id, 'full');
                  }
                  if ($label = get_sub_field('label')) {
                    echo "<p>{$label}</p>";
                  }
                  ?>
                </div>
              </li>
            <?php endwhile; ?>

          </ul>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>