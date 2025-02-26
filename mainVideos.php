
<?php
$welcomeVideo1 = get_field('welcomeVideo1');
$placeHolderImage1 = get_field('placeHolderImg1');
$videoTitle1 = get_field('videoTitle1');
$videoText1 = get_field('videotext1');
$welcomeVideo2 = get_field('welcomeVideo2');
$placeHolderImage2 = get_field('placeHolderImg2');
$videoTitle2 = get_field('videoTitle2');
$videoText2 = get_field('videotext2');
?>
<div class="mainVideosContainer">
	<div class="mainVideo">
		<div class="mainVideoImg">
			<img class="placeholder-img" src="<?php echo $placeHolderImage1 ?>" alt="Placeholder Image">
			<img class="play-icon playIconMainVideo" src="/wp-content/uploads/Button-play.svg" alt="Play Button">
			<video class="video" controls style="display: none;">
				<source src="<?php echo $welcomeVideo1 ?>" type="video/mp4">
			</video>
		</div>
		<div class="mainVideoText">
			<h3><?php echo $videoTitle1 ?></h3>
			<p><?php echo $videoText1  ?> </p>
		</div>
	</div>
	<div class="mainVideo">
		<div class="mainVideoImg">
			<img class="placeholder-img lazyload" src="<?php echo $placeHolderImage2 ?>" alt="Placeholder Image">
			<img class="play-icon playIconMainVideo lazyload" src="/wp-content/uploads/Button-play.svg" alt="Play Button">
			<video class="video" controls style="display: none;">
				<source src="<?php echo $welcomeVideo2 ?>" type="video/mp4">
			</video>
		</div>
		<div class="mainVideoText">
			<h3><?php echo $videoTitle2 ?></h3>
			<p><?php echo $videoText2 ?></p>
		</div>
	</div>
</div>



<?php get_template_part('lineBreak'); ?>