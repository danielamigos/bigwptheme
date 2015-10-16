			
		</div>
		<!-- /container -->
        </div><!--end wrap-->
		<!-- footer -->
		<footer class="footer" style="min-height:<?PHP the_field('footer_height','option'); ?>px">	
            <div class="container">                
                <?PHP if(get_field('footer_elements','option')): ?>
                <div class="row">
                    <?PHP while ( have_rows('footer_elements', 'option') ) : the_row(); ?>
                        <?PHP if(get_row_layout()=='links'): ?>                    
                        <div class="col-sm-2 footer-link-column">
                            <h3 class="footer-links-title"><?PHP the_sub_field('title'); ?>&nbsp;</h3>
                            <ul class="footer-links-list">
                                <?PHP while ( have_rows('links', 'option') ) : the_row(); ?>
                                    <li class="footer-links-list-item"><a href="<?PHP the_sub_field('link_url'); ?>" target="<?PHP echo (get_sub_field('link_target') == 'Same Page')?'_self':'_blank'; ?>"><?PHP the_sub_field('link_text'); ?></a></li>
                                <?PHP endwhile; ?>
                            </ul>
                        </div>
                        <?PHP elseif(get_row_layout()=='logos'):?>                 
                        <div class="col-sm-2 footer-logos-column">
                            <?PHP while ( have_rows('logos', 'option') ) : the_row(); if (get_sub_field('use_link')): ?>
                                <a href="<?PHP the_sub_field('link'); ?>" class="logo-image" target="<?PHP echo (get_sub_field('link_target') == 'Same Page')?'_self':'_blank'; ?>"><img src="<?PHP echo get_sub_field('logo_image')['url']; ?>" /></a>
                                <?PHP else:?>
                                <img class="logo-image" src="<?PHP echo get_sub_field('logo_image')['url']; ?>" />
                            <?PHP endif; endwhile; ?>
                        </div>
                        <?PHP elseif(get_row_layout()=='social_media_buttons'):?>                 
                        <div class="col-sm-2 footer-social-media-column">
                            <?PHP while ( have_rows('buttons', 'option') ) : the_row(); ?>
                                <a href="<?PHP the_sub_field('link'); ?>" target="<?PHP echo (get_sub_field('link_target') == 'Same Page')?'_self':'_blank'; ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/<?PHP the_sub_field('social_network'); ?>.png" /></a>                               
                            <?PHP endwhile; ?>
                        </div>                            
                        <?PHP endif;?>
                    <?PHP endwhile;?>
                </div><!--End Row-->
                <?PHP endif;?>



                <div class="row">
                    <div class="col-sm-12">
                        <div class="disclaimer">
                            <?PHP the_field('disclaimer_text','option'); ?>
                        </div>
                    </div>
                </div><!--End Row-->

            </div>
		</footer>
		<!-- /footer -->


		<?php wp_footer(); ?>

		<!-- analytics 
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>-->

	</body>
</html>
