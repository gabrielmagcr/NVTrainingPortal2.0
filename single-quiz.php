<style>
  .popupQuizVideo {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  .wp-video-shortcode {
    width: 90%;
  }

  .quizBg {
    position: fixed;
    top: 0;
    left: 0;
    height: 100vh;
    width: 100vw;
    background-color: #000000cf;
  }

  .backHomeLink {
    text-decoration: none;
    color: #2C667E;
    font-family: "Brandon Grotesque", sans-serif;
    font-size: 16px;
    font-weight: 600;
    margin: 15px;
  }

  .quizContainer {
    margin: 20px;
  }

  .quizLine {
    border-bottom: solid 2px #2C667E;
    margin: 20px auto;
    width: 100%;
  }


  .quizText {
    color: #2D1A10;
    text-align: start;
    font-family: 'Montserrat', sans-serif;
    font-size: 16px;
    font-style: normal;
    font-weight: 500;
    line-height: 28px;
    width: 80%;
    display: flex;
    flex-direction: column;
    gap: 10px;
  }

  .quizTitle,
  .quizText h2,
  .quizText h3,
  .quizText h4,
  .quizText h5 {
    text-align: center;
    font-family: "Brandon Grotesque", sans-serif;
    font-size: 32px;
    line-height: 34px;
    font-style: normal;
    font-weight: 600;
    text-transform: uppercase;
    color: #4D7F70;
  }

  .quizTitle {
    font-size: 36px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
  }

  .alert,
  .alert-error {
    background: #fff !important;
    text-align: center !important;
    font-size: 52px !important;
    font-family: "Brandon Grotesque", sans-serif !important;
    line-height: 52px !important;
    font-weight: 600 !important;
    color: #E26743 !important;
    margin: 25px 0 !important;
    display: flex;
    flex-direction: column;
    font-size: 52px;
    gap: 12px;
    align-items: center;
  }

  .caldera-grid .form-group {
    margin-bottom: 23px;
    border: 1px solid;
    padding: 15px;
    border-radius: 12px;
    box-shadow: 0px 4px 4px 0px rgba(0, 0, 0, 0.25);
  }

  .submitDiv {
    border: none !important;
    box-shadow: none !important;

  }

  .submitQuizBtn {
    background: #E26743;
    border: none;
    color: white;
    text-align: center;
    justify-content: center;
    display: flex;
    align-items: center;
    border-radius: 30px;
    padding: 20px 37px;
    font-size: 20px;
    font-family: "Brandon Grotesque", sans-serif;
    position: relative;
    left: 50%;
    transform: translate(-50%, 0%);
  }

  #toggleVideo {
    border-radius: 30px;
    background: #E26743;
    color: #fff;
    padding: 20px 37px;
    border: none;
    font-family: "Brandon Grotesque", sans-serif;
    font-size: 20px;
  }

  .quizErrorSpan {
    color: #E26743;
    text-align: center;
    font-family: "Brandon Grotesque", sans-serif;
    font-size: 25px;
    font-style: normal;
  }

  #collapseVideo {
    display: none;
  }

  .completedQuizBottonInfo h3{
    color: #4D7F70;
    text-align: center;
    font-family: "Brandon Grotesque", sans-serif;
    font-size: 56px;
    font-weight: 500;
    line-height: 56px;
    text-transform: uppercase;
  }

  @media (min-width:1400px) {
    .quizText {
      width: 55%;
    }
  }
</style>

<?php
if (!get_current_user_id()) {
  wp_redirect(home_url());
}
//Line 2-4 checks if thier is a active user, else redirect unknown user to home page
get_template_part('quizHeader');
session_start();
$_SESSION['post_id'] = get_the_ID();
?>

<?php if (get_field('activate_banner')) { ?>
  <section id="banner" style="height:<?php echo get_field('banner_height'); ?>px; background:url('<?php echo get_field('banner_image'); ?>') no-repeat center center; background-size:cover;">
  </section>
<?php } ?>

<?php
$current_user_id = get_current_user_id();
$user_info = get_userdata($current_user_id);

if (current_user_can('manage_options')) {
    $completed_quizzes_count = count_completed_quizzes($current_user_id);
    $total_quizzes_count = count_total_quizzes();
}
?>

<?php
while (have_posts()) {
  the_post(); ?>

  <?php $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
  $completedThisQuiz = false;
  if (strpos($url, 'completedQuiz') !== false) {
    $completedThisQuiz = true;
  } else { ?>
    <div class="quizBg"></div>
    <div class="popup popupQuizVideo <?php $video = get_field('quiz_video');
                                      if ($video) {
                                        echo 'video_modal';
                                      } ?>">
      <div class="modal_content">
        <?php echo $video; ?>
      </div>
    </div>
  <?php
    wp_enqueue_script("video-JS", get_template_directory_uri() . '/js/videoModal.js');
  }
  ?>
  <!--Lines 17-28 Checks if Quiz has already been completed , if quiz has not been completed adds Video modal else dosent display video modal-->




  <div class="page-banner quizContainer" ses="<?php echo $_SESSION['user_id'] ?>" id="currentpostid" dataType=<?php echo get_the_ID() ?>>
    <div class="">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <a class="metabox__blog-home-link backHomeLink" href="<?php echo get_bloginfo('url'); ?>">
          < NaturVet University Catalog</a>
      </div>
    </div>
    <div class="quizLine"></div>
    <div class=" quizTitle">
      <h1 class=""><?php the_title(); ?></h1>
      <div class="page-banner__intro quizText">
        <!--Line 45 adds the "Quiz text" field associated to quiz in the "Quizzes" Tab in the back end-->
        <?php the_field('quiz_text'); ?>

        <div class="collapse" id="collapseVideo">
          <?php the_field('quiz_video'); ?>
        </div>


        <?php

        if (!$completedThisQuiz) {
          the_field('quiz');
        } ?>
        <!--Line 55-57 adds the "Quiz" field associated to quiz in the "Quizzes" Tab in the back end-->

        <div class="completedQuizBottonInfo">
          <h3>Great Job, you’ve <br> completed <?php echo $completed_quizzes_count; ?>/<?php echo $total_quizzes_count; ?> quizes!!</h3>
          <a href="<?php echo get_bloginfo('url'); ?>"><button class="top-btns">Return to Libary</button></a>
        </div>
      </div>
    </div>
  </div>


<?php }

get_footer();

?>