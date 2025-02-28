<?php
/* 
 Template Name: Survey
 */
session_start(); // Start the session

if (!is_user_logged_in())  {
    // Redirect the user to the homepage (index.php, for example)
    header("Location: https://training.naturvet.com/");
    
}
get_header();
?>
<style>
    .bannerClass{
        display:none;
    }
</style>
<div class="survey">
<script src="https://js.hsforms.net/forms/embed/4878332.js" defer></script>
<div class="hs-form-frame" data-region="na1" data-form-id="ffde122c-fa06-437a-b985-d58a852d08a8" data-portal-id="4878332"></div>
</div>
<?php get_footer(); ?>