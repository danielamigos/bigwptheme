<?php /* Template Name: One Column Template */ get_header(); ?>
    <div class="row">
        <div class="col-sm-12" style="<?PHP if( !empty(get_field('top_header_image'))) echo 'background-image:url('.get_field('top_header_image')['url'].')'; else echo 'background-color:#808285;'; ?>">
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
            <?PHP if (get_field('use_top_call_to_action_link')): ?>
            <div class="top-call-to-action">
                <a href="<?PHP the_field('top_call_to_action_url'); ?>" target="<?PHP echo (get_sub_field('link_target') == 'Same Page')?'_self':'_blank'; ?>"><?PHP the_field('top_call_to_action_text'); ?></a>
            </div>
            <?PHP endif; ?>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
                <div class="row">
                    <div class="col-sm-12" style="background-color:#808285;">
                        <h1 class="one-column-title"><?PHP the_field('content_title'); ?></h1>
                    </div>
                </div>
                <div class="row">
                    <?PHP if( get_field('use_side_image') ) : $image = get_field('side_image'); ?>                    
                        <div class="col-sm-12"> 
                            <div class="hidden-xs  col-sm-5 one-column-side-image-wrapper" style="float:<?PHP the_field('side_image_position');?>;" >
                                <?php if( !empty($image) ): ?>
                                <img src="<?PHP echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"/>
                                <?PHP endif; ?>
                                <div class="side_image_caption">
                                    <?PHP the_field('side_image_caption'); ?>
                                </div>
                            </div>
                            <div class="one-column-content-header">
                                <?PHP the_field('content_header'); ?>
                            </div>
                            <div class="one-column-content-body">
                                <?php the_content(); ?>
                            </div>
                            <div class="hidden-sm hidden-md hidden-lg col-sm-5 one-column-side-image-wrapper" style="float:<?PHP the_field('side_image_position');?>;" >
                                <?php if( !empty($image) ): ?>
                                <img src="<?PHP echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>"/>
                                <?PHP endif; ?>
                                <div class="side_image_caption">
                                    <?PHP the_field('side_image_caption'); ?>
                                </div>
                            </div>
                        </div>
                    <?PHP else: ?>                
                        <div class="col-sm-12">
                            <div class="one-column-content-header">
                                <?PHP the_field('content_header'); ?>
                            </div>
                            <div class="one-column-content-body">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    <?PHP endif; ?>
                    
                </div>

                <?PHP if (get_field('use_bottom_quote')): ?>
                <div class="row">
                    <div class="col-sm-12">
                        <p class="bottom-quote"><?PHP the_field('bottom_quote');?></p>
                    </div>
                </div>
                <?PHP endif; ?>
                
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
