
<?php wp_footer();?>
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
<style>
    .footerLogos{
        display: flex;
        flex-wrap: wrap;
        background-color: #26948c;
        width: 100%;
    }
    .footerLogos img{
        width: 100px;
    }
</style>
<footer>
    <?php 
$brandsLogos = get_field('brands');
$footerResources = wp_get_nav_menu_items('Footer_Resources');
$footerCompany = wp_get_nav_menu_items('Footer_Company');
    ?>
    <div class="footerLogos">
        <?php if($brandsLogos):?>
        <?php foreach ($brandsLogos as $brandlogo):?>
            <img src="<?php echo $brandlogo['url'];?>">
            <?php endforeach;?>
        <?php endif;?>
  
   
    </div>
</footer>
</body>
</html>