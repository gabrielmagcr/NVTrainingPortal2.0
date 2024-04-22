<style>
    .completedContent {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .completedContentLeft {
        text-align: center;
        width: 75%;
    }

    .completedContentLeft h2 {
        font-family: "Brandon Grotesque", sans-serif;
        color: #4D7F70;
        font-size: 36px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .completedContentLeft p {
        font-family: Montserrat;
        font-size: 18px;
    }
    .hs-button{
        border-radius: 30px !important;
    }
    @media (min-width:767px) {
        .completedForm{
            width: 530px;
            padding-left: 25px;
        }
        .completedContentLeft h2 {
            font-size: 48px;
        }
    }

    @media (min-width:1400px) {
        .completedContentLeft h2 {
            font-size: 72px;
        }
        .completedContentLeft {
        width: 50%;
    }
    }
</style>
<?php
get_header();
$userCompletedAllQuizzes = false;
//Line 5-13 Checks database to see the number of quizzes  the current user completed
$quizAmountCompleted = new WP_Query(array(
    'post_type' => 'completed-quizzes',
    'meta_query' => array(
        array(
            'key' => 'user_id',
            'compare' => '=',
            'value' => get_current_user_id()
        )
    )
));
$userQuizCompleted = count($quizAmountCompleted->posts);
wp_reset_query();

//Line 18-21 Check database to see the number of quizzes available
$QuizzesAmount = new WP_Query(array(
    'posts_per_page' => 10,
    'post_type' => 'Quiz'
));

$totalQuizzesAvailable = count($QuizzesAmount->posts);
wp_reset_query();

if ($userQuizCompleted >= $totalQuizzesAvailable) {
    $userCompletedAllQuizzes = true;
}

$completedForm = get_user_meta(get_current_user_id(), 'completedGiftForm')[0];
if (!$completedForm && $userCompletedAllQuizzes) { ?>


    <div class="Completed pad-top">
        <div class="completedContent">
            <div class="completedContentLeft">
                <h2>Please complete the below form.</h2>
                <p>Your $5 Starbucks digital gift card will be emailed to you. <br> (Please allow 1-2 business days pending employee verification.)</p>

            </div>
            <div class="completedForm"></div>
        </div>
    </div>

    <!--[if lte IE 8]>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
<![endif]-->
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
    <script>
        hbspt.forms.create({
            portalId: "4878332",
            formId: "0d96058d-1214-49ee-8ffb-be9e0093ce34",
            target: '.completedForm',
            onFormSubmit: function($form) {


                jQuery.ajax({
                    url: "<?php echo get_bloginfo('url'); ?>/wp-json/completed/v1/form",
                    type: 'POST',
                    dataType: 'JSON',
                    data: {
                        'userGiftId': <?php echo get_current_user_id(); ?>
                    },
                    success: function(resp) {


                        if (resp.success) {



                        } else {

                            alert('Error: ' + resp.data);
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {

                        alert('Request failed: ' + thrownError.message);
                    },
                });
            }
        });
    </script>
<?php } else { ?>
    <!--If User has no completed the amount of quizzes required, User is redirected to home page -->
    <div class="invalidAccess">
        <div class="invalidAccessContent">
            <h1>Sorry you don't have access to this page!</h1>
        </div>
    </div>
    <script>
        jQuery("body").css("overflow", "hidden");
        setTimeout(function() {
            window.location.replace("<?php echo home_url() ?>");
        }, 2500);
    </script>
<?php

} ?>
<div class="whiteSpace"></div>

<?php get_footer(); ?>