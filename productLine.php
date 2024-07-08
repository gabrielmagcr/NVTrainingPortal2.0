

<?php 
$productionSectionTitle= get_field('productionSectionTitle');

?>
<div class="productLineContainer">
    <h2 class="welcomeTitle">
        <?php echo $productionSectionTitle ?>
    </h2>
    <div class="productVideoContainer">
        <?php

// Check rows exists.
if( have_rows('product_line') ):

    // Loop through rows.
    while( have_rows('product_line') ) : the_row();

    $product_video = get_field('product_video');
    $product_place_holder_image = get_field('product_place_holder_image');
    $product_video_title = get_field('product_video_title');
    $product_video_text = get_field('product_video_text');
?>

        <div class="mainVideo productLineVideo">
            <div class="mainVideoImg productLineImg">
                <img class="placeholder-img placeholder-imgPL lazy-load " data-src="<?php echo $product_place_holder_image ?>"
                    alt="Placeholder Image">
                <img class="play-icon playIconProductVideo lazy-load" data-src="/wp-content/uploads/Button-play.svg"
                    alt="Play Button">
                <video class="video" controls style="display: none;">
                    <source src="<?php echo $product_video ?>" type="video/mp4">
                </video>
            </div>
            <div class="mainVideoText productLineText lazy-load">
                <h3>
                    <?php echo $product_video_title ?>
                </h3>
                <p>
                    <?php echo  $product_video_text ?>
                </p>
            </div>
        </div>
        <?php 
    // End loop.
endwhile;
?>

    </div>
</div>


<?php get_template_part('lineBreak'); ?>

<style>
    .playIconProductVideo {
        width: 28px !important;
    }

    @media (min-width:1023px) {
        .productVideoContainer {
            display: flex;
            justify-content: space-evenly;
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