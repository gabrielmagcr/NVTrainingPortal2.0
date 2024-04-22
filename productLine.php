<style>
    .playIconProductVideo {
        width: 28px !important;
    }
    @media (min-width:1023px) {
        .productVideoContainer {
            display: flex;
            justify-content: space-evenly;
        }

        .placeholder-imgPL, .productLineImg video {
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
        .playIconProductVideo{
            width: 50px !important;
        }
    }
</style>

<?php 
$productionSectionTitle= get_field('productionSectionTitle');
$productVideo1 = get_field('productVideo1');
$pPlaceHolderImg1 = get_field('pPlaceHolderImg1');
$pVideoTitle1 = get_field('pVideoTitle1');
$pVideoText1 = get_field('pVideoText1');
$productVideo2 = get_field('productVideo2');
$pPlaceHolderImg2 = get_field('pPlaceHolderImg2');
$pVideoTitle2 = get_field('pVideoTitle2');
$pVideoText2 = get_field('pVideoText2');
$productVideo3 = get_field('productVideo3');
$pPlaceHolderImg3 = get_field('pPlaceHolderImg3');
$pVideoTitle3 = get_field('pVideoTitle3');
$pVideoText3 = get_field('pVideoText3');
?>
<div class="productLineContainer">
    <h2 class="welcomeTitle"><?php echo $productionSectionTitle ?></h2>
    <div class="productVideoContainer">
        <div class="mainVideo productLineVideo">
            <div class="mainVideoImg productLineImg">
                <img class="placeholder-img placeholder-imgPL lazy-load " data-src="<?php echo $pPlaceHolderImg1 ?>" alt="Placeholder Image">
                <img class="play-icon playIconProductVideo lazy-load"  data-src="/wp-content/uploads/Button-play.svg" alt="Play Button">
                <video class="video" controls style="display: none;">
                    <source src="<?php echo $productVideo1 ?>" type="video/mp4">
                </video>
            </div>
            <div class="mainVideoText productLineText">
                <h3><?php echo $pVideoTitle1 ?></h3>
                <p>L<?php echo  $pVideoText1 ?></p>
            </div>
        </div>
		<div class="mainVideo productLineVideo">
            <div class="mainVideoImg productLineImg lazy-load">
                <img class="placeholder-img placeholder-imgPL lazy-load " data-src="<?php echo $pPlaceHolderImg2 ?>" alt="Placeholder Image">
                <img class="play-icon playIconProductVideo"  data-src="/wp-content/uploads/Button-play.svg" alt="Play Button">
                <video class="video" controls style="display: none;">
                    <source src="<?php echo $productVideo2 ?>" type="video/mp4">
                </video>
            </div>
            <div class="mainVideoText productLineText">
                <h3><?php echo $pVideoTitle2 ?></h3>
                <p>L<?php echo  $pVideoText2 ?></p>
            </div>
        </div>
		<div class="mainVideo productLineVideo">
            <div class="mainVideoImg productLineImg">
                <img class="placeholder-img placeholder-imgPL lazy-load " data-src="<?php echo $pPlaceHolderImg3 ?>" alt="Placeholder Image">
                <img class="play-icon playIconProductVideo lazy-load"  data-src="/wp-content/uploads/Button-play.svg" alt="Play Button">
                <video class="video" controls style="display: none;">
                    <source src="<?php echo $productVideo3 ?>" type="video/mp4">
                </video>
            </div>
            <div class="mainVideoText productLineText">
                <h3><?php echo $pVideoTitle3 ?></h3>
                <p>L<?php echo  $pVideoText3 ?></p>
            </div>
        </div>
    </div>
</div>


<?php get_template_part('lineBreak'); ?>
