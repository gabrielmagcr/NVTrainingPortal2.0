<?php 
$productionSectionTitle = get_field('productionSectionTitle');
?>


<div class="productLineContainer training-container">
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
                            <img class="placeholder-img placeholder-imgPL"  src="<?php echo esc_url($product_place_holder_image); ?>" alt="Placeholder Image">
                        <?php endif; ?>
                        <?php if ($product_video): ?>
                            <video class="video" controls controlsList="nodownload" style="display: none;">
                                <source src="<?php echo esc_url($product_video); ?>" type="video/mp4">
                            </video>
                        <?php endif; ?>
                    </div>
                    <div class="mainVideoText productLineText"> 
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


