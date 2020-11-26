<?php
/**
 * Template Name: Template: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div class="home">
    <div class="news_holder">
        <div class="news_text">
            <h1 class="h3 py-5 text-center">XANTHOUS IS COMING !</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus accumsan orci et metus ornare, ultricies placerat sem elementum. Etiam euismod sit amet arcu non hendrerit. Donec auctor libero efficitur consequat iaculis. Quisque augue velit, aliquet id metus vitae, volutpat porta urna. Vivamus lobortis </p>
        </div>
        <div class="news_img">
            <div class="img"></div>
        </div>
    </div>

    <div class="video_holder">
        <h1 class="h4 py-5 text-center">REVEAL TRAILER</h1>
        <div class="video"></div>
    </div>
</div>


<?php
get_footer();
