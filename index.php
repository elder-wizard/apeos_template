<?php
    get_header();
?>

<body>
<section class="welcome-section">

    <div class="container">

        <div class="welcome-slogan col-md-8 offset-md-2">

            <a class="logo" href="<?php echo get_home_url(); ?>" target="blank">
                <img src="<?php 
                
                $custom_logo__url = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ), 'full' ); 

                echo $custom_logo__url[0]; ?>" alt="Apeos"/>
            </a>

            <h1 class="slogan-big-text"><?php the_field('h1'); ?></h1>

            <h2 class="secondary-font"><?php the_field('description_one'); ?>
            </h2>

            <p class="reg-font"><?php the_field('call_to_action_one'); ?></p>
        </div>
        <div class="group-btn">
                <a href="<?php the_field('button_link_one'); ?>" class="btn-main first-btn-bg"><?php the_field('button_text_one'); ?></a>
                <a href="<?php the_field('button_link_two'); ?>" class="btn-main second-btn-bg"><?php the_field('button_text_two'); ?></a>
            </div>
    </div>
</section>

<section class="registrace-section">
    <div class="container">

        <p class="reg-text"><?php the_field('reg_header'); ?></p>

        <h3 class="caption-txt col-md-10 offset-md-1"><?php the_field('caption_text_1'); ?><span class="caption-span"><?php the_field('caption_text_1_2'); ?></span></h3>

        <ul class="list-registrace col-md-10 offset-md-1">
            <li>
                <p><?php the_field('paragraph_1_1'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_1_2'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_1_3'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_1_4'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_1_5'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_1_6'); ?></p>
            </li>
        </ul>

        <h3 class="caption-txt col-md-10 offset-md-1"><?php the_field('caption_text_2'); ?></h3>

        <ul class="list-registrace col-md-10 offset-md-1">
            <li>
                <p><?php the_field('paragraph_2_1'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_2_2'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_2_3'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_2_4'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_2_5'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_2_6'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_2_7'); ?></p>
            </li>

            <li>
                <p><?php the_field('paragraph_2_8'); ?></p>
            </li>
        </ul>
    </div>
</section>

<section class="works-section">
    <div class="container">
        <h2 class="works-txt"><?php the_field('stat_header'); ?></h2>
        <span class="underline"></span>

        <div class="numbers-animate row">
            <div id="circle" class="col-md-12 col-lg-3">
                <span class="count"><?php the_field('count_1'); ?></span>
                <img src="wp-content/themes/apeos/img/icon-1.svg">
                <p><?php the_field('scope_1'); ?></p>
            </div>

            <div id="circle" class="col-md-12 col-lg-3">
                <span class="count"><?php the_field('count_2'); ?></span>
                <img src="wp-content/themes/apeos/img/icon-2.svg">
                <p><?php the_field('scope_2'); ?></p>
            </div>

            <div id="circle" class="col-md-12 col-lg-3">
                <span class="count"><?php the_field('count_3'); ?></span>
                <img src="wp-content/themes/apeos/img/icon-3.svg">
                <p><?php the_field('scope_3'); ?></p>
            </div> 
        </div>

    </div>
</section>



<section class="registrovat-section">
    <div class="container">
        <h2 class="reg-text"><?php the_field('call_to_action_one'); ?></h2>

        <div class="group-btn">
                <a href="<?php the_field('button_link_one'); ?>" class="btn-main first-btn-bg"><?php the_field('button_text_one'); ?></a>
                <a href="<?php the_field('button_link_two'); ?>" class="btn-main second-btn-bg"><?php the_field('button_text_two'); ?></a>
        </div>
    </div>
</section>

<section>
<div class="container-fluid">

<div class="flexslider">
    <ul class="slides ">
        <?php 

            $posts = get_posts( array(
                'numberposts' => 6,
                'category_name'    => 'slider',
                'orderby'     => 'date',
                'order'       => 'DESC',
                'include'     => array(),
                'exclude'     => array(),
                'meta_key'    => '',
                'meta_value'  =>'',
                'post_type'   => 'post',
                'suppress_filters' => true, 
            ) );

            foreach( $posts as $post ){
                setup_postdata($post);
                

        ?>
        <li class="row">

            <div class="slide-photo col-md-12 col-lg-6">
                <img src="<?php the_post_thumbnail_url(); ?> ">
            </div>

            <blockquote class="quote  col-md-12 col-lg-6">
                <p class="italic-style"><?php the_content(); ?>
                </p>

                <p class="sm-bold"><?php the_title(); ?></p>
            </blockquote>
        </li>
        <?php

            }
            wp_reset_postdata(); // сброс

        ?>
    </ul>
</div>
</div>
</section>

<?php
    get_footer();
?>