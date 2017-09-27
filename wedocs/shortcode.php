<?php if ( $docs ) : ?>

<div class="wedocs-shortcode-wrap">
    <div class="wedocs-docs-list">

        <?php foreach ($docs as $main_doc) : ?>
            <div class="col-md-4 wedocs-docs-single">
                <h3><a href="<?php echo get_permalink( $main_doc['doc']->ID ); ?>"><?php echo $main_doc['doc']->post_title; ?></a></h3>

                <?php if ( $main_doc['sections'] ) : ?>

                    <div class="inside">
                        <ul class="wedocs-doc-sections">
                            <?php foreach ($main_doc['sections'] as $section) : ?>
                                <li><a href="<?php echo get_permalink( $section->ID ); ?>"><?php echo $section->post_title; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                <?php endif; ?>

                <div class="wedocs-doc-link">
                    <a href="<?php echo get_permalink( $main_doc['doc']->ID ); ?>"><?php echo $more; ?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php endif;