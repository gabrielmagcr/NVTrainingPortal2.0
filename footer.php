<?php wp_footer(); ?>
<script>
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 60) {
            jQuery('header').addClass("sticky");

        } else {
            jQuery('header').removeClass("sticky");
        }
    });
</script>
<style>

    .footerLogos {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 40px;
        background-color: #26948c;
        padding: 40px 20px;
        justify-items: center
    }

    .footerLogos img {
        height: 35px;
    }

    .footerStructure {
        background-color: #2c667e;
        display: flex;
        flex-direction: column;
        padding: 10px;
    }

    .newsLetter {
        margin: 15px;
    }

    .newsLetter span {
        color: #fff;
        font-weight: 700;
        font-size: 1.2em;
        font-family: "Brandon Grotesque", sans-serif;

    }

    .newsLetterFormClass {
        display: flex;
        gap: 20px;
        justify-content: space-evenly;
    }

    .newsLetterFormClass input {
        -webkit-appearance: none;
        appearance: none;
        background-color: transparent;
        border: 2px solid #fff;
        border-radius: 5rem;
        color: #d1d1d1;
        font-size: 1rem;
        margin: 25px 0;
        padding-left: 15px;
        width: 100%;
        min-height: 3.6rem;
        box-sizing: border-box;
    }

    #newsLetterForm label::placeholder {
        color: #cdcdcd;
        transition: font-size 0.3s ease, transform 0.3s ease, margin-top 0.3s ease;
    }

    #newsLetterForm input:focus::placeholder {
        font-size: 12px;
        transform: translateY(-10px);
        margin-top: -10px;
    }

    #newsLetterForm:not(:focus)::placeholder {
        font-size: 16px;
        transform: translateY(0);
        margin-top: 0;
    }

    .newsLetterFormClass button {
        max-width: 110px;
        padding: 1rem 2rem;
        margin: 25px 0px;
    }

    .footerMenus {
        display: flex;
        justify-content: space-evenly;
    }

    .footerMenu {
        flex-direction: column;
        flex-wrap: wrap;
        font-size: 14px;
        width: 50%;
        margin: 0px 30px;
        font-family: "Brandon Grotesque", sans-serif;
    }

    .footerMenu span {
        color: #fff;
        font-weight: bold;

    }

    .responsiveList {
        padding: 4px 0;
        list-style: none;
    }
    .responsiveList a{
        font-family: "Brandon Grotesque", sans-serif;
        text-decoration: none;
    }

    .footerLastSection {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        margin: 25px;
        gap: 40px;
    }

    .footerLastSectionLeftSide {
        width: 50%;

    }

    .footerLastSectionLeftSide span {
        color: #fff;
        font-weight: 500;
    }

    .footerLastSectionRightSide {
        width: 50%;
    }

    .footerLastSectionRightSide img {
        width: 60px;
    }

    .footer-logo {
        width: 175px;
        margin-bottom: -25px;
    }

    #swedencare {
        color: #fac33b;
    }

    .footerSocial {
        display: flex;
        gap: 10px;
        justify-content: space-evenly;
        align-items: center;
        margin-bottom: 25px;
    }

    .footerSocialDesktop {
        display: none;
    }

    .newsLetterFormulary {
        display: flex;
        align-items: center;
        gap: 20px;
        margin: 10px 0 35px;
    }

    .newsLetterFormulary input {
        padding: 10px 20px;
        border-radius: 35px;
        background: transparent;
        border: solid 2px #fff;
        color: #fff;
        width: 100%;
    }
    .newsLetterFormulary input::placeholder{
        color: #c1c1c1
    }

    .newsletterbtn {
        color: #fff;
        background-color: #E26743;
        border: none;
        border-radius: 35px;
        padding: 10px 30px;

    }

    @media (min-width:400px) {
        .footerLogos img {
            height: 45px;
        }
    }

    @media (min-width:550px) {
        .footerLogos {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            align-items: center;

        }

        .footerLogos img {
            height: 50px;
        }

        .footerMenu span {
            font-size: 20px;
        }

        .responsiveList {
            font-size: 18px;
            width: 90%;
        }

        .responsiveList a {
            color: #ffffff;

        }

    }

    @media (min-width:1400px) {
        .footerStructure {
            flex-direction: row;
            padding-top: 25px;
        }

        .newsLetter {
            order: 4;
            width: 50%;
            margin-top: 35px;
        }

        .newsLetter span {
            font-size: 2em;
        }

        .footerMenus {
            order: 2;
        }

        .footerLastSection {
            order: 0;
            gap: 45px;
            width: 50%;
            flex-direction: column;
        }

        .footerSocial {
            display: none;
        }

        .footerSocialDesktop {
            display: flex;
            gap: 10px;
        }

        .footerLastSectionLeftSide {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 5px;
        }

        .footerLastSectionLeftSide span {
            font-size: 10px;
        }

        .footerMenus {
            margin: 45px 0;
            width: 60%;
        }

        .newsLetterFormClass {
            gap: 5px;
        }

        .newsLetterFormClass input,


        .responsiveList a {
            color: #ffffff;
            font-size: 22px;

        }
        .footerMenu {
            margin: 0px 10px;
        }
        .footerMenu span {
            font-size: 24px;
        }

        .footer-logo {
            width: 300px;
            margin-bottom: 0;
        }

        #resource_1,
        #company_1 {
            margin-top: 25px;
        }

        .footerLastSectionRightSide img {
            width: 100px;
        }
        .newsLetterFormulary input,.newsletterbtn  {
              padding: 15px 20px;
        }
        .newsLetterFormulary {
            margin: 35px 0;
        }
     
    }
