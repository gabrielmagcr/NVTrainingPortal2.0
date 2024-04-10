<style>
@media (min-width:1023px){
	.productVideoContainer{
		display: flex;
		justify-content: space-evenly;
	}
	.productLineImg img{
		width: 344px;

	}
	.productText{
		width: 55%;
	}
	.productText p{
		margin: 50px 110px;
	}
	.productLineVideo{
   		width: 344px;
	}
	.productLineText{
		width: auto;
	}
}
</style>
<div class="productLineContainer">
	<h2 class="welcomeTitle">Product lines</h2>
	<div class="productVideoContainer">
		<div class="mainVideo productLineVideo">
			<div class="mainVideoImg productLineImg">
				<img src="/wp-content/uploads/Placeholder-image-2.png">
			</div>
			<div class="mainVideoText productLineText">
				<h3>Scoopables - Intro</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
		<div class="mainVideo productLineVideo">
			<div class="mainVideoImg productLineImg">
				<img src="/wp-content/uploads/Placeholder-image-3.png">
			</div>
			<div class="mainVideoText productLineText">
				<h3>Evolutions - Intro</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
		<div class="mainVideo productLineVideo">
			<div class="mainVideoImg productLineImg">
				<img src="/wp-content/uploads/Placeholder-image-4.png">
			</div>
			<div class="mainVideoText productLineText">
				<h3>Breed Specific - Intro</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('lineBreak'); ?>