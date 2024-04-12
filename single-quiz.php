<style>
  .popupQuizVideo {
    position: fixed;
    top: 20%;
    left: 50%;
    width: 90%;
    transform: translate(-50%, -50%);
  }

  .wp-video-shortcode {
    width: 90%;
    max-height: 500px;
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
    margin: 40px;
  }

  .quizLine {
    border-bottom: solid 2px #2C667E;
    margin: 10 auto;
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
    width: 55%;
  }
  .quizTitle,
  .quizText h2,
  .quizText h3,
  .quizText h4,
  .quizText h5 {
    text-align: center;
    font-family: "Brandon Grotesque", sans-serif;
    font-size: 32px;
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
  .alert, .alert-error{
    background: #fff !important;
    text-align: center !important;
    font-size: 34px !important;
    font-family: "Brandon Grotesque", sans-serif !important;
    font-weight: 600 !important;
    color: #E26743 !important;
  }
  @media (min-width:767px) {
    .popupQuizVideo {
      top: 55%;

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
    <div class="container container--narrow page-section">
      <div class="metabox metabox--position-up metabox--with-home-link">
        <a class="metabox__blog-home-link backHomeLink" href="<?php echo get_bloginfo('url'); ?>">
          < NaturVet University Catalog</a>
      </div>
    </div>
    <div class="quizLine"></div>
    <div class="page-banner__bg-image" style="background-image: url('');"></div>
    <div class="page-banner__content container container--narrow quizTitle">
      <h1 class=""><?php the_title(); ?></h1>
      <div class="page-banner__intro quizText">
        <!--Line 45 adds the "Quiz text" field associated to quiz in the "Quizzes" Tab in the back end-->
        <?php the_field('quiz_text'); ?>


        <?php

        if (!$completedThisQuiz) {
          the_field('quiz');
        } ?>
        <!--Line 55-57 adds the "Quiz" field associated to quiz in the "Quizzes" Tab in the back end-->
      </div>
    </div>
  </div>
  <button data-toggle="collapse" data-target="#collapseVideo" aria-expanded="false" aria-controls="collapseVideo" class="btn btn-primary naturvetColor collapsed">Want to watch the video again?</button>
  <div class="collapse" id="collapseVideo">
    <?php the_field('quiz_video'); ?>
    <!--Line 49 adds the "Quiz Video" field associated to quiz in the "Quizzes" Tab in the back end-->
  </div>
  <div class="container container--narrow page-section">
    <div id="bottomHomeButton" class="metabox metabox--position-up metabox--with-home-link">
      <p><a class="metabox__blog-home-link" href="<?php echo get_bloginfo('url'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to all trainings</a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>

  </div>

  <div class="helpLinkButton">
    <a href=mailto:training@naturvet.com><button class="btn btn-success helpButton">Have a Problem? Contact Us</button>
    </a>
  </div>

<?php }

get_footer();

?>