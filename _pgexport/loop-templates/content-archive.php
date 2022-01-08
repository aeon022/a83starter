
    <header class="page-header mb-4">
        <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
        <?php the_archive_description( '<div class="taxonomy-description">', '</div>' ); ?>
    </header>
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php PG_Helper::rememberShownPost(); ?>
            <article <?php post_class( 'mb-5' ); ?> id="post-<?php the_ID(); ?>">
                <header class="page-header">
                    <?php if ( is_singular() ) : ?>
                        <h2 class="entry-title"><?php the_title(); ?></h2>
                    <?php else : ?>
                        <h2 class="entry-title"><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                    <?php endif; ?>
                    <div class="entry-meta">
                        <p><?php _e( 'Posted on', 'a83starter' ); ?> <span><?php the_modified_date(); ?></span> <?php _e( 'by', 'a83starter' ); ?> <span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span></p>
                    </div>
                </header>
                <?php echo PG_Image::getPostImage( null, 'large', null, 'both', null ) ?>
                <div class="entry-content">
                    <?php the_excerpt( ); ?><a class="btn btn-primary" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Read More', 'a83starter' ); ?></a>
                </div>
                <footer class="entry-footer"></footer>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'a83starter' ); ?></p>
    <?php endif; ?>
    <nav aria-label="Posts navigation">
        <?php posts_nav_link( null, __( '&#xAB; Newer Posts', 'a83starter' ), __( 'Older Posts &#xBB;', 'a83starter' ) ); ?>
    </nav>
