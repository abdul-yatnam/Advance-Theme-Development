<?php
/**
 * Main template file.
 * 
 * @package Aquila
 *  */
get_header();
?>
<?php
echo 'Template file: ' . basename( __FILE__ );
?>

<div class="content">
    <?php esc_html_e(' Content Blog', 'aquila') ?>
</div>
<?php get_footer(); ?>