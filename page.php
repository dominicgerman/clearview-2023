<?php

get_header();

while (have_posts()) {
    the_post();
?>


    <div class="max-w-[1080px] mx-6 lg:mx-auto my-32">
        <div class="h-[338px] relative mb-24" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.9) 20%, rgba(0, 0, 0, 0.4) 92.6%), url(<?php the_post_thumbnail_url() ?>);">
            <h1 class="text-5xl text-white absolute top-1/2 left-1/2 -translate-y-1/2 -translate-x-1/2 m-0">
                <?php the_title() ?>
            </h1>
        </div>
        <div id="page-content" class="my-9 [&_h2]:mt-24 [&_h2]:text-4xl [&_.wp-block-button]:my-14 [&_p]:text-lg [&_p]:my-9 [&_.wp-block-column_figure]:pt-12 [&_.wp-block-columns]:my-12">
            <?php the_content() ?>
        </div>
    </div>
<? }

get_footer();
