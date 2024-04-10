<style>
	.mainVideo {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.mainVideoImg {
		margin-top: 15px;

	}
	.mainVideoImg img {
		width: 330px;
	}
	.mainVideoText {
		text-align: left;
		width: 80%;
		margin: 25px 0;
	}

	.mainVideoText h3 {
		font-family: "Brandon Grotesque", sans-serif;
		color: #E26743;
		font-size: 30px;
		font-weight: 600;
	}

	.mainVideoText p {
		font-family: "Montserrat", sans-serif;
		font-weight: 500;
	}

	@media (min-width:767px) {
		.mainVideoImg img {
			width: 500px;
		}
		.mainVideoText h3 {
			font-size: 30px;
		}

		.mainVideoText p {
			font-size: 18px;
		}
	}

	@media (min-width:1023px) {
		.mainVideosContainer {
			display: flex;
			justify-content: space-around;
		}

		.mainVideo {
			width: 500px;
			align-items: flex-start;
		}

		.mainVideoText {
			width: auto;
		}
	}
</style>

<div class="mainVideosContainer">
	<div class="mainVideo">
		<div class="mainVideoImg">
			<img src="/wp-content/uploads/Placeholder-image.png">
		</div>
		<div class="mainVideoText">
			<h3>Our Brand - Naturevet Brand Video</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div>
	<div class="mainVideo">
		<div class="mainVideoImg">
			<img src="/wp-content/uploads/Placeholder-image-1.png">
		</div>
		<div class="mainVideoText">
			<h3>Manufacturing Quality Video</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
		</div>
	</div>
</div>
<?php get_template_part('lineBreak'); ?>