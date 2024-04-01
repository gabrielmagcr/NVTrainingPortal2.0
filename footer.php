
<?php wp_footer();

$brandsLogos = get_field('brands');
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
        <?php if($brandsLogos):?>
        <?php foreach ($brandsLogos as $brandlogo):?>
            <img src="<?php echo $brandlogo['url'];?>">
            <?php endforeach;?>
        <?php endif;?>
  
   
    </div>
</footer>
</html>