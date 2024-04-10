<style>
    .playIconProductVideo {
        width: 28px !important;
    }
    @media (min-width:1023px) {
        .productVideoContainer {
            display: flex;
            justify-content: space-evenly;
        }

        .productLineImg img, .productLineImg video {
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
<div class="productLineContainer">
    <h2 class="welcomeTitle">Product lines</h2>
    <div class="productVideoContainer">
        <div class="mainVideo productLineVideo">
            <div class="mainVideoImg productLineImg">
                <img class="placeholder-img" src="/wp-content/uploads/Placeholder-image-2.png" alt="Placeholder Image">
                <img class="play-icon playIconProductVideo"  src="/wp-content/uploads/Button-play.svg" alt="Play Button">
                <video class="video" controls style="display: none;">
                    <source src="/wp-content/uploads/2018/11/HempVideo.mp4" type="video/mp4">
                </video>
            </div>
            <div class="mainVideoText productLineText">
                <h3>Scoopables - Intro</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="mainVideo productLineVideo">
            <div class="mainVideoImg productLineImg">
                <img src="/wp-content/uploads/Placeholder-image-3.png">
                <img class="play-icon playIconProductVideo"  src="/wp-content/uploads/Button-play.svg" alt="Play Button">
                <video class="video" controls style="display: none;">
                    <source src="/wp-content/uploads/2018/11/HempVideo.mp4" type="video/mp4">
                </video>
            </div>
            <div class="mainVideoText productLineText">
                <h3>Evolutions - Intro</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
        </div>
        <div class="mainVideo productLineVideo">
            <div class="mainVideoImg productLineImg">
                <img src="/wp-content/uploads/Placeholder-image-4.png">
                <img class="play-icon playIconProductVideo"  src="/wp-content/uploads/Button-play.svg" alt="Play Button">
                <video class="video" controls style="display: none;">
                    <source src="/wp-content/uploads/2018/11/HempVideo.mp4" type="video/mp4">
                </video>
            </div>
            <div class="mainVideoText productLineText">
                <h3>Breed Specific - Intro</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
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
