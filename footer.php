<?php wp_footer(); ?>

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
<?php
$brandsLogos= getfield('brands_logos');
$footerResources = wp_get_nav_menu_items('Footer_Resources');
$footerCompany = wp_get_nav_menu_items('Footer_Company');
?>
</body>
<footer>
    <div class="footerLogos">
        <?php
        var_dump($brandsLogos)

        ?>
  

  
    <img src="">
    </div>
</footer>
</html>