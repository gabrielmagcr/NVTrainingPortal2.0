<?php

/** 
 * Template Name: Homepage
 */
get_header();
?>
<style>
	.welcomeTitle {
		color: #4D7F70;
		text-transform: uppercase;
		font-size: 36px;
		text-align: center;
		font-family: "Brandon Grotesque", sans-serif;
		font-weight: 600;
		
	}

	.mainContainer {
		position: relative;
		overflow: hidden;
	}

	.bg-wattermark {
		background: url('/wp-content/uploads/Paw-Watermark.svg');
		background-position: center;
		background-repeat: no-repeat;
		background-size: contain;
		height: 125dvh;
		width: 130dvw;
		overflow: hidden;
		position: absolute;
		z-index: -1;
		left: 50%;
		top: 250px;
		;
		transform: translate(-50%, -50%);

	}



	.bg-botton-logout {
		background: url('/wp-content/uploads/Hills-Illustration.svg');
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		height: 40dvh;
		width: 100%;
		position: relative;
		bottom: 0;
		left: 0;
		margin-top: -120px;
	}

	.createAccount-btns-desktop {
		background-color: #416D5E;
	}

	.textHome {
		display: flex;
		flex-direction: column;
		align-items: center;
		margin-top: 50px;
	}

	.textHome h2 {
		width: 80%;

	}

	.textHome p {
		font-family: "Montserrat", sans-serif;
		font-weight: 500;
		width: 75%;
		font-size: 16px;
		line-height: 28px;
		margin: 35px 0;
	}

	.productCategoriesContainer {
		display: flex;
		justify-content: center;
	}

	.productText p {
		text-align: center;
		margin: 25px 0;
	}

	.quizContainer {
		display: grid;
		grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
		gap: 15px;
		margin: 30px 12px;
		justify-items: center;
	}

	.quiz span {
		color: #486284;
		font-family: "Brandon Grotesque";
		font-size: 18px;
		font-weight: bold;
	}

	.quiz {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
	}

	.quiz-link {
		position: relative;
	}

	.quizzImage {
		margin-bottom: 5px;
		width: 185px;
		height: 123px;
		border-radius: 14px;
	}

	.play-icon {
		width: 28px;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}

	.quizzImageCompleted {
		border: 3px solid #73BA00;
	}

	.completedCheck {
		width: 25px;
	}

	.completedQuiz span {
		display: flex;
		gap: 5px;
	}

	.breathBtn {
		animation: breathe 3s infinite alternate;
	}

	@keyframes breathe {
		0% {
			transform: scale(1);
		}

		100% {
			transform: scale(1.1);
		}
	}

	@media (min-width:767px) {
		.welcomeTitle {
			font-size: 48px;
		}

		.textHome p {
			font-size: 18px;
		}

		.bg-wattermark {
			top: 425px;
		}

		.quizContainer {
			grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
		}

		.quiz span {
			font-size: 22px;
		}

		.quizzImage {
			width: 250px;
			height: 170px;
		}

		.play-icon {
			width: 50px;
		}
	}



	@media (min-width:1023px) {
		.bg-wattermark {
			height: 125dvh;
			width: 100dvw;
			top: 550px;
		}

		.welcomeTitle {
			font-size: 72px;
		}

		.textHome p {
			width: 60%;
			margin: 50px 0;
		}

	}

	@media (min-width:1439px) {
		.textHome h2 {
			width: 70%;
		}

		.textHome p {
			width: 45%;
		}

		.bg-wattermark {
			top: 650px;
		}

		.quizContainer {
			justify-items: start;
			margin: 50px 260px;
		}

		.bg-botton-logout {
			margin-top: 0
		}

	}
</style>
<?php
// Get the total number of available quizzes
$modalTotalQuizzesAvailable = new WP_Query(array(
	'posts_per_page' => -1,
	'post_type' => 'Quiz'
));
$totalQuizzesCount = $modalTotalQuizzesAvailable->found_posts;

// Get the number of quizzes completed by the current user
$modalQuizzesCompleted = new WP_Query(array(
	'post_type' => 'completed-quizzes',
	'meta_query' => array(
		array(
			'key' => 'user_id',
			'compare' => '=',
			'value' => get_current_user_id()
		)
	)
));
$completedQuizzesCount = $modalQuizzesCompleted->found_posts;

// Determine if all quizzes are completed
$modalCompletedAllQuizzes = ($completedQuizzesCount >= $totalQuizzesCount);
?>

