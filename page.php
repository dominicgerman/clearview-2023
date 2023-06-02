<?php

get_header();

while (have_posts()) {
    the_post();
?>


    <div class="max-w-[1080px] mx-6 lg:mx-auto my-8 lg:my-32">
        <div class="h-64 lg:h-[338px] relative lg:mb-24 bg-cover bg-top" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.3) 20%, rgba(0, 0, 0, 0.3) 92.6%), url(<?php the_post_thumbnail_url() ?>);">
            <h1 class="text-4xl lg:text-5xl text-white py-28 lg:py-36 px-6 text-center">
                <?php the_title() ?>
            </h1>
        </div>
        <div id="page-content" class="my-9 [&_h2]:mt-12 lg:[&_h2]:mt-24 [&_h2]:text-3xl lg:[&_h2]:text-4xl [&_.wp-block-button]:my-14 [&_p]:text-base lg:[&_p]:text-lg [&_p]:my-4 lg:[&_p]:my-9 [&_.wp-block-column_figure]:w-1/3 md:[&_.wp-block-column_figure]:w-full [&_.wp-block-heading]:my-0  [&_.wp-block-columns]:my-12 [&_a]:link-underline">
            <?php the_content() ?>
        </div>
    </div>
<? }

get_footer();

// lg:[&_.wp-block-columns_.wp-block-column:nth-child(2)]:pt-24