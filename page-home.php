<?php

/** 
 * Template Name: Homepage
 */
get_header();
?>

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
<?  $title=get_field('title') ? get_field('title') : "Title";
	$subtitle=get_field('subtitle')? get_field('subtitle'): "Subtitle";
	$text_content=get_field('text_content')? get_field('text_content') : "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.";
	?>
<div>
	<div class="mainContainer">
		<div class="bg-wattermark"></div>
		<div class="text-center">
			<div class="user_title ">
				<div class="textHome">
					<h2 class="welcomeTitle "><? echo $title ?></h2>
						<span><? echo $subtitle ?></span>
					<p class=""><? echo $text_content ?></p>
				</div>
				<?php if (!is_user_logged_in()) { ?>
					<style>
						.textHome span, .textHome p{display:none;}
					</style>
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
					
					<?php get_template_part('productLineGrid'); ?>

					<?php get_template_part('productLine'); ?>

					<a href="/survey" class="cta-btn">Training Portal Quiz</a>
			</div>
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