<div>
	<div class="mainContainer">
		<div class="bg-wattermark"></div>
		<div class="text-center">
			<div class="user_title ">
				<div class="textHome lazy-load">
					<h2 class="welcomeTitle ">Welcome to the NaturVet Training Portal</h2>
					<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
				<?php if (!is_user_logged_in()) { ?>
					<div class="logoutUser logoutUserDesktop">
						<a href="<?php echo wp_login_url(); ?>">
							<button class="top-btns">Login</button>
						</a>
						<a href="<?php echo wp_registration_url(); ?>">
							<button class="top-btns createAccount-btns createAccount-btns-desktop">Create an account</button>
						</a>
					</div>
				<?php } ?>

				<?php
				function get_quiz_title($quiz_id)
				{
					$title = get_the_title($quiz_id);
					return $title;
				} ?>


				<?php
				if (is_user_logged_in()) {
					// session_start(); 

					$_SESSION["user_id"] = get_current_user_id();

				?>


					<?php get_template_part('mainVideos'); ?>

					<?php get_template_part('productLine'); ?>

					<div class="productCategoriesContainer">
						<div class="mainVideoText productText lazy-load">
							<h2 class="welcomeTitle ">Product Categories</h2>
							<p class="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>

					<?php
					// Verifica si todos los cuestionarios están completos
					if ($modalCompletedAllQuizzes) {
						// Obtén el formulario completado (si existe) para el usuario actual
						$modalCompletedForm = get_user_meta(get_current_user_id(), 'completedGiftForm', true);

						// Si todos los cuestionarios están completos y el formulario aún no se ha completado, muestra el botón para recibir la tarjeta de regalo gratuita
						if (!$modalCompletedForm) {
					?>
							<div class="CompletedLinkButton">
								<a href="<?php echo get_bloginfo('url'); ?>/completedallquizzes/">
									<button class="top-btns breathBtn">Click here to receive your <strong>FREE</strong> Starbucks gift card!</button>
								</a>
							</div>
					<?php
						}
					}
					?>

					<?php
					$modalQuizzesCompleted = new WP_Query(array(
						'post_type' => 'completed-quizzes',
						'meta_query' => array(
							array(
								'key' => 'user_id',
								'compare' => '=',
								'value' => get_current_user_id()
							)
						)
					));
					if ($modalQuizzesCompleted->found_posts >= $modalTotalQuizzesAvailable->found_posts) {
						$modalCompletedAllQuizzes = true;
					} else {
						$modalCompletedAllQuizzes = false;
					}
					?>
			</div>
		</div>
		<div class="quizContainer">
			<?php
					$homepageQuizzes = new WP_Query(array(
						'posts_per_page' => 10,
						'post_type' => 'Quiz'
					));
					// Loops Through the list of Quizzes available and adds them to the DOM
					while ($homepageQuizzes->have_posts()) {
						$homepageQuizzes->the_post(); ?>

				<?php
						$quizCompleted = new WP_Query(array(
							'post_type' => 'completed-quizzes',
							'meta_query' => array(
								array(
									'key' => 'completed_quiz_id',
									'compare' => '=',
									'value' => get_the_ID()
								),
								array(
									'key' => 'user_id',
									'compare' => '=',
									'value' => get_current_user_id()
								)
							)
						));

						// Check if the quiz is completed or not
						if ($quizCompleted->found_posts) {
				?>
					<div class="quiz completedQuiz">
						<a href="<?php the_permalink() ?><?php echo "?completedQuiz"; ?>" class="quiz-link">
							<img class='quizzImage quizzImageCompleted- lazy-load' data-src="<?php the_field('quiz_bg_image') ?>">
							<img class='play-icon lazy-load' data-src="/wp-content/uploads/Button-play.svg">
						</a>
						<span><img class="completedCheck lazy-load" data-src="/wp-content/uploads/Vector.svg"><?php echo get_quiz_title(get_the_ID()); ?></span>
					</div>
				<?php
						} else { ?>
					<div class="quiz">
						<a href="<?php the_permalink() ?>" class="quiz-link">
							<img class='quizzImage lazy-load' data-src="<?php the_field('quiz_bg_image') ?>">
							<img class='play-icon lazy-load' data-src="/wp-content/uploads/Button-play.svg">
						</a>
						<span><?php echo get_quiz_title(get_the_ID()); ?></span>
					</div>
			<?php }
					}
			?>
		</div>

	</div>

</div>

<script>
	// Script checks the amount of completed training quizzes and displays the "receive your gift card" button if the amount equals the available quizzes
	function checkIfTestsCompleted() {

		var quizzesCompleted = document.getElementsByClassName("completed_div");
		var modalCompleted = jQuery('.modalCompleted');
		if (quizzesCompleted.length == 7) {
			if (modalCompleted.length) {
				modalCompleted.css("display", "block");
				jQuery("body").css("overflow", "hidden");

			} else {
				jQuery("body").css("overflow", "visible");
			}
		} else {
			return;
		}



	}
	checkIfTestsCompleted()
</script>

<?php } ?>
</div>
</div>
<?php if (!is_user_logged_in()) { ?>
	<div class="bg-botton-logout"></div>
<?php } ?>
</div>
</div>

<?php
get_footer();
?>