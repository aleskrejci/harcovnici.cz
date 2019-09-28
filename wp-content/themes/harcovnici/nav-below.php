<?php $args = array(
'prev_text' => sprintf( esc_html__( '%s Zatuchlejší zprávy', 'blankslate' ), '<span class="meta-nav">&larr;</span>' ),
'next_text' => sprintf( esc_html__( 'Čerstvější zprávy %s', 'blankslate' ), '<span class="meta-nav">&rarr;</span>' )
);
the_posts_navigation( $args ); ?>