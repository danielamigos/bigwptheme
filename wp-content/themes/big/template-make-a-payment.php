<?php /* Template Name: Make A Payment Template */ get_header(); ?>
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
                    <div class="col-sm-12"> 
                        <div class="one-column-content-header">
                            <?PHP the_field('content_header'); ?>
                        </div>
                        <div class="one-column-content-body">
                            <?php the_content(); ?>
                        </div>
                    </div>                                      
                </div>
                    <?PHP $count = 0; if( have_rows('logos') ): while ( have_rows('logos') ) : the_row(); $image = get_sub_field('image');  $count++; ?>
                    <?PHP if($count == 1): //add row if it is the first ?>                    
                <div class="row" style="text-align:center">
                    <?PHP endif; ?>
                    <div class="col-sm-4" style="text-align:center;">
                        <a href="<?PHP the_sub_field('url'); ?>"><img src="<?PHP echo $image['url']  ?>" alt="" /></a>
                    </div>
                    <?PHP if($count == 3): //Close row if the row has 3 cells and restart the counter?>                    
                </div>
                    <?PHP  $count = 0; endif;  ?>
                    <?PHP endwhile; endif;?>   
                    
                    <?PHP if($count != 0 ): //close div if the last row has less than 3 cells ?>                    
                </div>
                    <?PHP  $count = 0; endif; ?>                            
                
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
