<style>
	.mainVideo {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.mainVideoImg {
		margin-top: 15px;
		position: relative;
	}

	.mainVideoImg video {
		width: 330px;
		height: 185px;
		border-radius: 24px;
	}
	.placeholder-img{
		width: 330px;
		height: 185px;
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
		.mainVideoImg video {
			width: 500px;
			height: 285px;
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
			height: 285px;
			align-items: flex-start;
		}
		.placeholder-img{
			width: 500px;
			height: 285px;
		}

		.mainVideoText {
			width: auto;
		}
		.playIconMainVideo {
    width: 76px;
}
	}
</style>

<div class="mainVideosContainer">
    <div class="mainVideo">
        <div class="mainVideoImg">
            <img class="placeholder-img" src="/wp-content/uploads/Placeholder-image.png" alt="Placeholder Image">
            <img class="play-icon playIconMainVideo" src="/wp-content/uploads/Button-play.svg" alt="Play Button">
            <video class="video" controls style="display: none;">
                <source src="/wp-content/uploads/2018/11/HempVideo.mp4" type="video/mp4">
            </video>
        </div>
        <div class="mainVideoText">
            <h3>Our Brand - Naturevet Brand Video</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
    <div class="mainVideo">
        <div class="mainVideoImg">
            <img class="placeholder-img" src="/wp-content/uploads/Placeholder-image-1.png" alt="Placeholder Image">
            <img class="play-icon playIconMainVideo" src="/wp-content/uploads/Button-play.svg" alt="Play Button">
            <video class="video" controls style="display: none;">
                <source src="/wp-content/uploads/2018/11/HempVideo.mp4" type="video/mp4">
            </video>
        </div>
        <div class="mainVideoText">
            <h3>Manufacturing Quality Video</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const placeholders = document.querySelectorAll('.placeholder-img');
        const playIcons = document.querySelectorAll('.play-icon');
        const videos = document.querySelectorAll('.video');

        for (let i = 0; i < playIcons.length; i++) {
            placeholders[i].addEventListener('click', function() {
                placeholders[i].style.display = 'none';
                playIcons[i].style.display = 'none';
                videos[i].style.display = 'block';
                videos[i].play();
            });

            playIcons[i].addEventListener('click', function() {
                placeholders[i].style.display = 'none';
                playIcons[i].style.display = 'none';
                videos[i].style.display = 'block';
                videos[i].play();
            });
        }
    });
</script>

<?php get_template_part('lineBreak'); ?>