<?php get_header();

if( is_user_logged_in() ) {
	// session_start(); 
	$_SESSION["user_id"]=get_current_user_id();
	
	?>
<?php 
 $modalCompletedAllQuizzes=false;
 $modalQuizzesCompleted = new WP_Query(array(
        'post_type' => 'completed-quizzes',
        'meta_query' => array(
            array(
                'key' => 'user_id',
                'compare' => '=',
                'value' => get_current_user_id()
            ))
        ));
$modalUserQuizCompleted=count($modalQuizzesCompleted->posts);
if(is_super_admin()){
	echo "Completed: ".$modalUserQuizCompleted."<br>";
}
wp_reset_query();
$modalQuizzesAmount = new WP_Query(array(
        'posts_per_page' => 10,
        'post_type' => 'Quiz'
	  ));

$modalTotalQuizzesAvailable=count($modalQuizzesAmount->posts);
if(is_super_admin()){
	echo "Quizes Total: ".$modalTotalQuizzesAvailable;
	
}
    wp_reset_query();
 
 if($modalUserQuizCompleted>=$modalTotalQuizzesAvailable){
	$modalCompletedAllQuizzes=true;
}?>
<?php 
//  delete_user_meta(get_current_user_id(),'completedGiftForm');
@$modalCompletedForm=get_user_meta(get_current_user_id(),'completedGiftForm')[0];

if($modalCompletedAllQuizzes && !$modalCompletedForm){?>
<div class="CompletedLinkButton">
<a href="<?php echo get_bloginfo('url'); ?>/completedallquizzes/">
<button class="btn btn-success completedButton">Click here to receive your <strong>FREE</strong> Starbucks gift card!</button>
<button class="btn btn-success completedButtonMobile">Click here to receive your <strong>FREE</strong> Starbucks gift card!</button>
</a>
</div>
<?php } ?>   

<div class="container pad-top">
	<div class="row text-center">
		<div class="col-sm user_title">
			<h2>Welcome Back <?php $user_info = get_userdata($_SESSION["user_id"]);
			                     echo $user_info->user_login;?></h2>
			<h4>Select a training to continue</h4>
		</div>
	</div>
	<div class="row text-center pad-top ieRow">
	<?php 
      $homepageQuizzes = new WP_Query(array(
        'posts_per_page' => 10,
        'post_type' => 'Quiz'
			));
			//Loops Through the list of Quizess available and adds them to the dom
      while($homepageQuizzes->have_posts()) {
		  
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
           
	    	if($quizCompleted->found_posts){
	    		?>
		<div class="col-sm ieColSM">
		   
	    	<a class="completed " href="<?php the_permalink()."?completedQuiz"; ?>">
	    	  <img class="selection-box quizCompleted" src="<?php the_field('quiz_bg_image') ?>">
	      	   
	         	</p>
				
	      </a>
		  <div class="completed_div">
		  <a class="completedLink" href="<?php the_permalink()?><?php echo"?completedQuiz"; ?>"></a>
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
<div class="helpLinkButton">
<a href=mailto:training@naturvet.com><button class="btn btn-success helpButton">Have a Problem? Contact Us</button>
</a>
</div>
<script> 
   //Script checks  the amount of completed training quizzes and displays the "recieve your gift card" button if amount equals to available quizzes
	 function checkIfTestsCompleted() 
	 { 

		 var quizzesCompleted =  document.getElementsByClassName("completed_div");
		 var modalCompleted=jQuery('.modalCompleted');
		 if(quizzesCompleted.length==7){
			if(modalCompleted.length ){
				modalCompleted.css("display","block");
				jQuery("body").css("overflow","hidden");
				
              }else{
				jQuery("body").css("overflow","visible");
			  }    
		 }else{
			 return;
		 }
		 
		 
		
	 }
	 checkIfTestsCompleted()
</script>
<?php } else { ?>
<!-- If user is not Logged in Diplays the log portal -->
<div class="container pad-top">
	<div class="row text-center">
		<div class="col-sm">
			<h2>WELCOME</h2>
		</div>
	</div>
  <div class="row text-center pad-top">
    <div class="col-sm">
	    <p class="login-text">Existing User</p>
    	<a href="<?php echo wp_login_url(); ?>">
	    	<img class="selection-box" src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2018/11/existingnaturvetuser.jpg">
	      	
      	</a>
    </div>
    <div class="col-sm">
	    <p class="login-text">New User</p>
    	<a href="<?php echo wp_registration_url(); ?>">
    	<img class="selection-box" src="<?php echo get_bloginfo('url'); ?>/wp-content/uploads/2018/10/bigstock-Dog-In-Cornfield-97316702.jpg">
      	
      	</a>
    </div>
  </div>
</div>
</div>
<div class="helpLinkButton">
<a href=mailto:training@naturvet.com><button class="btn btn-success helpButton">Have a Problem? Contact Us</button>
</a>
</div>
<?php }

get_footer();
?>