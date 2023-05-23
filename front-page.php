<?php get_header(); ?>

<section>
    <?php while (have_posts()) {
        the_post();
    ?>
        <div class="h-screen lg:h-[600px] relative text-white" style="background-image: linear-gradient(90deg, rgba(0, 0, 0, 0.9) 20%, rgba(0, 0, 0, 0.4) 92.6%), url(<?php the_post_thumbnail_url() ?>);">
            <div class="text-center text-sm font-normal py-3 lg:text-xl lg:py-5" style="background: rgba(86, 126, 168, 0.7);">
                <span> Service is every Sunday at 11:00AM.</span>
                <a class="underline underline-offset-2" href="https://goo.gl/maps/oUVoxyy44KEhb2uW8" target="_blank">Get directions</a>
            </div>
            <div class="max-w-[1080px] mx-6 lg:mx-auto my-20 lg:my-32">
                <h1 class="text-6xl mb-7 font-normal">
                    <?php the_title() ?>
                </h1>
                <div class="mb-9 text-2xl">
                    <?php the_excerpt() ?>
                </div>
                <button class="text-black bg-white rounded-full py-4 px-12 font-semibold mr-10 mb-6"><a href="<?php echo get_home_url(); ?>/first-time-visitors">Plan your visit</a></button>
                <a href="https://www.facebook.com/clearviewchapel/live_videos" class="pl-2 inline-block lg:inline font-semibold link-underline" target="_blank">View the livestream</a>
            </div>
        </div>
        <div class="max-w-[1080px] mx-6 lg:mx-auto my-16 lg:my-32">
            <div id="page-content" class="text-3xl lg:text-4xl my-9 font-forum [&_p]:mb-12 [&_a]:underline [&_a]:underline-offset-4 [&_a]:decoration-lightBlue">
                <?php the_content() ?>
            </div>
        </div>
        <div class="h-[640px] lg:h-[800px] bg-lightGrey">
            <div class="max-w-2xl px-6 lg:px-0 py-12 lg:py-24 mx-auto contact-form__button">
                <h3 class="text-4xl font-forum mb-8">
                    Contact Us
                </h3>
                <span>Looking to get in touch? We would love to hear from you.</span>
                <?php echo do_shortcode('[wpforms id="39" title="false"]') ?>
            </div>
        </div>
    <? } ?>
</section>
</main>

<?php



get_footer();