</style>
<footer>
    <?php
    $brandsLogos = array(
        'img1' => array(
            'img' => '/wp-content/uploads/petco.png',
            'url' => 'https://www.petco.com/shop/en/petcostore/brand/naturvet',
            'name' => 'Petco'
        ),
        'img2' => array(
            'img' => '/wp-content/uploads/chewy.png',
            'url' => 'https://www.chewy.com/brands/naturvet-7112',
            'name' => 'Chewy'
        ),
        'img3' => array(
            'img' => '/wp-content/uploads/amazon.png',
            'url' => 'https://www.amazon.com/stores/page/55E4FBE0-1284-4FEA-94D5-1E199BED7E3C?maas=maas_adg_4E5B677FA0C870CEB1BE9A24C2332217_afap_abs&ref_=aa_maas&tag=maas',
            'name' => 'Amazon'
        ),
        'img4' => array(
            'img' => '/wp-content/uploads/psp.png',
            'url' => 'https://www.petsuppliesplus.com/',
            'name' => 'Pet Supplies Plus'
        ),
        'img5' => array(
            'img' => '/wp-content/uploads/pet-supermarket.png',
            'url' => 'https://www.petsupermarket.com/brands/n/naturvet/',
            'name' => 'Pet Supermarket'
        ),
        'img6' => array(
            'img' => '/wp-content/uploads/tsc.png',
            'url' => 'https://www.tractorsupply.com/landing-pages_brands_naturvet',
            'name' => 'Tractor Supply Co.'
        )
    );
    $socials = array(
        'twitter' => array(
            'img' => '/wp-content/uploads/twitter.svg',
            'url' => 'https://twitter.com/',
            'name' => 'Twitter'
        ),
        'facebook' => array(
            'img' => '/wp-content/uploads/twitter.svg',
            'url' => 'https://www.facebook.com/',
            'name' => 'Facebook'
        ),
        'pinterest' => array(
            'img' => '/wp-content/uploads/twitter.svg',
            'url' => 'https://www.pinterest.com/',
            'name' => 'Pinterest'
        ),
        'instagram' => array(
            'img' => '/wp-content/uploads/twitter.svg',
            'url' => 'https://www.instagram.com/',
            'name' => 'Instagram'
        ),
        'youtube' => array(
            'img' => '/wp-content/uploads/twitter.svg',
            'url' => 'https://www.youtube.com/',
            'name' => 'YouTube'
        )
    );
    $footerResources = wp_get_nav_menu_items('Footer_Resources');
    $footerCompanys = wp_get_nav_menu_items('Footer_Company');
    ?>
    <div class="footerLogos">
        <?php foreach ($brandsLogos as $brandlogo => $data) :
            $image = $data['img'];
            $url = $data['url'];
            $name = $data['name'];
        ?>
            <a href="<?php echo $url; ?>">
                <img alt="<?php echo $name; ?>" src="<?php echo $image; ?>"></a>
        <?php endforeach; ?>
    </div>
    <div class="footerStructure">
        <div class="newsLetter">
            <span>NEWSLETTER SIGN UP</span>
            <div class="newsLetterFormulary">
                <input id="newsLetterForm" type="email" autocapitalize="off" autocomplete="email" placeholder="Email Address">
                <button class="newsletterbtn">
                    <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow" width='35px' xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="footerSocialDesktop">
                <?php foreach ($socials as $social => $data) :
                    $image = $data['img'];
                    $url = $data['url'];
                    $name = $data['name'];
                ?>
                    <a href="<?php echo $url; ?>">
                        <img alt="<?php echo $name; ?>" src="<?php echo $image; ?>"></a>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="footerMenus">
            <div class="footerMenu">
                <span>Resources</span>
                <?php
                $resourceCount = 1;
                if ($footerResources) {
                    foreach ($footerResources as $footerResource) {
                        echo '<li id="resource_' . $resourceCount . '" class="responsiveList"><a target="_blank" href="' . $footerResource->url . '">' . $footerResource->title . '</a></li>';
                        $resourceCount++;
                    }
                }
                ?>
            </div>
            <div class="footerMenu">
                <span>Company</span>
                <?php
                $companyCount = 1;
                if ($footerCompanys) {
                    foreach ($footerCompanys as $footerCompany) {
                        echo '<li id="company_' . $companyCount . '" class="responsiveList"><a target="_blank" href="' . $footerCompany->url . '">' . $footerCompany->title . '</a></li>';
                        $companyCount++;
                    }
                }
                ?>
            </div>
        </div>
        <div class="footerLastSection">
            <div class="footerLastSectionLeftSide">
                <div class="leftSection">
                    <a href="https://naturvet.com/" target="_blank">
                        <svg id="Group_344" class="footer-logo" data-name="Group 344" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="276.813" height="149.366" viewBox="0 0 276.813 149.366">
                            <g id="Group_343" data-name="Group 343">
                                <path id="Path_10633" data-name="Path 10633" d="M123.676,33.514c-4.211-.112-5.767,1.491-9.53,1.326-4.152-.181-6.833-4.943-3.977-8.4C111.261,25.126,113.391,24,115,22.2c1.287-1.447,1.652-3.4,3.09-4.522a9.463,9.463,0,0,1,5.591-1.936,9.3,9.3,0,0,1,5.562,1.936c1.462,1.12,1.813,3.075,3.1,4.522,1.608,1.8,3.748,2.926,4.839,4.242,2.847,3.456.161,8.218-3.967,8.4-3.778.165-5.319-1.438-9.535-1.326" transform="translate(22.303 3.221)" fill="#fff"></path>
                                <path id="Path_10634" data-name="Path 10634" d="M103.688,8.889c2.432-1.648,5.133-.555,7.5,2.89,2.735,3.963,2.651,6.816.683,8.41-2.3,1.827-5.031,1.3-8.18-2.822-2.773-3.675-2.364-6.893,0-8.477" transform="translate(20.825 1.665)" fill="#fff"></path>
                                <path id="Path_10635" data-name="Path 10635" d="M114.712.1c3.066-.624,5.274,1.574,6.205,5.952,1.088,5.044-.16,7.842-2.773,8.607-3,.869-5.5-.794-6.922-6.156-1.243-4.778.472-7.8,3.49-8.4" transform="translate(22.678 0)" fill="#fff"></path>
                                <path id="Path_10636" data-name="Path 10636" d="M140.612,8.889c-2.418-1.648-5.108-.555-7.482,2.89-2.72,3.963-2.642,6.816-.682,8.41,2.29,1.827,5.049,1.3,8.164-2.822,2.8-3.675,2.368-6.893,0-8.477" transform="translate(26.815 1.665)" fill="#fff"></path>
                                <path id="Path_10637" data-name="Path 10637" d="M129.427.1c-3.085-.624-5.293,1.574-6.22,5.952-1.072,5.044.181,7.842,2.759,8.607,3.051.869,5.538-.794,6.952-6.156,1.242-4.778-.483-7.8-3.491-8.4" transform="translate(25.136 0)" fill="#fff"></path>
                                <path id="Path_10638" data-name="Path 10638" d="M120.5,77.061C111.826,37.7,84.645,23.134,70.475,62.2c14.989-24.079,32.7-21.992,39.937,14.863Z" transform="translate(14.423 8.024)" fill="#fff"></path>
                                <path id="Path_10639" data-name="Path 10639" d="M128.665,81.31h4.81c8.068-47.131,26.328-47.555,42.842-45.9-29.52-11.056-41.082,6.132-47.652,24.976-8.92-19.259-23.294-48.729-52.44-40.54,23.86.828,37.207,19.659,47.761,61.461Z" transform="translate(15.599 3.775)" fill="#fff"></path>
                                <path id="Path_10640" data-name="Path 10640" d="M60.8,125.644h-.137a16.9,16.9,0,0,1-1.774,1.584,17.113,17.113,0,0,1-2.354,1.53,15.723,15.723,0,0,1-2.925,1.165,14.275,14.275,0,0,1-8.311-.355,10.332,10.332,0,0,1-3.787-2.3,9.984,9.984,0,0,1-2.491-3.607,11.75,11.75,0,0,1-.93-4.763,12.615,12.615,0,0,1,1.058-5.157,11.4,11.4,0,0,1,2.944-3.884,13.139,13.139,0,0,1,4.5-2.4,19.232,19.232,0,0,1,5.805-.824,30.811,30.811,0,0,1,4.279.283,30.155,30.155,0,0,1,3.432.691v-1.442a6.494,6.494,0,0,0-.453-2.413,5.179,5.179,0,0,0-1.355-2.058,6.748,6.748,0,0,0-2.432-1.448,11.312,11.312,0,0,0-3.695-.522,23.169,23.169,0,0,0-5.323.585,41.294,41.294,0,0,0-5.776,1.77V95.247a29.934,29.934,0,0,1,5.743-1.814,32.518,32.518,0,0,1,6.346-.648,22.326,22.326,0,0,1,6.858.946,14.226,14.226,0,0,1,4.9,2.651,10.827,10.827,0,0,1,2.973,3.954,12.872,12.872,0,0,1,.936,5.005v13.464c0,2.368.053,4.386.088,6.1.063,1.7.1,3.216.16,4.543h-7.9ZM60.115,114.2c-.843-.2-1.808-.381-2.89-.526a19.867,19.867,0,0,0-3.291-.254,8.968,8.968,0,0,0-5.064,1.262,4.424,4.424,0,0,0-1.866,3.9,5.116,5.116,0,0,0,.413,2.125,4.361,4.361,0,0,0,1.16,1.487,4.554,4.554,0,0,0,1.687.887,6.191,6.191,0,0,0,2.029.317,9.694,9.694,0,0,0,2.514-.355,12.226,12.226,0,0,0,2.184-.888,13.24,13.24,0,0,0,1.789-1.194c.507-.453.955-.893,1.336-1.3Z" transform="translate(7.796 18.988)" fill="#fff"></path>
                                <path id="Path_10641" data-name="Path 10641" d="M91.265,130.957a22.741,22.741,0,0,1-3.539.712,32.515,32.515,0,0,1-3.821.258,16.171,16.171,0,0,1-7.356-1.477,8.41,8.41,0,0,1-4.045-4.177,13.309,13.309,0,0,1-.864-5.319V102.413H64.972v-7.2H71.64V85.206H80.4V95.213H90.738v7.2H80.4V119.8a6,6,0,0,0,.613,3.061c.751,1.146,2.2,1.706,4.4,1.706a17.41,17.41,0,0,0,3-.253,25.544,25.544,0,0,0,2.842-.6Z" transform="translate(13.297 17.437)" fill="#fff"></path>
                                <path id="Path_10642" data-name="Path 10642" d="M105.2,130.228a19.3,19.3,0,0,1-8.93-1.832,13.065,13.065,0,0,1-5.381-4.928,13.945,13.945,0,0,1-1.4-3.671,20.516,20.516,0,0,1-.459-4.432V93.514h8.764V114.43a18.1,18.1,0,0,0,.235,3.138,9.106,9.106,0,0,0,.77,2.262,5.724,5.724,0,0,0,2.525,2.427,9.865,9.865,0,0,0,7.916-.088,5.627,5.627,0,0,0,2.526-2.7,10.95,10.95,0,0,0,.848-4.845V93.514h8.754v21.851a16.443,16.443,0,0,1-1.491,7.36,12.445,12.445,0,0,1-2.214,3.072,12.812,12.812,0,0,1-3.168,2.368,16.6,16.6,0,0,1-4.133,1.517,23.564,23.564,0,0,1-5.157.546" transform="translate(18.219 19.138)" fill="#fff"></path>
                                <path id="Path_10643" data-name="Path 10643" d="M31.157,131h9.481V85.207h-9.1v32.405L9.476,85.207H0V131H9.037L9.013,98.465Z" transform="translate(0 17.438)" fill="#fff"></path>
                                <path id="Path_10644" data-name="Path 10644" d="M132.859,94.352a11.2,11.2,0,0,0-4.269,4.3h-.147l-.819-4.992h-7.233v35.783h8.745V105.475a9.989,9.989,0,0,1,4.719-3.666,19.014,19.014,0,0,1,7.068-1.209h.722v-.112l-2.994-7.682a12.29,12.29,0,0,0-5.791,1.546" transform="translate(24.638 18.993)" fill="#fff"></path>
                                <path id="Path_10645" data-name="Path 10645" d="M191.159,123.314a29.646,29.646,0,0,0,5.314-.5,42.7,42.7,0,0,0,5.634-1.5V128.3a26.357,26.357,0,0,1-5.205,1.409,40.135,40.135,0,0,1-7.292.667,26.065,26.065,0,0,1-7.224-1,15.423,15.423,0,0,1-5.956-3.154,15.084,15.084,0,0,1-4.037-5.653,20.75,20.75,0,0,1-1.52-8.414,23.712,23.712,0,0,1,1.4-8.529,17.994,17.994,0,0,1,3.792-6.055,15.147,15.147,0,0,1,5.4-3.6,16.892,16.892,0,0,1,6.308-1.19,18.178,18.178,0,0,1,6.25,1.034,12.3,12.3,0,0,1,4.952,3.247,15.035,15.035,0,0,1,3.237,5.708,25.7,25.7,0,0,1,1.17,8.253c-.03,1.2-.069,2.266-.107,3.114H179.832a10.535,10.535,0,0,0,1.111,4.246,8.042,8.042,0,0,0,2.389,2.842,10.448,10.448,0,0,0,3.52,1.589,17.659,17.659,0,0,0,4.308.5M187.65,99.6a6.692,6.692,0,0,0-2.935.614,6.823,6.823,0,0,0-2.242,1.658,8.018,8.018,0,0,0-1.5,2.476,11.263,11.263,0,0,0-.74,2.989h14.076a9.528,9.528,0,0,0-.448-2.989,6.792,6.792,0,0,0-1.238-2.476,6.239,6.239,0,0,0-2.066-1.658,6.416,6.416,0,0,0-2.906-.614" transform="translate(34.969 18.988)" fill="#fff"></path>
                                <path id="Path_10646" data-name="Path 10646" d="M224.085,130.957a23.44,23.44,0,0,1-3.53.712,33.6,33.6,0,0,1-3.831.258,16.05,16.05,0,0,1-7.341-1.477,8.332,8.332,0,0,1-4.055-4.177,13.265,13.265,0,0,1-.888-5.319V102.413h-6.668v-7.2h6.668V85.206h8.773V95.213h10.364v7.2H213.214V119.8a5.985,5.985,0,0,0,.624,3.061c.761,1.146,2.223,1.706,4.407,1.706a18.062,18.062,0,0,0,3.022-.253,26.3,26.3,0,0,0,2.818-.6Z" transform="translate(40.474 17.437)" fill="#fff"></path>
                                <path id="Path_10647" data-name="Path 10647" d="M163.618,106.127c-1.306,3.554-2.154,5.908-2.564,7.044q-.585,1.718-1.979,5.741h-.166q-1.33-4.021-1.959-5.741c-.4-1.136-1.278-3.49-2.555-7.044l-7.818-20.921h-9.564L154.892,131H163l17.908-45.79h-9.5Z" transform="translate(28.04 17.437)" fill="#fff"></path>
                                <path id="Path_10648" data-name="Path 10648" d="M225.59,80.875a1.254,1.254,0,0,1-.888.36h-1.93V78.813h1.93a1.261,1.261,0,0,1,.888.346,1.251,1.251,0,0,1,0,1.717m-2.818,5.181V82.484h1.462l1.452,3.573h1.55l-1.511-3.749a3.2,3.2,0,0,0,.77-.522,2.484,2.484,0,0,0,.02-3.519,2.536,2.536,0,0,0-1.814-.717h-3.2v8.506Zm8.687-4.24a6.6,6.6,0,0,1-2.077,4.917,7.294,7.294,0,0,1-10.032,0,6.916,6.916,0,0,1,0-9.842,7.256,7.256,0,0,1,10.032,0,6.618,6.618,0,0,1,2.077,4.925m-7.1-8.024a8.065,8.065,0,0,0-5.82,2.325,8.065,8.065,0,0,0,0,11.382,8.46,8.46,0,0,0,11.65,0,8,8,0,0,0,0-11.382,8.027,8.027,0,0,0-5.831-2.325" transform="translate(44.243 15.102)" fill="#fff"></path>
                            </g>
                        </svg>
                    </a>
                </div>
                <span>A MEMBER OF THE <span id="swedencare">SWEDENCARE </span>FAMILY</span>
            </div>
            <div class="footerLastSectionRightSide">
                <a href="https://www.nasc.cc/about-our-mission/"><img src="https://5hp.86b.myftpupload.com/wp-content/uploads/Group_345_2x_f60161c9-06f6-46dd-bb90-d1fc12451b79.png" alt="Nasc logo"></a>
            </div>
        </div>
        <div class="footerSocial">
            <?php foreach ($socials as $social => $data) :
                $image = $data['img'];
                $url = $data['url'];
                $name = $data['name'];
            ?>
                <a target="_blank" href="<?php echo $url; ?>">
                    <img alt="<?php echo $name; ?>" src="<?php echo $image; ?>"></a>
            <?php endforeach; ?>
        </div>
    </div>
</footer>
</body>

</html>