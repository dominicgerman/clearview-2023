<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./images/logo.png">
    <?php wp_head(); ?>
</head>

<body class="overflow-x-hidden bg-white font-rubik [&_h1]:font-forum [&_h2]:font-forum [&_h3]:font-forum [&_h4]:font-forum [&_figcaption]:font-forum" <?php body_class(); ?>>

    <?php
    $parentId = wp_get_post_parent_id(get_the_ID());
    $navActive = 'font-medium underline underline-offset-8 decoration-lightBlue decoration-4'
    ?>


    <div class="relative flex items-center shadow-sm h-16 lg:h-20 justify-between bg-white lg:max-w-[1280px] lg:px-10 mx-auto">
        <a href="<?php echo get_home_url(); ?>">
            <div class="flex items-center gap-2 lg:gap-4 pl-4 lg:pl-0">
                <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" alt="Clearview Chapel logo" class="h-10 w-10 lg:h-14 lg:w-14">
                <img src="<?php echo get_theme_file_uri('/images/title.png') ?>" alt="Clearview Chapel logo" class="h-8 w-36 lg:h-14 lg:w-60">
            </div>
        </a>
        <input type="checkbox" class="opacity-0 peer absolute right-4 h-10 w-10 lg:hidden z-50" />
        <svg class="peer-checked:hidden absolute right-4 z-40 lg:hidden" width="40" height="16" viewBox="0 0 40 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="40" height="2" fill="black" />
            <rect y="7" width="40" height="2" fill="black" />
            <rect y="14" width="40" height="2" fill="black" />
        </svg>
        <svg class="hidden peer-checked:block absolute right-4 z-40 lg:hidden" width="40" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0.443848" y="30.1421" width="42" height="2" transform="rotate(-45 0.443848 30.1421)" fill="black" />
            <rect x="1.85791" y="0.443604" width="42" height="2" transform="rotate(45 1.85791 0.443604)" fill="black" />
        </svg>
        <nav class="hidden peer-checked:flex flex-col items-center justify-center gap-16 fixed top-0 left-1/2 -translate-x-1/2 text-2xl bg-white h-screen w-screen z-30 lg:flex lg:flex-row lg:static lg:text-lg lg:gap-12 lg:bg-opacity-0 lg:h-auto lg:w-auto lg:translate-x-0">
            <a href="/first-time-visitors" class="<?php if (is_page('first-time-visitors')) echo $navActive ?>">I'm new</a>
            <a href="/team" class="<?php if (is_page('team')) echo $navActive ?>">Team</a>
            <a href="/our-ministries" class="<?php if (is_page('our-ministries')) echo $navActive ?>">Ministries</a>
            <a href="/give">
                <button class="bg-lightBlue text-white px-8 py-2 rounded-full">
                    Give
                </button>
            </a>
        </nav>
    </div>