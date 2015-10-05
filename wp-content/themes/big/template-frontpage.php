<?php /* Template Name: Frontpage Template */ get_header(); ?>

<?php

    // check if the flexible content field has rows of data
    if( have_rows('dynamic_content') ): while ( have_rows('dynamic_content') ) : the_row();

        if( get_row_layout() == 'full_width_image' ): ?>
            <div class="row">
                <div class="col-sm-12">
                    <img class="center-block" src="<?php echo get_sub_field('image')['url']; ?>" />
                </div>
            </div>
        <?php  elseif(get_row_layout() == 'call_to_action_menu'): ?>
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="call-to-action-menu-title" style="font-size:<?PHP the_sub_field('title_font_size'); ?>px">
                        <?PHP the_sub_field('title');?>
                    </h1>
                </div>
            </div>
            <div class="row call-to-action-menu" >
                <?PHP $menu_items = get_sub_field('menu_items');
                      $numberOfMenuItem = count($menu_items);
                      foreach($menu_items as $index => $value):?>
                <div class="col-sm-2 call-to-action-menu-item" style="<?PHP if($numberOfMenuItem < 6) echo 'width:19%;';?> vertical-align:middle;">
                    <div><img class="center-block" src="<?PHP echo $value['image']['url'];?>" /></div>
                    <div class="call-to-action-menu-text"><?PHP echo $value['text'];?></div>
                    <div class="call-to-action-hidden-desription" style="display:none;">
                        <div class="call-to-action-menu-description"><?PHP echo $value['description']; ?></div>
                        <?PHP if($value['use_link']): $link_target = ($value['link_target']=='New Page/Tab')?'_blank':'_self';?>
                        <div class="call-to-action-menu-link"><a href="<?PHP echo $value['link']; ?>" target="<?PHP echo $link_target; ?>"><?PHP echo $value['link_text']; ?></a></div>
                        <?PHP endif;?>
                    </div>
                 </div> <!-- end col -->
                <?PHP endforeach; ?>
            </div> <!-- end row -->
        <?php  elseif(get_row_layout() == 'two_column_section'): ?>

            <div class="row">
                <div class="col-sm-6">
                    <h2 class="two-column-title grey-title-background">CLICK HERE FOR AN INSTANT HOME OR AUTO QUOTE</h2>
                </div>
                <div class="col-sm-6">
                    <h2 class="two-column-title orange-title-background">WHO IS BREINHOLT INSURANCE GROUP?</h2>
                </div>
                <!--content: trade gothic light 23-->
            </div>
            <?php
        endif;

        endwhile;

    else :

        // no layouts found

    endif;
            ?>
            <div class="row">
                <div class="col-sm-6">
                    <h2 class="two-column-title grey-title-background">CLICK HERE FOR AN INSTANT HOME OR AUTO QUOTE</h2>
                </div>
                <div class="col-sm-6">
                    <h2 class="two-column-title orange-title-background">WHO IS BREINHOLT INSURANCE GROUP?</h2>
                </div>
            </div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
