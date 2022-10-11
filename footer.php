<footer class="site-footer relative bg-lightblack">

<div class="f-cta bg-[#FF4155] py-[90px] max-w-1170 -mt-[284px] relative z-10">

	<div class="cta-content max-w-4xl mx-auto flex items-center justify-between ">
		<div>
			<h4 class="text-white text-[45px] font-inter font-bold leading-[60px] max-w-[460px]">Send me a message and make something together.</h4>
		</div>
		<div class="cta-btn">
			<a href="#" class="text-white text-base leading-6 font-semibold font-inter capitalize bg-lightblack w-186 h-54 rounded-lg inline-flex items-center justify-center">Contact us</a>
		</div>
	</div>

</div>

	<div class="max-w-1170 mx-auto">

		<div class="main-footer flex justify-between py-[105px] relative z-10">

			<div class="f-about relative w-2/6 mr-28">
				<div class="w-282">
					<a href="#" class="text-white font-bold text-3xl font-inter uppercase mb-7 block">nabeel</a>
					<p class="text-base font-inter text-white leading-[30px]">Welcome and open yourself to your truest love this year with us! With the Release Process</p>
					<div class="f-social mt-8">
						<span class="text-white text-base transition border rounded-full h-40px w-40px inline-flex items-center justify-center mr-4 cursor-pointer hover:bg-[#1298F6] hover:border-[#1298F6]">
							<i class="fa-brands fa-facebook-f"></i>
						</span>
						<span class="text-white text-base transition border rounded-full h-40px w-40px inline-flex items-center justify-center mr-4 cursor-pointer hover:bg-[#1D9BF0] hover:border-[#1D9BF0]">
							<i class="fa-brands fa-twitter"></i>
						</span>
						<span class="text-white text-base transition border rounded-full h-40px w-40px inline-flex items-center justify-center mr-4 cursor-pointer hover:bg-[#0A66C2] hover:border-[#0A66C2]">
							<i class="fa-brands fa-linkedin-in"></i>
						</span>
						<span class="text-white text-base transition border rounded-full h-40px w-40px inline-flex items-center justify-center cursor-pointer hover:bg-[#8a3ab9] hover:border-[#8a3ab9]">
							<i class="fa-brands fa-instagram"></i>
						</span>
					</div>
				</div>
			</div>

			<div class="f-nav w-2/6">
				<h4 class="text-2xl font-inter font-semibold text-white leading-[29px] mb-11">Navigation</h4>
				<ul>
					<li><a href="#" class="text-white relative text-base font-inter mb-6 inline-block pl-4">About us</a></li>				
					<li><a href="#" class="text-white relative text-base font-inter mb-6 inline-block pl-4">Contact us</a></li>				
					<li><a href="#" class="text-white relative text-base font-inter mb-6 inline-block pl-4">Projects</a></li>				
					<li><a href="#" class="text-white relative text-base font-inter mb-6 inline-block pl-4">Latest Posts</a></li>				
				</ul>
			</div>
			
			<div class="f-services w-2/6">
				<h4 class="text-2xl font-inter font-semibold text-white leading-[29px] mb-11">Services</h4>
				<ul>
					<li><a href="#" class="text-white relative text-base font-inter mb-6 inline-block pl-4">WordPress</a></li>				
					<li><a href="#" class="text-white relative text-base font-inter mb-6 inline-block pl-4">Custom Themes</a></li>				
					<li><a href="#" class="text-white relative text-base font-inter mb-6 inline-block pl-4">Frontend</a></li>				
					<li><a href="#" class="text-white relative text-base font-inter mb-6 inline-block pl-4">Web Design</a></li>				
				</ul>
			</div>

			<div class="f-nl w-2/6">
				<h4 class="text-2xl font-inter font-semibold text-white leading-[29px] mb-11">News Letter</h4>
				<p class="text-base font-inter text-white leading-[30px]">Must explain to you how all this mistaken idea pleasure born and give you a complete account.</p>
				<div class="nl-form">

					<?php echo do_shortcode( '[wpforms id="52" title="false"]' ); ?>
		
				</div>
			</div>
		</div>
	</div>

	<div class="bg-[#202020] pb-8 relative z-10">
		<div class="max-w-1170 mx-auto text-center font-inter text-sm leading-6 text-white border-t border-[#ffffff0d] pt-8">
			Copyright &copy; <?php echo date_i18n( 'Y' );?> Nabeel. All rights reserved.
		</div>
	</div>


	<div class="f-shape relative -z-1">
		<img class="absolute -bottom-[220px] right-0 w-full" src="wp-content/uploads/2022/10/svgexport-16.svg" alt="">
	</div>
</footer>

<script>
	jQuery('.owl-carousel').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		responsive:{
			0:{
				items:1
			},
			600:{
				items:3
			},
			1000:{
				items:5
			}
		}
	});
</script>

<?php wp_footer(); ?>

</body>
</html>
