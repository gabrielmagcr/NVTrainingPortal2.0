
<?php wp_footer();

$brandsLogos= get_field('brandslogos');
$footerResources = wp_get_nav_menu_items('Footer_Resources');
$footerCompany = wp_get_nav_menu_items('Footer_Company');
?>
<script>
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 60){  
        jQuery('header').addClass("sticky");
	
    }
    else{
        jQuery('header').removeClass("sticky");
    }
});
</script>
</body>
<footer>
    <div class="footerLogos">
        <?php
        if ($brandsLogos) {
            var_dump($brandsLogos);
        }
        

        ?>
test
  
    <img src="">
    </div>
</footer>
</html>