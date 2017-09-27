<footer class="content-info" role="contentinfo">
    <div class="container">
        <div class="row">

            <div class="col-md-12 copyright text-center">
                <span class="copy-text">
                    <?php if ( $footer_text = get_theme_mod( 'wedocs_footer_text' ) ) {
                        echo esc_html( $footer_text );
                    } else { ?>
                        &copy; <?php echo date('Y'); ?><?php bloginfo('name'); ?>
                    <?php } ?>
                </span>

                
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript">
    jQuery('.wedocs-docs-list').masonry({
      // options
      itemSelector: '.wedocs-docs-single',
      columnWidth: 200
    });
</script>

<?php wp_footer(); ?>
