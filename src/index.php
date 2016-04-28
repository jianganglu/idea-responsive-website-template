<?php get_header(); ?>

<h1>你好，世界！</h1>
<?php echo __('Hello', 'idea'); ?>
<?php _e('Hello', 'idea'); ?>
<?php _e('Test', 'idea'); ?>

<?php echo '/languages'; ?>

<?php get_footer(); ?>
<!--
<script src="<?php bloginfo( 'template_url' ); ?>/assets/js/index.js"></script>
-->