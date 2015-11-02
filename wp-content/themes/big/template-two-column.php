<?php /* Template Name: Two Column Template */ get_header(); ?>
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

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        
                <div class="row">
                    <?PHP if(get_field('main_column_position') == "Left"): ?>
                        <div class="col-sm-7" >  
                            <?PHP if( have_rows('main_column') ): while ( have_rows('main_column') ) : the_row(); ?>
                                <?PHP if(get_row_layout() == 'title_bar'): ?>
                                    <div class="two-column-title-bar-wrapper">
                                        <h2 class="two-column-title-bar"><?PHP the_sub_field('title_text'); ?></h2>
                                    </div>
                                <?PHP elseif(get_row_layout() == 'content_section'): ?>
                                    <div class="two-column-content-wrapper">
                                        <?PHP the_sub_field('content'); ?>
                                    </div>
                                <?PHP endif; ?>
                            <?PHP endwhile; endif; ?>                
                        </div>
                        <div class="col-sm-5">
                            <?PHP if( have_rows('secondary_column') ): while ( have_rows('secondary_column') ) : the_row(); ?>
                                <?PHP if(get_row_layout() == 'side_image'): $image = get_sub_field('image'); /**/ ?>
                                    <div class="two-column-side-image-wrapper">
                                        <img src="<?PHP echo $image['url']; ?>" alt="<?PHP echo $image['alt']; ?>" />
                                        <div class="side_image_caption">
                                            <?PHP the_sub_field('image_caption'); ?>
                                        </div>
                                    </div>
                                <?PHP elseif(get_row_layout() == 'form'): ?>
                                    <div class="two-column-form-wrapper">
                                        <?PHP the_sub_field('content'); ?>
                                    </div>
                                <?PHP endif; ?>
                            <?PHP endwhile; endif; ?> 
                        </div>  
                    <?PHP else: ?>
                        <div class="col-sm-5" >   
                            <?PHP if( have_rows('secondary_column') ): while ( have_rows('secondary_column') ) : the_row(); ?>
                                <?PHP if(get_row_layout() == 'side_image'): $image = get_sub_field('image'); ?>
                                    <div class="two-column-side-image-wrapper">
                                        <img src="<?PHP echo $image['url']; ?>" alt="<?PHP echo $image['alt']; ?>" />
                                        <div class="side_image_caption">
                                            <?PHP the_sub_field('image_caption'); ?>
                                        </div>
                                    </div>
                                <?PHP elseif(get_row_layout() == 'form'): ?>
                                    <div class="two-column-form-wrapper">
                                        <?PHP the_sub_field('content'); ?>
                                    </div>
                                <?PHP endif; ?>
                            <?PHP endwhile; endif; ?>                
                        </div>
                        <div class="col-sm-7">
                            <?PHP if( have_rows('dynamic_content') ): while ( have_rows('dynamic_content') ) : the_row(); ?>
                                <?PHP if(get_row_layout() == 'title_bar'): ?>
                                    <div>
                                        <h2><?PHP the_sub_field('title_text'); ?></h2>
                                    </div>
                                <?PHP elseif(get_row_layout() == 'content_section'): ?>
                                    <div><?PHP the_sub_field('content'); ?></div>
                                <?PHP endif; ?>
                            <?PHP endwhile; endif; ?>  
                        </div>
                    <?PHP endif; ?>
                </div>

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