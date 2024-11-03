<section class="block-cta">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        if ($heading = get_sub_field('heading')) {
          echo '<div class="block-cta-heading">';
          echo "<h4>{$heading}</h4>";
          echo '</div>';
        }

        if ($description = get_sub_field('description')) {
          echo "<div class=\"block-cta-content\">{$description}</div>";
        }
        ?>

        <?php if (have_rows('buttons')) : ?>
          <div class="block-cta-buttons">
            <?php
            while (have_rows('buttons')) {
              the_row();

              if ($button = get_sub_field('button')) {
                echo "<a href=\"{$button['url']}\" target=\"{$button['target']}\"class=\"btn btn-primary\">{$button['title']}</a>";
              }
            }
            ?>
          </div>
        <?php endif; ?>

      </div>
    </div>
  </div>

</section>