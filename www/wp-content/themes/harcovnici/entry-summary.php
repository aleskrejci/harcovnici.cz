<div class="entry-summary">
  <?php if (has_post_thumbnail()) : ?>
  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_post_thumbnail(); ?></a>
  <?php endif; ?>
  <?php the_excerpt(); ?>
</div>
