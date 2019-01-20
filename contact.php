<?php /* Template Name: Contact */ ?>

<?php include 'header-contact.php'; ?>

<section class="content">
	
	<div class="container">
		<div class="col-md-12 contact-main">
			
			<div class="row">
				<div class="col-md-5">
				
										<?php 
$my_postid = 4;
$content_post = get_post($my_postid);
$content = $content_post->post_content;
$content = apply_filters('the_content', $content);
$content = str_replace(']]>', ']]&gt;', $content);
echo $content;
						?>
				</div>
					<div class="col-md-7">
					<iframe src="<?php the_field('mapa', 4); ?>" width="600" height="548" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>

	</div>

</section>





<?php get_footer(); ?>