<?php $args = array(
  'prev_text' => sprintf(esc_html__('Zatuchlejší zprávy', 'blankslate')),
  'next_text' => sprintf(esc_html__('Čerstvější zprávy', 'blankslate'))
);
the_posts_navigation($args);
