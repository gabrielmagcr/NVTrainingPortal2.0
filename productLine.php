<?php 
$productionSectionTitle = get_field('productionSectionTitle');
?>
<style>
    .playIconProductVideo {
        width: 28px !important;
    }

    @media (min-width: 1023px) {
        .productVideoContainer {
            display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 20px;
        justify-items: center;
        }

        .placeholder-imgPL,
        .productLineImg video {
            width: 315px;
        }

        .productText {
            max-width: 800px;
        }

        .productLineVideo {
            width: 315px;
        }

        .productLineText {
            width: auto;
        }

        .playIconProductVideo {
            width: 50px !important;
        }
    }
</style>

<div class="productLineContainer">
    <h2 class="welcomeTitle">
        <?php echo esc_html($productionSectionTitle); ?>
    </h2>
    <div class="productVideoContainer">
        <?php
        // Check rows exists.
        if( have_rows('product_line') ):
            // Loop through rows.
            while( have_rows('product_line') ) : the_row();

                $product_video = get_sub_field('product_video');
                $product_place_holder_image = get_sub_field('product_place_holder_image');
                $product_video_title = get_sub_field('product_video_title');
                $product_video_text = get_sub_field('product_video_text');
                ?>
                <div class="mainVideo productLineVideo">
                    <div class="mainVideoImg productLineImg">
                        <?php if ($product_place_holder_image): ?>
                            <img class="placeholder-img placeholder-imgPL lazy-load" src="/wp-content/uploads/lazyload.gif" data-src="<?php echo esc_url($product_place_holder_image); ?>" data-placeholder="/wp-content/uploads/lazyload.gif" alt="Placeholder Image">
                        <?php endif; ?>
                        <img class="play-icon playIconProductVideo lazy-load" src="/wp-content/uploads/lazyload-transparent.gif" data-src="/wp-content/uploads/Button-play.svg" data-placeholder="/wp-content/uploads/lazyload-transparent.gif" alt="Play Button">
                        <?php if ($product_video): ?>
                            <video class="video" controls style="display: none;">
                                <source src="<?php echo esc_url($product_video); ?>" type="video/mp4">
                            </video>
                        <?php endif; ?>
                    </div>
                    <div class="mainVideoText productLineText lazy-load">
                        <?php if ($product_video_title): ?>
                            <h3><?php echo esc_html($product_video_title); ?></h3>
                        <?php endif; ?>
                        <?php if ($product_video_text): ?>
                            <p><?php echo esc_html($product_video_text); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <?php 
            // End loop.
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_template_part('lineBreak'); ?>

