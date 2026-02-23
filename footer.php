<?php
/**
 * Footer – BuddyBoss Gutenberg Child Theme
 */

if ( function_exists( 'block_template_part' ) ) {
    block_template_part( 'footer-block' );
} else {
    get_template_part( 'template-parts/blocks/footer-block' );
}
