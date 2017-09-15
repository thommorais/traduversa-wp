  <?php
    if( have_rows('clientes', 'option') ):

      echo '<section  class="our-clients" id="clients">';

        echo '<h1>já traduzimos para</h1>';

        echo '<div class="swiper-container clients-carousel">';

          echo '<ul class="swiper-wrapper">';

            while ( have_rows('clientes', 'option') ) : the_row();

              echo '<li class="swiper-slide">';

                $logo = get_sub_field('logo');
                echo '<img class="banner" src="'.$logo[url].'" height="'.$logo[height].'"  width="'.$logo[width].'" />';

              echo '</li>';

            endwhile;

          echo '</ul>';

        echo '</div>';

      echo '</section>';

    endif;

  ?>
