<section id="articles_cover">

	<div class="container">
	<div class="row">
		<div class="section-title">
			Articles
		</div>
	</div>
	</div>

<?php
query_posts(
	array(
		'category_name' => 'artigos',
		'order' => 'ASC',
		'posts_per_page' => 3
	));
?>

	<div class="container">
	<div class="row justify-content-center">

<?php
if(have_posts()) : while(have_posts()) : the_post(); ?>

		<div class="card text-center col-12 col-lg-4">
			<a href="#" class="article-img" style="background-image: url('<?=get_the_post_thumbnail_url()?>')">
				<?php // echo get_the_post_thumbnail(); ?>
			</a>

			<div class="card-body">
				<a href="#">
					<h5 class="card-title">
						<?=the_title()?>
					</h5>
				</a>

				<div class="card-date">
					<?=get_the_date()?>
				</div>
		
				<div class="card-text">
					<?=get_the_excerpt()?>
				</div>
			</div>
		</div>

<?php
endwhile;
endif;
?>

	</div>
	</div>

	<div class="container mt-5">
		<div class="row justify-content-center">
			<button class="btn btn-highlight">Ver mais artigos</button>
		</div>
	</div>

</section>