<?php /* Template Name: One Column Template */ get_header(); ?>
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

    <div class="row">
        <div class="col-sm-12" style="background-color:#DADADA;">
           <h1 style="color:#ffffff;">WHAT DOES A STANDARD HOMEOWNERS POLICY COVER?</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-7"  >
          1.) DWELLING –the structure of the house and all other permanently attached structures.
2.) OTHER STRUCTURES –these are structures that are detached from the house, or
connected to the house by a fence, wire or other form, but not otherwise attached to the
dwelling, such as a guest house or detached garage.
3.) PERSONAL PROPERTY –The personal contents of your home. This includes furniture,
appliances and clothing. Not all personal property is covered. Items more appropriately
covered under different forms of insurance may have limited or no coverage for loss. These
items include, but are not limited to, money, jewelry and firearms. Typically there are
sub-limits for these special items; which will vary by company.
4.) PERSONAL LIABILITY – Personal liability coveragewithin your homeowners’ policy
providescoveragefor bodily injury and/or property damage sustained by others for which you
or your immediate family members are legally responsible.
5.) LOSS OF USE –When a loss occurs due to a covered peril and the dwelling becomes
uninhabitable, the cost of additional living expenses is covered. Reimbursement of additional
living expenses covers the cost to the insured for maintaining a normal standard of living.
“OPEN PERILS” AND “NAMED PERILS” COVERAGE
A peril, as referred to in an insurance policy, is a cause of loss, such as fire or theft. Coverage
can be provided on an “open perils” basis, or a “named perils” basis. Named Perils policies
list exactly what is covered by the policy, while Open Perils (formerly called All Perils) policies
will cover all perils other than what is excluded. Named Perils policies are generally more
restrictive. A dwelling policy usually provides coverage for both the dwelling and contents on
a named perils basis, while a homeowners policy usually provides coverage for the dwelling
on an open perils basis, and for the contents on a named perils basis.
        </div>
        <div class="col-sm-5"  >
          Image baby!
        </div>
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
