<?php get_header(); ?>
    <div class="row">
        <div class="col-sm-12" style="<?PHP if( !empty(get_field('top_header_image'))) echo 'background-image:url('.get_field('top_header_image')['url'].')'; else echo 'background-color:#DADADA;'; ?>">
            <div class="top-page-header">
                <?php if ( get_theme_mod( 'big_logo' )): ?>
                <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr(get_bloginfo( 'name','display')); ?>' rel='home'>
                    <img src='<?php echo esc_url( get_theme_mod( 'big_logo' ) ); ?>' alt='<?php echo esc_attr(get_bloginfo('name','display')); ?>'>
                </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
	<main role="main">
		<!-- section -->
		<section>
			<h1 class="page-title"><?php the_title();?></h1>
            <?PHP if (function_exists(the_subtitle)): ?>
            <h2 class="page-subtitle"><?php the_subtitle(); ?></h2>
            <?PHP endif;?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'bigtheme' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
