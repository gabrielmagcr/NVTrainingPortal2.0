<?php

/** 
 * Template Name: Homepage
 */
get_header();
?>
<style>
	.welcomeh2 {
		color: #4D7F70;
		text-transform: uppercase;
		font-size: 32px;
		text-align: center;
	}

	.mainContainer {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		margin-top: 20px;
	}

	.bg-wattermark {
		background: url('/wp-content/uploads/Paw-Watermark.svg');
		background-position: center;
		background-repeat: no-repeat;
		background-size: contain;
		height: 100dvh;
		width: 95dvw;
		overflow: hidden;
		position: absolute;
		left: 50%;
		z-index: 23;
		top: 100%;
		transform: translate(-50%, -45%);
	}

	.bg-botton-logout {
		background: url('/wp-content/uploads/Hills-Illustration.svg');
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		height: 35dvh;
		width: 100dvw;
		position: relative;
		bottom: 0;
		left: 0;

	}

	.createAccount-btns-desktop {
		background-color: #416D5E;
	}

	.textHome {
		display: flex;
		flex-direction: column;
		align-items: center;
	}

	.textHome h2,
	.textHome p {
		width: 80%;
	}
</style>
<div>
	<div class="mainContainer">
		<div class="bg-wattermark"></div>
		<div class="text-center">
			<div class="col-sm user_title ">
				<div class="textHome">
					<h2 class="welcomeh2">Welcome Back to the naturevet training portal</h2>
					<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. At quasi, ex doloremque veniam dolore quidem natus. Recusandae magni ab maiores quis alias quasi eaque ex, libero iste? Nam, pariatur praesentium.</p>
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
				if (is_user_logged_in()) {
					// session_start(); 
					$_SESSION["user_id"] = get_current_user_id();

				?>
					<?php
					$modalCompletedAllQuizzes = false;
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
					$modalUserQuizCompleted = count($modalQuizzesCompleted->posts);
					if (is_super_admin()) {
						echo "Completed: <strong>" . $modalUserQuizCompleted . "</strong>&nbsp; | &nbsp;";
					}
					wp_reset_query();
					$modalQuizzesAmount = new WP_Query(array(
						'posts_per_page' => 10,
						'post_type' => 'Quiz'
					));

					$modalTotalQuizzesAvailable = count($modalQuizzesAmount->posts);
					if (is_super_admin()) {
						echo "Quizes Total: <strong>" . $modalTotalQuizzesAvailable . '</strong>';
					}
					wp_reset_query();

					if ($modalUserQuizCompleted >= $modalTotalQuizzesAvailable) {
						$modalCompletedAllQuizzes = true;
					} ?>
					<?php
					//  delete_user_meta(get_current_user_id(),'completedGiftForm');
					@$modalCompletedForm = get_user_meta(get_current_user_id(), 'completedGiftForm')[0];

					if ($modalCompletedAllQuizzes && !$modalCompletedForm) { ?>
						<div class="CompletedLinkButton">
							<a href="<?php echo get_bloginfo('url'); ?>/completedallquizzes/">
								<button class="btn btn-success completedButton">Click here to receive your <strong>FREE</strong> Starbucks gift card!</button>
								<button class="btn btn-success completedButtonMobile">Click here to receive your <strong>FREE</strong> Starbucks gift card!</button>
							</a>
						</div>
					<?php } ?>
					<h4 style="margin-top:10px;">Select a training to continue</h4>
			</div>
		</div>
		<div class="row text-center pad-top ieRow">
			<?php
					$homepageQuizzes = new WP_Query(array(
						'posts_per_page' => 10,
						'post_type' => 'Quiz'
					));
					//Loops Through the list of Quizess available and adds them to the dom
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

						if ($quizCompleted->found_posts) {
				?>
					<div class="col-sm ieColSM">

						<a class="completed " href="<?php the_permalink() . "?completedQuiz"; ?>">
							<img class="selection-box quizCompleted" src="<?php the_field('quiz_bg_image') ?>">

						</a>
						<div class="completed_div">
							<a class="completedLink" href="<?php the_permalink() ?><?php echo "?completedQuiz"; ?>"></a>
							<div class="checkmark">
								<img class="checkmarkimage" src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2018/10/checkmark-png-25951.png">
							</div>
						</div>
					</div>
				<?php
						} else { ?>
					<div class="col-sm ieColSM">
						<a href="<?php the_permalink() ?>">
							<img class=selection-box src="<?php the_field('quiz_bg_image') ?>">

							</p>
						</a>
					</div>
			<?php }
					}
			?>
		</div>

	</div>
</div>

<script>
	//Script checks  the amount of completed training quizzes and displays the "recieve your gift card" button if amount equals to available quizzes
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
</div>
<?php if (!is_user_logged_in()) { ?>
	<div class="bg-botton-logout"></div>
<?php } ?>
</div>
<?php
get_footer();
?>