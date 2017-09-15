<?php
  if( have_rows('banner', 'option') ):

    echo '<section class="banner">';

      echo '<div class="swiper-container" id="banner-carousel">';

        echo '<div class="swiper-wrapper">';

          while ( have_rows('banner', 'option') ) : the_row();

            echo '<div class="swiper-slide">';

              $banner = get_sub_field('imagem_de_fundo');
              $sobre_banner = get_sub_field('sobre_imagem');

              echo '<img class="banner" src="'.$banner[url].'" height="'.$banner[height].'"  width="'.$banner[width].'" />';

              if($sobre_banner):
                echo '<div class="wrp">';
                  echo '<img class="hover-banner" src="'.$sobre_banner[url].'" height="'.$sobre_banner[height].'"  width="'.$sobre_banner[width].'"  />';
                echo '</div>';
              endif;

            echo '</div>';

          endwhile;

        echo '</div>';

      echo '</div>';

    echo '</section>';

  endif;

?>
