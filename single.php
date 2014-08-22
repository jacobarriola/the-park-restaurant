

<?php get_header(); ?>

<?php the_post(); ?>

<!--begin post-->
<div class="grid_9 blog-content">
	
	<article>
		<header>
			
			<p class="blog-date"><?php the_date(); ?></p>

			<h1><?php the_title(); ?></h1>

		</header>
		<div class="blog-comment"><?php comments_popup_link('No Comments »', '1 Comment »', '% Comments »'); ?></div>

		<div class="blog-text">

			<?php the_content(); ?>


			<?php comments_template(); ?>

		</div>

	</article>

	
</div>

<!--begin sidebar-->

<aside class="grid_3 omega blog-sidebar">
			<h3>Newsletter</h3>

			<!-- Begin MailChimp Signup Form -->
			<div id="mc_embed_signup">

				<form action="http://thepark1400sunset.us4.list-manage.com/subscribe/post?u=efba98615d22d2979f4a24db6&amp;id=2d60dd07b7" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
				
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email@yourdomain.com" required>

					<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">

				</form>

			</div><!--End mc_embed_signup-->

			<p>Weekly menus, promos and other fun stuff that comes to mind.</p>
		</aside><!--end sidebar-->



<?php get_footer(); ?>