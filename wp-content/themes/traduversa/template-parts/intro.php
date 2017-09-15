<?php if( get_field('importancia', 'option') ): ?>
  <section class="intro" id="importance">
      <div class="wrp">
        <?php the_field('importancia', 'option'); ?>
      </div>
  </section>
<?php endif; ?>
