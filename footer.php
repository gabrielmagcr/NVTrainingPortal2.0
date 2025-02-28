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

<footer >
 

    <div class="footerStructure">
           
                    <a href="https://naturvet.com/" target="_blank">
                        <button class="cta-btn">NaturVet Website</button>
                    </a>
                    
                </div>
              
           
</footer>
</body>

</html>