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
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        background-color: #26948c;
        width: 100%;
    }

    .footerLogos img {
        width: 100px;
    }

    .footerStructure {
        background-color: #2c667e;
    }
</style>
<footer>
    <?php
    $brandsLogos = get_field('brands');
    $footerResources = wp_get_nav_menu_items('Footer_Resources');
    $footerCompany = wp_get_nav_menu_items('Footer_Company');
    ?>
    <div class="footerLogos">
        <?php if ($brandsLogos) : ?>
            <?php foreach ($brandsLogos as $brandlogo) : ?>
                <img src="<?php echo $brandlogo['url']; ?>">
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
    <div class="footerStructure">
        <div class="newsLetter">
            <span>NEWSLETTER SIGN UP</span>
            <input id="newsLetterForm" type="email" autocapitalize="off" autocomplete="email" placeholder="Email Address required">
            <label for="newsLetterForm">Email Address</label>
            <button>
                <svg viewBox="0 0 14 10" fill="none" aria-hidden="true" focusable="false" role="presentation" class="icon icon-arrow" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.537.808a.5.5 0 01.817-.162l4 4a.5.5 0 010 .708l-4 4a.5.5 0 11-.708-.708L11.793 5.5H1a.5.5 0 010-1h10.793L8.646 1.354a.5.5 0 01-.109-.546z" fill="currentColor">
                    </path>
                </svg>
            </button>
        </div>
        <div></div>
        <div></div>
    </div>
</footer>
</body>

</html>