<style>
	.mainVideo {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.mainVideoImg {
		margin-top: 15px;

	}

	.mainVideoImg video {
		width: 330px;
		border-radius: 24px;
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
            <img class="placeholder-img" src="/wp-content/uploads/Placeholder-image-1.png" alt="Placeholder Image">
            <img class="play-icon" src="/wp-content/uploads/Button-play.svg" alt="Play Button">
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
            <img class="play-icon" src="/wp-content/uploads/Button-play.svg" alt="Play Button">
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
	// Obtenemos todos los elementos necesarios
const placeholders = document.querySelectorAll('.placeholder-img');
const playIcons = document.querySelectorAll('.play-icon');
const videos = document.querySelectorAll('.video');

// Iteramos sobre cada ícono de reproducción
playIcons.forEach((playIcon, index) => {
    // Manejamos el clic en el ícono de reproducción
    playIcon.addEventListener('click', () => {
        // Ocultamos la imagen placeholder y el ícono de reproducción
        placeholders[index].style.display = 'none';
        playIcons[index].style.display = 'none';
        // Mostramos el video correspondiente y lo reproducimos
        videos[index].style.display = 'block';
        videos[index].play();
    });
});
</script>
<?php get_template_part('lineBreak'); ?>