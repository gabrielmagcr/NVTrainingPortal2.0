<?php
  if(!get_current_user_id()){
    wp_redirect( home_url());
  }
  //Line 2-4 checks if thier is a active user, else redirect unknown user to home page
  get_header();
    session_start();
    $_SESSION['post_id']=get_the_ID();
   ?> 


 
<?php
  while(have_posts()) {
    the_post(); ?>
    
<?php $url = 'https://' . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$completedThisQuiz=false;

if (strpos($url,'completedQuiz') !== false) {
    $completedThisQuiz=true;
} else {?>
    <div class="popup <?php $video=get_field('quiz_video');if($video){echo 'video_modal';}?>">
  <div class="modal_content">
     <?php echo $video ;?>
  </div>
</div>
<?php 
  wp_enqueue_script( "video-JS", get_template_directory_uri() . '/js/videoModal.js');
}
?>
<!--Lines 17-28 Checks if Quiz has already been completed , if quiz has not been completed adds Video modal else dosent display video modal-->
          
   

 
    <div class="page-banner"  ses="<?php echo $_SESSION['user_id']?>" id="currentpostid" dataType=<?php echo get_the_ID() ?>>
	 <div class="container container--narrow page-section">
          <div class="metabox metabox--position-up metabox--with-home-link">
             <p><a class="metabox__blog-home-link" href="<?php echo get_bloginfo('url'); ?>"><i class="fas fa-home"></i> Back to all trainings</a></p>
          </div>
    </div>
      <div class="page-banner__bg-image" style="background-image: url();"></div>
      <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <div class="page-banner__intro">
  <!--Line 45 adds the "Quiz text" field associated to quiz in the "Quizzes" Tab in the back end-->       
          <?php the_field('quiz_text'); ?>
          <button data-toggle="collapse" data-target="#collapseVideo" aria-expanded="false" aria-controls="collapseVideo" class="btn btn-primary naturvetColor collapsed">Want to watch the video again?</button>
          <div class="collapse" id="collapseVideo">
           <?php the_field('quiz_video'); ?>
  <!--Line 49 adds the "Quiz Video" field associated to quiz in the "Quizzes" Tab in the back end-->
          </div>
 
          <?php 
          
          if(!$completedThisQuiz){
            the_field('quiz');
           } ?> 
   <!--Line 55-57 adds the "Quiz" field associated to quiz in the "Quizzes" Tab in the back end-->
        </div>
      </div>  
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