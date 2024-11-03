 <section class="block-faqs">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
         <?php
          if ($heading = get_sub_field('heading')) {
            echo "<h2>{$heading}</h2>";
          }
          ?>

         <?php if (have_rows('faq')) : ?>
           <div class="block-faqs--accordion">

             <?php
              while (have_rows('faq')) :
                the_row();

                $active = '';
                if (get_row_index() == 1) {
                  $active = ' active';
                }
              ?>
               <div class="accordion-item<?php echo $active; ?>">
                 <?php
                  if ($question = get_sub_field('question')) {
                    echo "<h4 class=\"accordion-header\">{$question}</h4>";
                  }

                  if ($answer = get_sub_field('answer')) {
                    echo "<div class=\"accordion-content\"><p>{$answer}</p></div>";
                  }
                  ?>
               </div>
             <?php endwhile; ?>

           </div>
         <?php endif; ?>
       </div>
     </div>
 </section>