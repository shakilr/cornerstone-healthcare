 <section class="block-content-icon">
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
     <?php if (have_rows('icon_boxes')) : ?>
       <div class="row">

         <?php
          while (have_rows('icon_boxes')) :
            the_row();

            $icon = '';

            if (get_sub_field('icon_type') == 'font') {

              if ($icon_val = get_sub_field('icon')) {
                $icon = "<i class=\"fab {$icon_val}\"></i>";
              }
            } else {
              if ($image_icon = get_sub_field('image_icon')) {
                $icon = wp_get_attachment_image($image_icon, 'full');
              }
            }
          ?>
           <div class="col-md-3">
             <div class="block-content-icon--box">
               <?php echo $icon; ?>
               <p> <?php the_sub_field('label'); ?></p>
             </div>
           </div>
         <?php endwhile; ?>

       </div>
     <?php endif; ?>
   </div>
 </section>