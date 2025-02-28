<style>
    .completedContent {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .completedContentLeft {
        text-align: center;
        width: 90%;
    }

    .completedContentLeft h2 {
        font-family: "Brandon Grotesque", sans-serif;
        color: #4D7F70;
        font-size: 36px;
        font-weight: 600;
        text-transform: uppercase;
    }

    .completedContentLeft p {
        font-family: 'Montserrat', sans-serif;
        font-size: 18px;
    }

    .completedForm {
        padding-left: 25px;
        margin-bottom:40px
    }

    .hs-button {
        border-radius: 30px !important;
    }

    @media (min-width:767px) {
        .completedForm {
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
    .bannerClass{
        display:none;
    }
</style>
<?php
/* 
 Template Name: Hubspot-Giftcard
 */

session_start(); // Start the session

if (!isset($_SESSION['user_id'])) {
    // Redirect the user to the homepage (index.php, for example)
    header("Location: index.php");
    exit(); // Stop script execution
}


get_header();
?>

    <div class="Completed pad-top">
        <div class="completedContent">
            <div class="completedContentLeft">
                <h2>Thank you</h2>
                <p>Your $5 Starbucks digital gift card will be emailed to you. <br> (Allow 1-2 business days pending employee verification.)<br><strong>Please fill out the form below to receive your gift card.</strong></p>

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




<?php get_footer(); ?>