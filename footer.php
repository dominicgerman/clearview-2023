<div class="w-screen bg-darkGrey">
    <div class="min-h-[366px] w-full bg-darkGrey lg:max-w-[1280px] px-10 py-16 lg:p-0 lg:py-14 lg:px-24 mx-auto">
        <div class="flex flex-col gap-12 lg:grid lg:grid-cols-footer mb-10 text-white">
            <img src="<?php echo get_theme_file_uri('/images/logo.png') ?>" alt="Clearview chapel logo" class="h-12 w-12 lg:h-20 lg:w-20">
            <div class="flex flex-col font-forum text-lg gap-5">
                <p>
                    <a href="#">Give</a>
                </p>
                <p>
                    <a href="<?php echo get_home_url(); ?>/about-us">About Us</a>
                </p>
                <p>
                    <a href="#">Livestream</a>
                </p>
                <p>
                    <a href="#">Church Directory</a>
                </p>
            </div>
            <div class="flex items-start gap-4 lg:justify-end">
                <a href="https://www.facebook.com/clearviewchapel/" target="_blank">
                    <img src="<?php echo get_theme_file_uri('/images/facebook.png') ?>" alt="Visit our Facebook page" height="29.2px" width="16.3px">
                </a>
                <a href="https://www.instagram.com/" target="_blank">
                    <img src="<?php echo get_theme_file_uri('/images/instagram.png') ?>" alt="Visit our Instagram page" height="29.2px" width="29.2px">
                </a>
            </div>
        </div>
        <p class="text-white text-center text-xs font-normal">2101 S Davis Rd, LaGrange, GA, 30241 | &copy; 2023 Clearview Chapel</p>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>