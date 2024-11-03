 <section class="block-accreditation">
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

          if ($image_id = get_sub_field('image')) {
            echo wp_get_attachment_image($image_id, 'full');
          }
          ?>
       </div>
     </div>
   </div>
 </section>