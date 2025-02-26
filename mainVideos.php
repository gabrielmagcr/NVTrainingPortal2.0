<div class="mainVideosContainer">
	<?php 
			if(have_rows('welcome_videos'));

				while(have_rows('welcome_videos')): the_row();
				$welcomeVideo = get_field('welcome_video');
				$placeHolderImage = get_field('place_holder_image');
				$videoTitle = get_field('video_title');
				$videoText = get_field('video_text');

	
	?>
	<div class="mainVideo">
		<div class="mainVideoImg">
			<img class="placeholder-img" src="<?php echo $placeHolderImage ?>" alt="Placeholder Image">
			<img class="play-icon playIconMainVideo" src="/wp-content/uploads/Button-play.svg" alt="Play Button">
			<video class="video" controls style="display: none;">
				<source src="<?php echo $welcomeVideo ?>" type="video/mp4">
			</video>
		</div>
		<div class="mainVideoText">
			<h3><?php echo $videoTitle ?></h3>
			<p><?php echo $videoText  ?> </p>
		</div>
	</div>
    <?php endwhile; ?>
	<?php endif; ?>

</div>



<?php get_template_part('lineBreak'); ?>