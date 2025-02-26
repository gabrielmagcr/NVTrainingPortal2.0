<?php 
$productionSectionTitleGrid = get_field('productionSectionTitleGrid') ? get_field('productionSectionTitleGrid') : "";
?>


<div class="productLineContainer">
    <h2 class="welcomeTitle test">
        <?php echo esc_html($productionSectionTitleGrid); ?>
    </h2>
    <div class="quizContainer">
        <?php
        // Check rows exists.
        if( have_rows('product_line') ):
            // Loop through rows.
            while( have_rows('product_line_grid') ) : the_row();

                $product_video = get_sub_field('product_video');
                $product_place_holder_image = get_sub_field('product_place_holder_image');
                $product_video_title = get_sub_field('product_video_title');
                ?>
                <div class="quiz">
                <?php if ($product_place_holder_image): ?>
                            <img class="quizzImage"  src="<?php echo esc_url($product_place_holder_image); ?>" alt="Placeholder Image">

                        <?php endif; ?>
                        <?php if ($product_video): ?>
                            <video class="video" controls style="display: none;">
                                <source src="<?php echo esc_url($product_video); ?>" type="video/mp4">
                            </video>
                        <?php endif; ?>
                        <?php if ($product_video_title): ?>
                            <span><?php echo esc_html($product_video_title); ?></span>
                        <?php endif; ?>
                   
                </div>
                <?php 
            // End loop.
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_template_part('lineBreak'); ?>

