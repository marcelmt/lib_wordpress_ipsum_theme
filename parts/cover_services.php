<?php
query_posts(
	array(
		'category_name' => 'areas-atuacao',
		'order' => 'ASC',
		'posts_per_page' => 4
	));
?>

<section id="services" class="container">

<!-- Title -->
	<div class="row">
		<div class="section-title">
			Services
		</div>
	</div>

<!-- Posts Loop -->
	<div class="row justify-content-center">

<?php
if(have_posts()) : while(have_posts()) : the_post(); ?>

		<div class="card text-center col-6 col-lg-3">
			<a href="#">
				<?= get_the_post_thumbnail() ?>
			</a>

			<div class="card-body">
				<h5 class="card-title">
					<a href="#">
						<?= the_title() ?>
					</a>
				</h5>

				<p class="card-text">
					<?= the_excerpt() ?>
				</p>
			</div>
		</div>

<?php
endwhile; endif;
?>

	</div>

<!-- Link -->
	<div class="row justify-content-center">
		<a href="#">
			<button class="btn btn-highlight">
				Saber Mais
			</button>
		</a>
	</div>
</section>