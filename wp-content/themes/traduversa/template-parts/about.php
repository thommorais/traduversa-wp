<?php if( get_field('nosso_time', 'option') && get_field('missao', 'option')  ): ?>
  <section class="about" id="about">
      <div class="wrp">
          <h1>SOBRE</h1>

            <div class="flex">
              <article>
                <?php the_field('missao', 'option'); ?>
              </article>
              <article>
                <?php the_field('nosso_time', 'option'); ?>
              </article>
          </div>
        </div>
  </section>
<?php endif; ?>
