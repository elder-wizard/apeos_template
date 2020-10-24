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
        <h2 class="works-txt">od roku 2014 jsme pomohli více než :</h2>
        <span class="underline"></span>

        <div class="numbers-animate row">
            <div id="circle" class="col-md-12 col-lg-3">
                <span class="count">300</span>
                <img src="wp-content/themes/apeos/img/icon-1.svg">
                <p>Rodinám</p>
            </div>

            <div id="circle" class="col-md-12 col-lg-3">
                <span class="count">500</span>
                <img src="wp-content/themes/apeos/img/icon-2.svg">
                <p>Seniorů</p>
            </div>

            <div id="circle" class="col-md-12 col-lg-3">
                <span class="count">200</span>
                <img src="wp-content/themes/apeos/img/icon-3.svg">
                <p>Asistentkám</p>
            </div> 
        </div>

    </div>
</section>



<section class="registrovat-section">
    <div class="container">
        <h2 class="reg-text">Chci se registrovat:</h2>

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
                    <li class="row">
                        <div class="slide-photo col-md-12 col-lg-6">
                            <img src="wp-content/themes/apeos/img/q-photo.jpg">
                        </div>
                        <blockquote class="quote  col-md-12 col-lg-6">
                            <p class="italic-style">S překlady Vaší firmy jsme velice spokojeni. Protože Vás využíváme hlavně k překladu E-mailové korespondence, musíme ocenit rychlost, s jakou reagujete na naše požadavky. Můžeme Vaše služby velice doporučit.
                            </p>

                            <p class="sm-bold">Miroslav CHLUBNA, za kolektiv pracovníku firmy NOVATRONIC</p>
                        </blockquote>
                    </li>

                    <li class="row">
                        <div class="slide-photo  col-md-12 col-lg-6">
                            <img src="wp-content/themes/apeos/img/q-photo2.jpg">
                        </div>
                        <blockquote class="quote-bg  col-md-12 col-lg-6">
                            <p class="italic-style">Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Aenean eu leo quam
                            </p>

                            <p class="sm-bold">Susan Sims, Interaction Designer at XYZ</p>
                        </blockquote>
                    </li>

                    <li class="row">
                        <div class="slide-photo  col-md-12 col-lg-6">
                            <img src="wp-content/themes/apeos/img/q-photo.jpg">
                        </div>
                        <blockquote class="quote  col-md-12 col-lg-6">
                            <p class="italic-style">S překlady Vaší firmy jsme velice spokojeni. Protože Vás využíváme hlavně k překladu E-mailové korespondence, musíme ocenit rychlost, s jakou reagujete na naše požadavky. Můžeme Vaše služby velice doporučit.
                            </p>

                            <p class="sm-bold">Miroslav CHLUBNA, za kolektiv pracovníku firmy NOVATRONIC</p>
                        </blockquote>
                    </li>

                    <li class="row">
                        <div class="slide-photo  col-md-12 col-lg-6">
                            <img src="wp-content/themes/apeos/img/q-photo2.jpg">
                        </div>
                        <blockquote class="quote-bg  col-md-12 col-lg-6">
                            <p class="italic-style">“Integer posuere erat a ante venenatis dapibus posuere velit
                                aliquet. Donec sed odio dui. Aenean eu leo quam...”
                            </p>
                            <p class="sm-bold">Susan Sims, Interaction Designer at XYZ</p>
                        </blockquote>
                    </li>
                </ul>
            </div>
        </div>
</section>

<?php
    get_footer();
?>