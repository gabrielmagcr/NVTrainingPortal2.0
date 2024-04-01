<?php wp_footer(); 
$brandsLogos= getfield('brands_logos');
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
<footer>
    <div class="footerLogos">
        <?php
        var_dump($brandsLogos)

        ?>
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Architecto minima illo sunt asperiores tempore quo soluta. Eius tenetur voluptatum provident, natus, deserunt veritatis iusto quam enim libero, officia doloremque nulla.
    <?php if ($brandsLogos) {
        foreach($brandsLogos as $brandLogo){
            echo '<img src="'$brandlogo->url'">';
        }
    }
   
    ?>
    <img src="">
    </div>
</footer>
</body>
</html>