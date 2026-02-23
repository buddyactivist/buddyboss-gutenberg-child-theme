<?php
/**
 * Header – BuddyBoss Gutenberg Child Theme
 */

if ( function_exists( 'block_template_part' ) ) {
    block_template_part( 'header-block' );
} else {
    get_template_part( 'template-parts/blocks/header-block' );
}
